<?php

class User
{
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $created;
    protected $modified;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getModified()
    {
        return $this->modified;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function setModified($modified)
    {
        $this->modified = $modified;
    }
}
