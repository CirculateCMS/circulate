title: Settings
template: doc
---
## Settings

To override the default Circulate settings copy the `.env.example` file in the root of your project to `.env` and override the following default values:

* `SITE_TITLE` (Default: `""`)
* `THEME` (Default: `default`)
* `CACHE_PATH` (Default: `_storage`)
* `CONTENT_PATH` (Default: `_content`)
* `THEMES_PATH` (Default: `themes`)

Note: The `$settings` array available in [the theme templates](/docs/theming) contains these values but with lower case keys.