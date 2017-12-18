<?php

namespace Selligent\MessageStudio;

class DataSourceField
{

    /**
     * @var DataSourceDataType $dataType
     */
    protected $dataType = null;

    /**
     * @var DataSourceFieldType $fieldType
     */
    protected $fieldType = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $isPrimaryKey
     */
    protected $isPrimaryKey = null;

    /**
     * @var boolean $writebackEnabled
     */
    protected $writebackEnabled = null;

    /**
     * @var boolean $syncField
     */
    protected $syncField = null;

    /**
     * @var string $interactionFieldName
     */
    protected $interactionFieldName = null;

    /**
     * @var JsonDataField $jsonField
     */
    protected $jsonField = null;

    /**
     * @param DataSourceDataType $dataType
     * @param DataSourceFieldType $fieldType
     * @param string $name
     * @param boolean $isPrimaryKey
     * @param boolean $writebackEnabled
     */
    public function __construct($dataType, $fieldType, $name, $isPrimaryKey, $writebackEnabled)
    {
      $this->dataType = $dataType;
      $this->fieldType = $fieldType;
      $this->name = $name;
      $this->isPrimaryKey = $isPrimaryKey;
      $this->writebackEnabled = $writebackEnabled;
    }

    /**
     * @return DataSourceDataType
     */
    public function getDataType()
    {
      return $this->dataType;
    }

    /**
     * @param DataSourceDataType $dataType
     * @return \Selligent\MessageStudio\DataSourceField
     */
    public function setDataType($dataType)
    {
      $this->dataType = $dataType;
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
     * @return \Selligent\MessageStudio\DataSourceField
     */
    public function setFieldType($fieldType)
    {
      $this->fieldType = $fieldType;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Selligent\MessageStudio\DataSourceField
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimaryKey()
    {
      return $this->isPrimaryKey;
    }

    /**
     * @param boolean $isPrimaryKey
     * @return \Selligent\MessageStudio\DataSourceField
     */
    public function setIsPrimaryKey($isPrimaryKey)
    {
      $this->isPrimaryKey = $isPrimaryKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWritebackEnabled()
    {
      return $this->writebackEnabled;
    }

    /**
     * @param boolean $writebackEnabled
     * @return \Selligent\MessageStudio\DataSourceField
     */
    public function setWritebackEnabled($writebackEnabled)
    {
      $this->writebackEnabled = $writebackEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSyncField()
    {
      return $this->syncField;
    }

    /**
     * @param boolean $syncField
     * @return \Selligent\MessageStudio\DataSourceField
     */
    public function setSyncField($syncField)
    {
      $this->syncField = $syncField;
      return $this;
    }

    /**
     * @return string
     */
    public function getInteractionFieldName()
    {
      return $this->interactionFieldName;
    }

    /**
     * @param string $interactionFieldName
     * @return \Selligent\MessageStudio\DataSourceField
     */
    public function setInteractionFieldName($interactionFieldName)
    {
      $this->interactionFieldName = $interactionFieldName;
      return $this;
    }

    /**
     * @return JsonDataField
     */
    public function getJsonField()
    {
      return $this->jsonField;
    }

    /**
     * @param JsonDataField $jsonField
     * @return \Selligent\MessageStudio\DataSourceField
     */
    public function setJsonField($jsonField)
    {
      $this->jsonField = $jsonField;
      return $this;
    }

}
