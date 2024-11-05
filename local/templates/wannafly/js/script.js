const indiBlockController = {

	/**
	 * Аккумулятор контроллера блоков
	 */
	blocks: {},

	/**
	 * Метод проверки существования элемента DOM на текущей странице
	 * @param domElement
	 * @returns {boolean|number}

	 */
	exist(domElement) {
		return document.querySelectorAll(domElement).length;
	},

	/**
	 * Метод инициализации блока контроллера
	 * @param domElement
	 */
	init(domElement) {
		if (this.exist(domElement)) {
			this.blocks[domElement]();
			let domElems = document.querySelectorAll(domElement)
			for (let i = 0; i < domElems.length; i++) {
				domElems[i].setAttribute('data-individ-init', "");
			}
		}
	},

	/**
	 * Метод переинициализации всех блоков контроллера
	 */
	initAll() {
		for (let block in this.blocks) {
			this.init(block);
		}
		const {body} = document;

		body.addEventListener("initAll", event=> {
			this.initAll();
		});
		body.addEventListener("reInit", event=> {
			this.reInitAll();
		});
		//Вызывается new CustomEvent, а не new Event!!!! document.body.dispatchEvent(new CustomEvent('reInitBlock', {detail:{selector:".header"}}))
		//В данном случае вызывается функиця, которая проверяет и при неоходимости инициализирует скрипты внутри блоков с одинаковыми классами.
		body.addEventListener("reInitBlocks", event=>{
			this.reInitBlocks();
		});
		////Функция, которая проверяет и при необходимости инициализирует скрипты в 1 блоке.
		//body.addEventListener("reInitBlock", event=> {
		//    this.reInitBlock();
		//});
	},

	reInitAll() {
		for (let block in this.blocks) {
			const element = document.querySelector(block)
			if (element) {
				const initElement = element.hasAttribute('data-individ-init')
				if (!initElement) {
					this.init(block)
				}
			}
		}
	},

	reInitBlocks(selectors) {
		selectors = selectors || event.detail.select;
		let items
		if (Array.isArray(selectors)) {
			items = selectors
			console.log(items);
			items.forEach(item => {
				let obj = document.querySelectorAll(item);
				for (let block in this.blocks) {
					for (let i = 0; i < obj.length; i++) {
						const elements = obj[i].querySelectorAll(block)
						if(elements) {
							elements.forEach((element) => {
								if (element) {
									const initElement = element.hasAttribute('data-individ-init');
									if (!initElement) {
										this.init(block)
									}
								}
							})
						}
					}
				}
			})
		}
	},

	/**
	 * Метод добавления блока в контроллер
	 * @param block
	 * @param domElement
	 */
	add(block, domElement) {
		if (block && domElement) {
			this.blocks = {
				...this.blocks,
				[domElement]: block
			};
		}
	}
};


class indiLoading {
	constructor() {
		if(typeof indiLoading.instance !== 'object'){
			indiLoading.instance = this;
			const {body} = document;
			body.addEventListener("startLoader", event => {
				this.show();
			});
			body.addEventListener("endLoader", event => {
				this.hide();
			});
		}
		return indiLoading.instance;
	}

	/**
	 * Показывает индикатор загрузки
	 *
	 * @return void
	 */
	show(selector = document.body) {
		selector.classList.add('loading-indicator');
		let layer = document.createElement('div');
		layer.classList.add('loading-layer');
		let icon = document.createElement('img');
		icon.classList.add('loading-icon');
		icon.src = "data:image/svg+xml,%3C%3Fxml version=\'1.0\' encoding=\'UTF-8\' standalone=\'no\'%3F%3E%3Csvg xmlns:svg=\'http://www.w3.org/2000/svg\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\' version=\'1.0\' width=\'64px\' height=\'64px\' viewBox=\'0 0 128 128\' xml:space=\'preserve\'%3E%3Cg%3E%3Ccircle cx=\'16\' cy=\'64\' r=\'16\' fill=\'%23000000\'/%3E%3Ccircle cx=\'16\' cy=\'64\' r=\'16\' fill=\'%23555555\' transform=\'rotate(45,64,64)\'/%3E%3Ccircle cx=\'16\' cy=\'64\' r=\'16\' fill=\'%23949494\' transform=\'rotate(90,64,64)\'/%3E%3Ccircle cx=\'16\' cy=\'64\' r=\'16\' fill=\'%23cccccc\' transform=\'rotate(135,64,64)\'/%3E%3Ccircle cx=\'16\' cy=\'64\' r=\'16\' fill=\'%23e1e1e1\' transform=\'rotate(180,64,64)\'/%3E%3Ccircle cx=\'16\' cy=\'64\' r=\'16\' fill=\'%23e1e1e1\' transform=\'rotate(225,64,64)\'/%3E%3Ccircle cx=\'16\' cy=\'64\' r=\'16\' fill=\'%23e1e1e1\' transform=\'rotate(270,64,64)\'/%3E%3Ccircle cx=\'16\' cy=\'64\' r=\'16\' fill=\'%23e1e1e1\' transform=\'rotate(315,64,64)\'/%3E%3CanimateTransform attributeName=\'transform\' type=\'rotate\' values=\'0 64 64;315 64 64;270 64 64;225 64 64;180 64 64;135 64 64;90 64 64;45 64 64\' calcMode=\'discrete\' dur=\'720ms\' repeatCount=\'indefinite\'%3E%3C/animateTransform%3E%3C/g%3E%3C/svg%3E";
		selector.append(layer);
		selector.append(icon);
	};

	/**
	 * Скрывает индикатор загрузки
	 *
	 * @return void
	 */
	hide(selector = document.body) {
		selector.classList.remove('loading-indicator');
		selector.querySelector('.loading-layer').remove();
		selector.querySelector('.loading-icon').remove();
	};

};
console.log(typeof axios);
if (typeof axios !== "undefined" && typeof bootstrap !== "undefined" ) {
	axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
	const pagination = () => {
		function reloadContainerShowMore(url, reloadContainerSelector) {
			let reloadContainer = document.querySelector(reloadContainerSelector);
			const loading = new indiLoading(document.querySelector(reloadContainerSelector));
			loading.show();
			axios({
				url: url
			}).then((response) => {
				let newContainer = document.createElement("div");
				newContainer.innerHTML = response.data;
				let newContainerHtml = newContainer.querySelector(reloadContainerSelector);
				if (newContainerHtml.querySelector('.js-top-other')) {
					let pagin = newContainerHtml.querySelector('.js-ajax-pagenation-wrapper');
					let newContainerHtmlElem = newContainerHtml.querySelector('.js-top-other');
					if (reloadContainer.querySelector(".js-ajax-pagenation-wrapper")) {
						reloadContainer.querySelector(".js-ajax-pagenation-wrapper").remove();
					} else {
						let dataContainer = document.querySelector('.js-ajax-pagenation-wrapper[data-container="' + reloadContainer.id + '"]');
						dataContainer.innerHTML = newContainer.querySelector('.js-ajax-pagenation-wrapper[data-container="' + reloadContainer.id + '"]');
						dataContainer.style.pointerEvents = 'auto';
					}
					reloadContainer.querySelector('.js-top-other').insertAdjacentHTML('beforeend', newContainerHtmlElem.outerHTML);
					reloadContainer.insertAdjacentHTML('beforeend', pagin.outerHTML);

				} else {
					if (reloadContainer.querySelector(".js-ajax-pagenation-wrapper")) {
						reloadContainer.querySelector(".js-ajax-pagenation-wrapper").remove();
					} else {
						let dataContainer = document.querySelector('.js-ajax-pagenation-wrapper[data-container="' + reloadContainer.id + '"]');
						dataContainer.innerHTML = newContainer.querySelector('.js-ajax-pagenation-wrapper[data-container="' + reloadContainer.id + '"]').innerHTML;
						dataContainer.style.pointerEvents = 'auto';
					}

					reloadContainer.insertAdjacentHTML('beforeend', newContainerHtml.innerHTML);
				}
				window.history.pushState("", "", url);

				indiBlockController.init('.js-ajax-pagenation-more');
				indiBlockController.reInitBlocks(['.js-ajax-container']);
				loading.hide();
			});
		}

		function reloadContainer(url, reloadContainerSelector, setIdContainerInHash, skipPush) {
			let reloadContainer = document.querySelector(reloadContainerSelector);
			const loading = new indiLoading(reloadContainer);
			loading.show();

			axios({
				url: url
			}).then((response) => {
				let newContainer = document.createElement("div");
				newContainer.innerHTML = response.data;
				let newContainerHtml = newContainer.querySelector(reloadContainerSelector).innerHTML;
				reloadContainer.innerHTML = newContainerHtml;
				//если в старом блоке и новом есть постраничка, то не удаляем ее
				if (reloadContainer.querySelector(".js-ajax-pagenation-wrapper") && !newContainer.querySelector(".js-ajax-pagenation-wrapper")) {
					reloadContainer.querySelector(".js-ajax-pagenation-wrapper").remove();
				} else {
					document.querySelector('.js-ajax-pagenation-wrapper[data-container="' + reloadContainer.id + '"]').innerHTML = newContainer.querySelector('.js-ajax-pagenation-wrapper[data-container="' + reloadContainer.id + '"]').innerHTML;
				}
				if (setIdContainerInHash === true) {
					url += "#" + reloadContainer.id;
				}

				if (!skipPush)
					window.history.pushState("", "", url);
				const top = document.querySelector(reloadContainerSelector).getBoundingClientRect().top - (newContainerHtml?.dataset?.offset || 0);
				window.scrollTo({
					top: top,
					behavior: "smooth"
				});

				indiBlockController.init('.js-ajax-pagenation-more');
				indiBlockController.reInitBlocks(['.js-ajax-container']);
				loading.hide();
			});
		};
		// обычная постраничка
		document.querySelectorAll(".js-ajax-pagenation a").forEach(item => {
			item.addEventListener("click", function (e) {
				e.preventDefault();
				e.stopPropagation();
				// let reloadContainerId = Util.closest(e.target, ".js-ajax-container")?.id;
				let reloadContainerId = e.target.closest('.js-ajax-container')?.id;
				if (!reloadContainerId) {
					// reloadContainerId = Util.closest(e.target, ".js-ajax-pagenation-wrapper")?.dataset.container;
					reloadContainerId = e.target.closest(".js-ajax-pagenation-wrapper")?.dataset.container;
				}
				let reloadContainerSelector = "#" + reloadContainerId;
				let url = e.target.href;
				if (reloadContainerId) {
					reloadContainer(url, reloadContainerSelector);
				} else {
					window.location.href = url;
				}
				return false;
			});
		});

		// Кнопка показать еще
		document.querySelectorAll(".js-ajax-pagenation-more a").forEach(item => {
			item.addEventListener("click", function (e) {

				e.stopPropagation();
				e.preventDefault();
				let reloadContainerId = e.target.closest(".js-ajax-container")?.id;

				if (!reloadContainerId) {
					reloadContainerId = e.target.closest(".js-ajax-pagenation-wrapper")?.dataset.container;
				}
				// alert(reloadContainerId);
				let reloadContainerSelector = "#" + reloadContainerId;
				let url = e.target.href;
				e.target.style.pointerEvents = 'none';

				if (reloadContainerId) {
					reloadContainerShowMore(url, reloadContainerSelector);
				} else {
					window.location.href = url;
				}
				return false;
			});
		});

	};
	const modalOpen = () => {
		const showModal = (link) => {
			const id = link?.dataset?.modalId;
			const modal = id ? document.querySelector('#' + id) : null;
			if (modal === null) {
				return false;
			}
			let myModal = new bootstrap.Modal(modal, {
				keyboard: true
			});
			myModal.show();
			modal.querySelectorAll('.js-tab-inputs button[data-bs-toggle="pill"]').forEach(pill => {
				pill.addEventListener('shown.bs.tab', event => {
					let activeInput=document.querySelector(event.target.dataset.bsTarget + " .js-tab-inputs-input");
					activeInput.disabled=false;
					activeInput.required=true;
					activeInput=document.querySelector(event.relatedTarget.dataset.bsTarget + " .js-tab-inputs-input");
					activeInput.disabled=true;
					activeInput.required=false;
				})
			});
			//indiBlockController.init('.js-download-schet');
			if (!modal?.dataset?.modalReady) {
				modal.dataset.modalReady = true;
			}
			modal.addEventListener('hidden.bs.modal', (e) => {
				modal.remove();
			});
			return true;
		};
		const loadModal = (link, callback) => {
			axios({
				url: link?.dataset?.href + (!link?.dataset?.href.includes('?') ? '?url=' + encodeURI(location.href) : location.search.replace('?', '&') + '&url=' + encodeURI(location.href)),
				method: 'get'
			}).then((response) => {
				if (response.data) {
					document.querySelector('body').insertAdjacentHTML('beforeend', response.data);
				} else {
					document.querySelector('body').insertAdjacentHTML('beforeend', response);
				}
				indiBlockController.reInitBlocks(['#' + link?.dataset?.modalId]);
				callback();
			});
		};
		/**
		 * Инициализирует UI в заданном элементе DOM
		 *
		 * @param jQuery domElement DOM element
		 * @return void
		 */
		document.querySelectorAll('a.js-popup-form:not([data-individ-init])').forEach((link) => {
			//Заменяем href, чтобы такие ссылки не открывались через контекстное меню "Открыть в новом окне"
			link.dataset.href = link.href;
			link.href = 'javascript:;';
			//По click загружаем форму
			link.addEventListener('click', (e) => {
				e.stopPropagation();
				e.preventDefault();
				loadModal(link, () => {
					showModal(link);
				});
				return false;
			})
		});
		// от
		const hash = window.location.hash.replace("#", '');
		if (!(hash === '')) document.querySelector('a.js-popup-form[data-modal-id="' + hash + '"]')?.click()
	};
	console.log(1000000);
	const ajaxForm = function () {
		console.log(5000000);
		this.send = async function (form) {
			console.log(6000000);
			const formData = new FormData(form);
			const container = form.closest('.js-ajax-form').parentElement;
			const containerId = container.getAttribute('id');
			let loading = new indiLoading();
			loading.show()
			const action = container.getAttribute('action') ? container.getAttribute('action') : form.getAttribute('action');
			let result = await axios({
				url: action,
				method: form.getAttribute('method'),
				processData: false,
				contentType: false,
				data: formData
			})
			let html = new DOMParser().parseFromString(result.data, 'text/html').querySelector(`#${containerId}`);
			container.innerHTML = html.innerHTML;
			let redirect = html.querySelector('input[name="redirect"]');
			if (redirect && redirect.value) {
				location.href = redirect.value;
			}
			indiBlockController.reInitBlocks([`#${containerId}`]);
			loading.hide()

			if (!!container.querySelector('.notification')) {
				window.scrollTo(0, container.querySelector('.notification').offsetTop)
			}
			console.log(!!container.querySelector('.needScroll'));
			if (!!container.querySelector('.needScroll')) {
				console.log(container.querySelector('.needScroll').dataset.id);
				const element = document.getElementById(container.querySelector('.needScroll').dataset.id);
				const offset = 47;
				const bodyRect = document.body.getBoundingClientRect().top;
				const elementRect = element.getBoundingClientRect().top;
				const elementPosition = elementRect - bodyRect;
				const offsetPosition = elementPosition - offset;

				window.scrollTo({
					top: offsetPosition,
					behavior: 'smooth'
				});
			}
			return false;
		};
		document.querySelectorAll('.js-ajax-form form').forEach(form => {
			console.log(1000000);
			console.log(form);
			form.addEventListener('submit', e => {
				if (!form.checkValidity()) {
					e.preventDefault();
					if(form.closest(".modal")==null){
						let first = true;
						form.querySelectorAll('.form-control:invalid').forEach(firstInvalid => {
							if(first) {
								const top = firstInvalid.getBoundingClientRect().y - document.querySelector(".header").clientHeight - 20;
								window.scrollTo(0, pageYOffset + top);
								first = false;
							}
						});
					}
				} else if(form.querySelector(".smart-captcha") && form.smartCaptchaWingetId) {
					e.preventDefault();
					if (!window.smartCaptcha) {
						return true;
					}
					window.smartCaptcha.execute(form.smartCaptchaWingetId);
					if(!form.firstSubmit) {
						form.addEventListener('smart-captcha-success', this.send.bind(form), false);
					}
					form.firstSubmit = true;
				} else {
					console.log(2000000);
					e.preventDefault();
					this.send(form);
				}
				form.classList.add('was-validated')
				e.stopPropagation();
			})
		})
	};
	const gallery = function () {

		//region Всплывающие фото и видео
		let bp = BiggerPicture({
			target: document.body,
		})

		document.querySelectorAll('.js-gallery:not([data-individ-init])').forEach(gallery => {

		let imageLinks = gallery.querySelectorAll('.js-gallery-item')
		// grab image links

		// add click listener to open BiggerPicture
			for (let link of imageLinks) {
				link.addEventListener("click", openGallery);
			}

		// function to open BiggerPicture
			function openGallery(e) {
				e.preventDefault()
				bp.open({
					items: imageLinks,
					el: e.currentTarget,
				})
			}
		});

		document.querySelectorAll('.js-video-modal:not([data-individ-init])').forEach(video => {
			video.addEventListener("click", openGallery);
			function openGallery(e) {
				e.preventDefault()
				bp.open({
					items: video,
					el: e.currentTarget,
				})
			}
		});

		//endregion
	};

	const phoneMask = function () {
		// region Mask
		Inputmask({ mask: "+\\9\\98-99-999-9999"}).mask(document.querySelectorAll("[type='tel']:not([data-individ-init])"));
	}
	//Инициализация
	indiBlockController.add(ajaxForm, '.js-ajax-form');
	indiBlockController.add(pagination, '.js-ajax-pagenation-more');
	indiBlockController.add(modalOpen, '.js-popup-form');
	indiBlockController.add(gallery, '.js-gallery, .js-video-modal');
	indiBlockController.add(phoneMask, "[type='tel']");

}

document.addEventListener("DOMContentLoaded", function () {
	console.log(44444);
	indiBlockController.initAll();
});


if (!window.smartCaptcha) {
	const onloadFunction = function () {
		document.querySelectorAll(".smart-captcha:not([data-individ-init])").forEach(captcha => {
			let form = captcha.closest('form');
			if(captcha.dataset.sitekey) {
				let widgetId = window.smartCaptcha.render(captcha, {
					sitekey: captcha.dataset.sitekey,
					invisible: true, // Сделать капчу невидимой
					hideShield: true, // Сделать капчу невидимой
					test: true
					// callback: callback,
				});
				form.smartCaptchaWingetId = widgetId;
				window.smartCaptcha.subscribe(
					widgetId,
					'success',
					() => {
						form.dispatchEvent(new Event('smart-captcha-success'));
						window.smartCaptcha.destroy(widgetId);
					}
				);
			}
		})
	};
	indiBlockController.add(onloadFunction, '.smart-captcha');
}

if(document.querySelector('.js-filter-events')) {
	let form = document.querySelector('.js-filter-events');
	form.addEventListener('change', async () => {
		const formData = new FormData(form);
		let query = new URLSearchParams(formData).toString();
		let url = location.pathname + '?' + query;
		const container = document.querySelector('.js-events-list');
		let loading = new indiLoading();
		loading.show()

		let result = await axios({
			url: url,
			method: 'post',
			processData: false,
			contentType: false,
			data: formData
		});
		console.log(new DOMParser().parseFromString(result.data, 'text/html'));
		let html = new DOMParser().parseFromString(result.data, 'text/html').querySelector('.js-events-list');
		console.log(html);
		container.innerHTML = html.innerHTML;
		window.history.pushState("", "", url);
		indiBlockController.reInitBlocks(['.js-events-list']);
		loading.hide();

		return false;
	})
}








