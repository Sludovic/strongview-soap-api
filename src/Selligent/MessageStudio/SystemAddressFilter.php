<?php

namespace Selligent\MessageStudio;

class SystemAddressFilter extends BaseFilter
{

    /**
     * @var ScalarStringFilterCondition $typeCondition
     */
    protected $typeCondition = null;

    /**
     * @var ScalarIdFilterCondition $userIdCondition
     */
    protected $userIdCondition = null;

    /**
     * @var SystemAddressOrderBy[] $orderBy
     */
    protected $orderBy = null;

    /**
     * @param ScalarStringFilterCondition $typeCondition
     */
    public function __construct($typeCondition)
    {
      parent::__construct();
      $this->typeCondition = $typeCondition;
    }

    /**
     * @return ScalarStringFilterCondition
     */
    public function getTypeCondition()
    {
      return $this->typeCondition;
    }

    /**
     * @param ScalarStringFilterCondition $typeCondition
     * @return \Selligent\MessageStudio\SystemAddressFilter
     */
    public function setTypeCondition($typeCondition)
    {
      $this->typeCondition = $typeCondition;
      return $this;
    }

    /**
     * @return ScalarIdFilterCondition
     */
    public function getUserIdCondition()
    {
      return $this->userIdCondition;
    }

    /**
     * @param ScalarIdFilterCondition $userIdCondition
     * @return \Selligent\MessageStudio\SystemAddressFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return SystemAddressOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param SystemAddressOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\SystemAddressFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
