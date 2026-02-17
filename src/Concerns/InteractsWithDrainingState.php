<?php

namespace Rpungello\DrainingHealthCheck\Concerns;

trait InteractsWithDrainingState
{
    public function isDraining(): bool
    {
        return file_exists($this->pathToDrainingFile());
    }

    public function setDraining(bool $draining): void
    {
        if ($draining) {
            touch($this->pathToDrainingFile());
        } else {
            unlink($this->pathToDrainingFile());
        }
    }

    protected function pathToDrainingFile(): string
    {
        return storage_path('app/draining');
    }
}
