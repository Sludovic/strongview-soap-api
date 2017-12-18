<?php

namespace Selligent\MessageStudio;

class ProgramFilter extends BaseFilter
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
     * @var ArrayStringFilterCondition $statusCondition
     */
    protected $statusCondition = null;

    /**
     * @var ProgramOrderBy[] $orderBy
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
     * @return \Selligent\MessageStudio\ProgramFilter
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
     * @return \Selligent\MessageStudio\ProgramFilter
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
     * @return \Selligent\MessageStudio\ProgramFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
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
     * @return \Selligent\MessageStudio\ProgramFilter
     */
    public function setStatusCondition($statusCondition)
    {
      $this->statusCondition = $statusCondition;
      return $this;
    }

    /**
     * @return ProgramOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param ProgramOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\ProgramFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
