<?php

trait OnlyHttpGet
{
	protected function post()
	{
		$this->notFound();
	}
}

trait OnlyHttpPost
{
	protected function get()
	{
		$this->notFound();
	}
}
