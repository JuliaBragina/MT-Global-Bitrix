// import { ItcCustomSelect } from '/local/templates/axpro/js/axpro_js/itc-custom-select.js';
// import { lowerSlider, upperSlider, updateValue } from '/local/templates/axpro/js/axpro_js/dualRangeSlider.js';

export const lowerSlider = document.querySelector('#lower');

export const upperSlider = document.querySelector('#upper');

const lowerLabel = document.querySelector('#lowerLabel');

const upperLabel = document.querySelector('#upperLabel');

let lowerVal = parseInt(lowerSlider.value);

let upperVal = parseInt(upperSlider.value);

upperSlider.addEventListener('input', () => {
  updateValue();
  if (upperVal < lowerVal + 4) {
    lowerSlider.value = upperVal - 4;
    if (lowerVal == lowerSlider.min) upperSlider.value = 4;
  }
});

lowerSlider.addEventListener('input', () => {
  updateValue();
  if (lowerVal > upperVal - 4) {
    upperSlider.value = lowerVal + 4;
    if (upperVal == upperSlider.max)
      lowerSlider.value = parseInt(upperSlider.max) - 4;
  }
});

lowerLabel.addEventListener('change', (e) => {
  const newValue = parseInt(e.target.value);
  if (newValue <= upperSlider.value) {
    lowerSlider.value = newValue;
  } else {
    lowerLabel.value = lowerSlider.value;
  }
});

upperLabel.addEventListener('change', (e) => {
  const newValue = parseInt(e.target.value);

  const maxValue = 50000;

  if (newValue >= lowerSlider.value) {
    upperLabel.value = newValue <= maxValue ? newValue : maxValue;
    upperSlider.value = newValue <= maxValue ? newValue : maxValue;
  } else {
    upperLabel.value = upperSlider.value;
  }
});

export function updateValue() {
  lowerVal = parseInt(lowerSlider.value);
  upperVal = parseInt(upperSlider.value);
  lowerLabel.value = lowerVal;
  upperLabel.value = upperVal;
}

updateValue();


class ItcCustomSelect {
  
  static EL = 'itc-select';
  static EL_SHOW = 'itc-select_show';
  static EL_OPTION = 'itc-select__option';
  static EL_OPTION_SELECTED = 'itc-select__option_selected';
  static DATA = '[data-select]';
  static DATA_TOGGLE = '[data-select="toggle"]';

  static template(params) {
    const { name, options, targetValue, content } = params;
    const items = [];
    let selectedIndex = -1;
    let selectedValue = '';
    let selectedContent = content ?? 'Выберите из списка';
    options.forEach((option, index) => {
      let selectedClass = '';
      if (option[0] === targetValue) {
        selectedClass = ` ${this.EL_OPTION_SELECTED}`;
        selectedIndex = index;
        selectedValue = option[0];
        selectedContent = option[1];
      }
      items.push(`<li class="itc-select__option${selectedClass}" data-select="option"
        data-value="${option[0]}" data-index="${index}">${option[1]}</li>`);
    });
    return `<button type="button" class="itc-select__toggle" name="${name}"
      value="${selectedValue}" data-select="toggle" data-index="${selectedIndex}">
      ${selectedContent}</button><div class="itc-select__dropdown">
      <ul class="itc-select__options">${items.join('')}</ul></div>`;
  }

  static hideOpenSelect() {
    document.addEventListener('click', (e) => {
      if (!e.target.closest(`.${this.EL}`)) {
        const elsActive = document.querySelectorAll(`.${this.EL_SHOW}`);
        elsActive.forEach((el) => {
          el.classList.remove(this.EL_SHOW);
        });
      }
    });
  }
  static create(target, params) {
    this._el =
      typeof target === 'string' ? document.querySelector(target) : target;
    if (this._el) {
      return new this(target, params);
    }
    return null;
  }
  constructor(target, params) {
    type: "module",
    this._el =
      typeof target === 'string' ? document.querySelector(target) : target;
    this._params = params || {};
    this._onClickFn = this._onClick.bind(this);
    if (this._params.options) {
      this._el.innerHTML = this.constructor.template(this._params);
      this._el.classList.add(this.constructor.EL);
    }
    this._elToggle = this._el.querySelector(this.constructor.DATA_TOGGLE);
    this._el.addEventListener('click', this._onClickFn);
  }

  _onClick(e) {
    const { target } = e;
    const type = target.closest(this.constructor.DATA).dataset.select;
    if (type === 'toggle') {
      this.toggle();
    } else if (type === 'option') {
      this._changeValue(target);
    }
  }

  _updateOption(el) {
    const elOption = el.closest(`.${this.constructor.EL_OPTION}`);
    const elOptionSel = this._el.querySelector(
      `.${this.constructor.EL_OPTION_SELECTED}`
    );
    if (elOptionSel) {
      elOptionSel.classList.remove(this.constructor.EL_OPTION_SELECTED);
    }
    elOption.classList.add(this.constructor.EL_OPTION_SELECTED);
    this._elToggle.textContent = elOption.textContent;
    this._elToggle.value = elOption.dataset.value;
    this._elToggle.dataset.index = elOption.dataset.index;
    this._el.dispatchEvent(new CustomEvent('itc.select.change'));
    this._params.onSelected ? this._params.onSelected(this, elOption) : null;
    return elOption.dataset.value;
  }

  _reset() {
    const selected = this._el.querySelector(
      `.${this.constructor.EL_OPTION_SELECTED}`
    );
    if (selected) {
      selected.classList.remove(this.constructor.EL_OPTION_SELECTED);
    }
    this._elToggle.textContent = this._params.content || 'Выберите из списка';
    this._elToggle.value = '';
    this._elToggle.dataset.index = '-1';
    this._el.dispatchEvent(new CustomEvent('itc.select.change'));
    this._params.onSelected ? this._params.onSelected(this, null) : null;
    return '';
  }

  _changeValue(el) {
    if (el.classList.contains(this.constructor.EL_OPTION_SELECTED)) {
      return;
    }
    this._updateOption(el);
    this.hide();
  }

  show() {
    document.querySelectorAll(this.constructor.EL_SHOW).forEach((el) => {
      el.classList.remove(this.constructor.EL_SHOW);
    });
    this._el.classList.add(`${this.constructor.EL_SHOW}`);
  }

  hide() {
    this._el.classList.remove(this.constructor.EL_SHOW);
  }

  toggle() {
    this._el.classList.contains(this.constructor.EL_SHOW)
      ? this.hide()
      : this.show();
  }

  dispose() {
    this._el.removeEventListener('click', this._onClickFn);
  }

  get value() {
    return this._elToggle.value;
  }

  set value(value) {
    let isExists = false;
    this._el.querySelectorAll('.select__option').forEach((option) => {
      if (option.dataset.value === value) {
        isExists = true;
        this._updateOption(option);
      }
    });
    if (!isExists) {
      this._reset();
    }
  }

  get selectedIndex() {
    return this._elToggle.dataset.index;
  }

  set selectedIndex(index) {
    const option = this._el.querySelector(
      `.select__option[data-index="${index}"]`
    );
    if (option) {
      this._updateOption(option);
    }
    this._reset();
  }
}

ItcCustomSelect.hideOpenSelect();

// const moduleSelect = new ItcCustomSelect('#moduleSelect', {
//   name: 'modules',
//   targetValue: '',
//   content: 'Модуль',
//   options: [
//     ['Module 1', 'Module 1'],
//     ['Module 2', 'Module 2'],
//   ],
// });

// const gsmSelect = new ItcCustomSelect('#gsmSelect', {
//   name: 'gsm',
//   targetValue: '',
//   content: 'GSM',
//   options: [
//     ['GSM750', 'GSM750'],
//     ['GSM750', 'GSM1500'],
//   ],
// });

// const frequencySelect = new ItcCustomSelect('#frequencySelect', {
//   name: 'frequency',
//   targetValue: '',
//   content: 'Рабочая частота',
//   options: [
//     ['1333MHz', '1333MH'],
//     ['1666MHz', '1666MHz'],
//   ],
// });

// const supplySelect = new ItcCustomSelect('#supplySelect', {
//   name: 'supply',
//   targetValue: '',
//   content: 'Питание',
//   options: [
//     ['220V AC', '220V AC'],
//     ['24V DC', '24V DC'],
//   ],
// });

//Сортировка по цене
const priceSelect = new ItcCustomSelect('#priceSelect', {
  name: 'price',
  targetValue: '',
  content: 'По цене',
  options: [
    ['SCALED_PRICE_1-asc', 'Дешевые'],
    ['SCALED_PRICE_1-desc', 'Дорогие'],
  ],
  
});

const ratingSelect = new ItcCustomSelect('#ratingSelect', {
  name: 'rating',
  targetValue: '',
  content: 'По популярности',
  options: [
    ['shows-asc', 'Самые популярные'],
    ['shows-desc', 'Менее популярные'],
  ],
});

const nameSelect = new ItcCustomSelect('#nameSelect', {
  name: 'name',
  targetValue: '',
  content: 'По названию',
  options: [
    ['name-asc', 'от А до Я'],
    ['name-desc', 'от Я до А'],
  ],
});

//reset filter

const resetFilterButton = document.querySelector(
  '.catalog__filter-button_reset'
);

resetFilterButton.addEventListener('click', () => {
  [moduleSelect, gsmSelect, frequencySelect, supplySelect].forEach(
    (select) => (select.value = '')
  );
  lowerSlider.value = 0;
  upperSlider.value = 50000;
  updateValue();
});

// toggle filter menu

const filterMenuToggler = document.querySelector(
  '.catalog__filter-menu-toggler'
);

const filterMenu = document.querySelector('.catalog__filter-menu > .menu');

filterMenuToggler.addEventListener('click', (e) => {
  e.target.classList.toggle('active');
  const isVisible = e.target.classList.contains('active');
  filterMenu.style.display = isVisible ? 'block' : 'none';
});

// toggle filter

const filter = document.querySelector('.catalog__filter');
const filterToggler = document.querySelector('.catalog__filter-toggler');
const filterCloseButton = document.querySelector(
  '.catalog__filter-button_close'
);

filterToggler.addEventListener('click', () =>
  filter.classList.toggle('hidden')
);

filterCloseButton.addEventListener('click', () =>
  filter.classList.add('hidden')
);

// modal

const catalogItems = document.querySelectorAll(
  '.catalog__card.catalog-list-item'
);

const catalogModal = document.querySelector('#catalogModal');
const catalogModalCloseButton = document.querySelector('#catModalCloseBtn');

catalogModalCloseButton.addEventListener('click', () =>
  catalogModal.classList.remove('visible')
);

catalogItems.forEach((item) => {
  item.addEventListener('click', () => catalogModal.classList.add('visible'));
});

catalogModal.addEventListener('click', (e) => {
  if (e.target.classList.contains('modal')) {
    catalogModal.classList.remove('visible');
  }
});

// catalog card sliders

const catalogSliderThumbs = new Swiper('.catalog-card-slider-thumbs', {
  breakpoints: {
    360: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
  },
  spaceBetween: 10,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesProgress: true,
});

const catalogSliderTop = new Swiper('.catalog-card-slider-top', {
  spaceBetween: 10,
  navigation: {
    nextEl: '.catalog-card-slider-top .swiper-button-next',
    prevEl: '.catalog-card-slider-top .swiper-button-prev',
  },
  thumbs: {
    swiper: catalogSliderThumbs,
  },
});
