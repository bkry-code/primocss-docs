# PrimoCSS Framework

[![Build Status](https://travis-ci.org/primocss/primocss.svg?branch=develop)](https://travis-ci.org/primocss/primocss)
[![npm version](https://badge.fury.io/js/primocss.svg)](http://badge.fury.io/js/primocss)
[![Downloads](http://img.shields.io/npm/dm/primocss.svg)](https://www.npmjs.com/package/primocss)
[![Bower version](https://badge.fury.io/bo/primocss.svg)](https://badge.fury.io/bo/primocss)
[![devDependency Status](https://david-dm.org/primocss/primocss/dev-status.svg)](https://david-dm.org/primocss/primocss#info=devDependencies)

*PrimoCSS Framework, a light weight and mobile friendly SCSS / CSS framework for web & UI development.*

Primo is a framework which provides the prime starting blocks for any frontend requirements. Without supplying out of the box solutions or mantras to follow, it creates a solid architecture to kick-start any project.

### A great starting points

All the styles and tools have been created as the perfect starting point for your project. This isn't a full framework trying to impose design styles and mantras.

### Built with Sass & gulp

Using Gulp to create tests and build steps. Developing the source code using SASS and harnessing the powerful preprocessor for our css.

### Every view possible

With a powerful responsive grid. Any design is possible for all devices and effectively scales from handhelds to desktops.

---

## Hotlink

If you just need to include the latest compiled version of the PrimoCSS Framework, use our hosted version and fonts to begin your project.

``` html
<link href="http://primocss.com/build/css/primocss.min.css" rel="stylesheet" media="screen" type="text/css">
```

Now you're all done, your site or project has PrimoCSS at it's core and you can start to build simple but effective responsive designs. Follow on reading for our basic HTML template.

### Basic template

```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="http://primocss.com/build/css/primocss.min.css" rel="stylesheet" media="screen" type="text/css">
    </head>
    <body>
        <h1>Hello, world!</h1>
    </body>
</html>
```

---

## Package manager installation

PrimoCSS can be installed to any project using different package managers and obtain the SCSS source files. To pull down the latest release use the following commands with NPM, Yarn or Bower;

*npm:*

``` bash
npm install primocss --save-dev
```

*Yarn:*

``` bash
yarn add primocss
```

*Bower:*

```bash
bower install primocss --save-dev
```

---

## Local development

If you would like to help and improve this project in anyway or use the project and develop on it locally follow these commands to help. Start by downloading via [GitHub](https://github.com/primocss/primocss/archive/master.zip) or git cloning the project ```git clone git@github.com:primocss/primocss.git```.

Development requires the latest version of [Node.js](https://nodejs.org/en/). To setup, here is a list of commands to help you get started:


``` bash
npm install
gulp build
```

Once complete open the build folder to see the newly created CSS. You can override any of the global settings for PrimoCSS via [_settings.defaults.scss](https://github.com/primocss/primocss/blob/master/scss/_settings.defaults.scss) and [_settings.colors.scss](https://github.com/primocss/primocss/blob/master/scss/_settings.colors.scss). Any new SCSS created can be tested by running the gulp linter and keeps all styles in check.

```bash
gulp test
```

### Browser support

Using the latest technologies, PrimoCSS is aimed at new browsers and will attempt to degrade gracefully to previous versions.

- Chrome latest
- Firefox latest
- Opera latest
- Safari latest
- IE Latest

---

## License

Code licensed [MIT](https://github.com/primocss/primocss/blob/develop/LICENSE.md) by [Richard McCartney](http://www.github/richmccartney/)
