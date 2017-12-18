<?php

namespace Selligent\MessageStudio;

class UpsertDataSourceRecordsRequest extends UpsertRecordsRequest
{

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var DataSourceRecord[] $dataSourceRecord
     */
    protected $dataSourceRecord = null;

    /**
     * @param DataSourceId $dataSourceId
     * @param DataSourceRecord[] $dataSourceRecord
     */
    public function __construct($dataSourceId, array $dataSourceRecord)
    {
      $this->dataSourceId = $dataSourceId;
      $this->dataSourceRecord = $dataSourceRecord;
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
     * @return \Selligent\MessageStudio\UpsertDataSourceRecordsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return DataSourceRecord[]
     */
    public function getDataSourceRecord()
    {
      return $this->dataSourceRecord;
    }

    /**
     * @param DataSourceRecord[] $dataSourceRecord
     * @return \Selligent\MessageStudio\UpsertDataSourceRecordsRequest
     */
    public function setDataSourceRecord(array $dataSourceRecord)
    {
      $this->dataSourceRecord = $dataSourceRecord;
      return $this;
    }

}
