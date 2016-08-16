# Installation

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

# Versions and branches

- Branch 7.x-2.x: actual live set theme.
- Branch 7.x-3.x: reflects the new 2016 CI.
- Branch 7.x-6.x: prepare for usage of Zen 7.x-6.x as a base theme, highly experimental.
- anything else: development or experimental
