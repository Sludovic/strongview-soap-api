<?php

namespace Selligent\MessageStudio;

class ScalarIntegerFilterCondition extends IntegerFilterCondition
{

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @var FilterIntegerScalarOperator $operator
     */
    protected $operator = null;

    /**
     * @param int $value
     * @param FilterIntegerScalarOperator $operator
     */
    public function __construct($value, $operator)
    {
      $this->value = $value;
      $this->operator = $operator;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return \Selligent\MessageStudio\ScalarIntegerFilterCondition
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return FilterIntegerScalarOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param FilterIntegerScalarOperator $operator
     * @return \Selligent\MessageStudio\ScalarIntegerFilterCondition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
