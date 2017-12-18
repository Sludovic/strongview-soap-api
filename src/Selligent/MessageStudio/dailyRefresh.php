<?php

namespace Selligent\MessageStudio;

class dailyRefresh
{

    /**
     * @var time $startTime
     */
    protected $startTime = null;

    /**
     * @param time $startTime
     */
    public function __construct($startTime)
    {
      $this->startTime = $startTime;
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
     * @return \Selligent\MessageStudio\dailyRefresh
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

}
