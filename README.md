# UniqueHash

> Generates a random unique hash with length of 32 characters.

## Installation

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require subbysnake/unique-hash
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

## Usage

```php
$hash = \SubbySnake\UniqueHash\Generator::get();
```