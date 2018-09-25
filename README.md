# Flickerleap code sniffer

This project contains rulesets to be used with phpcs https://github.com/squizlabs/PHP_CodeSniffer

## Installation

```bash
$ composer global require squizlabs/php_codesniffer flickerleap/phpcs
```

```bash
$ ~/.composer/vendor/bin/phpcs --config-set installed_paths ~/.composer/vendor/flickerleap/phpcs/src/Standards
```

## Usage

```bash
$ ~/.composer/vendor/bin/flickerleap/phpcs --standard=flickerleap --extensions=php path/to/src
```

## Rules

Effort has been made to follow Laravel convention as closely as possible.

- All PSR2 rules
- Require function docblocks
- Require line endings and lenght of 120
- Force array indentation and new syntax
- Force statements in conditions
- Dissallow statements in conditions
- Dissallow fix me and todos
- Force camel case variable names
- Force indentation
