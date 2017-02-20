<?php

namespace thepixelage\SharpSpring\Tests;

use PHPUnit\Framework\TestCase;
use thepixelage\SharpSpring\SharpSpring;
use thepixelage\SharpSpring\models\Lead;

class LeadsTest extends TestCase
{
    private $ss;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->ss = new SharpSpring();
    }

    public function testCanGetLeads()
    {
        $leads = $this->ss->getLeads();

        $this->assertInternalType(
            'array',
            $leads
        );

        if (count($leads) > 0) {

            $this->assertInstanceOf(
                Lead::class,
                $leads[0]
            );

        }
    }
}
