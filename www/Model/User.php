<?php 

namespace Model;

class User
{
    private $user;
    private $password;
    private $groupid;

    public function __construct($user, $password, $groupid) {
        $this->user = $user;
        $this->password = $password;
        $this->groupid=$groupid;
    }
    
    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get the value of groupid
     */ 
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set the value of groupid
     *
     * @return  self
     */ 
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }
}