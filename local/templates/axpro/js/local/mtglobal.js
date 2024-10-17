;(function ( $, window, document, undefined ) {

var options = {},
    isInited = false;

function initInputmaskTel(ob, reSet) {
    if(!reSet && $.isPlainObject(ob.data('_inputmask_opts'))){
        return;
    }
    var ph = ob.attr('placeholder');
    if(!ph){
        return;
    }
    ob.inputmask({mask: ph.replace(/[0-9]/g, 9), preValidation: true});
    var ph_l = ph.length;
    ob.attr('minlength', ph_l).attr('maxlength', ph_l);
}
function initFeedbackForms() {
    $(document).on('keydown', function(e){
        if(e.target.tagName !== 'INPUT' || e.key !== 'Enter'){
            return;
        }
        var $form = $(e.target).closest('form');
        if(!$form.hasClass('feedback')){
            return;
        }
        if(!e.ctrlKey){
            e.preventDefault();
            return false;
        }
    });
    $(document).on('focus', 'form.feedback input.input-phone', function(){
        initInputmaskTel($(this));
    });
    $(document).on('countrychange', '.input-phone', function (e, countryData) {
        var ob = $(this);
        ob.val('');
        initInputmaskTel(ob, true);
    });
    $(document).on('submit', 'form.feedback', function(e){
        var $form = $(this);
        if(!$form.length){
            return false;
        }
        if(!$form.find('input#checkbox-agree:checked').length){
            alert(BX.message('FEEDBACK__AGREE_REQUIRED'));
            return false;
        }
        var $tel = $form.find('input.input-phone');
        if ($tel.length){
            if (!$tel.inputmask('isComplete')){
                return false;
            }
            var obITI = $tel.data('plugin_intlTelInput');
            if(obITI){
                var phone = '+'+obITI.getSelectedCountryData()['dialCode']+' '+$tel.val();
                $form.append($('<input type="hidden" />').attr('name', $tel.attr('name')).val(phone));
            }
        }
        $form.find('input#t').val($form.find('input[name="sessid"]').val());
        return true;
    });
}

var methods = {
    init : function(params) {
        $.extend(options, params);
        if(isInited){
            return;
        }
        isInited = true;
        initFeedbackForms();
    }
};

$.MTglobal = function(method) {
    if (methods[method]) {
        return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method) {
        return methods.init.apply( this, arguments );
    } else {
        $.error( 'Метод с именем '+ method+' не существует для jQuery.MTglobal' );
    }
};

})( jQuery, window, document );
