

## About Boostrap 4 Wire Modal
Wire Elements Modal is a Livewire component inspired by *wire-elements/modal*
## Installation

Click the image above to read a full article on using the Wire Elements modal package or follow the instructions below.

To get started, require the package via Composer:

```
composer require scchethu/bs-wire-modal
```

## Livewire directive
Add the Livewire directive `@livewire('livewire-bs4-ui-modal')` directive to your template.
```html
<html>
<body>
    <!-- content -->

    @livewire('livewire-bs4-ui-modal')
</body>
</html>
```

## Alpine
Livewire Elements Modal requires [Alpine](https://github.com/alpinejs/alpine). You can use the official CDN to quickly include Alpine:

```html
<!-- Alpine v2 -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<!-- Alpine v3 -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## BS4
The base modal is made with BS4. If you use a different CSS framework I recommend that you publish the modal template and change the markup to include the required classes for your CSS framework.
```shell
php artisan vendor:publish --tag=livewire-bs4-ui-modal-views
```


## Creating a modal
You can run `php artisan make:livewire EditUser` to make the initial Livewire component. Open your component class and make sure it extends the `ModalComponent` class:

```php
<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditUser extends Component
{
    public function render()
    {
        return view('livewire.edit-user');
    }
}
```

## Opening a modal
To open a modal you will need to emit an event. To open the `EditUser` modal for example:

```html
<!-- Outside of any Livewire component -->
<button onclick="Livewire.emit('openModal', 'edit-user','title')">Edit User</button>

<!-- Inside existing Livewire component -->
<button wire:click="$emit('openModal', 'edit-user','title')">Edit User</button>

<!-- Taking namespace into account for component Admin/Actions/EditUser -->
<button wire:click="$emit('openModal', 'admin.actions.edit-user','title')">Edit User</button>
```


## Security
If you are new to Livewire I recommend to take a look at the [security details](https://laravel-livewire.com/docs/2.x/security). In short, it's **very important** to validate all information given Livewire stores this information on the client-side, or in other words, this data can be manipulated. Like shown in the examples above, use the `Guard` facade to authorize actions.


## License
Boostrap 4 Wire Modal is open-sourced software licensed under the [MIT license](LICENSE.md).
