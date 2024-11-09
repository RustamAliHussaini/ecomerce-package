<?php

namespace RustamAliHussaini\EcommerceCompletionPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RustamAliHussaini\EcommerceCompletionPackage\EcommerceCompletionPackage
 */
class EcommerceCompletionPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RustamAliHussaini\EcommerceCompletionPackage\EcommerceCompletionPackage::class;
    }
}
