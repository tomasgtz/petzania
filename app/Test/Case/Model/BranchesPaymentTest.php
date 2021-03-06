<?php
App::uses('BranchesPayment', 'Model');

/**
 * BranchesPayment Test Case
 */
class BranchesPaymentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.branches_payment',
		'app.branch',
		'app.state',
		'app.country',
		'app.created_user',
		'app.modified_user',
		'app.status',
		'app.device',
		'app.jewelry_store',
		'app.list',
		'app.lists_element',
		'app.message',
		'app.order',
		'app.quote',
		'app.payments_type',
		'app.orders_phase',
		'app.orders_detail',
		'app.orders_details_service',
		'app.quotes_detail',
		'app.service',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BranchesPayment = ClassRegistry::init('BranchesPayment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BranchesPayment);

		parent::tearDown();
	}

}
