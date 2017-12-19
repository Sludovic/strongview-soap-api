<?php

namespace Selligent\MessageStudio;

class StrongtoolFilter extends BaseFilter
{

    /**
     * @var ScalarStringFilterCondition $nameCondition
     */
    protected $nameCondition = null;

    /**
     * @var ScalarStringFilterCondition $openAsCondition
     */
    protected $openAsCondition = null;

    /**
     * @var StrongtoolOrderBy[] $orderBy
     */
    protected $orderBy = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ScalarStringFilterCondition
     */
    public function getNameCondition()
    {
      return $this->nameCondition;
    }

    /**
     * @param ScalarStringFilterCondition $nameCondition
     * @return \Selligent\MessageStudio\StrongtoolFilter
     */
    public function setNameCondition($nameCondition)
    {
      $this->nameCondition = $nameCondition;
      return $this;
    }

    /**
     * @return ScalarStringFilterCondition
     */
    public function getOpenAsCondition()
    {
      return $this->openAsCondition;
    }

    /**
     * @param ScalarStringFilterCondition $openAsCondition
     * @return \Selligent\MessageStudio\StrongtoolFilter
     */
    public function setOpenAsCondition($openAsCondition)
    {
      $this->openAsCondition = $openAsCondition;
      return $this;
    }

    /**
     * @return StrongtoolOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param StrongtoolOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\StrongtoolFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
