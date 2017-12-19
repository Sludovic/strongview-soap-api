<?php

namespace Selligent\MessageStudio;

class CopyMailingRequest extends CopyRequest
{

    /**
     * @var MailingId $fromId
     */
    protected $fromId = null;

    /**
     * @param string $newName
     * @param MailingId $fromId
     */
    public function __construct($newName, $fromId)
    {
      parent::__construct($newName);
      $this->fromId = $fromId;
    }

    /**
     * @return MailingId
     */
    public function getFromId()
    {
      return $this->fromId;
    }

    /**
     * @param MailingId $fromId
     * @return \Selligent\MessageStudio\CopyMailingRequest
     */
    public function setFromId($fromId)
    {
      $this->fromId = $fromId;
      return $this;
    }

}
