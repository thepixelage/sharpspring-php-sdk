<?php

namespace thepixelage\SharpSpring;

use thepixelage\SharpSpring\helpers\Factory;

class Events
{
    public static function getEvents(SharpSpring $ss)
    {
        $params = [
            'where'  => [],
            'limit'  => 500,
        ];

        $events = [];

        $response = $ss->callMethod('getEvents', $params);
        if (!$response->hasError()) {

            foreach ($response->getResult()->event as $event) {

                $events[] = Factory::createEvent($event);

            }

        }

        return $events;
    }
}