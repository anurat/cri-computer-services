<?php

namespace CRI\Facades;

use Illuminate\Support\Facades\Facade;

class ComputerServices extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'computerServices';
    }
}
