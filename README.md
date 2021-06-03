# Easy Blog with Ali Ghasemzadeh and Wink

To have simple multi language blog you can use this repository.

## Installation

Only copy and paste codes.
Run `composer install`
After that run following commands
````
composer require themsaid/wink
php artisan wink:install
php artisan storage:link
php artisan wink:migrate
````

## Languages

You can add any languages you want by default I add English and Farsi.
For enabling languages that you need enable them in:
`config/laravellocalization.php`
Just uncomment language in supportedLocales array.

## Pages

When you add pages you will see links in navigation menu.

