# Only One Active Toggle for Filament

![Only One Active Toggle](content/plugins/images/ht3aa-only-one-active-toggle.png)

A Filament plugin that provides a toggle field that ensures only one toggle is active at a time within a repeater. This is achieved entirely client-side using Alpine.js, without any server-side requests.

## Features

- 🔄 **Client-Side Only**: Uses Alpine.js for all operations, no server requests needed
- 🎯 **Repeater Compatible**: Works seamlessly within Filament repeaters
- 🎨 **Theme Support**: Fully supports both light and dark themes
- 🛠️ **Customizable**: Supports all standard Filament toggle features
- ⚡ **Performance**: Lightweight and efficient implementation

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

### Example

Here's a complete example of how to use the field in a form:

```php
use Ht3aa\OnlyOneActiveToggle\Fields\OnlyOneActiveToggle;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\Repeater::make('items')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required(),
                    OnlyOneActiveToggle::make('is_active')
                        ->label('Set as Active')
                        ->helperText('Only one item can be active at a time'),
                ])
                ->columns(2),
        ]);
}
```

## How It Works

The plugin uses Alpine.js to:

1. Track the state of all toggles in the repeater
2. Automatically deactivate other toggles when one is activated
3. Handle all state changes client-side

## Requirements

- PHP 8.1+
- Filament 3.x
- Alpine.js (included with Filament)

## Support

If you find a bug or have a feature request, please open an issue on [GitHub](https://github.com/ht3aa/only-one-active-toggle-filament/issues).

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).
