<?php
/* Url Test cases generated on: 2011-07-18 18:07:45 : 1311005805*/
App::import('Model', 'Url');

class UrlTestCase extends CakeTestCase {
	var $fixtures = array('app.url', 'app.user');

	function startTest() {
		$this->Url =& ClassRegistry::init('Url');
	}

	function endTest() {
		unset($this->Url);
		ClassRegistry::flush();
	}

}
?>