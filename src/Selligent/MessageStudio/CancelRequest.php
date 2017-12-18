<?php

namespace Selligent\MessageStudio;

class CancelRequest
{

    /**
     * @var MailingId $mailingId
     */
    protected $mailingId = null;

    /**
     * @param MailingId $mailingId
     */
    public function __construct($mailingId)
    {
      $this->mailingId = $mailingId;
    }

    /**
     * @return MailingId
     */
    public function getMailingId()
    {
      return $this->mailingId;
    }

    /**
     * @param MailingId $mailingId
     * @return \Selligent\MessageStudio\CancelRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
