<?php

namespace LocalLib\Helpers;

use Bitrix\Main\SiteTable;

class SiteHelper {

    private static $arSite;

    private static function setSite() {
        if(self::$arSite !== null){
            return;
        }
        $arSites = [];
        $obSites = SiteTable::getList([
            'filter' => ['ACTIVE' => 'Y'],
            'order' => ['SORT' => 'ASC'],
            'cache' => ['ttl' => 36000]
        ]);
        while ($arSite = $obSites->fetch()){
            $arSites[] = $arSite;
            if($arSite['DEF'] === 'Y'){
                self::$arSite = $arSite;
                return;
            }
        }
        self::$arSite = reset($arSites);
    }

    public static function getSiteId() {
		static $siteId = null;
		if ($siteId !== null){
            return $siteId;
        }
        $siteId = constant('SITE_ID');
        if (empty($siteId) || $siteId == constant('LANGUAGE_ID')) {
            self::setSite();
            $siteId = self::$arSite['LID'];
        }
        return $siteId;
    }

    public static function getSiteServerName() {
		static $siteServerName = null;
		if ($siteServerName !== null){
            return $siteServerName;
        }
        $siteServerName = constant('SITE_SERVER_NAME');
        if (empty($siteServerName)) {
            self::setSite();
            $siteServerName = self::$arSite['SERVER_NAME'];
        }
        return $siteServerName;
    }

    public static function isEnvProd() {
        return (!defined('LOCAL_ENV') || LOCAL_ENV == 'prod');
    }

    public static function isEnvDev() {
        return (constant('LOCAL_ENV') == 'dev_server');
    }

    public static function isEnvDevLocal() {
        return (constant('LOCAL_ENV') == 'dev_local');
    }

}