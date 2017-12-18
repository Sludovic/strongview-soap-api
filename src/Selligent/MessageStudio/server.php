<?php

namespace Selligent\MessageStudio;

class server
{

    /**
     * @var string $defaultImagePath
     */
    protected $defaultImagePath = null;

    /**
     * @var string $host
     */
    protected $host = null;

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var int $sshPort
     */
    protected $sshPort = null;

    /**
     * @param string $defaultImagePath
     * @param string $host
     * @param string $login
     * @param string $password
     * @param int $sshPort
     */
    public function __construct($defaultImagePath, $host, $login, $password, $sshPort)
    {
      $this->defaultImagePath = $defaultImagePath;
      $this->host = $host;
      $this->login = $login;
      $this->password = $password;
      $this->sshPort = $sshPort;
    }

    /**
     * @return string
     */
    public function getDefaultImagePath()
    {
      return $this->defaultImagePath;
    }

    /**
     * @param string $defaultImagePath
     * @return \Selligent\MessageStudio\server
     */
    public function setDefaultImagePath($defaultImagePath)
    {
      $this->defaultImagePath = $defaultImagePath;
      return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
      return $this->host;
    }

    /**
     * @param string $host
     * @return \Selligent\MessageStudio\server
     */
    public function setHost($host)
    {
      $this->host = $host;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \Selligent\MessageStudio\server
     */
    public function setLogin($login)
    {
      $this->login = $login;
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
     * @return \Selligent\MessageStudio\server
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getSshPort()
    {
      return $this->sshPort;
    }

    /**
     * @param int $sshPort
     * @return \Selligent\MessageStudio\server
     */
    public function setSshPort($sshPort)
    {
      $this->sshPort = $sshPort;
      return $this;
    }

}
