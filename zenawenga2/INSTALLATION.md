# Installation instructions

This theme uses bundler (http://bundler.io) for maintaining the used
ruby gem files of sass and compass in versions that are not the latest any more.

Please first run

```bundle install```

and then use

```bundle exec [compass compile]```

instead of ```compass compile``` only.

For production set environment to :production in config.rb (but don't commit this to the git repository :) ).

The latest tested versions are:  
- for sass 3.2.14  
- for compass 0.12.3

When this theme has been enabled in version 7.x-3.x or later (this includes upgrading from 7.x-2.x or earlier versions) do at least:

- disable the drupal main menu in theme settings
- activate the main menu as a block and put it in the header region
- add ```#block-system-main-menu``` to the block's css-selectors for choosing the responsive menu (or change from #main-menu)
- clear caches
