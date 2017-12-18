<?php

namespace Selligent\MessageStudio;

class MailingClassFilter extends BaseFilter
{

    /**
     * @var ScalarStringFilterCondition $nameCondition
     */
    protected $nameCondition = null;

    /**
     * @var ScalarIdFilterCondition $userIdCondition
     */
    protected $userIdCondition = null;

    /**
     * @var MailingClassOrderBy[] $orderBy
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
     * @return \Selligent\MessageStudio\MailingClassFilter
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
     * @return \Selligent\MessageStudio\MailingClassFilter
     */
    public function setUserIdCondition($userIdCondition)
    {
      $this->userIdCondition = $userIdCondition;
      return $this;
    }

    /**
     * @return MailingClassOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param MailingClassOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\MailingClassFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
