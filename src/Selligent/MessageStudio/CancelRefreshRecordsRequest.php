<?php

namespace Selligent\MessageStudio;

class CancelRefreshRecordsRequest
{

    /**
     * @var ExternalDataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @param ExternalDataSourceId $dataSourceId
     */
    public function __construct($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
    }

    /**
     * @return ExternalDataSourceId
     */
    public function getDataSourceId()
    {
      return $this->dataSourceId;
    }

    /**
     * @param ExternalDataSourceId $dataSourceId
     * @return \Selligent\MessageStudio\CancelRefreshRecordsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

}
