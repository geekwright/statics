statics - a static content wrapper for XOOPS

Description
===========
Statics is a module that provides a static content wrapper XOOPS.

Statics brings XOOPS access control to legacy HTML content, and allows you to visually
integrate that content in your XOOPS system.

Configuration
=============
Each group can be assigned these permissions:

 - Static Content Directory - Full directory path for the static HTML contents, including trailing "/"
 - Default Page - Default page in static content directory, the file that will be displayed if no other is specified
 - Supress Header - Set to "Yes" to supress display normal system header, footer, menus, blocks, etc. when accessing the static content

Notes
=====
You can rename the statics module directory to any legal module name. You can install multiple versions of
statics, each with different directory names. No other changes are required to clone it.

With the default settings, statics will look in the content directory inside the statics
module directory. You can change it to point any directory that your webserver can access.
