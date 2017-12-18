<?php

namespace Selligent\MessageStudio;

class UserFilter extends BaseFilter
{

    /**
     * @var ScalarBooleanFilterCondition $isAdminCondition
     */
    protected $isAdminCondition = null;

    /**
     * @var ScalarStringFilterCondition $loginNameCondition
     */
    protected $loginNameCondition = null;

    /**
     * @var UserOrderBy[] $orderBy
     */
    protected $orderBy = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ScalarBooleanFilterCondition
     */
    public function getIsAdminCondition()
    {
      return $this->isAdminCondition;
    }

    /**
     * @param ScalarBooleanFilterCondition $isAdminCondition
     * @return \Selligent\MessageStudio\UserFilter
     */
    public function setIsAdminCondition($isAdminCondition)
    {
      $this->isAdminCondition = $isAdminCondition;
      return $this;
    }

    /**
     * @return ScalarStringFilterCondition
     */
    public function getLoginNameCondition()
    {
      return $this->loginNameCondition;
    }

    /**
     * @param ScalarStringFilterCondition $loginNameCondition
     * @return \Selligent\MessageStudio\UserFilter
     */
    public function setLoginNameCondition($loginNameCondition)
    {
      $this->loginNameCondition = $loginNameCondition;
      return $this;
    }

    /**
     * @return UserOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param UserOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\UserFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
