<?php
App::uses('Appointment', 'Model');

/**
 * Appointment Test Case
 */
class AppointmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appointment',
		'app.user',
		'app.group',
		'app.status',
		'app.created_user',
		'app.modified_user',
		'app.company',
		'app.jobcenter',
		'app.list',
		'app.lists_element',
		'app.question',
		'app.report',
		'app.response',
		'app.role',
		'app.state'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Appointment = ClassRegistry::init('Appointment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appointment);

		parent::tearDown();
	}

}
