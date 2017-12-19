<?php

namespace Selligent\MessageStudio;

class ScalarIdFilterCondition extends IdFilterCondition
{

    /**
     * @var ObjectId $value
     */
    protected $value = null;

    /**
     * @var FilterIdScalarOperator $operator
     */
    protected $operator = null;

    /**
     * @param ObjectId $value
     * @param FilterIdScalarOperator $operator
     */
    public function __construct($value, $operator)
    {
      $this->value = $value;
      $this->operator = $operator;
    }

    /**
     * @return ObjectId
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param ObjectId $value
     * @return \Selligent\MessageStudio\ScalarIdFilterCondition
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return FilterIdScalarOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param FilterIdScalarOperator $operator
     * @return \Selligent\MessageStudio\ScalarIdFilterCondition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
