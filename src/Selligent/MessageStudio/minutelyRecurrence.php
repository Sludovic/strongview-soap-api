<?php

namespace Selligent\MessageStudio;

class minutelyRecurrence
{

    /**
     * @var MinutelyInterval $interval
     */
    protected $interval = null;

    /**
     * @param MinutelyInterval $interval
     */
    public function __construct($interval)
    {
      $this->interval = $interval;
    }

    /**
     * @return MinutelyInterval
     */
    public function getInterval()
    {
      return $this->interval;
    }

    /**
     * @param MinutelyInterval $interval
     * @return \Selligent\MessageStudio\minutelyRecurrence
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
      return $this;
    }

}
