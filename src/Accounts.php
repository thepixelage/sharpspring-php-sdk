<?php

namespace thepixelage\SharpSpring;

use thepixelage\SharpSpring\helpers\Factory;

class Accounts
{
    public static function getAccounts(SharpSpring $ss)
    {
        $params = [
            'where' => [],
            'limit' => 500,
        ];

        $accounts = [];

        $response = $ss->callMethod('getAccounts', $params);
        if (!$response->hasError()) {

            foreach ($response->getResult()->account as $account) {

                $accounts[] = Factory::createAccount($account);

            }

        }

        return $accounts;
    }
}