<?php

namespace Selligent\MessageStudio;

class CreateResponse extends Response
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
     * @return \Selligent\MessageStudio\CreateResponse
     */
    public function setObjectId($objectId)
    {
      $this->objectId = $objectId;
      return $this;
    }

}
