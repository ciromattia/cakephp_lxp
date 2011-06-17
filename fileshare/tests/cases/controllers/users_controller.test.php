<?php
/* Users Test cases generated on: 2011-06-17 12:06:08 : 1308305888*/
App::import('Controller', 'Users');

class TestUsersController extends UsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.upload', 'app.uploads_user');

	function startTest() {
		$this->Users =& new TestUsersController();
		$this->Users->constructClasses();
	}

	function endTest() {
		unset($this->Users);
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