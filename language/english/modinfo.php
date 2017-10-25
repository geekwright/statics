<?php
// Module Info

if (defined('_MI_STATICS_NAME')) {
    return;
}

define('_MI_STATICS_NAME', 'Static Content');
define('_MI_STATICS_DESC', 'Incorporate static HTML pages in XOOPS');

define('_MI_STATICS_ADMENU', 'Home');
define('_MI_STATICS_ABOUT', 'About');

// config options

define('_MI_STATICS_SERVER_PATH', 'Static Content Directory');
define('_MI_STATICS_SERVER_PATH_DSC', 'Full directory path for the static HTML contents.');

define('_MI_STATICS_DEFAULT_PAGE', 'Default Page');
define('_MI_STATICS_DEFAULT_PAGE_DSC', 'Default page in static content directory.');

define('_MI_STATICS_SUPRESS_HEADER', 'Supress Header');
define('_MI_STATICS_SUPRESS_HEADER_DSC', 'Supress display normal system header, footer, menus, blocks, etc.');
