<?php

class TirePatch
{
	protected $id;
	protected $userId;
	protected $name;
	protected $address;
	protected $description;
	protected $picture;
	protected $whatsappNumber;
	protected $available;
	protected $created;
	protected $modified;

	public function getId()
	{
		return $this->id;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getPicture()
	{
		return $this->picture;
	}

	public function getWhatsappNumber()
	{
		return $this->whatsappNumber;
	}

	public function getAvailable()
	{
		return $this->available;
	}

	public function getCreated()
    {
        return $this->created;
    }

    public function getModified()
    {
        return $this->modified;
    }

    public function setUserId($userId)
	{
		$this->userId = $userId;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function setPicture($picture)
	{
		$this->picture = $picture;
	}

	public function setWhatsappNumber($whatsappNumber)
	{
		$this->whatsappNumber = $whatsappNumber;
	}

	public function setAvailable($available)
	{
		$this->available = $available;
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
