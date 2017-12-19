<?php

namespace Selligent\MessageStudio;

class CreateRequest
{

    /**
     * @var BaseObject[] $baseObject
     */
    protected $baseObject = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BaseObject[]
     */
    public function getBaseObject()
    {
      return $this->baseObject;
    }

    /**
     * @param BaseObject[] $baseObject
     * @return \Selligent\MessageStudio\CreateRequest
     */
    public function setBaseObject(array $baseObject = null)
    {
      $this->baseObject = $baseObject;
      return $this;
    }

}
