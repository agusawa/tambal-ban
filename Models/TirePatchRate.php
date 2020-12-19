<?php

class TirePatchRate
{
	protected $id;
	protected $tirePatchId;
	protected $userId;
	protected $rate;
	protected $comment;
	protected $created;
	protected $modified;

	public function getId()
	{
		return $this->id;
	}

	public function getTirePatchId()
	{
		return $this->tirePatchId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getRate()
	{
		return $this->rate;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function getCreated()
	{
		return $this->created;
	}

	public function getModified()
	{
		return $this->modified;
	}

	public function setTirePatchId($tirePatchId)
	{
		$this->tirePatchId = $tirePatchId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
	}

	public function setRate($rate)
	{
		$this->rate = $rate;
	}

	public function setComment($comment)
	{
		$this->comment = $comment;
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
