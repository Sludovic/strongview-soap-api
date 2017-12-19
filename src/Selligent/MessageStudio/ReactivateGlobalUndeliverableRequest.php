<?php

namespace Selligent\MessageStudio;

class ReactivateGlobalUndeliverableRequest
{

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var GlobalUndeliverableInfo[] $globalUndeliverableInfo
     */
    protected $globalUndeliverableInfo = null;

    /**
     * @param GlobalUndeliverableInfo[] $globalUndeliverableInfo
     */
    public function __construct(array $globalUndeliverableInfo)
    {
      $this->globalUndeliverableInfo = $globalUndeliverableInfo;
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
     * @return \Selligent\MessageStudio\ReactivateGlobalUndeliverableRequest
     */
    public function setOrganizationId($organizationId)
    {
      $this->organizationId = $organizationId;
      return $this;
    }

    /**
     * @return GlobalUndeliverableInfo[]
     */
    public function getGlobalUndeliverableInfo()
    {
      return $this->globalUndeliverableInfo;
    }

    /**
     * @param GlobalUndeliverableInfo[] $globalUndeliverableInfo
     * @return \Selligent\MessageStudio\ReactivateGlobalUndeliverableRequest
     */
    public function setGlobalUndeliverableInfo(array $globalUndeliverableInfo)
    {
      $this->globalUndeliverableInfo = $globalUndeliverableInfo;
      return $this;
    }

}
