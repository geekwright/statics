<?php
use Xmf\Request;

include '../../mainfile.php';

/*
 *
 * Purpose: Retrieve and output a static html file from a directory on the server
 * with xoops style module access controls enforced
 *
 * This module can be cloned (copied to a new directory name) without change.
 *
 * Path to file is set in administration and can point to anywhere accesible
 * in the filesystem
 *
 * Usage: index.php?qp=filename
 * This loads filename from the predefined path and echoes it to the output.
 *
 * Before output the body of the file is checked for href="filename" type references
 * which are converted to href="index.php?qp=filename".
 * Full URLs, ie href="http://example.com/" are not changed.
 *
 * Also see 'cloneme.php' for a simple php wrapper for single pages
 *
 */

// utility functions
function cleaner($string)
{
    $rstring = '';
    // if we have anything suspicious, return empty string
    if (stripos($string, "\\") === false) {
        if (stripos($string, "..") === false) {
            if (stripos($string, "//") === false) {
                if (stripos($string, ":") === false) {
                    $rstring = $string;
                }
            }
        }
    }

    return $rstring;
}

// get our parameters
$supressheader = $GLOBALS['xoopsModuleConfig']['supress_header'];
if (!$supressheader) {
    include XOOPS_ROOT_PATH . '/header.php';
    /** @var $xoTheme xos_opal_Theme */
    $xoTheme->addStylesheet(XOOPS_URL.'/modules/'.$xoopsModule->getVar('dirname').'/module.css');
}

$qp = Request::getString('qp', $GLOBALS['xoopsModuleConfig']['default_page']);
$qp=cleaner($qp);

// get our preferences and apply some sanity checks
$serverpath = $GLOBALS['xoopsModuleConfig']['server_path'];

// if somehow we have left the defined server path, return to default
$fullpath = realpath($serverpath.$qp);
if (substr($fullpath, 0, strlen($serverpath))!=$serverpath) {
    $qp='';
}

$body = '';
if ($qp!="" && $serverpath !="" && file_exists($serverpath.$qp)) {
    $body=file_get_contents($serverpath.$qp);
    // try to fix up links within the same directory in the document
    $body=preg_replace('|href=[\'"](?!#)(?!http:)(?!mailto:)(?!ftp:)([^\'"]*)[\'"]|', 'href="index.php?qp=\1"', $body);
} elseif ($qp === $GLOBALS['xoopsModuleConfig']['default_page']) {
    // default page is not available - configuration error?
    $body = _MD_STATICS_ERROR_PAGE;
} else {
// bad link? Drop back to index
    redirect_header(XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname') . '/index.php', 3, _MD_STATICS_NOT_FOUND);
}

echo $body;
if (!$supressheader) {
    include XOOPS_ROOT_PATH . '/footer.php';
}
