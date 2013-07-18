GSFileManager
=============

Adaption and improvement of the Free Web File Manager aka GSFileManager (http://freewebfilemanager.com/)

Parts of the original code are not good or not suitable for us. Here follows an incomplete list of our enhancements.

- Data sent to server is now optimal encoded.  Before, it was two times URL-encoded plus one time with HTML entities.
- Code style is getting better.  We begin to apply the Google [JavaScript][gjssg] and [HTML/CSS][ghcsg] Style Guides and for PHP an adopted [EAR Coding Standard][pcs].
- Better use of [jQuery][jq] i.e. discarding the use of deprecated/removed features and changing poor use of jQuery (e.g. `.html()` vs. `.text()`).
- PHP's low-level file system functions seems to need CP1252, therefore conversion added.
- Server now responses with JSON instead of JavaScript.
- Refactoring, e.g. extracting functions, renaming variables, splitting modules.
- German localization added.
- Typos fixed.

[gjssg]: http://google-styleguide.googlecode.com/svn/trunk/javascriptguide.xml "Google JavaScript Style Guide"
[ghcsg]: http://google-styleguide.googlecode.com/svn/trunk/htmlcssguide.xml "Google HTML/CSS Style Guide"
[pcs]: http://pear.php.net/manual/en/standards.php "PEAR Coding Standard"
[jq]: http://jquery.com/ "jQuery"
