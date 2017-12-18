<?php

namespace Selligent\MessageStudio;

class FtpImport extends RecurringImport
{

    /**
     * @var string $fileNamePrefix
     */
    protected $fileNamePrefix = null;

    /**
     * @var string $fileNameSuffix
     */
    protected $fileNameSuffix = null;

    /**
     * @param string $name
     * @param InternalDataSourceId $importTo
     * @param string $fileNamePrefix
     * @param string $fileNameSuffix
     */
    public function __construct($name, $importTo, $fileNamePrefix, $fileNameSuffix)
    {
      parent::__construct($name, $importTo);
      $this->fileNamePrefix = $fileNamePrefix;
      $this->fileNameSuffix = $fileNameSuffix;
    }

    /**
     * @return string
     */
    public function getFileNamePrefix()
    {
      return $this->fileNamePrefix;
    }

    /**
     * @param string $fileNamePrefix
     * @return \Selligent\MessageStudio\FtpImport
     */
    public function setFileNamePrefix($fileNamePrefix)
    {
      $this->fileNamePrefix = $fileNamePrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileNameSuffix()
    {
      return $this->fileNameSuffix;
    }

    /**
     * @param string $fileNameSuffix
     * @return \Selligent\MessageStudio\FtpImport
     */
    public function setFileNameSuffix($fileNameSuffix)
    {
      $this->fileNameSuffix = $fileNameSuffix;
      return $this;
    }

}
