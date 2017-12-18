<?php

namespace Selligent\MessageStudio;

class CopyTargetRequest extends CopyRequest
{

    /**
     * @var TargetId $fromId
     */
    protected $fromId = null;

    /**
     * @param string $newName
     * @param TargetId $fromId
     */
    public function __construct($newName, $fromId)
    {
      parent::__construct($newName);
      $this->fromId = $fromId;
    }

    /**
     * @return TargetId
     */
    public function getFromId()
    {
      return $this->fromId;
    }

    /**
     * @param TargetId $fromId
     * @return \Selligent\MessageStudio\CopyTargetRequest
     */
    public function setFromId($fromId)
    {
      $this->fromId = $fromId;
      return $this;
    }

}
