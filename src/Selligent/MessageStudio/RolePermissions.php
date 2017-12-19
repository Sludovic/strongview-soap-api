<?php

namespace Selligent\MessageStudio;

class RolePermissions
{

    /**
     * @var boolean $create
     */
    protected $create = null;

    /**
     * @var boolean $update
     */
    protected $update = null;

    /**
     * @var boolean $delete
     */
    protected $delete = null;

    /**
     * @var boolean $view
     */
    protected $view = null;

    /**
     * @var boolean $approve
     */
    protected $approve = null;

    /**
     * @var boolean $advanced
     */
    protected $advanced = null;

    /**
     * @param boolean $create
     * @param boolean $update
     * @param boolean $delete
     * @param boolean $view
     */
    public function __construct($create, $update, $delete, $view)
    {
      $this->create = $create;
      $this->update = $update;
      $this->delete = $delete;
      $this->view = $view;
    }

    /**
     * @return boolean
     */
    public function getCreate()
    {
      return $this->create;
    }

    /**
     * @param boolean $create
     * @return \Selligent\MessageStudio\RolePermissions
     */
    public function setCreate($create)
    {
      $this->create = $create;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdate()
    {
      return $this->update;
    }

    /**
     * @param boolean $update
     * @return \Selligent\MessageStudio\RolePermissions
     */
    public function setUpdate($update)
    {
      $this->update = $update;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDelete()
    {
      return $this->delete;
    }

    /**
     * @param boolean $delete
     * @return \Selligent\MessageStudio\RolePermissions
     */
    public function setDelete($delete)
    {
      $this->delete = $delete;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getView()
    {
      return $this->view;
    }

    /**
     * @param boolean $view
     * @return \Selligent\MessageStudio\RolePermissions
     */
    public function setView($view)
    {
      $this->view = $view;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApprove()
    {
      return $this->approve;
    }

    /**
     * @param boolean $approve
     * @return \Selligent\MessageStudio\RolePermissions
     */
    public function setApprove($approve)
    {
      $this->approve = $approve;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvanced()
    {
      return $this->advanced;
    }

    /**
     * @param boolean $advanced
     * @return \Selligent\MessageStudio\RolePermissions
     */
    public function setAdvanced($advanced)
    {
      $this->advanced = $advanced;
      return $this;
    }

}
