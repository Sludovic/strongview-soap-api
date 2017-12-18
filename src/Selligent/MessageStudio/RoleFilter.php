<?php

namespace Selligent\MessageStudio;

class RoleFilter extends BaseFilter
{

    /**
     * @var RoleOrderBy[] $orderBy
     */
    protected $orderBy = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RoleOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param RoleOrderBy[] $orderBy
     * @return \Selligent\MessageStudio\RoleFilter
     */
    public function setOrderBy(array $orderBy = null)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

}
