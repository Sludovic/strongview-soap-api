<?php

namespace Selligent\MessageStudio;

class OrganizationToken
{

    /**
     * @var string $organizationName
     */
    protected $organizationName = null;

    /**
     * @var OrganizationId $subOrganizationId
     */
    protected $subOrganizationId = null;

    /**
     * @param string $organizationName
     */
    public function __construct($organizationName)
    {
      $this->organizationName = $organizationName;
    }

    /**
     * @return string
     */
    public function getOrganizationName()
    {
      return $this->organizationName;
    }

    /**
     * @param string $organizationName
     * @return \Selligent\MessageStudio\OrganizationToken
     */
    public function setOrganizationName($organizationName)
    {
      $this->organizationName = $organizationName;
      return $this;
    }

    /**
     * @return OrganizationId
     */
    public function getSubOrganizationId()
    {
      return $this->subOrganizationId;
    }

    /**
     * @param OrganizationId $subOrganizationId
     * @return \Selligent\MessageStudio\OrganizationToken
     */
    public function setSubOrganizationId($subOrganizationId)
    {
      $this->subOrganizationId = $subOrganizationId;
      return $this;
    }

}
