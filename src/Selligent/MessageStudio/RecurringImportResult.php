<?php

namespace Selligent\MessageStudio;

class RecurringImportResult
{

    /**
     * @var RecurringImportType $importType
     */
    protected $importType = null;

    /**
     * @var string $importFrom
     */
    protected $importFrom = null;

    /**
     * @var RecurringImportStatus $status
     */
    protected $status = null;

    /**
     * @var \DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @var \DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @var int $recordsAdded
     */
    protected $recordsAdded = null;

    /**
     * @var int $recordsUpdated
     */
    protected $recordsUpdated = null;

    /**
     * @var int $recordsMalformed
     */
    protected $recordsMalformed = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @param RecurringImportType $importType
     * @param RecurringImportStatus $status
     * @param \DateTime $startTime
     * @param int $recordsAdded
     * @param int $recordsUpdated
     * @param int $recordsMalformed
     */
    public function __construct($importType, $status, \DateTime $startTime, $recordsAdded, $recordsUpdated, $recordsMalformed)
    {
      $this->importType = $importType;
      $this->status = $status;
      $this->startTime = $startTime->format(\DateTime::ATOM);
      $this->recordsAdded = $recordsAdded;
      $this->recordsUpdated = $recordsUpdated;
      $this->recordsMalformed = $recordsMalformed;
    }

    /**
     * @return RecurringImportType
     */
    public function getImportType()
    {
      return $this->importType;
    }

    /**
     * @param RecurringImportType $importType
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setImportType($importType)
    {
      $this->importType = $importType;
      return $this;
    }

    /**
     * @return string
     */
    public function getImportFrom()
    {
      return $this->importFrom;
    }

    /**
     * @param string $importFrom
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setImportFrom($importFrom)
    {
      $this->importFrom = $importFrom;
      return $this;
    }

    /**
     * @return RecurringImportStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param RecurringImportStatus $status
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->startTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startTime
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setStartTime(\DateTime $startTime)
    {
      $this->startTime = $startTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->endTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endTime
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setEndTime(\DateTime $endTime = null)
    {
      if ($endTime == null) {
       $this->endTime = null;
      } else {
        $this->endTime = $endTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getRecordsAdded()
    {
      return $this->recordsAdded;
    }

    /**
     * @param int $recordsAdded
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setRecordsAdded($recordsAdded)
    {
      $this->recordsAdded = $recordsAdded;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecordsUpdated()
    {
      return $this->recordsUpdated;
    }

    /**
     * @param int $recordsUpdated
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setRecordsUpdated($recordsUpdated)
    {
      $this->recordsUpdated = $recordsUpdated;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecordsMalformed()
    {
      return $this->recordsMalformed;
    }

    /**
     * @param int $recordsMalformed
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setRecordsMalformed($recordsMalformed)
    {
      $this->recordsMalformed = $recordsMalformed;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \Selligent\MessageStudio\RecurringImportResult
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

}
