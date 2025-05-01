<?php

namespace Ht3aa\OnlyOneActiveToggle;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OnlyOneActiveToggleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('only-one-active-toggle')
            ->hasViews()
            ->hasAssets();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('only-one-active-toggle', __DIR__ . '/../resources/dist/only-one-active-toggle.css'),
        ], 'ht3aa/only-one-active-toggle');
    }
}
