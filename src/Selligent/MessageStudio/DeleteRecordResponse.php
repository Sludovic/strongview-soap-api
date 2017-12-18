<?php

namespace Selligent\MessageStudio;

class DeleteRecordResponse extends Response
{

    /**
     * @var int $deletedRecordCount
     */
    protected $deletedRecordCount = null;

    /**
     * @param int $deletedRecordCount
     */
    public function __construct($deletedRecordCount)
    {
      $this->deletedRecordCount = $deletedRecordCount;
    }

    /**
     * @return int
     */
    public function getDeletedRecordCount()
    {
      return $this->deletedRecordCount;
    }

    /**
     * @param int $deletedRecordCount
     * @return \Selligent\MessageStudio\DeleteRecordResponse
     */
    public function setDeletedRecordCount($deletedRecordCount)
    {
      $this->deletedRecordCount = $deletedRecordCount;
      return $this;
    }

}
