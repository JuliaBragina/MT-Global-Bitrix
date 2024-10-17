<?
namespace LocalLib\Log;

use DateInterval;
use DateTime;
use Exception;
use ZipArchive;

class LogFile {
    private $key = 'Log_LogFile';
    private static $formatDateTimeForFileName = 'Y-m-d_H-i-s';
    private static $arZipArchiveErrors = [];
    private $limitFilesInDir = 300;
    private $saveFilesInDirDays = 3;
    private $pathToFiles;
    private $pathToFileHtml;
    private $pathToFileZip;
    private $pathToFile;
    private $handleHtml;
    private $obDateTimeFrom;
    private $obDateTimeTo;
    private $fileBaseNamePostfix = '';
    private $countErrors = 0;
    private $countExceptions = 0;
    private $lastException = '';
    private $lastError = '';
    private $fileBaseName;
    private $fileN = 0;
    private $arFilesBaseNames = [];
    private $maxFileSize = 4194304; // 1048576 = 1Mb
    private $isCloseFile = false;
    private $isSendEmail = true;
    private $subject = 'Лог';

    /**
     * ```php
     * $obLogFile = new LogFile({
     *      'class' => 'LocalLib\TestLog\Test',
     *      'key' => 'TestLog_Test', // class or key
     *      'subject' => 'Лог',
     *      'isSendEmail' => true,
     *      'fileBaseNamePostfix' => '',
     * ]);
     * ```
     * @param array $arConfig
     * @throws Exception
     */
    public function __construct($arConfig = []) {
        set_time_limit(36000);
        if(!is_array($arConfig)){
            $arConfig = [];
        }
        if(class_exists('ZipArchive')){
            self::$arZipArchiveErrors = [
                ZipArchive::ER_EXISTS => 'Файл уже существует',
                ZipArchive::ER_INCONS => 'Несовместимый ZIP-архив',
                ZipArchive::ER_INVAL => 'Недопустимый аргумент',
                ZipArchive::ER_MEMORY => 'Ошибка динамического выделения памяти',
                ZipArchive::ER_NOENT => 'Нет такого файла',
                ZipArchive::ER_NOZIP => 'Не является ZIP-архивом',
                ZipArchive::ER_OPEN => 'Невозможно открыть файл',
                ZipArchive::ER_READ => 'Ошибка чтения',
                ZipArchive::ER_SEEK => 'Ошибка поиска',
            ];
        }
        $this->setKey($arConfig);
        $this->setFileBaseNamePostfix($arConfig['fileBaseNamePostfix']);
        if($arConfig['isSendEmail'] === false){
            $this->isSendEmail = false;
        }
        $subject = (string)filter_var($arConfig['subject']);
        if (!empty($subject)) {
            $this->subject = $subject;
        }
        $this->obDateTimeFrom = new DateTime();
        $this->pathToFiles = __DIR__.'/_files/'.$this->key.'/';
        if(!file_exists($this->pathToFiles)){
            mkdir($this->pathToFiles, 0700, true);
        }
        if(!file_exists($this->pathToFiles)){
            throw new Exception('"'.$this->pathToFiles.'" не существует');
        }
        $this->fileBaseName = $this->obDateTimeFrom->format(self::$formatDateTimeForFileName);
        if(!$this->openFileHtml()){
            throw new Exception('Невозможно открыть файл "'.$this->pathToFileHtml.'"');
        }
    }

    private function setKey($arConfig) {
        $key = filter_var(
            (string)$arConfig['key'],
            FILTER_VALIDATE_REGEXP,
            ['options' => ['regexp' => '/^[-_#.A-z0-9]+$/mis']]
        );
        if (!empty($key)) {
            return ($this->key = $key);
        }
        $class = filter_var(
            (string)$arConfig['class'],
            FILTER_VALIDATE_REGEXP,
            ['options' => ['regexp' => '/^[\_A-z0-9]+$/mis']]
        );
        if (!empty($class)) {
            $class = ltrim($class, '\\');
            $ar = explode('\\', $class);
            if (count($ar) > 1) {
                unset($ar[0]);
                $this->key = implode('_', $ar);
            }
        }
        return $this->key;
    }

    private function isSmallHtmlFile() {
        clearstatcache(true, $this->pathToFileHtml);
        return (filesize($this->pathToFileHtml) < $this->maxFileSize);
    }

    private function openFileHtml() {
        if($this->isCloseFile){
            return false;
        }
        if($this->handleHtml){
            if($this->isSmallHtmlFile()){
                return true;
            }
            $this->fclose();
        }
        $this->fileN++;
        $this->pathToFile = $this->pathToFileHtml = $this->pathToFiles.$this->fileBaseName.'__'.$this->fileN.'.html';
        if ($this->handleHtml = fopen($this->pathToFileHtml, 'a')) {
            $this->arFilesBaseNames[$this->fileN] = $this->fileBaseName;
            $str = '<!DOCTYPE html><html lang="ru">
                <head>
                    <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
                    <style type="text/css">
                        .ERROR{color: red;}
                        .bg-dark_red,
                        .bg-dark_red *{
                            color: #fff;
                            background: #960300;
                        }
                        .bg-red,
                        .bg-red * {
                            color: #fff;
                            background: #c9302c;
                        }
                        .bg-orange,
                        .bg-orange * {
                            color: #fff;
                            background: #f08c00;
                        }
                        .bg-green,
                        .bg-green * {
                            color: #fff;
                            background: #449d44;
                        }
                        .bg-grey,
                        .bg-grey * {
                            color: #333;
                            background: #ccc;
                        }
                        .bg-dark_red a:hover,
                        .bg-red a:hover,
                        .bg-orange a:hover,
                        .bg-green a:hover {
                            color: #fff;
                        }
                    </style>
                    <title>'.$this->subject.'</title>
                </head><body>';
            if (!empty($this->subject)) {
                $str .= '<h1>'.$this->subject.'</h1>';
            }
            $this->writeToFile($str, false);
            return true;
        }else{
            $this->fileN--;
            $this->pathToFile = $this->pathToFileHtml = null;
            return false;
        }
    }

    public function setFileBaseNamePostfix($v) {
        $this->fileBaseNamePostfix = strip_tags((string)$v);
        if (empty($this->fileBaseNamePostfix)) {
            return $this->fileBaseNamePostfix;
        }
        $this->fileBaseNamePostfix = preg_replace('/[^-_#.A-z0-9]/', '_', $this->fileBaseNamePostfix);
        return $this->fileBaseNamePostfix;
    }

    public function setLimitFilesInDir($v) {
        return ($this->limitFilesInDir = intval($v));
    }

    public function incrementErrors() {
        $this->countErrors++;
        return $this->countErrors;
    }

    public function incrementExceptions() {
        $this->countExceptions++;
        return $this->countExceptions;
    }

    public function setCountErrors($v) {
        return ($this->countErrors = intval($v));
    }

    public function setCountExceptions($v) {
        return ($this->countExceptions = intval($v));
    }

    public function getCountErrors() {
        return $this->countErrors;
    }

    public function getCountExceptions() {
        return $this->countExceptions;
    }

    public function getPathToFiles() {
        return $this->pathToFiles;
    }

    public function getPathToFile() {
        return $this->pathToFile;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getDateTimeFrom() {
        return $this->obDateTimeFrom;
    }

    public function getDateTimeTo() {
        return $this->obDateTimeTo;
    }

    private function getLastException($addTrace = false, $pref = 'Последнее исключение:') {
        if (empty($this->lastException)) {
            return '';
        }
        $result = '<pre>'.$pref.' '.$this->lastException['message'];
        if($addTrace === true && !empty($this->lastException['trace'])){
            $result .= "\n".$this->lastException['trace'];
        }
        $result .= '</pre>';
        return $result;
    }

    /**
     * @param array $arConfig
     *      [
     *          'showPathToFile' => false,
     *          'showLastException' => false,
     *          'showLastExceptionTrace' => false,
     *          'showLastError' => false,
     *          'showHours' => false,
     *      ]
     * @return string
     */
    public function getResume($arConfig = []){
        if (!is_array($arConfig)) {
            $arConfig = [];
        }
        $bool = [
            'filter' => FILTER_VALIDATE_BOOLEAN,
            'flags'  => FILTER_NULL_ON_FAILURE,
        ];
        $arConfig = filter_var_array($arConfig, [
            'showPathToFile' => $bool,
            'showLastException' => $bool,
            'showLastExceptionTrace' => $bool,
            'showLastError' => $bool,
            'showHours' => $bool,
        ]);
        foreach ($arConfig as $k => $v) {
            if($v === null){
                $arConfig[$k] = true;
            }
        }
        $result = '<hr />';
        if($arConfig['showHours'] === true && $this->obDateTimeFrom){
            if($this->obDateTimeTo){
                $to = $this->obDateTimeTo->getTimestamp();
            }else{
                $to = (new DateTime())->getTimestamp();
            }
            $result .= '<div>Время выполнения: '.round((($to - $this->obDateTimeFrom->getTimestamp())/60/60), 2).' часов</div>';
        }
        $result .= '<div>Ошибок: '.$this->countErrors.'</div>'
                  .'<div>Исключений (Exceptions): '.$this->countExceptions.'</div>';
        if($arConfig['showLastError'] === true && !empty($this->lastError)){
            $result .= '<div>Последняя ошибка: '.$this->lastError.'</div>';
        }
        if($arConfig['showLastException'] === true && $this->countExceptions > 0){
            $result .= $this->getLastException($arConfig['showLastExceptionTrace']);
        }
        if($arConfig['showPathToFile'] === true){
            $result .= '<div>Лог тут '.$this->getPathToFile().'</div>';
        }
        $result .= '<hr />';
        return $result;
    }

	public function writeToFile($data, $isAddDateTime = true) {
        if(!$this->openFileHtml()){
            return false;
        }
        $pref = ($isAddDateTime?'['.date('Y-m-d H:i:s').'] ':'');
        if(is_array($data)){
            if($data['isError']){
                $this->countErrors++;
            }
            if($data['isException']){
                $this->countExceptions++;
            }
            $data['message'] = $pref.$data['message'];
            if($data['message'] == '<br />' || $data['message'] == '<hr />'){
                $string = $data['message'];
            }else{
                $string = '<div class="'.(($data['isError'] || $data['isException'])?'ERROR':'OK').'">'.$data['message'].'</div>';
            }
        }else{
            $string = $pref.filter_var($data);
        }
        $string .= "\n";
        if (fwrite($this->handleHtml, $string) === false) {
            return false;
        }else{
            return true;
        }
	}

	public function writeHtmlToFile($html) {
        return (fwrite($this->handleHtml, "\n".filter_var($html)) === false);
    }

	public function writeMessageToFile($message, $isAddDateTime = true) {
        $this->writeToFile(['message' => (string)filter_var($message)], $isAddDateTime);
    }

    public function writeDebugMessageToFile($var, $name = '', $isAddDateTime = true) {
        $name = (string)filter_var($name);
        $message = '<pre>';
        if ($name != '') {
            $message .= $name.' = ';
        }
        $message .= var_export($var, true).'</pre>';
        $this->writeToFile(['message' => $message], $isAddDateTime);
    }

	public function writeErrorToFile($message, $isAddDateTime = true) {
        $message = filter_var($message);
        $this->lastError = $message;
        $this->writeToFile(['message' => '[Error] '.$message, 'isError' => true], $isAddDateTime);
	}

    /**
     * @param Exception|string $exception
     * @param boolean $isAddDateTime
     */
	public function writeExceptionToFile($exception, $isAddDateTime = true) {
        if (!is_a($exception, 'Exception', false)) {
            $exception = (string)filter_var($exception);
            $message = 'Exception';
            if (!empty($exception)) {
                $message .= ': '.$exception;
            }
            $this->lastException = ['message' => $exception];
        }else{
            $message = "<pre>Exception:\n".$exception->getMessage();
            if($exception->getCode() != 1){
                $trace = $exception->getTraceAsString();
                $message .= "\n".$trace;
            }
            $message .= '</pre>';
            $this->lastException = ['message' => $exception->getMessage(), 'trace' => $trace];
        }
        $this->writeToFile(['message' => (string)filter_var($message), 'isException' => true], $isAddDateTime);
	}

    public function __destruct() {
        $this->closeFile();
    }

    private function fclose() {
        if(!$this->handleHtml){
            return;
        }
        fwrite($this->handleHtml, $this->getResume([
            'showPathToFile' => false,
            'showLastException' => false,
            'showLastExceptionTrace' => false,
            'showLastError' => false,
            'showHours' => true,
        ]).'</body></html>');
        fclose($this->handleHtml);
    }

    public function closeFile() {
        if($this->isCloseFile){
            return;
        }
        $this->isCloseFile = true;
        if(!$this->handleHtml){
            return;
        }
        if(!$this->countExceptions && $this->countErrors > 200){
            $this->writeExceptionToFile('Много ошибок');
        }
        $this->fclose();
        $this->renameFiles();
        $this->archiveFiles();
        $this->deleteOldFiles();
        if($this->isSendEmail || $this->countExceptions){
            (new Mailer(['obLogFile' => $this]))->send();
        }
    }

    private function renameFiles() {
        $this->obDateTimeTo = new DateTime();
        $this->fileBaseName = $this->obDateTimeFrom->format(self::$formatDateTimeForFileName).'_-_'.
            $this->obDateTimeTo->format(self::$formatDateTimeForFileName);
        if (!empty($this->fileBaseNamePostfix)) {
            $this->fileBaseName .= '__'.$this->fileBaseNamePostfix;
        }
        if($this->countErrors){
            $this->fileBaseName .= '__errors'.$this->countErrors;
        }
        if($this->countExceptions){
            $this->fileBaseName .= '__exceptions'.$this->countExceptions;
        }
        foreach ($this->arFilesBaseNames as $n => $fileBaseName) {
            $pathToFileHtml = $this->pathToFiles.$fileBaseName.'__'.$n.'.html';
            $newPathToFileHtml = $this->pathToFiles.$this->fileBaseName.'__'.$n.'.html';
            if(rename($pathToFileHtml, $newPathToFileHtml)){
                $this->arFilesBaseNames[$n] = $this->fileBaseName;
                $pathToFileHtml = $newPathToFileHtml;
            }
        }
        $this->pathToFile = $this->pathToFileHtml = $pathToFileHtml;
    }

    private function archiveFiles() {
        if(!class_exists('ZipArchive')){
            return false;
        }
        $arDelFiles = [];
        try {
            $zip = new ZipArchive();
            $this->pathToFileZip = $this->pathToFiles.$this->fileBaseName.'.zip';
            $openZipArchive = $zip->open($this->pathToFileZip, ZipArchive::CREATE);
            if ($openZipArchive !== true) {
                throw new Exception('Ошибка открытия/создания архива. '.self::$arZipArchiveErrors[$openZipArchive].'.');
            }
            foreach ($this->arFilesBaseNames as $n => $fileBaseName) {
                $fileName = $fileBaseName.'__'.$n.'.html';
                $zip->addFile($this->pathToFiles.$fileName, $fileName);
                $arDelFiles[] = $this->pathToFiles.$fileName;
            }
            $zipNumFiles = $zip->numFiles;
            $zip->close();
            if ($zipNumFiles != $this->fileN) {
                throw new Exception('Ошибка добавления файлов в архив');
            }
            $this->pathToFile = $this->pathToFileZip;
        } catch (Exception $e) {
            $this->pathToFileZip = null;
        }
        if (empty($this->pathToFileZip) || !file_exists($this->pathToFileZip)) {
            (new Mailer([
                'subject' => $this->subject,
                'message' => '',
                'pathToLogFile' => $this->pathToFile,
                'countErrors' => $this->countErrors,
                'countExceptions' => $this->countExceptions,
            ]))
                ->addMessage('<div>pathToFiles='.$this->pathToFiles.'</div>
                    <div>arFilesBaseNames='.var_export($this->arFilesBaseNames, true).'</div>
                    <div>pathToFileHtml='.$this->pathToFileHtml.'</div>
                    <div>pathToFileZip='.$this->pathToFileZip.'</div>')
                ->addException($e)
                ->send();
            return false;
        }
        foreach ($arDelFiles as $file) {
            unlink($file);
        }
        return true;
    }

    private function deleteOldFiles() {
        if($this->limitFilesInDir <= 0){
            return;
        }
        $items = scandir($this->pathToFiles, SCANDIR_SORT_DESCENDING);
        if(empty($items)){
            return;
        }
        $obDateTime = new DateTime();
        $format = 'Y-m-d_';
        $saveFrom = false;
        $days = intval($this->saveFilesInDirDays)-1;
        if($days >= 0){
            $saveFrom = $obDateTime->format($format);
            if($days > 0){
                $obDateTime->sub(new DateInterval('P'.$days.'D'));
                $saveFrom = $obDateTime->format($format);
            }
        }
        $i = 0;
        foreach ($items as $item) {
            if ($item == "." || $item == "..") {
                continue;
            }
            $substr = substr($item, -4);
            if ($substr != '.zip' && $substr != 'html') {
                continue;
            }
            $path = $this->pathToFiles.$item;
            if(!is_file($path)){
                continue;
            }
            $i++;
            $pref = substr($item, 0, 11);
            if($saveFrom !== false && $pref >= $saveFrom){
                continue;
            }
            if($i > $this->limitFilesInDir){
                unlink($path);
            }
        }
    }

}
