<?php

namespace Selligent\MessageStudio;

class CatalogField
{

    /**
     * @var CatalogId $catalogId
     */
    protected $catalogId = null;

    /**
     * @var string[] $mappingFieldName
     */
    protected $mappingFieldName = null;

    /**
     * @param CatalogId $catalogId
     * @param string[] $mappingFieldName
     */
    public function __construct($catalogId, array $mappingFieldName)
    {
      $this->catalogId = $catalogId;
      $this->mappingFieldName = $mappingFieldName;
    }

    /**
     * @return CatalogId
     */
    public function getCatalogId()
    {
      return $this->catalogId;
    }

    /**
     * @param CatalogId $catalogId
     * @return \Selligent\MessageStudio\CatalogField
     */
    public function setCatalogId($catalogId)
    {
      $this->catalogId = $catalogId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getMappingFieldName()
    {
      return $this->mappingFieldName;
    }

    /**
     * @param string[] $mappingFieldName
     * @return \Selligent\MessageStudio\CatalogField
     */
    public function setMappingFieldName(array $mappingFieldName)
    {
      $this->mappingFieldName = $mappingFieldName;
      return $this;
    }

}
