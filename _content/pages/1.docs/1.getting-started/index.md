title: Getting Started
template: doc
---
## Requirements

* A web server: Apache, Nginx, or IIS
* PHP 7.1+
* URL Rewriting enabled (mod_rewrite, try_files, etc)
* [Composer](https://getcomposer.org)

## Install Circulate

To create a new Circulate site use the `composer create-project` command:

```
composer create-project circulatecms/circulate site
```

Circulate will be installed to the directory you specify (`site` in this case).

Next, make sure the `/_storage` directory is writable:

```
cd site
chmod -R 755 ./_storage
```

If you are wanting to develop your circulate site locally, then you can run a simple PHP server by running:

```
php -S localhost:8000 -t public
```

You should now be able to reach your local server at [http://localhost:8000](http://localhost:8000).

## Next

Your Circulate site should now be up and running! Next you should [find out how Circulate routing works](/docs/routing).