<?php

namespace cpuch\Larabite\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \cpuch\Larabite\Larabite
 */
class Larabite extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \cpuch\Larabite\Larabite::class;
    }
}
