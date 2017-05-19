# Grav Vue Example Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of this plugin.**

The **Vue Example** Plugin is for [Grav CMS](http://github.com/getgrav/grav). use vue in front end

## Installation

Installing the Vue Example plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

~~### GPM Installation (Preferred)~~

~~The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:~~

   ~~bin/gpm install vue-example~~

~~This will install the Vue Example plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/vue-example`.~~

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `vue-example`. You can find these files on [GitHub](https://github.com/elvis/grav-plugin-vue-example) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/vue-example
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/vue-example/vue-example.yaml` to `user/config/plugins/vue-example.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Usage
```
cd \path\to\this\plugin
npm run build
```

## To Do

- [ ] Future plans, if any

