<?php

namespace LocalLib\Helpers;

/**
 * вывод сообщений об ошибках и пр.
 * хранятся в сесси до первого показа пользователю.
 */
class SessionFlashHelper {

    const CODE_FOR_ERROR = 'danger';
    const CODE_FOR_SUCCESS = 'success';
    const CODE_FOR_WARNING = 'warning';
    const CONTENT_BLOCK_CODE = 'session_flash';

    private static $flashParam = '__flash';

    public static function addError($value) {
        self::addFlash(self::CODE_FOR_ERROR, $value);
    }

    public static function addWarning($value) {
        self::addFlash(self::CODE_FOR_WARNING, $value);
    }

    public static function addSuccess($value) {
        self::addFlash(self::CODE_FOR_SUCCESS, $value);
    }

    private static function addFlash($type, $value) {
        $ar = [
            't' => $type,
            'v' => filter_var($value)
        ];
        if (is_array($_SESSION[self::$flashParam])) {
            $_SESSION[self::$flashParam][] = $ar;
        } else {
            $_SESSION[self::$flashParam] = [$ar];
        }
    }

    private static function removeFlash() {
        unset($_SESSION[self::$flashParam]);
    }

    private static function getFlashForShow() {
        $str = '';
        if (!is_array($_SESSION[self::$flashParam])) {
            return $str;
        }
        $str .= '<div id="win_alert" class="mfp-win-transparent mfp-hide">';
        foreach ($_SESSION[self::$flashParam] as $ar) {
            if (empty($ar['v'])) {
                continue;
            }
            $str .= '<div class="alert alert-'.$ar['t'].'">'.$ar['v'].'</div>';
        }
        $str .= '</div>
        <script type="text/javascript">
        $(document).ready(function(){
            $.magnificPopup.open({showCloseBtn:false, closeOnContentClick: true, items: {src: "#win_alert", type: "inline"}});
        });
        </script>';
        return $str;
    }

    public static function showFlashToBlock() {
        $str = self::getFlashForShow();
        if (empty($str)) {
            return;
        }
        $GLOBALS['APPLICATION']->AddViewContent(self::CONTENT_BLOCK_CODE, $str);
        self::removeFlash();
    }

    public static function showFlashBlock() {
        $GLOBALS['APPLICATION']->ShowViewContent(self::CONTENT_BLOCK_CODE);
    }

}
