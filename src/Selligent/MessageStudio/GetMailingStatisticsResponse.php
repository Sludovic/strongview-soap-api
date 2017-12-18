<?php

namespace Selligent\MessageStudio;

class GetMailingStatisticsResponse extends GetStatisticsResponse
{

    /**
     * @var string $launchSerial
     */
    protected $launchSerial = null;

    /**
     * @var duration $elapsedTime
     */
    protected $elapsedTime = null;

    /**
     * @var \DateTime $launchTime
     */
    protected $launchTime = null;

    /**
     * @var \DateTime $completionTime
     */
    protected $completionTime = null;

    /**
     * @var int $deferred
     */
    protected $deferred = null;

    /**
     * @var int $delivered
     */
    protected $delivered = null;

    /**
     * @var int $failed
     */
    protected $failed = null;

    /**
     * @var int $invalid
     */
    protected $invalid = null;

    /**
     * @var int $sent
     */
    protected $sent = null;

    /**
     * @var int $targeted
     */
    protected $targeted = null;

    /**
     * @var int $totalClicks
     */
    protected $totalClicks = null;

    /**
     * @var int $totalComplaints
     */
    protected $totalComplaints = null;

    /**
     * @var int $totalOpens
     */
    protected $totalOpens = null;

    /**
     * @var int $totalUnsubscribes
     */
    protected $totalUnsubscribes = null;

    /**
     * @var int $uniqueClicks
     */
    protected $uniqueClicks = null;

    /**
     * @var int $uniqueComplaints
     */
    protected $uniqueComplaints = null;

    /**
     * @var int $uniqueOpens
     */
    protected $uniqueOpens = null;

    /**
     * @var int $uniqueUnsubscribes
     */
    protected $uniqueUnsubscribes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLaunchSerial()
    {
      return $this->launchSerial;
    }

    /**
     * @param string $launchSerial
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setLaunchSerial($launchSerial)
    {
      $this->launchSerial = $launchSerial;
      return $this;
    }

    /**
     * @return duration
     */
    public function getElapsedTime()
    {
      return $this->elapsedTime;
    }

    /**
     * @param duration $elapsedTime
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setElapsedTime($elapsedTime)
    {
      $this->elapsedTime = $elapsedTime;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLaunchTime()
    {
      if ($this->launchTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->launchTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $launchTime
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setLaunchTime(\DateTime $launchTime = null)
    {
      if ($launchTime == null) {
       $this->launchTime = null;
      } else {
        $this->launchTime = $launchTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCompletionTime()
    {
      if ($this->completionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->completionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $completionTime
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setCompletionTime(\DateTime $completionTime = null)
    {
      if ($completionTime == null) {
       $this->completionTime = null;
      } else {
        $this->completionTime = $completionTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getDeferred()
    {
      return $this->deferred;
    }

    /**
     * @param int $deferred
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setDeferred($deferred)
    {
      $this->deferred = $deferred;
      return $this;
    }

    /**
     * @return int
     */
    public function getDelivered()
    {
      return $this->delivered;
    }

    /**
     * @param int $delivered
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setDelivered($delivered)
    {
      $this->delivered = $delivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getFailed()
    {
      return $this->failed;
    }

    /**
     * @param int $failed
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setFailed($failed)
    {
      $this->failed = $failed;
      return $this;
    }

    /**
     * @return int
     */
    public function getInvalid()
    {
      return $this->invalid;
    }

    /**
     * @param int $invalid
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setInvalid($invalid)
    {
      $this->invalid = $invalid;
      return $this;
    }

    /**
     * @return int
     */
    public function getSent()
    {
      return $this->sent;
    }

    /**
     * @param int $sent
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setSent($sent)
    {
      $this->sent = $sent;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargeted()
    {
      return $this->targeted;
    }

    /**
     * @param int $targeted
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setTargeted($targeted)
    {
      $this->targeted = $targeted;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalClicks()
    {
      return $this->totalClicks;
    }

    /**
     * @param int $totalClicks
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setTotalClicks($totalClicks)
    {
      $this->totalClicks = $totalClicks;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalComplaints()
    {
      return $this->totalComplaints;
    }

    /**
     * @param int $totalComplaints
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setTotalComplaints($totalComplaints)
    {
      $this->totalComplaints = $totalComplaints;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalOpens()
    {
      return $this->totalOpens;
    }

    /**
     * @param int $totalOpens
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setTotalOpens($totalOpens)
    {
      $this->totalOpens = $totalOpens;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalUnsubscribes()
    {
      return $this->totalUnsubscribes;
    }

    /**
     * @param int $totalUnsubscribes
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setTotalUnsubscribes($totalUnsubscribes)
    {
      $this->totalUnsubscribes = $totalUnsubscribes;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueClicks()
    {
      return $this->uniqueClicks;
    }

    /**
     * @param int $uniqueClicks
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setUniqueClicks($uniqueClicks)
    {
      $this->uniqueClicks = $uniqueClicks;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueComplaints()
    {
      return $this->uniqueComplaints;
    }

    /**
     * @param int $uniqueComplaints
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setUniqueComplaints($uniqueComplaints)
    {
      $this->uniqueComplaints = $uniqueComplaints;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueOpens()
    {
      return $this->uniqueOpens;
    }

    /**
     * @param int $uniqueOpens
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setUniqueOpens($uniqueOpens)
    {
      $this->uniqueOpens = $uniqueOpens;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueUnsubscribes()
    {
      return $this->uniqueUnsubscribes;
    }

    /**
     * @param int $uniqueUnsubscribes
     * @return \Selligent\MessageStudio\GetMailingStatisticsResponse
     */
    public function setUniqueUnsubscribes($uniqueUnsubscribes)
    {
      $this->uniqueUnsubscribes = $uniqueUnsubscribes;
      return $this;
    }

}
