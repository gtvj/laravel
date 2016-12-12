# Laravel

## Notes from learning Laravel

Use a combination of this README.md file and individual commit messages to see related notes. This used Laravel Homestead. See my Linux repository for instructions on setting that up with VirtualBox and Vagrant.

## Artisan

* `php artisan` shows related commands
* `php artisan help make:controller` shows help related to the Controller generator
* `php artisan tinker` 

## Working with CSS and JavaScript

* `gulp` and `gulp --production` (the latter performs minification).
* Comes with a `gulp`
* Elixir for Gulp provides pre-defined mixins for working with JavaScript and CSS in Laravel. Does lots of things (including running shell scripts). There is also an `elixir()` method that can be used in views

## Working with data

1. Create migration `php artisan make:migration create_customers_table --create=customers`
2. Go into the created migration file (within database/migrations) and set the columns etc.
3. Run the migration with `php artisan migrate`
    * `php artisan tinker` can be used to populate/manipulate and tinker with the created tables
4. Make a related model with `php artisan make:model Customer`



