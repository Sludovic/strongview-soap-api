<?php

namespace Selligent\MessageStudio;

class CopySeedListRequest extends CopyRequest
{

    /**
     * @var SeedListId $fromId
     */
    protected $fromId = null;

    /**
     * @param string $newName
     * @param SeedListId $fromId
     */
    public function __construct($newName, $fromId)
    {
      parent::__construct($newName);
      $this->fromId = $fromId;
    }

    /**
     * @return SeedListId
     */
    public function getFromId()
    {
      return $this->fromId;
    }

    /**
     * @param SeedListId $fromId
     * @return \Selligent\MessageStudio\CopySeedListRequest
     */
    public function setFromId($fromId)
    {
      $this->fromId = $fromId;
      return $this;
    }

}
