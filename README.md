WP ragadjust
============

A simple plugin to include @nathanford's [ragadjust](https://github.com/nathanford/ragadjust) script on your WordPress web site.

This X-Raym's version has for purpose to avoid two bugs :
- Unbreakable space at the begining of a paragraph from https://github.com/nathanford/ragadjust/issues/8
- plugin is deleting words (prepositions) from http://wordpress.org/support/topic/plugin-is-deleting-words-prepositions

This is done by deleting the "prepositions" part of the original script, which is not usefull for non-english text.

The javascript is not minified in order to make modifications easier. Wordpress optimization plugins can be used if needed.
