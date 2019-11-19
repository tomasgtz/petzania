<?php
App::uses('Encounter', 'Model');

/**
 * Encounter Test Case
 */
class EncounterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.encounter',
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
		'app.user',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Encounter = ClassRegistry::init('Encounter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Encounter);

		parent::tearDown();
	}

}
