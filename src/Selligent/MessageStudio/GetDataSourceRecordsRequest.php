<?php

namespace Selligent\MessageStudio;

class GetDataSourceRecordsRequest extends GetRecordsRequest
{

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var NameValuePair[] $matchFields
     */
    protected $matchFields = null;

    /**
     * @param DataSourceId $dataSourceId
     * @param NameValuePair[] $matchFields
     */
    public function __construct($dataSourceId, array $matchFields)
    {
      $this->dataSourceId = $dataSourceId;
      $this->matchFields = $matchFields;
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
     * @return \Selligent\MessageStudio\GetDataSourceRecordsRequest
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return NameValuePair[]
     */
    public function getMatchFields()
    {
      return $this->matchFields;
    }

    /**
     * @param NameValuePair[] $matchFields
     * @return \Selligent\MessageStudio\GetDataSourceRecordsRequest
     */
    public function setMatchFields(array $matchFields)
    {
      $this->matchFields = $matchFields;
      return $this;
    }

}
