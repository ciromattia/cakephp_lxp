<?php
/* Urls Test cases generated on: 2011-07-18 18:07:46 : 1311005806*/
App::import('Controller', 'Urls');

class TestUrlsController extends UrlsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UrlsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.url', 'app.user');

	function startTest() {
		$this->Urls =& new TestUrlsController();
		$this->Urls->constructClasses();
	}

	function endTest() {
		unset($this->Urls);
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