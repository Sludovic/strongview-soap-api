<?php

namespace Selligent\MessageStudio;

class GetAllEasByMailingIdRequest
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
     * @return \Selligent\MessageStudio\GetAllEasByMailingIdRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
