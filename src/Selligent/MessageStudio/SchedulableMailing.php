<?php

namespace Selligent\MessageStudio;

abstract class SchedulableMailing extends Mailing
{

    /**
     * @var schedule $schedule
     */
    protected $schedule = null;

    /**
     * @param Encoding $bodyEncoding
     * @param boolean $isApproved
     * @param boolean $isCompliant
     * @param Encoding $headerEncoding
     * @param string $name
     * @param CharSet $outputBodyCharSet
     * @param string $outputBodyCharSetToken
     * @param CharSet $outputHeaderCharSet
     * @param string $outputHeaderCharSetToken
     * @param boolean $useHeaderFromTemplate
     */
    public function __construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate)
    {
      parent::__construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate);
    }

    /**
     * @return schedule
     */
    public function getSchedule()
    {
      return $this->schedule;
    }

    /**
     * @param schedule $schedule
     * @return \Selligent\MessageStudio\SchedulableMailing
     */
    public function setSchedule($schedule)
    {
      $this->schedule = $schedule;
      return $this;
    }

}
