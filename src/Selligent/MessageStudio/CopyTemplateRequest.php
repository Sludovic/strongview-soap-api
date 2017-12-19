<?php

namespace Selligent\MessageStudio;

class CopyTemplateRequest extends CopyRequest
{

    /**
     * @var BaseTemplateId $fromId
     */
    protected $fromId = null;

    /**
     * @var OrganizationId $newOrganizationId
     */
    protected $newOrganizationId = null;

    /**
     * @param string $newName
     * @param BaseTemplateId $fromId
     */
    public function __construct($newName, $fromId)
    {
      parent::__construct($newName);
      $this->fromId = $fromId;
    }

    /**
     * @return BaseTemplateId
     */
    public function getFromId()
    {
      return $this->fromId;
    }

    /**
     * @param BaseTemplateId $fromId
     * @return \Selligent\MessageStudio\CopyTemplateRequest
     */
    public function setFromId($fromId)
    {
      $this->fromId = $fromId;
      return $this;
    }

    /**
     * @return OrganizationId
     */
    public function getNewOrganizationId()
    {
      return $this->newOrganizationId;
    }

    /**
     * @param OrganizationId $newOrganizationId
     * @return \Selligent\MessageStudio\CopyTemplateRequest
     */
    public function setNewOrganizationId($newOrganizationId)
    {
      $this->newOrganizationId = $newOrganizationId;
      return $this;
    }

}
