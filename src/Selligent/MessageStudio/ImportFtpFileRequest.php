<?php

namespace Selligent\MessageStudio;

class ImportFtpFileRequest
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
     * @var string $ftpFileName
     */
    protected $ftpFileName = null;

    /**
     * @var ImportType $importMode
     */
    protected $importMode = null;

    /**
     * @param DataSourceId $dataSourceId
     * @param string $ftpFileName
     * @param ImportType $importMode
     */
    public function __construct($dataSourceId, $ftpFileName, $importMode)
    {
      $this->dataSourceId = $dataSourceId;
      $this->ftpFileName = $ftpFileName;
      $this->importMode = $importMode;
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
     * @return \Selligent\MessageStudio\ImportFtpFileRequest
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
     * @return \Selligent\MessageStudio\ImportFtpFileRequest
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
     * @return \Selligent\MessageStudio\ImportFtpFileRequest
     */
    public function setFieldDelimiter($fieldDelimiter)
    {
      $this->fieldDelimiter = $fieldDelimiter;
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
     * @return \Selligent\MessageStudio\ImportFtpFileRequest
     */
    public function setFtpFileName($ftpFileName)
    {
      $this->ftpFileName = $ftpFileName;
      return $this;
    }

    /**
     * @return ImportType
     */
    public function getImportMode()
    {
      return $this->importMode;
    }

    /**
     * @param ImportType $importMode
     * @return \Selligent\MessageStudio\ImportFtpFileRequest
     */
    public function setImportMode($importMode)
    {
      $this->importMode = $importMode;
      return $this;
    }

}
