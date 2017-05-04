# PrimoCSS Framework

[![Build Status](https://travis-ci.org/primocss/primocss.svg?branch=develop)](https://travis-ci.org/primocss/primocss)
[![npm version](https://badge.fury.io/js/primocss.svg)](http://badge.fury.io/js/primocss)
[![Downloads](http://img.shields.io/npm/dm/primocss.svg)](https://www.npmjs.com/package/primocss)
[![devDependency Status](https://david-dm.org/primocss/primocss/dev-status.svg)](https://david-dm.org/primocss/primocss#info=devDependencies)

*PrimoCSS Framework, a light weight and mobile friendly CSS framework for web & UI development.*

Primo is a framework which provides the prime starting blocks for any front-end requirements. Without supplying out of the box solutions or mantras to follow, it creates a solid architecture to kick-start any project.

## Hotlink

If you just need to include the latest compiled version of the PrimoCSS Framework, use our hosted version and fonts to begin your project.

``` html
<link href="http://primocss.com/build/css/primocss.min.css" rel="stylesheet" media="screen" type="text/css">
```

## Package manager installation

PrimoCSS can be installed to any project using a package manager. Pull down the latest version of the framework into your local ```node_modules``` folder and save it to your project's dependencies (```package.json```) as follows:

*npm:*

``` bash
npm install primocss --save-dev
```

*Yarn:*

``` bash
yarn add primocss
```

## Local development

If you wish to download or clone this repo run the following commands to setup and create the minified CSS:

``` bash
npm install
gulp build
```

You can override any of the global settings via [_settings.defaults.scss](scss/_settings.defaults.scss). Development requires the latest version of [Node.js](https://nodejs.org/en/).

## Browser support

- Chrome latest
- Firefox latest
- Opera latest
- Safari latest
- IE Latest

Using the latest technologies, PrimoCSS is aimed at new browsers and will attempt to degrade gracefully to previous versions.

## License

Code licensed [MIT](https://github.com/primocss/primocss/blob/develop/LICENSE.md) by [Richard McCartney](http://www.github/richmccartney/)
