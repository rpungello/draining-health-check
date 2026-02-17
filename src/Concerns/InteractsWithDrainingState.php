<?php

namespace Rpungello\DrainingHealthCheck\Concerns;

use Throwable;

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
            try {
                $this->removeDrainingFile();
            } catch (Throwable) {
                // Do nothing
            }
        }
    }

    public function clearDrainingState(): void
    {
        try {
            $this->removeDrainingFile();
        } catch (Throwable) {
            // Do nothing
        }
    }

    protected function removeDrainingFile(): void
    {
        unlink($this->pathToDrainingFile());
    }

    protected function pathToDrainingFile(): string
    {
        return storage_path('app/draining');
    }
}
