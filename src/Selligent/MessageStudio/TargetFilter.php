<?php

namespace Selligent\MessageStudio;

class TargetFilter extends BaseFilter
{

    /**
     * @var ScalarIdFilterCondition $campaignIdCondition
     */
    protected $campaignIdCondition = null;

    /**
     * @var ScalarIdFilterCondition $dataSourceIdCondition
     */
    protected $dataSourceIdCondition = null;

    /**
     * @var ScalarStringFilterCondition $nameCondition
     */
    protected $nameCondition = null;

    /**
     * @var ScalarStringFilterCondition $typeCondition
     */
    protected $typeCondition = null;

    /**
     * @var ScalarIdFilterCondition $userIdCondition
     */
    protected $userIdCondition = null;

    /**
     * @var TargetOrderBy[] $orderBy
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
     * @return \Selligent\MessageStudio\TargetFilter
     */
    public function setCampaignIdCondition($campaignIdCondition)
    {
      $this->campaignIdCondition = $campaignIdCondition;
      return $this;
    }

    /**
     * @return ScalarIdFilterCondition
     */
    public function getDataSourceIdCondition()
    {
      return $this->dataSourceIdCondition;
    }

    /**
     * @param ScalarIdFilterCondition $dataSourceIdCondition
     * @return \Selligent\MessageStudio\TargetFilter
     */
    public function setDataSourceIdCondition($dataSourceIdCondition)
    {
      $this->dataSourceIdCondition = $dataSourceIdCondition;
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
     * @return \Selligent\MessageStudio\TargetFilter
     */
    public function setNameCondition($nameCondition)
    {
      $this->nameCondition = $nameCondition;
      return $this;
    }

    /**
     * @return ScalarStringFilterCondition
     */
    public function getTypeCondition()
    {
      return $this->typeCondition;
    }

    /**
     * @param ScalarStringFilterCondition $typeCondition
     * @return \Selligent\MessageStudio\TargetFilter
     */
    public function setTypeCondition($typeCondition)
    {
      $this->typeCondition = $typeCondition;
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
     * @return \Selligent\MessageStudio\TargetFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return TargetOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param TargetOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\TargetFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
