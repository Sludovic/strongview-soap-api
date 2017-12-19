<?php

namespace Selligent\MessageStudio;

class DedupeDataSourceRecordsRequest extends DedupeRecordsRequest
{

    /**
     * @var string[] $matchField
     */
    protected $matchField = null;

    /**
     * @var InternalDataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var ExtensionId $extensionId
     */
    protected $extensionId = null;

    /**
     * @var DataSourceDedupeOption $option
     */
    protected $option = null;

    /**
     * @param string[] $matchField
     * @param InternalDataSourceId $dataSourceId
     * @param ExtensionId $extensionId
     * @param DataSourceDedupeOption $option
     */
    public function __construct(array $matchField, $dataSourceId, $extensionId, $option)
    {
      $this->matchField = $matchField;
      $this->dataSourceId = $dataSourceId;
      $this->extensionId = $extensionId;
      $this->option = $option;
    }

    /**
     * @return string[]
     */
    public function getMatchField()
    {
      return $this->matchField;
    }

    /**
     * @param string[] $matchField
     * @return \Selligent\MessageStudio\DedupeDataSourceRecordsRequest
     */
    public function setMatchField(array $matchField)
    {
      $this->matchField = $matchField;
      return $this;
    }

    /**
     * @return InternalDataSourceId
     */
    public function getDataSourceId()
    {
      return $this->dataSourceId;
    }

    /**
     * @param InternalDataSourceId $dataSourceId
     * @return \Selligent\MessageStudio\DedupeDataSourceRecordsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
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
     * @return \Selligent\MessageStudio\DedupeDataSourceRecordsRequest
     */
    public function setExtensionId($extensionId)
    {
      $this->extensionId = $extensionId;
      return $this;
    }

    /**
     * @return DataSourceDedupeOption
     */
    public function getOption()
    {
      return $this->option;
    }

    /**
     * @param DataSourceDedupeOption $option
     * @return \Selligent\MessageStudio\DedupeDataSourceRecordsRequest
     */
    public function setOption($option)
    {
      $this->option = $option;
      return $this;
    }

}
