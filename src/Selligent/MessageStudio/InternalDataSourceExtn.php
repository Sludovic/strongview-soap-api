<?php

namespace Selligent\MessageStudio;

class InternalDataSourceExtn extends DataSource
{

    /**
     * @var DataSourceImportFrequency $importFrequency
     */
    protected $importFrequency = null;

    /**
     * @var string $startTime
     */
    protected $startTime = null;

    /**
     * @var int $hourlyInterval
     */
    protected $hourlyInterval = null;

    /**
     * @var DayOfWeek[] $weeklyDays
     */
    protected $weeklyDays = null;

    /**
     * @var DataSourceImportMode $importMode
     */
    protected $importMode = null;

    /**
     * @var boolean $useFTP
     */
    protected $useFTP = null;

    /**
     * @param string $name
     * @param boolean $useFTP
     */
    public function __construct($name, $useFTP)
    {
      parent::__construct($name);
      $this->useFTP = $useFTP;
    }

    /**
     * @return DataSourceImportFrequency
     */
    public function getImportFrequency()
    {
      return $this->importFrequency;
    }

    /**
     * @param DataSourceImportFrequency $importFrequency
     * @return \Selligent\MessageStudio\InternalDataSourceExtn
     */
    public function setImportFrequency($importFrequency)
    {
      $this->importFrequency = $importFrequency;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return \Selligent\MessageStudio\InternalDataSourceExtn
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getHourlyInterval()
    {
      return $this->hourlyInterval;
    }

    /**
     * @param int $hourlyInterval
     * @return \Selligent\MessageStudio\InternalDataSourceExtn
     */
    public function setHourlyInterval($hourlyInterval)
    {
      $this->hourlyInterval = $hourlyInterval;
      return $this;
    }

    /**
     * @return DayOfWeek[]
     */
    public function getWeeklyDays()
    {
      return $this->weeklyDays;
    }

    /**
     * @param DayOfWeek[] $weeklyDays
     * @return \Selligent\MessageStudio\InternalDataSourceExtn
     */
    public function setWeeklyDays(array $weeklyDays = null)
    {
      $this->weeklyDays = $weeklyDays;
      return $this;
    }

    /**
     * @return DataSourceImportMode
     */
    public function getImportMode()
    {
      return $this->importMode;
    }

    /**
     * @param DataSourceImportMode $importMode
     * @return \Selligent\MessageStudio\InternalDataSourceExtn
     */
    public function setImportMode($importMode)
    {
      $this->importMode = $importMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseFTP()
    {
      return $this->useFTP;
    }

    /**
     * @param boolean $useFTP
     * @return \Selligent\MessageStudio\InternalDataSourceExtn
     */
    public function setUseFTP($useFTP)
    {
      $this->useFTP = $useFTP;
      return $this;
    }

}
