<?php

namespace Selligent\MessageStudio;

class GetResponse extends Response
{

    /**
     * @var BaseObject $baseObject
     */
    protected $baseObject = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BaseObject
     */
    public function getBaseObject()
    {
      return $this->baseObject;
    }

    /**
     * @param BaseObject $baseObject
     * @return \Selligent\MessageStudio\GetResponse
     */
    public function setBaseObject($baseObject)
    {
      $this->baseObject = $baseObject;
      return $this;
    }

}
