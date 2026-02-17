<?php

namespace Rpungello\DrainingHealthCheck;

use Rpungello\DrainingHealthCheck\Concerns\InteractsWithDrainingState;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class DrainingHealthCheck extends Check
{
    use InteractsWithDrainingState;

    public function run(): Result
    {
        if ($this->isDraining()) {
            return Result::make()->failed('This instance is currently draining connections.');
        } else {
            return Result::make()->ok();
        }
    }
}
