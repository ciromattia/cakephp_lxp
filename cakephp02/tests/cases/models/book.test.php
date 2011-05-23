<?php
/* Book Test cases generated on: 2011-05-23 15:05:58 : 1306155958*/
App::import('Model', 'Book');

class BookTestCase extends CakeTestCase {
	var $fixtures = array('app.book', 'app.user');

	function startTest() {
		$this->Book =& ClassRegistry::init('Book');
	}

	function endTest() {
		unset($this->Book);
		ClassRegistry::flush();
	}

}
?>