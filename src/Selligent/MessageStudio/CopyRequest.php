<?php

namespace Selligent\MessageStudio;

abstract class CopyRequest
{

    /**
     * @var string $newName
     */
    protected $newName = null;

    /**
     * @param string $newName
     */
    public function __construct($newName)
    {
      $this->newName = $newName;
    }

    /**
     * @return string
     */
    public function getNewName()
    {
      return $this->newName;
    }

    /**
     * @param string $newName
     * @return \Selligent\MessageStudio\CopyRequest
     */
    public function setNewName($newName)
    {
      $this->newName = $newName;
      return $this;
    }

}
