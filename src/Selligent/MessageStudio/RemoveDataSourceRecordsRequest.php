<?php

namespace Selligent\MessageStudio;

class RemoveDataSourceRecordsRequest extends RemoveRecordsRequest
{

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var string $matchFieldName
     */
    protected $matchFieldName = null;

    /**
     * @var string[] $record
     */
    protected $record = null;

    /**
     * @var base64Binary $recordsAttachment
     */
    protected $recordsAttachment = null;

    /**
     * @param DataSourceId $dataSourceId
     * @param string $matchFieldName
     * @param string[] $record
     * @param base64Binary $recordsAttachment
     */
    public function __construct($dataSourceId, $matchFieldName, array $record, $recordsAttachment)
    {
      $this->dataSourceId = $dataSourceId;
      $this->matchFieldName = $matchFieldName;
      $this->record = $record;
      $this->recordsAttachment = $recordsAttachment;
    }

    /**
     * @return DataSourceId
     */
    public function getDataSourceId()
    {
      return $this->dataSourceId;
    }

    /**
     * @param DataSourceId $dataSourceId
     * @return \Selligent\MessageStudio\RemoveDataSourceRecordsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchFieldName()
    {
      return $this->matchFieldName;
    }

    /**
     * @param string $matchFieldName
     * @return \Selligent\MessageStudio\RemoveDataSourceRecordsRequest
     */
    public function setMatchFieldName($matchFieldName)
    {
      $this->matchFieldName = $matchFieldName;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRecord()
    {
      return $this->record;
    }

    /**
     * @param string[] $record
     * @return \Selligent\MessageStudio\RemoveDataSourceRecordsRequest
     */
    public function setRecord(array $record)
    {
      $this->record = $record;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getRecordsAttachment()
    {
      return $this->recordsAttachment;
    }

    /**
     * @param base64Binary $recordsAttachment
     * @return \Selligent\MessageStudio\RemoveDataSourceRecordsRequest
     */
    public function setRecordsAttachment($recordsAttachment)
    {
      $this->recordsAttachment = $recordsAttachment;
      return $this;
    }

}
