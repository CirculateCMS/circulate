title: Getting Started
template: doc
---
## Requirements

* A web server: Apache, Nginx, or IIS
* PHP 7.1+
* URL Rewriting enabled (mod_rewrite, try_files, etc)

## Install Circulate

To install circulate simply [download the latest release](https://github.com/dev7studios/circulate) from GitHub or create a new project using composer:

```
composer create-project dev7studios/circulate site
```

Next, make sure the `/_storage` directory is writable:

```
cd site
chmod -R 755 ./_storage
```

Then you can run a simple PHP server by running:

```
php -S localhost:8000
```

You should now be able to reach your local server at [http://localhost:8000](http://localhost:8000).

## Next

Your Circulate site should now be up and running! Next you should [find out how Circulate routing works](/docs/routing).