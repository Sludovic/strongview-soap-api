<?php

namespace Selligent\MessageStudio;

class monthlyByDateRecurrence
{

    /**
     * @var MonthlyInterval $interval
     */
    protected $interval = null;

    /**
     * @var DayOfMonth $dayOfMonth
     */
    protected $dayOfMonth = null;

    /**
     * @param MonthlyInterval $interval
     * @param DayOfMonth $dayOfMonth
     */
    public function __construct($interval, $dayOfMonth)
    {
      $this->interval = $interval;
      $this->dayOfMonth = $dayOfMonth;
    }

    /**
     * @return MonthlyInterval
     */
    public function getInterval()
    {
      return $this->interval;
    }

    /**
     * @param MonthlyInterval $interval
     * @return \Selligent\MessageStudio\monthlyByDateRecurrence
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
      return $this;
    }

    /**
     * @return DayOfMonth
     */
    public function getDayOfMonth()
    {
      return $this->dayOfMonth;
    }

    /**
     * @param DayOfMonth $dayOfMonth
     * @return \Selligent\MessageStudio\monthlyByDateRecurrence
     */
    public function setDayOfMonth($dayOfMonth)
    {
      $this->dayOfMonth = $dayOfMonth;
      return $this;
    }

}
