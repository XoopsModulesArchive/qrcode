<?php


include_once dirname(dirname(dirname(dirname(__FILE__)))) . '/mainfile.php';
include_once XOOPS_ROOT_PATH . '/include/cp_functions.php';
include("../../../include/cp_header.php");
include_once XOOPS_ROOT_PATH . "/modules/" . $xoopsModule->getVar("dirname") . "/class/admin.php";

//defined("FRAMEWORKS_ART_FUNCTIONS_INI") || include_once XOOPS_ROOT_PATH.'/Frameworks/art/functions.ini.php';
//load_functions("admin");

$myts = MyTextSanitizer::getInstance();

if ($xoopsUser) {
    $moduleperm_handler =& xoops_gethandler('groupperm');
    if (!$moduleperm_handler->checkRight('module_admin', $xoopsModule->getVar( 'mid' ), $xoopsUser->getGroups())) {
        redirect_header(XOOPS_URL, 1, _NOPERM);
        exit();
    }
} else {
    redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
    exit();
}

if (!isset($xoopsTpl) || !is_object($xoopsTpl)) {
	include_once(XOOPS_ROOT_PATH."/class/template.php");
	$xoopsTpl = new XoopsTpl();
}

xoops_cp_header();

// Define Stylesheet and JScript
$xoTheme->addStylesheet( XOOPS_URL . "/modules/" . $xoopsModule->getVar("dirname") . "/css/admin.css" );
//$xoTheme->addJavaScript( XOOPS_URL . "/modules/" . $xoopsModule->getVar("dirname") . "/admin/switcher.js" );

//Load languages
xoops_loadLanguage('admin', $xoopsModule->getVar("dirname"));
xoops_loadLanguage('modinfo', $xoopsModule->getVar("dirname"));
xoops_loadLanguage('main', $xoopsModule->getVar("dirname"));
?>