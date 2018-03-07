title: Content
template: doc
---
## Writing Content

All of the [content files](/docs/routing) in Circulate share the same basic structure:

* A front-loaded YAML defenition
* A triple dash separator `---`
* Markdown page content

For example:

```
title: Hello World!
---
# Hello World!

Lorem ipsum dolor sit amet, consectetur adipiscing elit.
```

### YAML

The YAML allows you to specify certain meta data about the document, such as a `title` and the `template` to use etc. Below are all of the available settings and their defaults:

* `title` (Default: `""`) - The title of the document.
* `template` (Default: Depends on the context. See the [theming docs](/docs/theming)) - The template to use for this document.

### Markdown

If you need to learn Markdown or refresh your knowledge on the syntax, see [this guide](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) for more information.

## Next

Next you should [find out how to customize a theme](/docs/theming).
