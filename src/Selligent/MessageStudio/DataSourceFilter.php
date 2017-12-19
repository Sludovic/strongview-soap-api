<?php

namespace Selligent\MessageStudio;

class DataSourceFilter extends BaseFilter
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
     * @var ScalarStringFilterCondition $typeCondition
     */
    protected $typeCondition = null;

    /**
     * @var ScalarIdFilterCondition $userIdCondition
     */
    protected $userIdCondition = null;

    /**
     * @var DataSourceOrderBy[] $orderBy
     */
    protected $orderBy = null;

    /**
     * @param ScalarStringFilterCondition $typeCondition
     */
    public function __construct($typeCondition)
    {
      parent::__construct();
      $this->typeCondition = $typeCondition;
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
     * @return \Selligent\MessageStudio\DataSourceFilter
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
     * @return \Selligent\MessageStudio\DataSourceFilter
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
     * @return \Selligent\MessageStudio\DataSourceFilter
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
     * @return \Selligent\MessageStudio\DataSourceFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return DataSourceOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param DataSourceOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\DataSourceFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
