<?php

namespace Selligent\MessageStudio;

class access
{

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var RoleId $roleId
     */
    protected $roleId = null;

    /**
     * @param OrganizationId $organizationId
     * @param RoleId $roleId
     */
    public function __construct($organizationId, $roleId)
    {
      $this->organizationId = $organizationId;
      $this->roleId = $roleId;
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
     * @return \Selligent\MessageStudio\access
     */
    public function setOrganizationId($organizationId)
    {
      $this->organizationId = $organizationId;
      return $this;
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
     * @return \Selligent\MessageStudio\access
     */
    public function setRoleId($roleId)
    {
      $this->roleId = $roleId;
      return $this;
    }

}
