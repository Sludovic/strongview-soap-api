<?php

namespace Selligent\MessageStudio;

class AssignedRole extends BaseObject
{

    /**
     * @var RoleId $roleId
     */
    protected $roleId = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var UserId $userId
     */
    protected $userId = null;

    /**
     * @param RoleId $roleId
     * @param OrganizationId $organizationId
     * @param UserId $userId
     */
    public function __construct($roleId, $organizationId, $userId)
    {
      parent::__construct();
      $this->roleId = $roleId;
      $this->organizationId = $organizationId;
      $this->userId = $userId;
    }

    /**
     * @return RoleId
     */
    public function getRoleId()
    {
      return $this->roleId;
    }

    /**
     * @param RoleId $roleId
     * @return \Selligent\MessageStudio\AssignedRole
     */
    public function setRoleId($roleId)
    {
      $this->roleId = $roleId;
      return $this;
    }

    /**
     * @return OrganizationId
     */
    public function getOrganizationId()
    {
      return $this->organizationId;
    }

    /**
     * @param OrganizationId $organizationId
     * @return \Selligent\MessageStudio\AssignedRole
     */
    public function setOrganizationId($organizationId)
    {
      $this->organizationId = $organizationId;
      return $this;
    }

    /**
     * @return UserId
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param UserId $userId
     * @return \Selligent\MessageStudio\AssignedRole
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
