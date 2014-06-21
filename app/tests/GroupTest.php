<?php

class GroupTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testGetById()
	{
		$group = new Group;
		$this->assertEquals('Sample', $group->getById(0));
	}

}
