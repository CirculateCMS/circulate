title: Theming
template: doc
---
## Themes

Circulate themes are stored in `/themes` and have a very simple folder structure. The only files actually required for a theme are the default Blade template files used by Circulate which are stored in the root folder of your theme. However, almost every theme will require supporting files (such as CSS and JS files) and Circulate leaves it up to you how you want to structure your theme folder with regard to supporting files.

The theme can be changed in [the settings](/docs/settings).

### Blade Templates

Circulate uses the powerful Blade templating framework developed as part of Laravel. For more information on how to use Blade templates you should check out the [Blade docs on Laravel](https://laravel.com/docs/5.6/blade).

The default template files required by every theme include:

* `index.blade.php` - Displays the front page of your site.
* `page.blade.php` - Displays the content for pages.
* `collection-index.blade.php` - Displays the index page for a collection.
* `collection-entry.blade.php` - Displays the content for a collection entry.
* `404.blade.php` - Displays the 404 error page.

Every template has certain variables made available to it so it can display your content:

* `$settings` - An array of (lower case) settings (see the [settings doc](/docs/settings)).
* `$slug` - The slug of the current document (e.g. `/about`)
* `$meta` - The YAML meta data of the current document (see the [content doc](/docs/content)).
* `$content` - The HTML content generated from the Markdown of the current document (see the [content doc](/docs/content)).
* `$pages` - An array of all of the pages for the site.
* `$collections` - An array of all of the collections for the site.
* `$collection` - An array of all of the entries for the current collection (only available in `collection-index.blade.php`).

The best way to get started customizing your theme is to check out the default theme that comes with Circulate and go from there.

## Next

Next you should [find out how to change the settings](/docs/settings).