<?php

namespace Selligent\MessageStudio;

class RefreshRecordsRequest
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
     * @return \Selligent\MessageStudio\RefreshRecordsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

}
