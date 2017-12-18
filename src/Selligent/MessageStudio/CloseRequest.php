<?php

namespace Selligent\MessageStudio;

class CloseRequest
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
     * @return \Selligent\MessageStudio\CloseRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
