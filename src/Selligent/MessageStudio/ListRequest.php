<?php

namespace Selligent\MessageStudio;

class ListRequest
{

    /**
     * @var BaseFilter $filter
     */
    protected $filter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BaseFilter
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param BaseFilter $filter
     * @return \Selligent\MessageStudio\ListRequest
     */
    public function setFilter($filter)
    {
      $this->filter = $filter;
      return $this;
    }

}
