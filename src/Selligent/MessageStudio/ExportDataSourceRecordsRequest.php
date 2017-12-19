<?php

namespace Selligent\MessageStudio;

class ExportDataSourceRecordsRequest extends ExportRecordsRequest
{

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var boolean $useMalformedRecords
     */
    protected $useMalformedRecords = null;

    /**
     * @var string $fieldDelimiter
     */
    protected $fieldDelimiter = null;

    /**
     * @var string $rowDelimiter
     */
    protected $rowDelimiter = null;

    /**
     * @param DataSourceId $dataSourceId
     * @param boolean $useMalformedRecords
     * @param string $fieldDelimiter
     * @param string $rowDelimiter
     */
    public function __construct($dataSourceId, $useMalformedRecords, $fieldDelimiter, $rowDelimiter)
    {
      $this->dataSourceId = $dataSourceId;
      $this->useMalformedRecords = $useMalformedRecords;
      $this->fieldDelimiter = $fieldDelimiter;
      $this->rowDelimiter = $rowDelimiter;
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
     * @return \Selligent\MessageStudio\ExportDataSourceRecordsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseMalformedRecords()
    {
      return $this->useMalformedRecords;
    }

    /**
     * @param boolean $useMalformedRecords
     * @return \Selligent\MessageStudio\ExportDataSourceRecordsRequest
     */
    public function setUseMalformedRecords($useMalformedRecords)
    {
      $this->useMalformedRecords = $useMalformedRecords;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldDelimiter()
    {
      return $this->fieldDelimiter;
    }

    /**
     * @param string $fieldDelimiter
     * @return \Selligent\MessageStudio\ExportDataSourceRecordsRequest
     */
    public function setFieldDelimiter($fieldDelimiter)
    {
      $this->fieldDelimiter = $fieldDelimiter;
      return $this;
    }

    /**
     * @return string
     */
    public function getRowDelimiter()
    {
      return $this->rowDelimiter;
    }

    /**
     * @param string $rowDelimiter
     * @return \Selligent\MessageStudio\ExportDataSourceRecordsRequest
     */
    public function setRowDelimiter($rowDelimiter)
    {
      $this->rowDelimiter = $rowDelimiter;
      return $this;
    }

}
