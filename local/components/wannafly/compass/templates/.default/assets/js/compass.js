class Compass {
    constructor({
                    compassSelector,
                    needleSelector,
                    directionsSelector,
                    ticksSelector,
                    listItemsContainerSelector,
                    listItemsSelector,
                    baseRadius = 65,
                    outerRadius = 178,
                    compassCenter = {x: 208, y: 208},
                    majorTickCount = 4,
                    minorTickCount = 28,
                    initialAngle = 90
                }) {
        this.compass = document.querySelector(compassSelector);
        this.needle = document.querySelector(needleSelector);
        this.directionsContainer = document.querySelector(directionsSelector);
        this.ticksContainer = document.querySelector(ticksSelector);
        this.listItemsContainer = document.querySelector(listItemsContainerSelector);
        this.listItems = document.querySelectorAll(listItemsSelector);

        this.baseRadius = baseRadius;
        this.outerRadius = outerRadius;
        this.compassCenter = compassCenter;
        this.majorTickCount = majorTickCount;
        this.minorTickCount = minorTickCount;
        this.totalTicks = this.majorTickCount + this.minorTickCount;
        this.angleStep = 360 / this.totalTicks;

        this.initialAngle = initialAngle;
        this.currentAngle = this.initialAngle;

        this.directionLabels = [
            {label: 'S', angle: 90},
            {label: 'SE', angle: 45},
            {label: 'E', angle: 0},
            {label: 'NE', angle: 315},
            {label: 'N', angle: 270},
            {label: 'NW', angle: 225},
            {label: 'W', angle: 180},
            {label: 'SW', angle: 135},
        ];

        this.positions = [
            {left: '50%', top: '-120px'},
            {left: '140%', top: '10%'},
            {left: '150%', top: '46%'},
            {left: '140%', top: '85%'},
            {left: '50%', top: '120%'},
            {left: '-40%', top: '85%'},
            {left: '-40%', top: '10%'},
            {left: '-50%', top: '46%'}
        ];

        this.animationFrameId = null;

        this.init();
    }

    calculateCoordinates(angle, radius, center = this.compassCenter) {
        const radian = angle * (Math.PI / 180);
        return {
            x: center.x + radius * Math.cos(radian),
            y: center.y + radius * Math.sin(radian)
        };
    }

    createTicks() {
        const fragment = document.createDocumentFragment();
        for (let i = 0; i < this.totalTicks; i++) {
            const isMajorTick = i % 8 === 0;
            const tickLength = isMajorTick ? 20 : 10;
            const tickAngle = i * this.angleStep;

            const {x: x1, y: y1} = this.calculateCoordinates(tickAngle, this.outerRadius);
            const {x: x2, y: y2} = this.calculateCoordinates(tickAngle, this.outerRadius - tickLength);

            const tick = document.createElementNS("http://www.w3.org/2000/svg", "line");
            tick.setAttribute('x1', x1);
            tick.setAttribute('y1', y1);
            tick.setAttribute('x2', x2);
            tick.setAttribute('y2', y2);
            tick.setAttribute('class', isMajorTick ? 'major-tick' : 'minor-tick');
            tick.dataset.angle = tickAngle;
            fragment.appendChild(tick);
        }
        this.ticksContainer.appendChild(fragment);
    }

    createDirectionLabels() {
        const fragment = document.createDocumentFragment();
        this.directionLabels.forEach(({label, angle}) => {
            const {x, y} = this.calculateCoordinates(angle, 215, {x: 0, y: 0});
            const direction = document.createElement('div');
            direction.classList.add('compass__direction');
            direction.textContent = label;
            direction.style.left = `calc(50% + ${x}px)`;
            direction.style.top = `calc(50% + ${y}px)`;
            direction.style.transform = `translate(-50%, -50%) rotate(${angle + 90}deg)`;
            fragment.appendChild(direction);
        });
        this.directionsContainer.appendChild(fragment);
    }

    positionListItems() {
        this.listItems.forEach((item, index) => {
            const {left, top} = this.positions[index];
            Object.assign(item.style, {
                position: 'absolute',
                left,
                top
            });
        });
    }

    updateNeedlePosition(event) {
        const rect = this.compass.getBoundingClientRect();
        const compassCenterX = rect.left + rect.width / 2;
        const compassCenterY = rect.top + rect.height / 2;

        const angle = Math.atan2(event.clientY - compassCenterY, event.clientX - compassCenterX);
        const baseX = compassCenterX + this.baseRadius * Math.cos(angle);
        const baseY = compassCenterY + this.baseRadius * Math.sin(angle);

        const offsetX = -12;
        const offsetY = -12;
        this.needle.style.left = `${baseX - rect.left + offsetX}px`;
        this.needle.style.top = `${baseY - rect.top + offsetY}px`;

        this.currentAngle = (angle * (180 / Math.PI) + 90) % 360;
        this.needle.style.transform = `translate(-50%, -100%) rotate(${this.currentAngle}deg)`;

        this.updateActiveTicks();
    }

    updateActiveTicks() {
        const adjustedAngle = (this.currentAngle + 270) % 360;
        document.querySelectorAll('.major-tick, .minor-tick').forEach(tick => {
            const tickAngle = parseFloat(tick.dataset.angle);
            tick.classList.toggle('active', Math.abs(adjustedAngle - tickAngle) < this.angleStep / 2);
        });
    }

    onMouseMove(event) {
        if (this.animationFrameId) {
            cancelAnimationFrame(this.animationFrameId);
        }
        this.animationFrameId = requestAnimationFrame(() => this.updateNeedlePosition(event));
    }

    init() {
        this.createTicks();
        this.createDirectionLabels();
        this.positionListItems();

        this.listItemsContainer.addEventListener('mousemove', (event) => this.onMouseMove(event));

        this.needle.style.transform = `translate(-50%, -100%) rotate(${this.initialAngle}deg)`;
    }
}

