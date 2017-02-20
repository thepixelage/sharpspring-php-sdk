<?php

namespace thepixelage\SharpSpring;

class SharpSpring
{
    private $accountID;
    private $secretKey;

    public function __construct($accountID, $secretKey)
    {
        $this->accountID = $accountID;
        $this->secretKey = $secretKey;
    }
}