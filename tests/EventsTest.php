<?php

namespace thepixelage\SharpSpring\Tests;

use PHPUnit\Framework\TestCase;
use thepixelage\SharpSpring\SharpSpring;
use thepixelage\SharpSpring\models\Event;

class EventsTest extends TestCase
{
    private $ss;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->ss = new SharpSpring();
    }

    public function testCanGetEvents()
    {
        $events = $this->ss->getEvents();

        $this->assertInternalType(
            'array',
            $events
        );

        if (count($events) > 0) {

            $this->assertInstanceOf(
                Event::class,
                $events[0]
            );

        }
    }
}
