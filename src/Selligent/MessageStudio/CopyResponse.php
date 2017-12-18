<?php

namespace Selligent\MessageStudio;

class CopyResponse extends Response
{

    /**
     * @var ObjectId $objectId
     */
    protected $objectId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ObjectId
     */
    public function getObjectId()
    {
      return $this->objectId;
    }

    /**
     * @param ObjectId $objectId
     * @return \Selligent\MessageStudio\CopyResponse
     */
    public function setObjectId($objectId)
    {
      $this->objectId = $objectId;
      return $this;
    }

}
