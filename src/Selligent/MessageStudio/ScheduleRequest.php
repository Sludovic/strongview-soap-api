<?php

namespace Selligent\MessageStudio;

class ScheduleRequest
{

    /**
     * @var BaseStandardMailingId $mailingId
     */
    protected $mailingId = null;

    /**
     * @param BaseStandardMailingId $mailingId
     */
    public function __construct($mailingId)
    {
      $this->mailingId = $mailingId;
    }

    /**
     * @return BaseStandardMailingId
     */
    public function getMailingId()
    {
      return $this->mailingId;
    }

    /**
     * @param BaseStandardMailingId $mailingId
     * @return \Selligent\MessageStudio\ScheduleRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
