# Jaxion Bootstrap

A standardized, organized, object-oriented foundation for building high-quality WordPress Plugins.

## Requirements ##

Jaxion Bootstrap comes with these requirements:

1. PHP 5.3+
2. [composer], for back-end libraries.
3. [npm], for build tools.
3. [Bower], for front-end libraries.
4. [gulp], for project builds

## Features

* New plugins can be generated with `composer create-project intraxia/jaxion-bootstrap <target_dir>`.
* Jaxion Bootstrap comes with [Jaxion] built in, .
* The app is loaded into a singleton so third-party developers can manipulate the hooks.
* The project includes a `.pot` file as a starting point for internationalization.
* The unit tests are scaffolded and ready to go, based on `wp scaffold plugin-tests`, and good defaults for [Travis] & [Scrutinizer].

## Installation

The plugin can be developed in your `wp-content` folder directly. Run `gulp` to make the minified and concatenated files and begin the watch process. Whenever the scripts or styles change, gulp will recompile them into their respective css and js files.

When you want to provide a version to distribute, run `gulp build` and distribute the resulting .zip file.

## Prior Art

1. [WordPress-Plugin-Boilerplate]
1. [Pimple]
1. [Laravel]

  [composer]: https://getcomposer.org/
  [npm]: https://www.npmjs.org/
  [Bower]: http://bower.io/
  [Gulp]: http://gulpjs.com/
  [Jaxion]: https://github.com/intraxia/jaxion
  [Travis]: https://travis-ci.org/
  [Scrutinizer]: https://scrutinizer-ci.com/
  [WordPress-Plugin-Boilerplate]: https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate
  [Laravel]: http://laravel.com/
  [Pimple]: http://pimple.sensiolabs.org/
