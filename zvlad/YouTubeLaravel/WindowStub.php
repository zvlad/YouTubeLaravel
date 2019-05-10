<?php

namespace zvlad\YouTubeLaravel;

class WindowStub
{
	public $location;
	public $navigator;
	public $document;

	public function decodeURI($input)
	{
		return "";
	}

	public function __construct()
	{
		$this->location = (object)(array(
			'protocol' => 'https'
		));
		$this->navigator = (object)(array(
			'plugins' => array('Shockwave Flash'),
			'userAgent' => (object)(array(
				'match' => function ($input) {
					return false;
				}
			))
		));
		$this->document = (object)(array(
			'addEventListener' => function ($name, $func) {
			}
		));
	}
}
