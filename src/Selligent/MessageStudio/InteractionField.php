<?php

namespace Selligent\MessageStudio;

class InteractionField
{

    /**
     * @var string $fieldName
     */
    protected $fieldName = null;

    /**
     * @var DataSourceFieldType $fieldType
     */
    protected $fieldType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return \Selligent\MessageStudio\InteractionField
     */
    public function setFieldName($fieldName)
    {
      $this->fieldName = $fieldName;
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
     * @return \Selligent\MessageStudio\InteractionField
     */
    public function setFieldType($fieldType)
    {
      $this->fieldType = $fieldType;
      return $this;
    }

}
