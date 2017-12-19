<?php

namespace Selligent\MessageStudio;

class yearlyByDateRecurrence
{

    /**
     * @var Month $month
     */
    protected $month = null;

    /**
     * @var DayOfMonth $day
     */
    protected $day = null;

    /**
     * @param Month $month
     * @param DayOfMonth $day
     */
    public function __construct($month, $day)
    {
      $this->month = $month;
      $this->day = $day;
    }

    /**
     * @return Month
     */
    public function getMonth()
    {
      return $this->month;
    }

    /**
     * @param Month $month
     * @return \Selligent\MessageStudio\yearlyByDateRecurrence
     */
    public function setMonth($month)
    {
      $this->month = $month;
      return $this;
    }

    /**
     * @return DayOfMonth
     */
    public function getDay()
    {
      return $this->day;
    }

    /**
     * @param DayOfMonth $day
     * @return \Selligent\MessageStudio\yearlyByDateRecurrence
     */
    public function setDay($day)
    {
      $this->day = $day;
      return $this;
    }

}
