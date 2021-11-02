<h1 align=center>moderntv / mstyle</h1>

<p align=center>
   📺 PHP quality assurance for ModernTV projects.
</p>

<p align=center>
  <a href="https://github.com/moderntv/mstyle/actions"><img src="https://badgen.net/github/checks/moderntv/mstyle/master?cache=300"></a>
  <a href="https://coveralls.io/r/moderntv/mstyle"><img src="https://badgen.net/coveralls/c/github/moderntv/mstyle?cache=300"></a>
  <a href="https://packagist.org/packages/moderntv/mstyle"><img src="https://badgen.net/packagist/dm/moderntv/mstyle"></a>
  <a href="https://packagist.org/packages/moderntv/mstyle"><img src="https://badgen.net/packagist/v/moderntv/mstyle"></a>
  <a href="https://packagist.org/packages/moderntv/mstyle"><img src="https://badgen.net/packagist/php/moderntv/mstyle"></a>
  <a href="https://github.com/moderntv/mstyle"><img src="https://badgen.net/github/license/moderntv/mstyle"></a>
</p>

<p align=center>
🕹 <a href="https://f3l1x.io">f3l1x.io</a> | 💻 <a href="https://github.com/f3l1x">f3l1x</a> | 🐦 <a href="https://twitter.com/xf3l1x">@xf3l1x</a>
</p>

-----

## Usage

To install latest version of `moderntv/mstyle` use [Composer](https://getcomposer.com).

```bash
composer require moderntv/mstyle
```

## Documentation

1. Install this package.
2. Create `ruleset.xml` file.

  ```xml
  <?xml version="1.0" encoding="UTF-8"?>
  <ruleset>
    <rule ref="./vendor/moderntv/mstyle/src/codesniffer.xml"/>
  </ruleset>
  ```

3. Run codesniffer.

  ```sh
  vendor/bin/phpcs --cache=var/codesniffer.dat --standard=ruleset.xml app
  ```

## Development

This package is currently maintained by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>
