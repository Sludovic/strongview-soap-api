<?php

namespace Selligent\MessageStudio;

class GetDataSourceRecordsResponse extends GetRecordsResponse
{

    /**
     * @var DataSourceRecord[] $dataSourceRecord
     */
    protected $dataSourceRecord = null;

    
    public function __construct()
    {
    
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
     * @return \Selligent\MessageStudio\GetDataSourceRecordsResponse
     */
    public function setDataSourceRecord(array $dataSourceRecord = null)
    {
      $this->dataSourceRecord = $dataSourceRecord;
      return $this;
    }

}
