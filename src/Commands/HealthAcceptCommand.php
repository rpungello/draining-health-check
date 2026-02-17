<?php

namespace Rpungello\DrainingHealthCheck\Commands;

use Illuminate\Console\Command;
use Rpungello\DrainingHealthCheck\Concerns\InteractsWithDrainingState;

class HealthAcceptCommand extends Command
{
    use InteractsWithDrainingState;

    public $signature = 'health:accept';

    public $description = 'Mark this instance as accepting connections';

    public function handle(): int
    {
        $this->setDraining(false);

        return self::SUCCESS;
    }
}
