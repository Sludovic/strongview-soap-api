<?php

namespace Selligent\MessageStudio;

class ProgramContactRecord
{

    /**
     * @var string $programDataSourcePk
     */
    protected $programDataSourcePk = null;

    /**
     * @var string $contactId
     */
    protected $contactId = null;

    /**
     * @param string $programDataSourcePk
     * @param string $contactId
     */
    public function __construct($programDataSourcePk, $contactId)
    {
      $this->programDataSourcePk = $programDataSourcePk;
      $this->contactId = $contactId;
    }

    /**
     * @return string
     */
    public function getProgramDataSourcePk()
    {
      return $this->programDataSourcePk;
    }

    /**
     * @param string $programDataSourcePk
     * @return \Selligent\MessageStudio\ProgramContactRecord
     */
    public function setProgramDataSourcePk($programDataSourcePk)
    {
      $this->programDataSourcePk = $programDataSourcePk;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactId()
    {
      return $this->contactId;
    }

    /**
     * @param string $contactId
     * @return \Selligent\MessageStudio\ProgramContactRecord
     */
    public function setContactId($contactId)
    {
      $this->contactId = $contactId;
      return $this;
    }

}
