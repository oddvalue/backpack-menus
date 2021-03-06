# WIP: Backpack for Laravel Menu CRUD

THIS PACKAGE IS A WORK IN PROGRESS AND NOT PRODUCTION READY

Construct and manage navigation menus in Backpack 4.1+

Add, edit, reorder, nest, rename menu items and link them to a model, external link or custom internal link.

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

<!-- vscode-markdown-toc -->
* [Installation](#Installation)
* [Usage](#Usage)

<!-- vscode-markdown-toc-config
	numbering=false
	autoSave=true
	/vscode-markdown-toc-config -->
<!-- /vscode-markdown-toc -->

## <a name='Installation'></a>Installation

Via Composer:

``` bash
$ composer require oddvalue/backpack-menus
```

[Optional] Add sidebar link in Backpack CMS:

``` bash
$ php artisan backpack:add-sidebar-content "<li class='nav-item'><a class='nav-link' href='{{ backpack_url('menu') }}'><i class='nav-icon la la-bars'></i> Menus</a></li>"
```

## <a name='Usage'></a>Usage

#TODO

[ico-version]: https://img.shields.io/packagist/v/oddvalue/backpack-menus.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/oddvalue/backpack-menus/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/oddvalue/backpack-menus.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/oddvalue/backpack-menus.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/oddvalue/backpack-menus.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/oddvalue/backpack-menus
[link-travis]: https://travis-ci.org/oddvalue/backpack-menus
[link-scrutinizer]: https://scrutinizer-ci.com/g/oddvalue/backpack-menus/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/oddvalue/backpack-menus
[link-downloads]: https://packagist.org/packages/oddvalue/backpack-menus
[link-author]: https://github.com/oddvalue
[link-contributors]: ../../contributors
