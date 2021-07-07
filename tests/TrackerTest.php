<?php

use Mockery as m;
use Fatryst\ResourceWatcher\Tracker;

class TrackerTest extends PHPUnit_Framework_TestCase {


	public function tearDown()
	{
		m::close();
	}


	public function testResourceRegisteredWithTracker()
	{
		$resource = m::mock('Fatryst\ResourceWatcher\Resource\ResourceInterface');
		$resource->shouldReceive('getKey')->twice()->andReturn('foo');
		$listener = m::mock('Fatryst\ResourceWatcher\Listener');
		$tracker = new Tracker;
		$tracker->register($resource, $listener);
		$this->assertTrue($tracker->isTracked($resource));
	}


}