<?php

namespace Selligent\MessageStudio;

class SuppressionFilter extends BaseFilter
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
     * @var ScalarIdFilterCondition $channelIdCondition
     */
    protected $channelIdCondition = null;

    /**
     * @var SuppressionListOrderBy[] $orderBy
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
     * @return \Selligent\MessageStudio\SuppressionFilter
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
     * @return \Selligent\MessageStudio\SuppressionFilter
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
     * @return \Selligent\MessageStudio\SuppressionFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return ScalarIdFilterCondition
     */
    public function getChannelIdCondition()
    {
      return $this->channelIdCondition;
    }

    /**
     * @param ScalarIdFilterCondition $channelIdCondition
     * @return \Selligent\MessageStudio\SuppressionFilter
     */
    public function setChannelIdCondition($channelIdCondition)
    {
      $this->channelIdCondition = $channelIdCondition;
      return $this;
    }

    /**
     * @return SuppressionListOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param SuppressionListOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\SuppressionFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
