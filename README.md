# BasicRoutingPHP

This is a basic routing example in plain PHP compatible with the MVC design pattern and using OOP.

## Setup

You will need to setup the `.htaccess` file to fit your needs.

:warning: __You should add some security by checking if the rewrite mode is available on your server__ :warning:

## How it works

The routes are set up in the `config/routes.txt` file in the format `routes+parameters Controller:method`.

This will only deal with one parameter per route. For example `/blog/42/foo/bar` will be read as `/blog/42`.

:smile: Happy Routing !
