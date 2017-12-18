<?php

namespace Selligent\MessageStudio;

class LaunchRequest
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
     * @return \Selligent\MessageStudio\LaunchRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
