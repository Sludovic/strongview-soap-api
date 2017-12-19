<?php

namespace Selligent\MessageStudio;

class OrganizationFilter extends BaseFilter
{

    /**
     * @var ScalarStringFilterCondition $nameCondition
     */
    protected $nameCondition = null;

    /**
     * @var ScalarIdFilterCondition $parentIdCondition
     */
    protected $parentIdCondition = null;

    /**
     * @var OrganizationOrderBy[] $orderBy
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
     * @return \Selligent\MessageStudio\OrganizationFilter
     */
    public function setNameCondition($nameCondition)
    {
      $this->nameCondition = $nameCondition;
      return $this;
    }

    /**
     * @return ScalarIdFilterCondition
     */
    public function getParentIdCondition()
    {
      return $this->parentIdCondition;
    }

    /**
     * @param ScalarIdFilterCondition $parentIdCondition
     * @return \Selligent\MessageStudio\OrganizationFilter
     */
    public function setParentIdCondition($parentIdCondition)
    {
      $this->parentIdCondition = $parentIdCondition;
      return $this;
    }

    /**
     * @return OrganizationOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param OrganizationOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\OrganizationFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
