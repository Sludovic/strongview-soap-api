<?php

namespace Selligent\MessageStudio;

class DelimitedDataField
{

    /**
     * @var DataSourceFieldType $type
     */
    protected $type = null;

    /**
     * @param DataSourceFieldType $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return DataSourceFieldType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param DataSourceFieldType $type
     * @return \Selligent\MessageStudio\DelimitedDataField
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
