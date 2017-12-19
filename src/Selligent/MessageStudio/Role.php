<?php

namespace Selligent\MessageStudio;

class Role extends BaseObject
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var Permissions $permissions
     */
    protected $permissions = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      parent::__construct();
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Selligent\MessageStudio\Role
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Selligent\MessageStudio\Role
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Selligent\MessageStudio\Role
     */
    public function setOrganizationId($organizationId)
    {
      $this->organizationId = $organizationId;
      return $this;
    }

    /**
     * @return Permissions
     */
    public function getPermissions()
    {
      return $this->permissions;
    }

    /**
     * @param Permissions $permissions
     * @return \Selligent\MessageStudio\Role
     */
    public function setPermissions($permissions)
    {
      $this->permissions = $permissions;
      return $this;
    }

}
