<?php
/* Upload Fixture generated on: 2011-06-17 12:06:12 : 1308305892 */
class UploadFixture extends CakeTestFixture {
	var $name = 'Upload';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'filename' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'filesize' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'filemime' => array('type' => 'string', 'null' => false, 'default' => 'text/plain', 'length' => 45),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4dfb29e4-feac-4aca-bfcc-3d65b842ad24',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'title' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'filename' => 'Lorem ipsum dolor sit amet',
			'filesize' => 1,
			'filemime' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-06-17 12:18:12',
			'modified' => '2011-06-17 12:18:12'
		),
	);
}
?>