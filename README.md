<h1 align=center>mCODE</h1>

<p align=center>
   📺 PHP quality assurance for ModernTV projects.
</p>

<p align=center>
  <a href="https://github.com/moderntv/mcode/actions"><img src="https://badgen.net/github/checks/moderntv/mcode/master?cache=300"></a>
  <a href="https://coveralls.io/r/moderntv/mcode"><img src="https://badgen.net/coveralls/c/github/moderntv/mcode?cache=300"></a>
  <a href="https://packagist.org/packages/mcode/mcode"><img src="https://badgen.net/packagist/dm/mcode/mcode"></a>
  <a href="https://packagist.org/packages/mcode/mcode"><img src="https://badgen.net/packagist/v/mcode/mcode"></a>
  <a href="https://packagist.org/packages/mcode/mcode"><img src="https://badgen.net/packagist/php/mcode/mcode"></a>
  <a href="https://github.com/moderntv/mcode"><img src="https://badgen.net/github/license/moderntv/mcode"></a>
</p>

<p align=center>
🕹 <a href="https://f3l1x.io">f3l1x.io</a> | 💻 <a href="https://github.com/f3l1x">f3l1x</a> | 🐦 <a href="https://twitter.com/xf3l1x">@xf3l1x</a>
</p>

-----

## Usage

To install latest version of `mcode/mcode` use [Composer](https://getcomposer.com).

```bash
composer require mcode/mcode
```

## Documentation

### Codesniffer

1. Install this package.
2. Create `ruleset.xml` file.

  ```xml
  <?xml version="1.0" encoding="UTF-8"?>
  <ruleset>
    <rule ref="./vendor/mcode/mcode/src/codesniffer.xml"/>
  </ruleset>
  ```

3. Run codesniffer.

  ```sh
  vendor/bin/phpcs --cache=var/codesniffer.dat --standard=ruleset.xml app
  ```

### Phpstan

1. Install this package.
2. Create `phpstan.neon` file.

	```neon
	includes:
		- vendor/mcode/mcode/src/phpstan.neon
		- phpstan-baseline.neon

	parameters:
		level: 9
		phpVersion: 80200

		tmpDir: %currentWorkingDirectory%/temp/phpstan

		fileExtensions:
			- php
			- phpt

		paths:
			- app
	```

## Development

This package is currently maintained by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>
