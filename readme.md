# Helper functions:

- safe_array(array, ...keys)
Retrieve a key from the array, when you do not know for sure that $array is really an array. Can be used with multiple levels:
safe_array(array, level1, level2, etc)

- safe_in_array(val, array)
Check if a value is in array, when you do not know for sure that $array is an array

- id_in_collection(id, collection)
Check if an ID is present in a Eloquent collection

- error(msg)
Present an error message

- success(msg)
Present a success message

- display_messages()
Display the messages in HTML. In Blade, use: {!! display_messages() !!}

- display_success(msg)
Directly display a message in HTML. In Blade, use: {!! display_success('text') !!}

- display_error(msg)
Directly display a message in HTML. In Blade, use: {!! display_error('text') !!}

Messages can also be added by setting a session with key 'status'. This message will be printed as a success message.

# Laravel Bootstrap Alerts

One of the tasks I do repeatedly, is displaying Bootstrap success messages and alert messages. This is why I created this package. I want to easily display messages when a form is submitted, when a task is completed and in lots of other situations.

Ofcourse I can do something like this:

````
return redirect()->back()->with(['message' => 'A message to display']);
````

However, I wanted to create a different solution for this. This enables me, for example, to add multiple alerts in different parts of the code.

# Example

I have included the 3 types of Bootstrap alerts I use the most: danger (for alerts), success (for success messages) and info (obviously for informational messages). With this package, I can easily do the following:

````
success('A success message');
error('An error message');
info('An info message');
````

If you already use the `success`, `error` or `info` functions elsewhere in the code, I can also do the following:

````
<?php

use Eelcol\LaravelBootstrapAlerts\Facade\BootstrapAlerts;

BootstrapAlerts::addSuccess('A success message');
BootstrapAlerts::addError('An error message');
BootstrapAlerts::addInfo('An info message');
````

# Display the message

Edit your Blade file to display the messages in the place you want:

````
{!! display_bootstrap_alerts() !!}
````

Just include this simple line and your Bootstrap alerts will be displayed. Form validation errors by Laravel are automaticly also displayed in a single Laravel alert.

# Customize

Do you want to customize the HTML? Simply override the `alert.blade.php` file. Create a folder called `resources/views/vendor/laravel-bootstrap-alerts` and create a file `alerts.blade.php` in this folder. Copy the contents from the `alerts.blade.php` file from this package, and make adjustments as wanted.


# Installation

Require this package with composer.

````
composer require eelcol/laravel-bootstrap-alerts
````

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

````
Eelcol\LaravelBootstrapAlerts\AkertsServiceProvider::class,
````