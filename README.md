# UniqueHash

> Generates a random unique hash.

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
$hash = \SubbySnake\UniqueHash\HashGenerator::get();	// random hash with length of 32 characters
$hash = \SubbySnake\UniqueHash\HashGenerator::get(12);	// random hash with length of 12 characters
```