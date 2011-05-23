<?php
/* Books Test cases generated on: 2011-05-23 15:05:07 : 1306155967*/
App::import('Controller', 'Books');

class TestBooksController extends BooksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BooksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.book', 'app.user');

	function startTest() {
		$this->Books =& new TestBooksController();
		$this->Books->constructClasses();
	}

	function endTest() {
		unset($this->Books);
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