<?php

namespace Selligent\MessageStudio;

class recurrence
{

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @var int $endAfterXMailings
     */
    protected $endAfterXMailings = null;

    /**
     * @var minutelyRecurrence $minutelyRecurrence
     */
    protected $minutelyRecurrence = null;

    /**
     * @var hourlyRecurrence $hourlyRecurrence
     */
    protected $hourlyRecurrence = null;

    /**
     * @var dailyRecurrence $dailyRecurrence
     */
    protected $dailyRecurrence = null;

    /**
     * @var weeklyRecurrence $weeklyRecurrence
     */
    protected $weeklyRecurrence = null;

    /**
     * @var monthlyByDateRecurrence $monthlyByDateRecurrence
     */
    protected $monthlyByDateRecurrence = null;

    /**
     * @var monthlyByDayRecurrence $monthlyByDayRecurrence
     */
    protected $monthlyByDayRecurrence = null;

    /**
     * @var yearlyByDateRecurrence $yearlyByDateRecurrence
     */
    protected $yearlyByDateRecurrence = null;

    /**
     * @var yearlyByDayRecurrence $yearlyByDayRecurrence
     */
    protected $yearlyByDayRecurrence = null;

    /**
     * @var \DateTime $nextScheduledDateTime
     */
    protected $nextScheduledDateTime = null;

    /**
     * @param date $endDate
     * @param int $endAfterXMailings
     * @param minutelyRecurrence $minutelyRecurrence
     * @param hourlyRecurrence $hourlyRecurrence
     * @param dailyRecurrence $dailyRecurrence
     * @param weeklyRecurrence $weeklyRecurrence
     * @param monthlyByDateRecurrence $monthlyByDateRecurrence
     * @param monthlyByDayRecurrence $monthlyByDayRecurrence
     * @param yearlyByDateRecurrence $yearlyByDateRecurrence
     * @param yearlyByDayRecurrence $yearlyByDayRecurrence
     * @param \DateTime $nextScheduledDateTime
     */
    public function __construct($endDate, $endAfterXMailings, $minutelyRecurrence, $hourlyRecurrence, $dailyRecurrence, $weeklyRecurrence, $monthlyByDateRecurrence, $monthlyByDayRecurrence, $yearlyByDateRecurrence, $yearlyByDayRecurrence, \DateTime $nextScheduledDateTime)
    {
      $this->endDate = $endDate;
      $this->endAfterXMailings = $endAfterXMailings;
      $this->minutelyRecurrence = $minutelyRecurrence;
      $this->hourlyRecurrence = $hourlyRecurrence;
      $this->dailyRecurrence = $dailyRecurrence;
      $this->weeklyRecurrence = $weeklyRecurrence;
      $this->monthlyByDateRecurrence = $monthlyByDateRecurrence;
      $this->monthlyByDayRecurrence = $monthlyByDayRecurrence;
      $this->yearlyByDateRecurrence = $yearlyByDateRecurrence;
      $this->yearlyByDayRecurrence = $yearlyByDayRecurrence;
      $this->nextScheduledDateTime = $nextScheduledDateTime->format(\DateTime::ATOM);
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param date $endDate
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getEndAfterXMailings()
    {
      return $this->endAfterXMailings;
    }

    /**
     * @param int $endAfterXMailings
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setEndAfterXMailings($endAfterXMailings)
    {
      $this->endAfterXMailings = $endAfterXMailings;
      return $this;
    }

    /**
     * @return minutelyRecurrence
     */
    public function getMinutelyRecurrence()
    {
      return $this->minutelyRecurrence;
    }

    /**
     * @param minutelyRecurrence $minutelyRecurrence
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setMinutelyRecurrence($minutelyRecurrence)
    {
      $this->minutelyRecurrence = $minutelyRecurrence;
      return $this;
    }

    /**
     * @return hourlyRecurrence
     */
    public function getHourlyRecurrence()
    {
      return $this->hourlyRecurrence;
    }

    /**
     * @param hourlyRecurrence $hourlyRecurrence
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setHourlyRecurrence($hourlyRecurrence)
    {
      $this->hourlyRecurrence = $hourlyRecurrence;
      return $this;
    }

    /**
     * @return dailyRecurrence
     */
    public function getDailyRecurrence()
    {
      return $this->dailyRecurrence;
    }

    /**
     * @param dailyRecurrence $dailyRecurrence
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setDailyRecurrence($dailyRecurrence)
    {
      $this->dailyRecurrence = $dailyRecurrence;
      return $this;
    }

    /**
     * @return weeklyRecurrence
     */
    public function getWeeklyRecurrence()
    {
      return $this->weeklyRecurrence;
    }

    /**
     * @param weeklyRecurrence $weeklyRecurrence
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setWeeklyRecurrence($weeklyRecurrence)
    {
      $this->weeklyRecurrence = $weeklyRecurrence;
      return $this;
    }

    /**
     * @return monthlyByDateRecurrence
     */
    public function getMonthlyByDateRecurrence()
    {
      return $this->monthlyByDateRecurrence;
    }

    /**
     * @param monthlyByDateRecurrence $monthlyByDateRecurrence
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setMonthlyByDateRecurrence($monthlyByDateRecurrence)
    {
      $this->monthlyByDateRecurrence = $monthlyByDateRecurrence;
      return $this;
    }

    /**
     * @return monthlyByDayRecurrence
     */
    public function getMonthlyByDayRecurrence()
    {
      return $this->monthlyByDayRecurrence;
    }

    /**
     * @param monthlyByDayRecurrence $monthlyByDayRecurrence
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setMonthlyByDayRecurrence($monthlyByDayRecurrence)
    {
      $this->monthlyByDayRecurrence = $monthlyByDayRecurrence;
      return $this;
    }

    /**
     * @return yearlyByDateRecurrence
     */
    public function getYearlyByDateRecurrence()
    {
      return $this->yearlyByDateRecurrence;
    }

    /**
     * @param yearlyByDateRecurrence $yearlyByDateRecurrence
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setYearlyByDateRecurrence($yearlyByDateRecurrence)
    {
      $this->yearlyByDateRecurrence = $yearlyByDateRecurrence;
      return $this;
    }

    /**
     * @return yearlyByDayRecurrence
     */
    public function getYearlyByDayRecurrence()
    {
      return $this->yearlyByDayRecurrence;
    }

    /**
     * @param yearlyByDayRecurrence $yearlyByDayRecurrence
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setYearlyByDayRecurrence($yearlyByDayRecurrence)
    {
      $this->yearlyByDayRecurrence = $yearlyByDayRecurrence;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextScheduledDateTime()
    {
      if ($this->nextScheduledDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->nextScheduledDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $nextScheduledDateTime
     * @return \Selligent\MessageStudio\recurrence
     */
    public function setNextScheduledDateTime(\DateTime $nextScheduledDateTime)
    {
      $this->nextScheduledDateTime = $nextScheduledDateTime->format(\DateTime::ATOM);
      return $this;
    }

}
