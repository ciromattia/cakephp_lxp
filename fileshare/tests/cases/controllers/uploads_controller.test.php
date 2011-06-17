<?php
/* Uploads Test cases generated on: 2011-06-17 12:06:12 : 1308305892*/
App::import('Controller', 'Uploads');

class TestUploadsController extends UploadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UploadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.upload', 'app.user', 'app.uploads_user');

	function startTest() {
		$this->Uploads =& new TestUploadsController();
		$this->Uploads->constructClasses();
	}

	function endTest() {
		unset($this->Uploads);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>