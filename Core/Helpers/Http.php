<?php
trait OnlyHttpPost {
	protected function get() {
		$this->notFound();
	}

}