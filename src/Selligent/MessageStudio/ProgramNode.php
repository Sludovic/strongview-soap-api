<?php

namespace Selligent\MessageStudio;

class ProgramNode extends BaseObject
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var ProgramNodeType $programNodeType
     */
    protected $programNodeType = null;

    /**
     * @var MailingId $mailingId
     */
    protected $mailingId = null;

    /**
     * @param string $name
     * @param ProgramNodeType $programNodeType
     */
    public function __construct($name, $programNodeType)
    {
      parent::__construct();
      $this->name = $name;
      $this->programNodeType = $programNodeType;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Selligent\MessageStudio\ProgramNode
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Selligent\MessageStudio\ProgramNode
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return ProgramNodeType
     */
    public function getProgramNodeType()
    {
      return $this->programNodeType;
    }

    /**
     * @param ProgramNodeType $programNodeType
     * @return \Selligent\MessageStudio\ProgramNode
     */
    public function setProgramNodeType($programNodeType)
    {
      $this->programNodeType = $programNodeType;
      return $this;
    }

    /**
     * @return MailingId
     */
    public function getMailingId()
    {
      return $this->mailingId;
    }

    /**
     * @param MailingId $mailingId
     * @return \Selligent\MessageStudio\ProgramNode
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
