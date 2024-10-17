<div class="consult-form__wrapper consult-form">
              <h2 class="main__heading">Запросить предложение</h2>
              <form id="form_case">
              <input type='hidden' name='form_name' value='feedback_case'/>
                <fieldset
                  class="consult-form__fieldset consult-form__fieldset_top"
                >
                  <label class="consult-form__label_input">
                    <span>Ваше имя</span><input  name='fio' type="text" placeholder="Имя" required/>
                  </label>
                  <label class="consult-form__label_input">
                    <span>Номер телефона</span>
                    <input class ='phone' name='phone' id='phone' type="tel" placeholder="+7 (900) 800-00-00" required/>
                  </label>
                  <button class="button button_large">Задать вопрос</button>
                </fieldset>

                <fieldset class="consult-form__fieldset">
                  <label class="consult-form__label_checkbox">
                    <input type="checkbox" required/>
                    <span>Согласие на обработку персональных данных</span>
                  </label>
                </fieldset>
              </form>
            </div>