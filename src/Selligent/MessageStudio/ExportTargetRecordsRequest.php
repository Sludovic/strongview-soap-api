<?php

namespace Selligent\MessageStudio;

class ExportTargetRecordsRequest extends ExportRecordsRequest
{

    /**
     * @var TargetId $targetId
     */
    protected $targetId = null;

    /**
     * @var string $fieldDelimiter
     */
    protected $fieldDelimiter = null;

    /**
     * @var string $rowDelimiter
     */
    protected $rowDelimiter = null;

    /**
     * @param TargetId $targetId
     * @param string $fieldDelimiter
     * @param string $rowDelimiter
     */
    public function __construct($targetId, $fieldDelimiter, $rowDelimiter)
    {
      $this->targetId = $targetId;
      $this->fieldDelimiter = $fieldDelimiter;
      $this->rowDelimiter = $rowDelimiter;
    }

    /**
     * @return TargetId
     */
    public function getTargetId()
    {
      return $this->targetId;
    }

    /**
     * @param TargetId $targetId
     * @return \Selligent\MessageStudio\ExportTargetRecordsRequest
     */
    public function setTargetId($targetId)
    {
      $this->targetId = $targetId;
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
     * @return \Selligent\MessageStudio\ExportTargetRecordsRequest
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
     * @return \Selligent\MessageStudio\ExportTargetRecordsRequest
     */
    public function setRowDelimiter($rowDelimiter)
    {
      $this->rowDelimiter = $rowDelimiter;
      return $this;
    }

}
