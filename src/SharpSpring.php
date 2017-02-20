<?php

namespace thepixelage\SharpSpring;

use Dotenv\Dotenv;

class SharpSpring
{
    private $accountID;
    private $secretKey;

    public function __construct()
    {
        $dotenv = new Dotenv(__DIR__ . '/../');
        $dotenv->load();

        $this->accountID = getenv('SS_ACCOUNT_ID');
        $this->secretKey = getenv('SS_SECRET_KEY');
    }

    public function getSecretKey()
    {
        return $this->secretKey;
    }
}