<?php

namespace Ht3aa\OnlyOneActiveToggle\Fields;

use Filament\Forms\Components\Toggle;

// this class should be used inside a repeator class in order to work for now
class OnlyOneActiveToggle extends Toggle
{
    protected string $view = 'only-one-active-toggle::only-one-active-toggle';
}
