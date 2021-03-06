<?php

namespace Selligent\MessageStudio;

class LoadRequest
{

    /**
     * @var BaseTransactionalMailingId $mailingId
     */
    protected $mailingId = null;

    /**
     * @param BaseTransactionalMailingId $mailingId
     */
    public function __construct($mailingId)
    {
      $this->mailingId = $mailingId;
    }

    /**
     * @return BaseTransactionalMailingId
     */
    public function getMailingId()
    {
      return $this->mailingId;
    }

    /**
     * @param BaseTransactionalMailingId $mailingId
     * @return \Selligent\MessageStudio\LoadRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
