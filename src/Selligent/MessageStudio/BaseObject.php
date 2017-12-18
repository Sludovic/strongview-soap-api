<?php

namespace Selligent\MessageStudio;

abstract class BaseObject
{

    /**
     * @var \DateTime $modifiedTime
     */
    protected $modifiedTime = null;

    /**
     * @var ObjectId $objectId
     */
    protected $objectId = null;

    /**
     * @var int $version
     */
    protected $version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getModifiedTime()
    {
      if ($this->modifiedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modifiedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modifiedTime
     * @return \Selligent\MessageStudio\BaseObject
     */
    public function setModifiedTime(\DateTime $modifiedTime = null)
    {
      if ($modifiedTime == null) {
       $this->modifiedTime = null;
      } else {
        $this->modifiedTime = $modifiedTime->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \Selligent\MessageStudio\BaseObject
     */
    public function setObjectId($objectId)
    {
      $this->objectId = $objectId;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param int $version
     * @return \Selligent\MessageStudio\BaseObject
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
