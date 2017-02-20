<?php
declare(strict_types=1);
namespace thepixelage\SharpSpring;

use Dotenv\Dotenv;

class SharpSpring
{
    private $accountId;
    private $secretKey;
    private $apiVersion = 'v1';
    private $apiURLPrefix = 'https://api.sharpspring.com/pubapi/';

    public function __construct()
    {
        (new Dotenv(__DIR__ . '/../'))->load();
        $this->accountId = getenv('SS_ACCOUNT_ID');
        $this->secretKey = getenv('SS_SECRET_KEY');
        $this->apiVersion = getenv('SS_API_VERSION') ? getenv('SS_API_VERSION') : $this->apiVersion;
    }

    public function getApiUrl()
    {
        $query = http_build_query(array('accountID' => $this->accountId, 'secretKey' => $this->secretKey));
        return sprintf('%s%s/?%s', $this->apiURLPrefix, $this->apiVersion, $query);
    }

    public function doPostRequest($method, $params)
    {
        $data = [
            'id'     => session_id(),
            'method' => $method,
            'params' => $params,
        ];

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

        return Response::createFromJson($result);
    }

    public function getLeads()
    {
        $params = [
            'where'  => [],
            'limit'  => 500,
        ];

        $leads = [];

        $response = $this->doPostRequest('getLeads', $params);
        if (!$response->hasError()) {

            foreach ($response->getResult()->lead as $lead) {

                $leads[] = Factory::createLead($lead);

            }

        }

        return $leads;
    }

    public function getAccounts()
    {
        $params = [
            'where' => [],
            'limit' => 500,
        ];

        $accounts = [];

        $response = $this->doPostRequest('getAccounts', $params);
        if (!$response->hasError()) {

            foreach ($response->getResult()->account as $account) {

                $accounts[] = Factory::createAccount($account);

            }

        }

        return $accounts;
    }
}