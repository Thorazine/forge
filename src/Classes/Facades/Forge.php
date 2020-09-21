<?php

namespace Thorazine\Forge\Classes\Facades;

class Forge
{
    public function __call(string $name, array $arguments)
    {
        $class = 'Thorazine\Forge\Calls\\'.$name;
        if(class_exists($class)) {
            return new $class;
        }
    }
}
