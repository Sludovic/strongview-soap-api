<?php

namespace Selligent\MessageStudio;

class CopyDataSourceRequest extends CopyRequest
{

    /**
     * @var InternalDataSourceId $fromId
     */
    protected $fromId = null;

    /**
     * @var ExtensionId $fromExtnId
     */
    protected $fromExtnId = null;

    /**
     * @param string $newName
     * @param InternalDataSourceId $fromId
     * @param ExtensionId $fromExtnId
     */
    public function __construct($newName, $fromId, $fromExtnId)
    {
      parent::__construct($newName);
      $this->fromId = $fromId;
      $this->fromExtnId = $fromExtnId;
    }

    /**
     * @return InternalDataSourceId
     */
    public function getFromId()
    {
      return $this->fromId;
    }

    /**
     * @param InternalDataSourceId $fromId
     * @return \Selligent\MessageStudio\CopyDataSourceRequest
     */
    public function setFromId($fromId)
    {
      $this->fromId = $fromId;
      return $this;
    }

    /**
     * @return ExtensionId
     */
    public function getFromExtnId()
    {
      return $this->fromExtnId;
    }

    /**
     * @param ExtensionId $fromExtnId
     * @return \Selligent\MessageStudio\CopyDataSourceRequest
     */
    public function setFromExtnId($fromExtnId)
    {
      $this->fromExtnId = $fromExtnId;
      return $this;
    }

}
