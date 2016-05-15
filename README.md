# Laracore FormBuilder
Laravel 5.1 FormBuilder for Blade Engine, based on Bootstrap 3 and used in [Laracore CMS](https://github.com/khit93/laracore).

This FormBuilder allows for creation of HTML forms using objects and renders them using the [Laravel Collective FormBuilder](https://github.com/LaravelCollective/html) and the [Bootstrap CSS Framework](http://getbootstrap.com).

## Installation

	$> composer require "laracore/formbuilder:dev-master"

	$> composer update

Next, add your new provider to the `providers` array of `config/app.php`:

	Laracore\FormBuilder\FormBuilderServiceProvider::class,

Finally, add two class aliases to the `aliases` array of `config/app.php`:

	'Form' => Collective\Html\FormFacade::class,
	'Html' => Collective\Html\HtmlFacade::class,

We use the Facades from Laravel Collective.

## Usage

All Bootstrap recommendations for form and input elements are predefined in the provided classes and just have to be used or you can override them and provide your own.