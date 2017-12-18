<?php

namespace Selligent\MessageStudio;

class TemplateFilter extends BaseFilter
{

    /**
     * @var ScalarBooleanFilterCondition $approvalCondition
     */
    protected $approvalCondition = null;

    /**
     * @var ScalarIdFilterCondition $campaignIdCondition
     */
    protected $campaignIdCondition = null;

    /**
     * @var ScalarStringFilterCondition $nameCondition
     */
    protected $nameCondition = null;

    /**
     * @var ScalarIdFilterCondition $userIdCondition
     */
    protected $userIdCondition = null;

    /**
     * @var TemplateOrderBy[] $orderBy
     */
    protected $orderBy = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ScalarBooleanFilterCondition
     */
    public function getApprovalCondition()
    {
      return $this->approvalCondition;
    }

    /**
     * @param ScalarBooleanFilterCondition $approvalCondition
     * @return \Selligent\MessageStudio\TemplateFilter
     */
    public function setApprovalCondition($approvalCondition)
    {
      $this->approvalCondition = $approvalCondition;
      return $this;
    }

    /**
     * @return ScalarIdFilterCondition
     */
    public function getCampaignIdCondition()
    {
      return $this->campaignIdCondition;
    }

    /**
     * @param ScalarIdFilterCondition $campaignIdCondition
     * @return \Selligent\MessageStudio\TemplateFilter
     */
    public function setCampaignIdCondition($campaignIdCondition)
    {
      $this->campaignIdCondition = $campaignIdCondition;
      return $this;
    }

    /**
     * @return ScalarStringFilterCondition
     */
    public function getNameCondition()
    {
      return $this->nameCondition;
    }

    /**
     * @param ScalarStringFilterCondition $nameCondition
     * @return \Selligent\MessageStudio\TemplateFilter
     */
    public function setNameCondition($nameCondition)
    {
      $this->nameCondition = $nameCondition;
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
     * @return \Selligent\MessageStudio\TemplateFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return TemplateOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param TemplateOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\TemplateFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
