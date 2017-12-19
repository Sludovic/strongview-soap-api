<?php

namespace Selligent\MessageStudio;

class monthlyByDayRecurrence
{

    /**
     * @var MonthlyInterval $interval
     */
    protected $interval = null;

    /**
     * @var WeeklyOccurrence $weeklyOccurrence
     */
    protected $weeklyOccurrence = null;

    /**
     * @var DailyOccurrence $dailyOccurrence
     */
    protected $dailyOccurrence = null;

    /**
     * @param MonthlyInterval $interval
     * @param WeeklyOccurrence $weeklyOccurrence
     * @param DailyOccurrence $dailyOccurrence
     */
    public function __construct($interval, $weeklyOccurrence, $dailyOccurrence)
    {
      $this->interval = $interval;
      $this->weeklyOccurrence = $weeklyOccurrence;
      $this->dailyOccurrence = $dailyOccurrence;
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
     * @return \Selligent\MessageStudio\monthlyByDayRecurrence
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
      return $this;
    }

    /**
     * @return WeeklyOccurrence
     */
    public function getWeeklyOccurrence()
    {
      return $this->weeklyOccurrence;
    }

    /**
     * @param WeeklyOccurrence $weeklyOccurrence
     * @return \Selligent\MessageStudio\monthlyByDayRecurrence
     */
    public function setWeeklyOccurrence($weeklyOccurrence)
    {
      $this->weeklyOccurrence = $weeklyOccurrence;
      return $this;
    }

    /**
     * @return DailyOccurrence
     */
    public function getDailyOccurrence()
    {
      return $this->dailyOccurrence;
    }

    /**
     * @param DailyOccurrence $dailyOccurrence
     * @return \Selligent\MessageStudio\monthlyByDayRecurrence
     */
    public function setDailyOccurrence($dailyOccurrence)
    {
      $this->dailyOccurrence = $dailyOccurrence;
      return $this;
    }

}
