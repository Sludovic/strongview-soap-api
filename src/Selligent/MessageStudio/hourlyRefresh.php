<?php

namespace Selligent\MessageStudio;

class hourlyRefresh
{

    /**
     * @var HourlyInterval $interval
     */
    protected $interval = null;

    /**
     * @param HourlyInterval $interval
     */
    public function __construct($interval)
    {
      $this->interval = $interval;
    }

    /**
     * @return HourlyInterval
     */
    public function getInterval()
    {
      return $this->interval;
    }

    /**
     * @param HourlyInterval $interval
     * @return \Selligent\MessageStudio\hourlyRefresh
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
      return $this;
    }

}
