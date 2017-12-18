<?php

namespace Selligent\MessageStudio;

class ScalarStringFilterCondition extends StringFilterCondition
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var FilterStringScalarOperator $operator
     */
    protected $operator = null;

    /**
     * @param string $value
     * @param FilterStringScalarOperator $operator
     */
    public function __construct($value, $operator)
    {
      $this->value = $value;
      $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Selligent\MessageStudio\ScalarStringFilterCondition
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return FilterStringScalarOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param FilterStringScalarOperator $operator
     * @return \Selligent\MessageStudio\ScalarStringFilterCondition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
