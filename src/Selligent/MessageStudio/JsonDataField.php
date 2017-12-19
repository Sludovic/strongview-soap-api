<?php

namespace Selligent\MessageStudio;

class JsonDataField
{

    /**
     * @var DelimitedDataField $delimitedField
     */
    protected $delimitedField = null;

    /**
     * @var MultiVariableDataField[] $multiField
     */
    protected $multiField = null;

    /**
     * @param DelimitedDataField $delimitedField
     * @param MultiVariableDataField[] $multiField
     */
    public function __construct($delimitedField, array $multiField)
    {
      $this->delimitedField = $delimitedField;
      $this->multiField = $multiField;
    }

    /**
     * @return DelimitedDataField
     */
    public function getDelimitedField()
    {
      return $this->delimitedField;
    }

    /**
     * @param DelimitedDataField $delimitedField
     * @return \Selligent\MessageStudio\JsonDataField
     */
    public function setDelimitedField($delimitedField)
    {
      $this->delimitedField = $delimitedField;
      return $this;
    }

    /**
     * @return MultiVariableDataField[]
     */
    public function getMultiField()
    {
      return $this->multiField;
    }

    /**
     * @param MultiVariableDataField[] $multiField
     * @return \Selligent\MessageStudio\JsonDataField
     */
    public function setMultiField(array $multiField)
    {
      $this->multiField = $multiField;
      return $this;
    }

}
