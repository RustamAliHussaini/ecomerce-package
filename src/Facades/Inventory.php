<?php

namespace Ramaki\Inventory\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ramaki\Inventory\Inventory
 */
class Inventory extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ramaki\Inventory\Inventory::class;
    }
}
