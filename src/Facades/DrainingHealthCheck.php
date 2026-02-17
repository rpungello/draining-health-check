<?php

namespace Rpungello\DrainingHealthCheck\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rpungello\DrainingHealthCheck\DrainingHealthCheck
 */
class DrainingHealthCheck extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Rpungello\DrainingHealthCheck\DrainingHealthCheck::class;
    }
}
