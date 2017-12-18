<?php

namespace Selligent\MessageStudio;

class GetRecurringImportStatusRequest
{

    /**
     * @var InternalDataSourceId $internalDataSourceId
     */
    protected $internalDataSourceId = null;

    /**
     * @var ExtensionId $extensionId
     */
    protected $extensionId = null;

    /**
     * @param InternalDataSourceId $internalDataSourceId
     * @param ExtensionId $extensionId
     */
    public function __construct($internalDataSourceId, $extensionId)
    {
      $this->internalDataSourceId = $internalDataSourceId;
      $this->extensionId = $extensionId;
    }

    /**
     * @return InternalDataSourceId
     */
    public function getInternalDataSourceId()
    {
      return $this->internalDataSourceId;
    }

    /**
     * @param InternalDataSourceId $internalDataSourceId
     * @return \Selligent\MessageStudio\GetRecurringImportStatusRequest
     */
    public function setInternalDataSourceId($internalDataSourceId)
    {
      $this->internalDataSourceId = $internalDataSourceId;
      return $this;
    }

    /**
     * @return ExtensionId
     */
    public function getExtensionId()
    {
      return $this->extensionId;
    }

    /**
     * @param ExtensionId $extensionId
     * @return \Selligent\MessageStudio\GetRecurringImportStatusRequest
     */
    public function setExtensionId($extensionId)
    {
      $this->extensionId = $extensionId;
      return $this;
    }

}
