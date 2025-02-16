<?php

namespace App\Console\Commands;

use App\Components\ImportData;
use Illuminate\Console\Command;

class ImportJsonCommand extends Command
{
    protected $signature = 'import:json-command';
    protected $description = 'get test data from json';
    public function handle()
    {
        $cli=new ImportData();
        $res=$cli->client->request('GET', '');
        
        dd(json_decode($res->getBody()->getContents()));
    }
}
