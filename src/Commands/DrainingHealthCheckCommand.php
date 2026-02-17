<?php

namespace Rpungello\DrainingHealthCheck\Commands;

use Illuminate\Console\Command;

class DrainingHealthCheckCommand extends Command
{
    public $signature = 'draining-health-check';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
