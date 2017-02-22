<?php

namespace thepixelage\SharpSpring\Tests;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;
use thepixelage\SharpSpring\SharpSpring;
use thepixelage\SharpSpring\models\Lead;

class LeadsTest extends TestCase
{
    private $ss;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        (new Dotenv(__DIR__ . '/../'))->load();
        $this->ss = new SharpSpring(getenv('SS_ACCOUNT_ID'), getenv('SS_SECRET_KEY'), getenv('SS_API_VERSION'));
    }

    public function testCanGetLead()
    {
        $lead = $this->ss->getLead('109757632515');

        $this->assertInstanceOf(
            Lead::class,
            $lead
        );
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
