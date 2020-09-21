<?php

namespace Thorazine\Forge\Classes;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Exception;
use StdClass;
use Request;
use Log;
use App;

class Connect
{
    protected $method = 'get';
    protected $path = '';
    private $child;

    public function __construct($child)
    {
        $this->child = $child;
        $this->method = strtolower($child->method);
        $this->path = $child->path;
    }


    public function get()
    {
        $client = new Client;
        $response = $client->{$this->method}(config('forge.base_url').$this->path, [
            'headers' => [
                'Authorization' => 'Bearer '.config('forge.api_key'),
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
            ]
        ]);

        if($response->getStatusCode() != 200) {
            throw new Exception(trans('forge::errors.no_connect'));
        }

        return $response->getBody()->getContents();
    }
}
