<?php
App::uses('Discipline', 'Model');

/**
 * Discipline Test Case
 *
 */
class DisciplineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.discipline',
		'app.course',
		'app.school',
		'app.student',
		'app.user',
		'app.group',
		'app.discipline_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Discipline = ClassRegistry::init('Discipline');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Discipline);

		parent::tearDown();
	}

}
