<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true){
    die();
}
$eventType = 'BITRIXSOID__FEEDBACK';
try {
    $arEventType = CEventType::GetByID($eventType, 'ru')->Fetch();
    if (empty($arEventType)) {
        CEventType::Add([
            'LID'           => 'ru',
            'EVENT_NAME'    => $eventType,
            'NAME'          => $eventType,
            'DESCRIPTION'   => '#SUBJECT# - тема письма'."\n"
                .'#URL# - ссылка на страницу с этой формой'
        ]);
    }
} catch (Exception $e) {
}

$arEvent = [];
$dbType = CEventMessage::GetList($by='ID', $order='DESC', ['TYPE_ID' => $eventType, 'ACTIVE' => 'Y']);
while($arType = $dbType->GetNext()){
	$arEvent[$arType['ID']] = '['.$arType['ID'].'] '.$arType['SUBJECT'];
}

$arComponentParameters = [
	'PARAMETERS' => [
		'ACTION_CODE' => array(
			'NAME' => 'Уникальный символьный код формы',
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'feedback',
		),
		'EVENT_MESSAGE_ID' => [
			'NAME' => 'Почтовые шаблоны для отправки письма (тип почтового события '.$eventType.')',
			'TYPE' => 'LIST',
			'VALUES' => $arEvent,
			'DEFAULT' => '',
			'MULTIPLE' => 'Y',
            'SIZE' => 10,
		],
		'SUBJECT' => array(
			'NAME' => 'Тема письма',
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'Обратная связь',
		),
        'HEADER'=> array(
			'NAME' => 'Заголовок формы',
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'Задать вопрос',
		),
		'FIELDS' => [
			'NAME' => 'Поля формы (в симв. коде допустимы только [_A-z0-9])',
			'TYPE' => 'CUSTOM',
			'JS_FILE' => '/local/components/bitrixsoid/feedback/js/settings.js',
			'JS_EVENT' => 'feedbackParamFieldsEdit',
            'JS_DATA' => '{}',
			'DEFAULT' => '',
		],
        'BUTTON_NAME'=> array(
			'NAME' => 'Название кнопки отправки формы',
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'Отправить',
		),
		'PARAM_1' => array(
			'NAME' => 'Произвольный параметр 1',
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => '',
		),
		'PARAM_2' => array(
			'NAME' => 'Произвольный параметр 2',
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => '',
		),
		'PARAM_3' => array(
			'NAME' => 'Произвольный параметр 3',
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => '',
		),
        'CURRENT_URL' => array(
			'NAME' => 'url для обработки',
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => '',
		),

	]
];