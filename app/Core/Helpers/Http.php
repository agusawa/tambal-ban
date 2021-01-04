<?php

trait OnlyHttpGet
{
	/**
	 * A not found messege will appear if method post is used.
	 * 
	 * @return void
	 */
	protected function post()
	{
		$this->notFound();
	}
}

trait OnlyHttpPost
{
	/**
	 * A not found messege will appear if method get is used.
	 * 
	 * @return void
	 */
	protected function get()
	{
		$this->notFound();
	}
}
