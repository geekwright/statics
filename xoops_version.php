<?php

$modversion['dirname']             = basename(dirname(__FILE__)) ;
$modversion['name']                = _MI_STATICS_NAME;
$modversion['version']             = '1.0';
$modversion['description']         = _MI_STATICS_DESC;
$modversion['credits']             = 'Richard Griffith';
$modversion['license']             = 'GNU General Public License (GPL)';
$modversion['license_url']         = XOOPS_URL . '/modules/' . $modversion['dirname'] . '/docs/license.txt';
$modversion['official']            = 0;
$modversion['image']               = 'assets/images/icon.png';
$modversion['min_php']             = '5.3.7';
$modversion['min_xoops']           = '2.5.9';
$modversion['system_menu']         = 1;
$modversion['help']                = 'page=help';

// About stuff
$modversion['module_status']       = 'Final';
$modversion['release_date']        = '09/20/2017';

$modversion['developer_lead']      = 'geekwright';
$modversion['module_website_url']  = 'https://xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['developer_email']     = 'richard@geekwright.com';


// Admin things
$modversion['hasAdmin']            = 1;
$modversion['adminindex']          = 'admin/index.php';
$modversion['adminmenu']           = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 1;

// Search
$modversion['hasSearch'] = 0;

// comments
$modversion['hasComments'] = 0;
// notification
$modversion['hasNotification'] = 0;
// Config

$modversion['config'][] = array(
    'name'        => 'server_path',
    'title'       => '_MI_STATICS_SERVER_PATH',
    'description' => '_MI_STATICS_SERVER_PATH_DSC',
    'formtype'    => 'textbox',
    'valuetype'   => 'text',
    'default'     => __DIR__ . '/content/',
);

$modversion['config'][] = array(
    'name'        => 'default_page',
    'title'       => '_MI_STATICS_DEFAULT_PAGE',
    'description' => '_MI_STATICS_DEFAULT_PAGE_DSC',
    'formtype'    => 'textbox',
    'valuetype'   => 'text',
    'default'     => 'index.html',
);

$modversion['config'][] = array(
    'name'        => 'supress_header',
    'title'       => '_MI_STATICS_SUPRESS_HEADER',
    'description' => '_MI_STATICS_SUPRESS_HEADER_DSC',
    'formtype'    => 'yesno',
    'valuetype'   => 'int',
    'default'     => 1,
);
