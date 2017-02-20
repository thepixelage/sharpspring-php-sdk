<?php

namespace thepixelage\SharpSpring\Tests;

use PHPUnit\Framework\TestCase;

use thepixelage\SharpSpring\Account;
use thepixelage\SharpSpring\Lead;
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

    public function testCanGetAccounts()
    {
        $accounts = $this->ss->getAccounts();

        $this->assertInternalType(
            'array',
            $accounts
        );

        if (count($accounts) > 0) {

            $this->assertInstanceOf(
                Account::class,
                $accounts[0]
            );

        }
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