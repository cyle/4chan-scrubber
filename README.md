# oh no what have i done

## obligatory disclaimer

This will **definitely** display nasty images you probably won't want to see. 4chan's /b/ board is not for the squeamish. You've been warned. Seriously.

## ok, what is this?

Awhile ago I made [a 4chan /b/ image scrubber](http://cylegage.com/prototypes/4chan_scrubber/) using [Processing](http://www.processing.org/) and that was neat. I don't think it works anymore. But it was cool, it even got displayed in an art gallery for a few months, running continuously.

I wanted to make a new one, so I took a couple of hours out of my life and made this. Something simple and browser-based.

This is a very basic image scrubber which pulls images based on the wonderful [4chan API](https://github.com/4chan/4chan-API). However, that API does not support cross-domain calls via in-browser Javascript, so unfortunately to use this you need some kind of PHP server (for now). Should this change (I've [tweeted at moot about it](https://twitter.com/cylegage/status/466390557766733824)), I can probably make it entirely client-side browser-based and you won't need PHP. Let's hope.

It's probably a bad idea. But if Twitter and Tumblr both have [firehoses](http://blog.gnip.com/tumblr-api/), why can't 4chan's /b/?

## requirements

- PHP 5.3+ with php5-curl
- a good browser like Chrome
- this was built and tested on Mac OS Mavericks with [its built-in Apache/PHP services](http://ole.michelsen.dk/blog/setup-local-web-server-apache-php-macos-x-mavericks/)

## installation

1. Clone this repo somewhere.
2. Upload it to your PHP-powered server.
3. Visit it in a browser. Whoa. Works.

## settings to tweak

You can easily tweak the `fetch_rate` and `image_rate` in `index.html`. `fetch_rate` controls how often you're trying to get new images. By default, it's 30 seconds. Try not to go less than that, you probably don't need to. `image_rate` controls when a new image is loaded and displayed. By default, it's every 1 second, which provides a steady stream of nonsense.

If you want to use this for a 4chan board other than /b/, you'll need to edit `chan_url_base` in `index.html` and `$api_url` in `4chan.php`.