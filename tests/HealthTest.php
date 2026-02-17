<?php

use Rpungello\DrainingHealthCheck\Concerns\InteractsWithDrainingState;

uses(InteractsWithDrainingState::class);

it('shows as healthy by default', function () {
    expect($this->isDraining())->toBeFalse();
});

it('can mark instance as draining', function () {
    $this->setDraining(true);

    expect($this->isDraining())->toBeTrue();
});

it('can return to accepting', function () {
    $this->setDraining(true);
    $this->setDraining(false);

    expect($this->isDraining())->toBeFalse();
});

it('can repeatedly mark instances as draining', function () {
    $this->setDraining(true);
    $this->setDraining(true);

    expect($this->isDraining())->toBeTrue();
});

it('can repeatedly mark instances as accepting', function () {
    $this->setDraining(false);
    $this->setDraining(false);

    expect($this->isDraining())->toBeFalse();
});
