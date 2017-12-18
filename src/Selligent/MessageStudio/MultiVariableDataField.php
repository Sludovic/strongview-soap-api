<?php

namespace Selligent\MessageStudio;

class MultiVariableDataField
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var DataSourceFieldType $type
     */
    protected $type = null;

    /**
     * @param string $name
     * @param DataSourceFieldType $type
     */
    public function __construct($name, $type)
    {
      $this->name = $name;
      $this->type = $type;
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
     * @return \Selligent\MessageStudio\MultiVariableDataField
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \Selligent\MessageStudio\MultiVariableDataField
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
