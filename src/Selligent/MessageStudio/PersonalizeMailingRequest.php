<?php

namespace Selligent\MessageStudio;

class PersonalizeMailingRequest extends PersonalizeRequest
{

    /**
     * @var MailingId $mailingId
     */
    protected $mailingId = null;

    /**
     * @param MessageFormat[] $messageFormat
     * @param boolean $useMultiPart
     */
    public function __construct(array $messageFormat, $useMultiPart)
    {
      parent::__construct($messageFormat, $useMultiPart);
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
     * @return \Selligent\MessageStudio\PersonalizeMailingRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
