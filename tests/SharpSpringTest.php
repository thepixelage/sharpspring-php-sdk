<?php

namespace thepixelage\SharpSpring\Tests;

use PHPUnit\Framework\TestCase;
use thepixelage\SharpSpring\SharpSpring;

class SharpSpringTest extends TestCase
{
    public function testCanConnectToServer()
    {
        $ss = new SharpSpring('ACCOUNT_ID', 'SECRET_KEY');

        $this->assertInstanceOf(
            SharpSpring::class,
            $ss
        );
    }
}