<?php

namespace Thorazine\Forge\Facades;

use Illuminate\Support\Facades\Facade;

class ForgeFacade extends Facade {


    protected static function getFacadeAccessor()
    {
        return 'forge';
    }
}
