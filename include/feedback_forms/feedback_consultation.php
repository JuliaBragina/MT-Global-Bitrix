<section class="main__section consult-form">
        <div class="main__container">
          <div class="consult-form__wrapper">
            <h2 class="main__heading">Получить консультацию</h2>
            <p class="main__description">
              Оставьте заявку, чтобы наши менеджеры могли вас проконсультировать
            </p>
            <form id="form_consultation">
            <input type='hidden' name='form_name' value='form_consultation'/>
              <fieldset
                class="consult-form__fieldset consult-form__fieldset_top"
              >
                <label class="consult-form__label_input">
                  <span>Ваше имя</span><input name='fio' type="text" placeholder="Имя" required/>
                </label>
                <label class="consult-form__label_input">
                  <span>Номер телефона</span>
                  <input class ='phone' name='phone' type="tel" id='phone' placeholder="+7 (900) 800-00-00" required/>
                </label>
                <button class="button button_large">Задать вопрос</button>
              </fieldset>

              <fieldset class="consult-form__fieldset">
                <label class="consult-form__label_checkbox">
                  <input type="checkbox" required />
                  <span>Согласие на обработку персональных данных</span>
                </label>
              </fieldset>
            </form>
          </div>
        </div>
      </section>