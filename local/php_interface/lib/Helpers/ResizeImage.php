<?php

namespace LocalLib\Helpers;
use CFile;

class ResizeImage {
    public static function getResizeImage($id, $width, $height,$quality=80){
        $arFile = CFile::GetFileArray($id);
        if(!$arFile) {
            return array(
                'src' => '/upload/no_photo.png',
                'width' => 239,
                'height' => 338
            );
        }
        $resizeImage = CFile::ResizeImageGet(
            $arFile['ID'],
            array("width" => $width, "height" => $height),
            BX_RESIZE_IMAGE_EXACT,
            true,
            array(array("name" => "sharpen", "precision" => 0)),
            true,
            $quality
        );
        return $resizeImage;
    }
}
?>