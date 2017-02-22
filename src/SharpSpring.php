<?php

namespace thepixelage\SharpSpring;

use Dotenv\Dotenv;
use thepixelage\SharpSpring\helpers\Response;

class SharpSpring
{
    private $accountId;
    private $secretKey;
    private $apiVersion = 'v1';
    private $apiURLPrefix = 'https://api.sharpspring.com/pubapi/';

    public function __construct($accountId = null, $secretKey = null)
    {
        (new Dotenv(__DIR__ . '/../'))->load();
        $this->accountId = $accountId ? $accountId : getenv('SS_ACCOUNT_ID');
        $this->secretKey = $secretKey ? $secretKey : getenv('SS_SECRET_KEY');
        $this->apiVersion = getenv('SS_API_VERSION') ? getenv('SS_API_VERSION') : $this->apiVersion;
    }

    public function getApiUrl()
    {
        $query = http_build_query(array('accountID' => $this->accountId, 'secretKey' => $this->secretKey));
        return sprintf('%s%s/?%s', $this->apiURLPrefix, $this->apiVersion, $query);
    }

    public function getAccounts()
    {
        return Accounts::getAccounts($this);
    }

    public function getCampaigns()
    {
        return Campaigns::getCampaigns($this);
    }

    public function getEvents()
    {
        return Events::getEvents($this);
    }

    public function getFields()
    {
        return Fields::getFields($this);
    }

    public function getLeads()
    {
        return Leads::getLeads($this);
    }

    public function callMethod($method, $params)
    {
        $data = [
            'id'     => uniqid(),
            'method' => $method,
            'params' => $params,
        ];

        $result = $this->doPostRequest($data);

        return Response::createFromJson($result);
    }

    public function doPostRequest($data)
    {
        $data = json_encode($data);
        $ch = curl_init($this->getApiUrl());
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        ));

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}