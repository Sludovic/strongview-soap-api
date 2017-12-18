<?php

namespace Selligent\MessageStudio;

class ListResponse extends Response
{

    /**
     * @var ObjectId[] $objectId
     */
    protected $objectId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ObjectId[]
     */
    public function getObjectId()
    {
      return $this->objectId;
    }

    /**
     * @param ObjectId[] $objectId
     * @return \Selligent\MessageStudio\ListResponse
     */
    public function setObjectId(array $objectId = null)
    {
      $this->objectId = $objectId;
      return $this;
    }

}
