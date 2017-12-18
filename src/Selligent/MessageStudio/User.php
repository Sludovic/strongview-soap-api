<?php

namespace Selligent\MessageStudio;

class User extends BaseObject
{

    /**
     * @var access[] $access
     */
    protected $access = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var boolean $isAdmin
     */
    protected $isAdmin = null;

    /**
     * @var boolean $isSuperUser
     */
    protected $isSuperUser = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param OrganizationId $organizationId
     */
    public function __construct($firstName, $lastName, $organizationId)
    {
      parent::__construct();
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->organizationId = $organizationId;
    }

    /**
     * @return access[]
     */
    public function getAccess()
    {
      return $this->access;
    }

    /**
     * @param access[] $access
     * @return \Selligent\MessageStudio\User
     */
    public function setAccess(array $access = null)
    {
      $this->access = $access;
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
     * @return \Selligent\MessageStudio\User
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Selligent\MessageStudio\User
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \Selligent\MessageStudio\User
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdmin()
    {
      return $this->isAdmin;
    }

    /**
     * @param boolean $isAdmin
     * @return \Selligent\MessageStudio\User
     */
    public function setIsAdmin($isAdmin)
    {
      $this->isAdmin = $isAdmin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSuperUser()
    {
      return $this->isSuperUser;
    }

    /**
     * @param boolean $isSuperUser
     * @return \Selligent\MessageStudio\User
     */
    public function setIsSuperUser($isSuperUser)
    {
      $this->isSuperUser = $isSuperUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \Selligent\MessageStudio\User
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
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
     * @return \Selligent\MessageStudio\User
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return OrganizationId
     */
    public function getOrganizationId()
    {
      return $this->organizationId;
    }

    /**
     * @param OrganizationId $organizationId
     * @return \Selligent\MessageStudio\User
     */
    public function setOrganizationId($organizationId)
    {
      $this->organizationId = $organizationId;
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
     * @return \Selligent\MessageStudio\User
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
