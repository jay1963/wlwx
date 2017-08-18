fourpx-wms-laravel
============

A PHP package to connect to Wlwx's sms in an object-oriented manner, with a focus on intuitive usage.

Currently optimizing for Laravel Framework.

## Installation

1. `add the repositories in the composer.json:`

2. add the service provider to the providers array in config/app.php:
```
Jimmy\Wlwx\ServiceProvider::class,
```

There's no facades to add in config/app.php

3. Copy wlwx.php configuration file from src/config/wlwx.php to Laravel's config directory.
