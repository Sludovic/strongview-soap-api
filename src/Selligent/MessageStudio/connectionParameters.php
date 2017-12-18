<?php

namespace Selligent\MessageStudio;

class connectionParameters
{

    /**
     * @var string $databaseName
     */
    protected $databaseName = null;

    /**
     * @var DatabaseType $databaseType
     */
    protected $databaseType = null;

    /**
     * @var string $hostname
     */
    protected $hostname = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $port
     */
    protected $port = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @param string $databaseName
     * @param DatabaseType $databaseType
     * @param string $hostname
     * @param string $password
     * @param string $port
     * @param string $username
     */
    public function __construct($databaseName, $databaseType, $hostname, $password, $port, $username)
    {
      $this->databaseName = $databaseName;
      $this->databaseType = $databaseType;
      $this->hostname = $hostname;
      $this->password = $password;
      $this->port = $port;
      $this->username = $username;
    }

    /**
     * @return string
     */
    public function getDatabaseName()
    {
      return $this->databaseName;
    }

    /**
     * @param string $databaseName
     * @return \Selligent\MessageStudio\connectionParameters
     */
    public function setDatabaseName($databaseName)
    {
      $this->databaseName = $databaseName;
      return $this;
    }

    /**
     * @return DatabaseType
     */
    public function getDatabaseType()
    {
      return $this->databaseType;
    }

    /**
     * @param DatabaseType $databaseType
     * @return \Selligent\MessageStudio\connectionParameters
     */
    public function setDatabaseType($databaseType)
    {
      $this->databaseType = $databaseType;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
      return $this->hostname;
    }

    /**
     * @param string $hostname
     * @return \Selligent\MessageStudio\connectionParameters
     */
    public function setHostname($hostname)
    {
      $this->hostname = $hostname;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Selligent\MessageStudio\connectionParameters
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPort()
    {
      return $this->port;
    }

    /**
     * @param string $port
     * @return \Selligent\MessageStudio\connectionParameters
     */
    public function setPort($port)
    {
      $this->port = $port;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \Selligent\MessageStudio\connectionParameters
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

}
