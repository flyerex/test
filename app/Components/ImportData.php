<?php
namespace App\Components;
use GuzzleHttp\Client;
class ImportData
{
    public $client;
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com/todos/1',
            // You can set any number of default request options.
            'timeout'  => 12.0,
            'verify'=>false
        ]);
    }
}
?>