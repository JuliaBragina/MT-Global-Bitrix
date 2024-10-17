<?php

namespace LocalLib\Log;

use Exception;

trait LogTrait {

    protected $limitItems = 50;
    protected $countItems;
    protected $processedItems;
    protected $successfulItems;

    /** @var LogFile */
    protected $obLogFile;

    protected function getResume(){
        $result = '';
        if($this->processedItems !== null){
            $result .= 'Обработано: '.$this->processedItems.'. ';
        }
        if($this->successfulItems !== null){
            $result .= 'Обработано успешно: '.$this->successfulItems.'. ';
        }
        if($this->countItems !== null){
            $result .= 'Всего: '.$this->countItems.'.';
        }
        return $result;
    }

    /** @param Exception $e */
    protected function exception($e) {
        if(!is_object($this->obLogFile)){
            (new Mailer(['subject' => (property_exists($this, 'subject')?$this->subject:null)]))
                ->addException($e)
                ->addMessage('Выполнение прервано.')
                ->addMessage($this->getResume())
                ->send();
            return;
        }
        $this->obLogFile->writeExceptionToFile($e);
        $this->obLogFile->writeMessageToFile('Выполнение прервано.');
        $this->obLogFile->writeMessageToFile($this->getResume());
        $this->obLogFile->closeFile();
    }

    protected function epilog() {
        $this->obLogFile->writeMessageToFile('Выполнено.');
		$str = $this->getResume();
		if($str != ''){
			$this->obLogFile->writeMessageToFile($str);
		}
        $this->obLogFile->closeFile();
    }

}
