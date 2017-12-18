<?php

namespace Selligent\MessageStudio;

class AssignedRoleFilter extends BaseFilter
{

    /**
     * @var ScalarIdFilterCondition $roleIdCondition
     */
    protected $roleIdCondition = null;

    /**
     * @var ScalarIdFilterCondition $organizationIdCondition
     */
    protected $organizationIdCondition = null;

    /**
     * @var ScalarIdFilterCondition $userIdCondition
     */
    protected $userIdCondition = null;

    /**
     * @var AssignedRoleOrderBy[] $orderBy
     */
    protected $orderBy = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ScalarIdFilterCondition
     */
    public function getRoleIdCondition()
    {
      return $this->roleIdCondition;
    }

    /**
     * @param ScalarIdFilterCondition $roleIdCondition
     * @return \Selligent\MessageStudio\AssignedRoleFilter
     */
    public function setRoleIdCondition($roleIdCondition)
    {
      $this->roleIdCondition = $roleIdCondition;
      return $this;
    }

    /**
     * @return ScalarIdFilterCondition
     */
    public function getOrganizationIdCondition()
    {
      return $this->organizationIdCondition;
    }

    /**
     * @param ScalarIdFilterCondition $organizationIdCondition
     * @return \Selligent\MessageStudio\AssignedRoleFilter
     */
    public function setOrganizationIdCondition($organizationIdCondition)
    {
      $this->organizationIdCondition = $organizationIdCondition;
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
     * @return \Selligent\MessageStudio\AssignedRoleFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return AssignedRoleOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param AssignedRoleOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\AssignedRoleFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
