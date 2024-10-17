<?php

namespace LocalComponents\Bitrixsoid;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Web\Json;
use CBitrixComponent;
use CEvent;
use Exception;
use LocalLib\Helpers\SessionFlashHelper;
use const B_PROLOG_INCLUDED;
use const POST_FORM_ACTION_URI;
use const SITE_ID;
use function bitrix_sessid;
use function check_bitrix_sessid;
use function htmlspecialcharsEx;
use function LocalRedirect;

use \Bitrix\Main\Application,
    \Bitrix\Main\Web\Uri,
    \Bitrix\Main\Web\HttpClient;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
    die();
}

class CBitrixsoidComponentFeedback extends CBitrixComponent {

    final public function __construct($component = null) {
        parent::__construct($component);
        Loc::loadMessages(__FILE__);
    }

    final public function onPrepareComponentParams($arParams) {
        $filterCode = ['options' => ['regexp' => '/^[-_A-z0-9]+$/mis']];
        $arParams['ACTION_CODE'] = filter_var((string)$arParams['ACTION_CODE'], FILTER_VALIDATE_REGEXP, $filterCode);
        if (empty($arParams['ACTION_CODE'])) {
            $arParams['ACTION_CODE'] = 'feedback';
        }
        $arParams['EVENT_NAME'] = 'BITRIXSOID__FEEDBACK';
        if(!is_array($arParams['EVENT_MESSAGE_ID'])){
            $arParams['EVENT_MESSAGE_ID'] = [];
        }
        foreach ($arParams['EVENT_MESSAGE_ID'] as $k => $v) {
            $arParams['EVENT_MESSAGE_ID'][$k] = intval($v);
            if($arParams['EVENT_MESSAGE_ID'][$k] <= 0){
                unset($arParams['EVENT_MESSAGE_ID'][$k]);
            }
        }
        $arParams['~FIELDS'] = $arParams['FIELDS'];
        $arParams['FIELDS'] = [];
        $arParams['FIELDS_CODES'] = [];
        try {
            $arFields = Json::decode($arParams['~FIELDS']);
            if(is_array($arFields)){
                foreach ($arFields as $ar) {
                    $ar['code'] = filter_var(trim((string)$ar['code']), FILTER_VALIDATE_REGEXP, $filterCode);
                    if (empty($ar['code'])) {
                        continue;
                    }
                    $ar['name'] = trim((string)$ar['name']);
                    $ar['is_required'] = trim((string)$ar['is_required'])=='Y';
                    $ar['tag'] = trim((string)$ar['tag']);
                    $ar['input_type'] = trim((string)$ar['input_type']);
                    if (empty($ar['tag'])) {
                        $ar['tag'] = 'input';
                    }
                    if (empty($ar['input_type'])) {
                        $ar['input_type'] = 'text';
                    }
                    $arParams['FIELDS'][$ar['code']] = $ar;
                    $arParams['FIELDS_CODES'][$ar['code']] = $ar['code'];
                }
            }
        } catch (Exception $e) {
        }
        $arParams['SUBJECT'] = (string)$arParams['SUBJECT'];
        if (empty($arParams['SUBJECT'])) {
            $arParams['SUBJECT'] = 'Обратная связь';
        }
        return $arParams;
    }

    final public function executeComponent() {
        if (empty($this->arParams['EVENT_MESSAGE_ID']) || empty($this->arParams['FIELDS_CODES'])) {
            return;
        }
        try {
            $this->processRequest();
        } catch (Exception $e) {
            SessionFlashHelper::addError($e->getMessage());
            if($this->request->isPost()){
//                LocalRedirect(POST_FORM_ACTION_URI);
            }
        }
        $this->includeComponentTemplate();
    }

    final private function processRequest() {
        $this->arResult['DATA'] = [];
        if (
            !$this->request->isPost() ||
            $this->request->getPost('act') != $this->arParams['ACTION_CODE']
        ) {
            return;
        }
        if (!check_bitrix_sessid() || filter_input(INPUT_POST, 't') !== bitrix_sessid()) {
            throw new Exception(Loc::getMessage('BITRIXSOID_FEEDBACK_SESS_EXP'));
        }
        //die('asdasdasd');

        if( isset($this->arParams['CAPTCHA']) && $this->arParams['CAPTCHA'] == 'Y' ) {
            if( !$this->isValidRecaptacha() ) {
                //die('asdasd');
                throw new Exception(Loc::getMessage('Вы не прошли проверку на бота'));
            }
        }



        $arPostData = $this->request->getPostList()->toArray()['DATA'];
        $arFields = [
            'SUBJECT' => $this->arParams['SUBJECT'],
            'URL' => htmlspecialchars($this->request->getRequestUri())
        ];
        foreach ($this->arParams['FIELDS_CODES'] as $code) {
            $this->arResult['DATA'][$code] = trim((string)$arPostData[$code]);
            $arFields[$code] = htmlspecialcharsEx($this->arResult['DATA'][$code]);
        }
        $isSend = false;
        foreach($this->arParams['EVENT_MESSAGE_ID'] as $v){
            $v = intval($v);
            if($v <= 0){
                continue;
            }
            if(CEvent::Send($this->arParams['EVENT_NAME'], SITE_ID, $arFields, 'Y', $v)){
                $isSend = true;
            }
        }
        if(!$isSend){
            throw new Exception(Loc::getMessage(Loc::getMessage('BITRIXSOID_FEEDBACK_ERROR')));
        }
        SessionFlashHelper::addSuccess(Loc::getMessage('BITRIXSOID_FEEDBACK_OK_MESSAGE'));
//        LocalRedirect(POST_FORM_ACTION_URI);
    }

    private function isValidRecaptacha()
    {
        $secret = \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_KEY_CAPTCHA_SECRET");
        $g_recaptcha_response = $this->request->getPostList()->toArray()['g_recaptcha_response'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$g_recaptcha_response."&remoteip=".$_SERVER["REMOTE_ADDR"];
        $httpClient = new HttpClient();
        $data = $httpClient->get($url);
        $response = Json::decode($data);

        $g_recaptcha_response_check = false;

        AddMessage2Log(__FUNCTION__." ".serialize($response));

        if (($response["success"] and (float)$response["score"] >= 0.5))
		{
            $g_recaptcha_response_check = true;
        }

		return $g_recaptcha_response_check;
    }

}