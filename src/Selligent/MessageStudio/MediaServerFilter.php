<?php

namespace Selligent\MessageStudio;

class MediaServerFilter extends BaseFilter
{

    /**
     * @var ScalarStringFilterCondition $nameCondition
     */
    protected $nameCondition = null;

    /**
     * @var ScalarStringFilterCondition $urlCondition
     */
    protected $urlCondition = null;

    /**
     * @var ScalarIdFilterCondition $userIdCondition
     */
    protected $userIdCondition = null;

    /**
     * @var ScalarBooleanFilterCondition $writableCondition
     */
    protected $writableCondition = null;

    /**
     * @var MediaServerOrderBy[] $orderBy
     */
    protected $orderBy = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Selligent\MessageStudio\MediaServerFilter
     */
    public function setNameCondition($nameCondition)
    {
      $this->nameCondition = $nameCondition;
      return $this;
    }

    /**
     * @return ScalarStringFilterCondition
     */
    public function getUrlCondition()
    {
      return $this->urlCondition;
    }

    /**
     * @param ScalarStringFilterCondition $urlCondition
     * @return \Selligent\MessageStudio\MediaServerFilter
     */
    public function setUrlCondition($urlCondition)
    {
      $this->urlCondition = $urlCondition;
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
     * @return \Selligent\MessageStudio\MediaServerFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return ScalarBooleanFilterCondition
     */
    public function getWritableCondition()
    {
      return $this->writableCondition;
    }

    /**
     * @param ScalarBooleanFilterCondition $writableCondition
     * @return \Selligent\MessageStudio\MediaServerFilter
     */
    public function setWritableCondition($writableCondition)
    {
      $this->writableCondition = $writableCondition;
      return $this;
    }

    /**
     * @return MediaServerOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param MediaServerOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\MediaServerFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
