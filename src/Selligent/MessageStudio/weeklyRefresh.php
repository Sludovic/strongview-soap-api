<?php

namespace Selligent\MessageStudio;

class weeklyRefresh
{

    /**
     * @var time $startTime
     */
    protected $startTime = null;

    /**
     * @var DayOfWeek $day
     */
    protected $day = null;

    /**
     * @param time $startTime
     * @param DayOfWeek $day
     */
    public function __construct($startTime, $day)
    {
      $this->startTime = $startTime;
      $this->day = $day;
    }

    /**
     * @return time
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param time $startTime
     * @return \Selligent\MessageStudio\weeklyRefresh
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return DayOfWeek
     */
    public function getDay()
    {
      return $this->day;
    }

    /**
     * @param DayOfWeek $day
     * @return \Selligent\MessageStudio\weeklyRefresh
     */
    public function setDay($day)
    {
      $this->day = $day;
      return $this;
    }

}
