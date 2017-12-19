<?php

namespace Selligent\MessageStudio;

class CopySuppressionListRequest extends CopyRequest
{

    /**
     * @var SuppressionListId $fromId
     */
    protected $fromId = null;

    /**
     * @param string $newName
     * @param SuppressionListId $fromId
     */
    public function __construct($newName, $fromId)
    {
      parent::__construct($newName);
      $this->fromId = $fromId;
    }

    /**
     * @return SuppressionListId
     */
    public function getFromId()
    {
      return $this->fromId;
    }

    /**
     * @param SuppressionListId $fromId
     * @return \Selligent\MessageStudio\CopySuppressionListRequest
     */
    public function setFromId($fromId)
    {
      $this->fromId = $fromId;
      return $this;
    }

}
