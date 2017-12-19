<?php

namespace Selligent\MessageStudio;

class weeklyRecurrence
{

    /**
     * @var WeeklyInterval $interval
     */
    protected $interval = null;

    /**
     * @var DayOfWeek $day
     */
    protected $day = null;

    /**
     * @param WeeklyInterval $interval
     * @param DayOfWeek $day
     */
    public function __construct($interval, $day)
    {
      $this->interval = $interval;
      $this->day = $day;
    }

    /**
     * @return WeeklyInterval
     */
    public function getInterval()
    {
      return $this->interval;
    }

    /**
     * @param WeeklyInterval $interval
     * @return \Selligent\MessageStudio\weeklyRecurrence
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
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
     * @return \Selligent\MessageStudio\weeklyRecurrence
     */
    public function setDay($day)
    {
      $this->day = $day;
      return $this;
    }

}
