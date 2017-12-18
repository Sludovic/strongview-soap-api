<?php

namespace Selligent\MessageStudio;

class DataSourceRecord
{

    /**
     * @var NameValuePair[] $field
     */
    protected $field = null;

    /**
     * @param NameValuePair[] $field
     */
    public function __construct(array $field)
    {
      $this->field = $field;
    }

    /**
     * @return NameValuePair[]
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param NameValuePair[] $field
     * @return \Selligent\MessageStudio\DataSourceRecord
     */
    public function setField(array $field)
    {
      $this->field = $field;
      return $this;
    }

}
