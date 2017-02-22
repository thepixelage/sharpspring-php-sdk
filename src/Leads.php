<?php

namespace thepixelage\SharpSpring;

use thepixelage\SharpSpring\helpers\Factory;

class Leads
{
    public static function getLead(SharpSpring $ss, $id)
    {
        $params = [
            'id' => $id
        ];

        $lead = null;

        $response = $ss->callMethod('getLead', $params);
        if (!$response->hasError()) {

            $leads = $response->getResult()->lead;
            if (count($leads) > 0) {
                $lead = Factory::createLead($leads[0]);
            }

        }

        return $lead;
    }

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