<?php

namespace Rikudosama\Cinetpay;

use GuzzleHttp\Client;

class Cinetpay
{
    protected $apiKey;
    protected $siteId;
    protected $baseUrl;
    protected $client;

    public function __construct($apiKey, $siteId, $baseUrl)
    {
        $this->apiKey = $apiKey;
        $this->siteId = $siteId;
        $this->baseUrl = $baseUrl;
        $this->client = new Client(['base_uri' => $this->baseUrl]);
    }

    public function makePayment(array $data)
    {
        $response = $this->client->post('payment', [
            'json' => array_merge($data, [
                'apikey' => $this->apiKey,
                'site_id' => $this->siteId,
            ]),
        ]);

        return json_decode($response->getBody(), true);
    }

    // Ajoutez d'autres méthodes pour les autres endpoints de l'API Cinetpay
}