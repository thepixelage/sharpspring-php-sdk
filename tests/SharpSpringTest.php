<?php

namespace thepixelage\SharpSpring\Tests;

use PHPUnit\Framework\TestCase;
use thepixelage\SharpSpring\SharpSpring;

class SharpSpringTest extends TestCase
{
    private $ss;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->ss = new SharpSpring();
    }

    public function testCanConnectToServer()
    {
        $this->assertInstanceOf(
            SharpSpring::class,
            $this->ss
        );
    }
}