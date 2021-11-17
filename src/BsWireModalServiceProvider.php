<?php

namespace BsWireModal;

use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BsWireModalServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-bs4-ui-modal')
            //->hasConfigFile()
            ->hasViews();
    }

    public function bootingPackage(): void
    {
        Livewire::component('livewire-bs4-ui-modal', BsModal::class);

        View::composer('livewire-bs4-ui-modal::modal', function ($view) {

        });
    }
}