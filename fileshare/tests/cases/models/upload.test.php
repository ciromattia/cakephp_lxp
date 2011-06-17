<?php
/* Upload Test cases generated on: 2011-06-17 12:06:12 : 1308305892*/
App::import('Model', 'Upload');

class UploadTestCase extends CakeTestCase {
	var $fixtures = array('app.upload', 'app.user', 'app.uploads_user');

	function startTest() {
		$this->Upload =& ClassRegistry::init('Upload');
	}

	function endTest() {
		unset($this->Upload);
		ClassRegistry::flush();
	}

}
?>