<?php

namespace Selligent\MessageStudio;

class Program extends BaseObject
{

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var ProgramStatus $status
     */
    protected $status = null;

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var string $emailColumnName
     */
    protected $emailColumnName = null;

    /**
     * @var string $bounceColumnName
     */
    protected $bounceColumnName = null;

    /**
     * @var string $unsubColumnName
     */
    protected $unsubColumnName = null;

    /**
     * @var string $smsColumnName
     */
    protected $smsColumnName = null;

    /**
     * @var string $smsBounceColumnName
     */
    protected $smsBounceColumnName = null;

    /**
     * @var string $smsUnsubColumnName
     */
    protected $smsUnsubColumnName = null;

    /**
     * @var string $smsShortCode
     */
    protected $smsShortCode = null;

    /**
     * @param OrganizationId $organizationId
     * @param string $name
     * @param string $description
     * @param ProgramStatus $status
     */
    public function __construct($organizationId, $name, $description, $status)
    {
      parent::__construct();
      $this->organizationId = $organizationId;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
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
     * @return \Selligent\MessageStudio\Program
     */
    public function setOrganizationId($organizationId)
    {
      $this->organizationId = $organizationId;
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
     * @return \Selligent\MessageStudio\Program
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \Selligent\MessageStudio\Program
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Selligent\MessageStudio\Program
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Selligent\MessageStudio\Program
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ProgramStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param ProgramStatus $status
     * @return \Selligent\MessageStudio\Program
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return DataSourceId
     */
    public function getDataSourceId()
    {
      return $this->dataSourceId;
    }

    /**
     * @param DataSourceId $dataSourceId
     * @return \Selligent\MessageStudio\Program
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailColumnName()
    {
      return $this->emailColumnName;
    }

    /**
     * @param string $emailColumnName
     * @return \Selligent\MessageStudio\Program
     */
    public function setEmailColumnName($emailColumnName)
    {
      $this->emailColumnName = $emailColumnName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBounceColumnName()
    {
      return $this->bounceColumnName;
    }

    /**
     * @param string $bounceColumnName
     * @return \Selligent\MessageStudio\Program
     */
    public function setBounceColumnName($bounceColumnName)
    {
      $this->bounceColumnName = $bounceColumnName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnsubColumnName()
    {
      return $this->unsubColumnName;
    }

    /**
     * @param string $unsubColumnName
     * @return \Selligent\MessageStudio\Program
     */
    public function setUnsubColumnName($unsubColumnName)
    {
      $this->unsubColumnName = $unsubColumnName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmsColumnName()
    {
      return $this->smsColumnName;
    }

    /**
     * @param string $smsColumnName
     * @return \Selligent\MessageStudio\Program
     */
    public function setSmsColumnName($smsColumnName)
    {
      $this->smsColumnName = $smsColumnName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmsBounceColumnName()
    {
      return $this->smsBounceColumnName;
    }

    /**
     * @param string $smsBounceColumnName
     * @return \Selligent\MessageStudio\Program
     */
    public function setSmsBounceColumnName($smsBounceColumnName)
    {
      $this->smsBounceColumnName = $smsBounceColumnName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmsUnsubColumnName()
    {
      return $this->smsUnsubColumnName;
    }

    /**
     * @param string $smsUnsubColumnName
     * @return \Selligent\MessageStudio\Program
     */
    public function setSmsUnsubColumnName($smsUnsubColumnName)
    {
      $this->smsUnsubColumnName = $smsUnsubColumnName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmsShortCode()
    {
      return $this->smsShortCode;
    }

    /**
     * @param string $smsShortCode
     * @return \Selligent\MessageStudio\Program
     */
    public function setSmsShortCode($smsShortCode)
    {
      $this->smsShortCode = $smsShortCode;
      return $this;
    }

}
