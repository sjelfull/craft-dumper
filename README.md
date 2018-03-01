# Dumper plugin for Craft CMS 3.x

A nicer dump()

![Icon](resources/icon.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require superbig/craft-dumper

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Dumper.

## Dumper Overview

![Screenshot](resources/screenshot@2x.png)

## Using Dumper

Call via the variable method:
```twig
{{ craft.dumper.dump(entries) }}
```

Call via the Twig filter:
```twig
{{ entries | dumper }}
```

or the shorter version:
```twig
{{ entries | dump }}
```

Brought to you by [Superbig](https://superbig.co)
