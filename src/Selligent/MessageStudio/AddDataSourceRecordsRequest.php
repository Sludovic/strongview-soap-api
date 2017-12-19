<?php

namespace Selligent\MessageStudio;

class AddDataSourceRecordsRequest extends AddRecordsRequest
{

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var boolean $containsFieldNames
     */
    protected $containsFieldNames = null;

    /**
     * @var string $fieldDelimiter
     */
    protected $fieldDelimiter = null;

    /**
     * @var DataSourceRecord[] $dataSourceRecord
     */
    protected $dataSourceRecord = null;

    /**
     * @var string $ftpFileName
     */
    protected $ftpFileName = null;

    /**
     * @var base64Binary $dataSourceRecordsAttachment
     */
    protected $dataSourceRecordsAttachment = null;

    /**
     * @param DataSourceId $dataSourceId
     * @param DataSourceRecord[] $dataSourceRecord
     * @param string $ftpFileName
     * @param base64Binary $dataSourceRecordsAttachment
     */
    public function __construct($dataSourceId, array $dataSourceRecord, $ftpFileName, $dataSourceRecordsAttachment)
    {
      $this->dataSourceId = $dataSourceId;
      $this->dataSourceRecord = $dataSourceRecord;
      $this->ftpFileName = $ftpFileName;
      $this->dataSourceRecordsAttachment = $dataSourceRecordsAttachment;
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
     * @return \Selligent\MessageStudio\AddDataSourceRecordsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getContainsFieldNames()
    {
      return $this->containsFieldNames;
    }

    /**
     * @param boolean $containsFieldNames
     * @return \Selligent\MessageStudio\AddDataSourceRecordsRequest
     */
    public function setContainsFieldNames($containsFieldNames)
    {
      $this->containsFieldNames = $containsFieldNames;
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
     * @return \Selligent\MessageStudio\AddDataSourceRecordsRequest
     */
    public function setFieldDelimiter($fieldDelimiter)
    {
      $this->fieldDelimiter = $fieldDelimiter;
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
     * @return \Selligent\MessageStudio\AddDataSourceRecordsRequest
     */
    public function setDataSourceRecord(array $dataSourceRecord)
    {
      $this->dataSourceRecord = $dataSourceRecord;
      return $this;
    }

    /**
     * @return string
     */
    public function getFtpFileName()
    {
      return $this->ftpFileName;
    }

    /**
     * @param string $ftpFileName
     * @return \Selligent\MessageStudio\AddDataSourceRecordsRequest
     */
    public function setFtpFileName($ftpFileName)
    {
      $this->ftpFileName = $ftpFileName;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getDataSourceRecordsAttachment()
    {
      return $this->dataSourceRecordsAttachment;
    }

    /**
     * @param base64Binary $dataSourceRecordsAttachment
     * @return \Selligent\MessageStudio\AddDataSourceRecordsRequest
     */
    public function setDataSourceRecordsAttachment($dataSourceRecordsAttachment)
    {
      $this->dataSourceRecordsAttachment = $dataSourceRecordsAttachment;
      return $this;
    }

}
