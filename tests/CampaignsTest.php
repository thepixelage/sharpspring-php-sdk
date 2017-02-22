<?php

namespace thepixelage\SharpSpring\Tests;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;
use thepixelage\SharpSpring\SharpSpring;
use thepixelage\SharpSpring\models\Campaign;

class CampaignsTest extends TestCase
{
    private $ss;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        (new Dotenv(__DIR__ . '/../'))->load();
        $this->ss = new SharpSpring(getenv('SS_ACCOUNT_ID'), getenv('SS_SECRET_KEY'), getenv('SS_API_VERSION'));
    }

    public function testCanGetCampaigns()
    {
        $campaigns = $this->ss->getCampaigns();

        $this->assertInternalType(
            'array',
            $campaigns
        );

        if (count($campaigns) > 0) {

            $this->assertInstanceOf(
                Campaign::class,
                $campaigns[0]
            );

        }
    }
}
