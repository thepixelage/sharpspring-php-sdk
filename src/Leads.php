<?php

namespace thepixelage\SharpSpring;

use thepixelage\SharpSpring\helpers\Factory;

class Leads
{
    public static function getLeads(SharpSpring $ss)
    {
        $params = [
            'where'  => [],
            'limit'  => 500,
        ];

        $leads = [];

        $response = $ss->callMethod('getLeads', $params);
        if (!$response->hasError()) {

            foreach ($response->getResult()->lead as $lead) {

                $leads[] = Factory::createLead($lead);

            }

        }

        return $leads;
    }
}