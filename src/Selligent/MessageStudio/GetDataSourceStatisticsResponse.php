<?php

namespace Selligent\MessageStudio;

class GetDataSourceStatisticsResponse extends GetStatisticsResponse
{

    /**
     * @var int $totalInvalidRecords
     */
    protected $totalInvalidRecords = null;

    /**
     * @var int $totalMalformedRecords
     */
    protected $totalMalformedRecords = null;

    /**
     * @var int $totalRecords
     */
    protected $totalRecords = null;

    /**
     * @var int $totalUnsubscribedRecords
     */
    protected $totalUnsubscribedRecords = null;

    /**
     * @var \DateTime $lastRefresh
     */
    protected $lastRefresh = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getTotalInvalidRecords()
    {
      return $this->totalInvalidRecords;
    }

    /**
     * @param int $totalInvalidRecords
     * @return \Selligent\MessageStudio\GetDataSourceStatisticsResponse
     */
    public function setTotalInvalidRecords($totalInvalidRecords)
    {
      $this->totalInvalidRecords = $totalInvalidRecords;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalMalformedRecords()
    {
      return $this->totalMalformedRecords;
    }

    /**
     * @param int $totalMalformedRecords
     * @return \Selligent\MessageStudio\GetDataSourceStatisticsResponse
     */
    public function setTotalMalformedRecords($totalMalformedRecords)
    {
      $this->totalMalformedRecords = $totalMalformedRecords;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecords()
    {
      return $this->totalRecords;
    }

    /**
     * @param int $totalRecords
     * @return \Selligent\MessageStudio\GetDataSourceStatisticsResponse
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalUnsubscribedRecords()
    {
      return $this->totalUnsubscribedRecords;
    }

    /**
     * @param int $totalUnsubscribedRecords
     * @return \Selligent\MessageStudio\GetDataSourceStatisticsResponse
     */
    public function setTotalUnsubscribedRecords($totalUnsubscribedRecords)
    {
      $this->totalUnsubscribedRecords = $totalUnsubscribedRecords;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastRefresh()
    {
      if ($this->lastRefresh == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastRefresh);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastRefresh
     * @return \Selligent\MessageStudio\GetDataSourceStatisticsResponse
     */
    public function setLastRefresh(\DateTime $lastRefresh = null)
    {
      if ($lastRefresh == null) {
       $this->lastRefresh = null;
      } else {
        $this->lastRefresh = $lastRefresh->format(\DateTime::ATOM);
      }
      return $this;
    }

}
