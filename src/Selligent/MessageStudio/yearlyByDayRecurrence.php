<?php

namespace Selligent\MessageStudio;

class yearlyByDayRecurrence
{

    /**
     * @var Month $month
     */
    protected $month = null;

    /**
     * @var WeeklyOccurrence $weeklyOccurrence
     */
    protected $weeklyOccurrence = null;

    /**
     * @var DailyOccurrence $dailyOccurrence
     */
    protected $dailyOccurrence = null;

    /**
     * @param Month $month
     * @param WeeklyOccurrence $weeklyOccurrence
     * @param DailyOccurrence $dailyOccurrence
     */
    public function __construct($month, $weeklyOccurrence, $dailyOccurrence)
    {
      $this->month = $month;
      $this->weeklyOccurrence = $weeklyOccurrence;
      $this->dailyOccurrence = $dailyOccurrence;
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
     * @return \Selligent\MessageStudio\yearlyByDayRecurrence
     */
    public function setMonth($month)
    {
      $this->month = $month;
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
     * @return \Selligent\MessageStudio\yearlyByDayRecurrence
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
     * @return \Selligent\MessageStudio\yearlyByDayRecurrence
     */
    public function setDailyOccurrence($dailyOccurrence)
    {
      $this->dailyOccurrence = $dailyOccurrence;
      return $this;
    }

}
