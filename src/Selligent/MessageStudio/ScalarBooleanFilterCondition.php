<?php

namespace Selligent\MessageStudio;

class ScalarBooleanFilterCondition extends BooleanFilterCondition
{

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @var FilterBooleanScalarOperator $operator
     */
    protected $operator = null;

    /**
     * @param boolean $value
     * @param FilterBooleanScalarOperator $operator
     */
    public function __construct($value, $operator)
    {
      $this->value = $value;
      $this->operator = $operator;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Selligent\MessageStudio\ScalarBooleanFilterCondition
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return FilterBooleanScalarOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param FilterBooleanScalarOperator $operator
     * @return \Selligent\MessageStudio\ScalarBooleanFilterCondition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
