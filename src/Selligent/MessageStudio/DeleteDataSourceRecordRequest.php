<?php

namespace Selligent\MessageStudio;

class DeleteDataSourceRecordRequest extends DeleteRecordRequest
{

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var string $primaryKeyFieldValue
     */
    protected $primaryKeyFieldValue = null;

    /**
     * @param DataSourceId $dataSourceId
     * @param string $primaryKeyFieldValue
     */
    public function __construct($dataSourceId, $primaryKeyFieldValue)
    {
      $this->dataSourceId = $dataSourceId;
      $this->primaryKeyFieldValue = $primaryKeyFieldValue;
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
     * @return \Selligent\MessageStudio\DeleteDataSourceRecordRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryKeyFieldValue()
    {
      return $this->primaryKeyFieldValue;
    }

    /**
     * @param string $primaryKeyFieldValue
     * @return \Selligent\MessageStudio\DeleteDataSourceRecordRequest
     */
    public function setPrimaryKeyFieldValue($primaryKeyFieldValue)
    {
      $this->primaryKeyFieldValue = $primaryKeyFieldValue;
      return $this;
    }

}
