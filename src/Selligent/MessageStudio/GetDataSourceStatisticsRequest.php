<?php

namespace Selligent\MessageStudio;

class GetDataSourceStatisticsRequest extends GetStatisticsRequest
{

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @param DataSourceId $dataSourceId
     */
    public function __construct($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
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
     * @return \Selligent\MessageStudio\GetDataSourceStatisticsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

}
