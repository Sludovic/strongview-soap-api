<?php

namespace Selligent\MessageStudio;

class jdbcParameters
{

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $url
     * @param string $username
     * @param string $password
     */
    public function __construct($url, $username, $password)
    {
      $this->url = $url;
      $this->username = $username;
      $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Selligent\MessageStudio\jdbcParameters
     */
    public function setUrl($url)
    {
      $this->url = $url;
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
     * @return \Selligent\MessageStudio\jdbcParameters
     */
    public function setUsername($username)
    {
      $this->username = $username;
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
     * @return \Selligent\MessageStudio\jdbcParameters
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
