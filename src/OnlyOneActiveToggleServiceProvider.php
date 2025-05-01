<?php

namespace Ht3aa\OnlyOneActiveToggle;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OnlyOneActiveToggleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('only-one-active-toggle')
            ->hasViews('only-one-active-toggle');
    }
}
