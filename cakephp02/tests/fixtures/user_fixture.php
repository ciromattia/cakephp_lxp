<?php
/* User Fixture generated on: 2011-05-23 15:05:58 : 1306155958 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4dda5bb6-fc88-424b-9c7f-7a501b790d60',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-05-23 15:05:58',
			'modified' => '2011-05-23 15:05:58'
		),
	);
}
?>