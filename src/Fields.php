<?php

namespace thepixelage\SharpSpring;

use thepixelage\SharpSpring\helpers\Factory;

class Fields
{
    public static function getFields(SharpSpring $ss)
    {
        $params = [
            'where'  => [],
            'limit'  => 500,
        ];

        $fields = [];

        $response = $ss->callMethod('getFields', $params);
        if (!$response->hasError()) {

            foreach ($response->getResult()->field as $field) {

                $fields[] = Factory::createField($field);

            }

        }

        return $fields;
    }
}