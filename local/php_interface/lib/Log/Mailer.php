<?
namespace LocalLib\Log;

use CEvent;
use DateTime;
use Exception;
use LocalLib\Helpers\SiteHelper;

/**
 * Example #1: <code>(new Mailer(['obLogFile' => $obLogFile]))->send();</code>
 *
 * Example #2: <code>
 * (new Mailer([
 *      'subject' => '',
 *      'message' => '',
 *      'countErrors' => 0,
 *      'countExceptions' => 0,
 *      'pathToLogFile' => '',
 *      'obDateTimeFrom' => new DateTime(),
 *      'obDateTimeTo' => new DateTime(), *
 * ]))->send();
 * </code>
 */
class Mailer {
    private $eventType = 'ADMIN';
    private $subjectPref = '';
    private $subject = 'Лог';
    private $message = '';
    private $countErrors = 0;
    private $countExceptions = 0;
    private $pathToLogFile = '';

    /**
     * @var DateTime
     */
    private $obDateTimeFrom;

    /**
     * @var DateTime
     */
    private $obDateTimeTo;

    /**
     *
     * @var LogFile
     */
    private $obLogFile;

    /**
     * @param array $arConfig
     */
    public function __construct($arConfig = []) {
        $server = SiteHelper::getSiteServerName();
        if (!empty($server)) {
            $this->subjectPref = '['.$server.'] ';
        }
        if($arConfig['obLogFile'] instanceof LogFile){
            $this->obLogFile = $arConfig['obLogFile'];
            $this->subject = $this->obLogFile->getSubject();
            $this->pathToLogFile = $this->obLogFile->getPathToFile();
            $this->countExceptions = $this->obLogFile->getCountExceptions();
            $this->countErrors = $this->obLogFile->getCountErrors();
            $this->message .= $this->obLogFile->getResume([
                'showPathToFile' => true,
                'showLastException' => true,
                'showLastExceptionTrace' => false,
                'showLastError' => true,
                'showHours' => true,
            ]);
        }else{
            $subject = (string)filter_var($arConfig['subject']);
            if (!empty($subject)) {
                $this->subject = $subject;
            }
            $this->pathToLogFile = (string)filter_var($arConfig['pathToLogFile']);
            $this->countExceptions = intval($arConfig['countExceptions']);
            $this->countErrors = intval($arConfig['countErrors']);
            if($arConfig['obDateTimeFrom'] instanceof DateTime){
                $this->obDateTimeFrom = $arConfig['obDateTimeFrom'];
            }
            if($arConfig['obDateTimeTo'] instanceof DateTime){
                $this->obDateTimeTo = $arConfig['obDateTimeTo'];
            }
            $this->addMessage($arConfig['message']);
        }
    }

    /**
     * @param string $message
     * @return Mailer
     */
	public function addMessage($message) {
        $message = (string)filter_var($message);
        if (!empty($message)) {
            $this->message .= '<div>'.$message.'</div>';
        }
        return $this;
    }

    /**
     * @param Exception|string $exception
     * @return Mailer
     */
    public function addException ($exception) {
        $this->countExceptions++;
        if (!is_a($exception, 'Exception', false)) {
            $exception = (string)filter_var($exception);
            $message = 'Exception';
            if (!empty($exception)) {
                $message .= ': '.$exception;
            }
            $this->addMessage($message);
        }else{
            $this->message .= "<pre>Exception:\n".$exception->getMessage()."\n".$exception->getTraceAsString().'</pre>';
        }
        return $this;
    }

    public function send() {
        $message = '<h1>'.$this->subject.'</h1>'
            .$this->message;
        if(!is_object($this->obLogFile)){
            $message .= '<hr />'
            .'<div>Ошибок: '.$this->countErrors.'</div>'
            .'<div>Исключений (Exceptions): '.$this->countExceptions.'</div>';
            if($this->obDateTimeFrom && $this->obDateTimeTo){
                $message .= '<div>Время выполнения: '
                    .round((($this->obDateTimeTo->getTimestamp()-$this->obDateTimeFrom->getTimestamp())/60/60), 2)
                    .' часов</div>';
            }
            if (!empty($this->pathToLogFile)) {
                $message .= '<div>Лог тут '.$this->pathToLogFile.'</div>';
            }
        }
        return CEvent::SendImmediate(
            $this->eventType,
            SiteHelper::getSiteID(),
            ['TEXT' => $message, 'SUBJECT' => $this->getFullSubject()],
            'N'
        );
    }

    private function getFullSubject() {
        $subject = $this->subjectPref.$this->subject;
        if($this->countErrors){
            $subject .= ' #Error';
        }
        if($this->countExceptions){
            $subject .= ' #Exception';
        }
        return $subject;
    }

}
