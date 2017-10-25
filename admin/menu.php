<?php

defined('XOOPS_ROOT_PATH') or die("XOOPS root path not defined");

// get path to icons
$pathIcon32='';
if (class_exists('Xmf\Module\Admin', true)) {
    $pathIcon32 = \Xmf\Module\Admin::menuIconPath('');
}

$adminmenu=array();
// Index
$adminmenu[] = array(
    'title' => _MI_STATICS_ADMENU ,
    'link'  => 'admin/index.php' ,
    'icon'  => $pathIcon32.'home.png'
);
// About
$adminmenu[] = array(
    'title' => _MI_STATICS_ABOUT ,
    'link'  => 'admin/about.php' ,
    'icon'  => $pathIcon32.'about.png'
);
