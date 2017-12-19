<?php

namespace Selligent\MessageStudio;

abstract class BaseFilter
{

    /**
     * @var boolean $isAscending
     */
    protected $isAscending = null;

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @var int $recordsPerPage
     */
    protected $recordsPerPage = null;

    /**
     * @var int $maxRecordsPerPage
     */
    protected $maxRecordsPerPage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIsAscending()
    {
      return $this->isAscending;
    }

    /**
     * @param boolean $isAscending
     * @return \Selligent\MessageStudio\BaseFilter
     */
    public function setIsAscending($isAscending)
    {
      $this->isAscending = $isAscending;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return \Selligent\MessageStudio\BaseFilter
     */
    public function setPageNumber($pageNumber)
    {
      $this->pageNumber = $pageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecordsPerPage()
    {
      return $this->recordsPerPage;
    }

    /**
     * @param int $recordsPerPage
     * @return \Selligent\MessageStudio\BaseFilter
     */
    public function setRecordsPerPage($recordsPerPage)
    {
      $this->recordsPerPage = $recordsPerPage;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxRecordsPerPage()
    {
      return $this->maxRecordsPerPage;
    }

    /**
     * @param int $maxRecordsPerPage
     * @return \Selligent\MessageStudio\BaseFilter
     */
    public function setMaxRecordsPerPage($maxRecordsPerPage)
    {
      $this->maxRecordsPerPage = $maxRecordsPerPage;
      return $this;
    }

}
