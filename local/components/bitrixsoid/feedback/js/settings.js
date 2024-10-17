function feedbackParamFieldsEdit(params){
	var jsOptions = JSON.parse(params.data);
	var showArray = {
		element: params.oCont,
		options: jsOptions
	};
	if (params.oInput.value != '' && params.oInput.value != '[]'){
		this.inputData = JSON.parse(params.oInput.value);
		this.inputData.forEach(function(row){
			feedbackParamFieldsEdit.prototype.addInputBlock(showArray, row);
		},this);
	}else{
		feedbackParamFieldsEdit.prototype.addInputBlock(showArray);
	}
	var addPageParams = params.oCont.appendChild(BX.create('input',{
		props: {
			value: '+',
			type: 'button',
			className: 'addPageParams'
		}
	}));
	BX.bind(addPageParams, 'click', function(){
		feedbackParamFieldsEdit.prototype.addInputBlock(showArray);
		params.oCont.appendChild(addPageParams);
	});
}
feedbackParamFieldsEdit.prototype.addInputBlock = function(params, values){
	var name = '',
        code = '',
        is_required = '',
        tag = '',
        input_type = '',
        html = '';
	if (typeof(values) !== 'undefined'){
		code = values['code'];
		name = values['name'];
		is_required = values['is_required'];
		tag = values['tag'];
		input_type = values['input_type'];
	}
    html = [
        '<hr>',
        '<div>',
            '<label>Символьный код</label>',
            '<input type="text" class="sps-params-input-values" value="'+ code +'">',
        '</div>',
        '<div>',
            '<label>Название</label>',
            '<input type="text" class="sps-params-input-values" value="'+ name +'">',
        '</div>',
    ];
    if(is_required == 'Y'){
        html.push('<div><label>Обязательное</label><select class="sps-params-input-values"><option value="Y" selected>да</option><option value="N">нет</option></select></div>');
    }else{
        html.push('<div><label>Обязательное</label><select class="sps-params-input-values"><option value="Y">да</option><option value="N" selected>нет</option></select></div>');
    }
    html.push('<div><label>Тег</label><div><select class="sps-params-input-values">');
    ['input', 'textarea', 'select'].forEach(function(item) {
        if(item == tag){
            html.push('<option value="'+item+'" selected>'+item+'</option>');
        }else{
            html.push('<option value="'+item+'">'+item+'</option>');
        }
    });
    html.push('</select></div></div>');

    html.push('<div><label>Тип (для тега input)</label><div><select class="sps-params-input-values">');
    ['text', 'password', 'checkbox', 'radio', 'email', 'tel', 'number', 'date', 'time', 'color'].forEach(function(item) {
        if(item == input_type){
            html.push('<option value="'+item+'" selected>'+item+'</option>');
        }else{
            html.push('<option value="'+item+'">'+item+'</option>');
        }
    });
    html.push('</div></select></div>');

	var block = params.element.appendChild(BX.create('div', {
		props: {
			className: 'sps-params-input-block'
		},
		html: html.join('')
	}));
	var hidden = params.element.querySelector('input[type="hidden"]');
	BX.bindDelegate(block, 'change', { 'class': 'sps-params-input-values' }, BX.proxy(function(){
		var valuesArray = [];
		var inputBlocks = params.element.getElementsByClassName('sps-params-input-block');
		Array.prototype.forEach.call(inputBlocks, function(inputBlock){
			var inputs = inputBlock.getElementsByClassName('sps-params-input-values');
			if (inputs[0].value !== ''){
                valuesArray.push({
                    code: inputs[0].value,
                    name: inputs[1].value,
                    is_required: inputs[2].value,
                    tag: inputs[3].value,
                    input_type: inputs[4].value,
                });
			}
		});
		hidden.value = JSON.stringify(valuesArray);
	}, this));
};

