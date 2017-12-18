<?php

namespace Selligent\MessageStudio;

class dailyRecurrence
{

    /**
     * @var DailyInterval $interval
     */
    protected $interval = null;

    /**
     * @var boolean $everyWeekDay
     */
    protected $everyWeekDay = null;

    /**
     * @param DailyInterval $interval
     * @param boolean $everyWeekDay
     */
    public function __construct($interval, $everyWeekDay)
    {
      $this->interval = $interval;
      $this->everyWeekDay = $everyWeekDay;
    }

    /**
     * @return DailyInterval
     */
    public function getInterval()
    {
      return $this->interval;
    }

    /**
     * @param DailyInterval $interval
     * @return \Selligent\MessageStudio\dailyRecurrence
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEveryWeekDay()
    {
      return $this->everyWeekDay;
    }

    /**
     * @param boolean $everyWeekDay
     * @return \Selligent\MessageStudio\dailyRecurrence
     */
    public function setEveryWeekDay($everyWeekDay)
    {
      $this->everyWeekDay = $everyWeekDay;
      return $this;
    }

}
