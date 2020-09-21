<?php

namespace Thorazine\Forge\Calls;

use Thorazine\Forge\Classes\Connect;

class ListServers extends Connect
{
    protected $method = 'get';
    protected $path = 'servers';

    public function __construct()
    {
        parent::__construct($this);
    }

}
