<?php

namespace Selligent\MessageStudio;

class GetISFieldsRequest extends GetRecordsRequest
{

    /**
     * @var DataSourceType $dataSourceType
     */
    protected $dataSourceType = null;

    /**
     * @var DataSourceFieldType $fieldType
     */
    protected $fieldType = null;

    /**
     * @param DataSourceType $dataSourceType
     */
    public function __construct($dataSourceType)
    {
      $this->dataSourceType = $dataSourceType;
    }

    /**
     * @return DataSourceType
     */
    public function getDataSourceType()
    {
      return $this->dataSourceType;
    }

    /**
     * @param DataSourceType $dataSourceType
     * @return \Selligent\MessageStudio\GetISFieldsRequest
     */
    public function setDataSourceType($dataSourceType)
    {
      $this->dataSourceType = $dataSourceType;
      return $this;
    }

    /**
     * @return DataSourceFieldType
     */
    public function getFieldType()
    {
      return $this->fieldType;
    }

    /**
     * @param DataSourceFieldType $fieldType
     * @return \Selligent\MessageStudio\GetISFieldsRequest
     */
    public function setFieldType($fieldType)
    {
      $this->fieldType = $fieldType;
      return $this;
    }

}
