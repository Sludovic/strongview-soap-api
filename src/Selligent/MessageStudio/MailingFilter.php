<?php

namespace Selligent\MessageStudio;

class MailingFilter extends BaseFilter
{

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
     * @var ArrayStringFilterCondition $typeCondition
     */
    protected $typeCondition = null;

    /**
     * @var ArrayStringFilterCondition $statusCondition
     */
    protected $statusCondition = null;

    /**
     * @var MailingOrderBy[] $orderBy
     */
    protected $orderBy = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Selligent\MessageStudio\MailingFilter
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
     * @return \Selligent\MessageStudio\MailingFilter
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
     * @return \Selligent\MessageStudio\MailingFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return ArrayStringFilterCondition
     */
    public function getTypeCondition()
    {
      return $this->typeCondition;
    }

    /**
     * @param ArrayStringFilterCondition $typeCondition
     * @return \Selligent\MessageStudio\MailingFilter
     */
    public function setTypeCondition($typeCondition)
    {
      $this->typeCondition = $typeCondition;
      return $this;
    }

    /**
     * @return ArrayStringFilterCondition
     */
    public function getStatusCondition()
    {
      return $this->statusCondition;
    }

    /**
     * @param ArrayStringFilterCondition $statusCondition
     * @return \Selligent\MessageStudio\MailingFilter
     */
    public function setStatusCondition($statusCondition)
    {
      $this->statusCondition = $statusCondition;
      return $this;
    }

    /**
     * @return MailingOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param MailingOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\MailingFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
