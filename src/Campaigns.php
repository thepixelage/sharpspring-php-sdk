<?php

namespace thepixelage\SharpSpring;

use thepixelage\SharpSpring\helpers\Factory;

class Campaigns
{
    public static function getCampaigns(SharpSpring $ss)
    {
        $params = [
            'where' => [],
            'limit' => 500,
        ];

        $campaigns = [];

        $response = $ss->callMethod('getCampaigns', $params);
        if (!$response->hasError()) {

            foreach ($response->getResult()->campaign as $campaign) {

                $campaigns[] = Factory::createCampaign($campaign);

            }

        }

        return $campaigns;
    }
}