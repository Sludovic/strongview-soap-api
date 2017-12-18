<?php

namespace Selligent\MessageStudio;

class ExternalDataSource extends DataSource
{

    /**
     * @var connectionParameters $connectionParameters
     */
    protected $connectionParameters = null;

    /**
     * @var jdbcParameters $jdbcParameters
     */
    protected $jdbcParameters = null;

    /**
     * @var boolean $enableLocalCopy
     */
    protected $enableLocalCopy = null;

    /**
     * @var string $tableName
     */
    protected $tableName = null;

    /**
     * @var boolean $allowRefreshAtLaunchTime
     */
    protected $allowRefreshAtLaunchTime = null;

    /**
     * @var hourlyRefresh $hourlyRefresh
     */
    protected $hourlyRefresh = null;

    /**
     * @var dailyRefresh $dailyRefresh
     */
    protected $dailyRefresh = null;

    /**
     * @var weeklyRefresh $weeklyRefresh
     */
    protected $weeklyRefresh = null;

    /**
     * @var string $writebackTable
     */
    protected $writebackTable = null;

    /**
     * @var string $advancedQuery
     */
    protected $advancedQuery = null;

    /**
     * @var string $sourceTableName
     */
    protected $sourceTableName = null;

    /**
     * @param string $name
     * @param connectionParameters $connectionParameters
     * @param jdbcParameters $jdbcParameters
     * @param boolean $enableLocalCopy
     * @param string $tableName
     * @param boolean $allowRefreshAtLaunchTime
     * @param hourlyRefresh $hourlyRefresh
     * @param dailyRefresh $dailyRefresh
     * @param weeklyRefresh $weeklyRefresh
     * @param string $advancedQuery
     * @param string $sourceTableName
     */
    public function __construct($name, $connectionParameters, $jdbcParameters, $enableLocalCopy, $tableName, $allowRefreshAtLaunchTime, $hourlyRefresh, $dailyRefresh, $weeklyRefresh, $advancedQuery, $sourceTableName)
    {
      parent::__construct($name);
      $this->connectionParameters = $connectionParameters;
      $this->jdbcParameters = $jdbcParameters;
      $this->enableLocalCopy = $enableLocalCopy;
      $this->tableName = $tableName;
      $this->allowRefreshAtLaunchTime = $allowRefreshAtLaunchTime;
      $this->hourlyRefresh = $hourlyRefresh;
      $this->dailyRefresh = $dailyRefresh;
      $this->weeklyRefresh = $weeklyRefresh;
      $this->advancedQuery = $advancedQuery;
      $this->sourceTableName = $sourceTableName;
    }

    /**
     * @return connectionParameters
     */
    public function getConnectionParameters()
    {
      return $this->connectionParameters;
    }

    /**
     * @param connectionParameters $connectionParameters
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setConnectionParameters($connectionParameters)
    {
      $this->connectionParameters = $connectionParameters;
      return $this;
    }

    /**
     * @return jdbcParameters
     */
    public function getJdbcParameters()
    {
      return $this->jdbcParameters;
    }

    /**
     * @param jdbcParameters $jdbcParameters
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setJdbcParameters($jdbcParameters)
    {
      $this->jdbcParameters = $jdbcParameters;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableLocalCopy()
    {
      return $this->enableLocalCopy;
    }

    /**
     * @param boolean $enableLocalCopy
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setEnableLocalCopy($enableLocalCopy)
    {
      $this->enableLocalCopy = $enableLocalCopy;
      return $this;
    }

    /**
     * @return string
     */
    public function getTableName()
    {
      return $this->tableName;
    }

    /**
     * @param string $tableName
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setTableName($tableName)
    {
      $this->tableName = $tableName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowRefreshAtLaunchTime()
    {
      return $this->allowRefreshAtLaunchTime;
    }

    /**
     * @param boolean $allowRefreshAtLaunchTime
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setAllowRefreshAtLaunchTime($allowRefreshAtLaunchTime)
    {
      $this->allowRefreshAtLaunchTime = $allowRefreshAtLaunchTime;
      return $this;
    }

    /**
     * @return hourlyRefresh
     */
    public function getHourlyRefresh()
    {
      return $this->hourlyRefresh;
    }

    /**
     * @param hourlyRefresh $hourlyRefresh
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setHourlyRefresh($hourlyRefresh)
    {
      $this->hourlyRefresh = $hourlyRefresh;
      return $this;
    }

    /**
     * @return dailyRefresh
     */
    public function getDailyRefresh()
    {
      return $this->dailyRefresh;
    }

    /**
     * @param dailyRefresh $dailyRefresh
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setDailyRefresh($dailyRefresh)
    {
      $this->dailyRefresh = $dailyRefresh;
      return $this;
    }

    /**
     * @return weeklyRefresh
     */
    public function getWeeklyRefresh()
    {
      return $this->weeklyRefresh;
    }

    /**
     * @param weeklyRefresh $weeklyRefresh
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setWeeklyRefresh($weeklyRefresh)
    {
      $this->weeklyRefresh = $weeklyRefresh;
      return $this;
    }

    /**
     * @return string
     */
    public function getWritebackTable()
    {
      return $this->writebackTable;
    }

    /**
     * @param string $writebackTable
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setWritebackTable($writebackTable)
    {
      $this->writebackTable = $writebackTable;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvancedQuery()
    {
      return $this->advancedQuery;
    }

    /**
     * @param string $advancedQuery
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setAdvancedQuery($advancedQuery)
    {
      $this->advancedQuery = $advancedQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceTableName()
    {
      return $this->sourceTableName;
    }

    /**
     * @param string $sourceTableName
     * @return \Selligent\MessageStudio\ExternalDataSource
     */
    public function setSourceTableName($sourceTableName)
    {
      $this->sourceTableName = $sourceTableName;
      return $this;
    }

}
