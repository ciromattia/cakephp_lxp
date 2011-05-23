<?php
/* Book Fixture generated on: 2011-05-23 15:05:58 : 1306155958 */
class BookFixture extends CakeTestFixture {
	var $name = 'Book';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'author' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'summary' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'purchased' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4dda5bb6-5a74-4327-b4b4-7a501b790d60',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'title' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'author' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'purchased' => '2011-05-23',
			'created' => '2011-05-23 15:05:58',
			'modified' => '2011-05-23 15:05:58'
		),
	);
}
?>