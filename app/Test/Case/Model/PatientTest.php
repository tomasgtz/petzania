<?php
App::uses('Patient', 'Model');

/**
 * Patient Test Case
 */
class PatientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.patient',
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
		'app.state',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Patient = ClassRegistry::init('Patient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patient);

		parent::tearDown();
	}

}
