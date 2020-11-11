<?php

trait OnlyHttpGet {
	protected function notFound() {
		$this->notFound();
	}
}

trait OnlyHttpPost {
	protected function get() {
		$this->notFound();
	}

}
