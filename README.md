# OnlyOneActiveToggle for Filament

A Filament plugin that provides a toggle field that ensures only one toggle is active at a time within a repeater.

## Installation

You can install the package via composer:

```bash
composer require ht3aa/only-one-active-toggle
```

## Usage

This field is designed to be used inside a Filament repeater. When one toggle is activated, all other toggles in the same repeater will be automatically deactivated.

```php
use Ht3aa\OnlyOneActiveToggle\Fields\OnlyOneActiveToggle;

Forms\Components\Repeater::make('items')
    ->schema([
        OnlyOneActiveToggle::make('is_active')
            ->label('Active Item'),
        // ... other fields
    ])
```

## Features

- Works within Filament repeaters
- Automatically deactivates other toggles when one is activated
- Maintains the same styling and functionality as Filament's default toggle
- Supports all standard toggle features (colors, icons, etc.)

## Requirements

- PHP 8.1+
- Filament 3.x
