<?php
/**
 * Appointment Fixture
 */
class AppointmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'appointment_start' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'appointment_end' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'appointment_patient_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'appointment_status' => array('type' => 'string', 'null' => false, 'default' => 'free', 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'appointment_patient_session' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'appointment_start' => '2019-11-24 00:45:16',
			'appointment_end' => '2019-11-24 00:45:16',
			'appointment_patient_name' => 'Lorem ipsum dolor sit amet',
			'appointment_status' => 'Lorem ipsum dolor sit amet',
			'appointment_patient_session' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1
		),
	);

}
