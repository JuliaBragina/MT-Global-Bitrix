            <form id="form_offer">
            <input type='hidden' name='form_name' value='form_offer'/>
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
                  <input type="checkbox" required/>
                  <span>Согласие на обработку персональных данных</span>
                </label>
              </fieldset>
            </form>