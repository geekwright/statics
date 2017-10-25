<?php
use Xmf\Module\Admin;

require dirname(__FILE__) . '/admin_header.php';

// get our preferences and apply some sanity checks
$serverpath      = $GLOBALS['xoopsModuleConfig']['server_path'];
$defaultpage     = $GLOBALS['xoopsModuleConfig']['default_page'];

$moduleAdmin = Admin::getInstance();
$moduleAdmin->displayNavigation('index.php');
$moduleAdmin->addConfigModuleVersion('system', 214);
$moduleAdmin->addConfigBoxLine($serverpath, 'folder');

if (file_exists($serverpath.$defaultpage)) {
    $moduleAdmin->addConfigAccept("The default page '{$serverpath}{$defaultpage}' exists");
} else {
    $moduleAdmin->addConfigError("The default page '{$serverpath}{$defaultpage}' does not exist");
}

$moduleAdmin->displayIndex();


require dirname(__FILE__) . '/admin_footer.php';
