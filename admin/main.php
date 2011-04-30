<?php
//  ------------------------------------------------------------------------ //
//  Author: Designburo.nl (info@designburo.nl)                               //
//  http://www.designburo.nl                                                 //
//  Project: QRcode v1.0                                                     //
//  ------------------------------------------------------------------------ //		
include '../../../include/cp_header.php';
// if the site has no language defined, turn to English default
if ( file_exists("../language/".$xoopsConfig['language']."/main.php") ) {
include "../language/".$xoopsConfig['language']."/main.php"; } else { include "../language/english/main.php"; }
include(XOOPS_ROOT_PATH.'/mainfile.php');
include_once XOOPS_ROOT_PATH."/modules/qrcode/qrcode.php";
xoops_cp_header();
$module_handler =& xoops_gethandler('module');
$versioninfo =& $module_handler->get($xoopsModule->getVar('mid'));
$version=$versioninfo->getInfo('version');
$description=$versioninfo->getInfo('description');
$author=$versioninfo->getInfo('author');
$license=$versioninfo->getInfo('license');
$licensefile=$versioninfo->getInfo('help');
$status=$versioninfo->getInfo('status');
$released=$versioninfo->getInfo('releasedate');
echo _QRCODE_DESCRIPTION;
echo '<BR><p>';
echo '<table style="border:1px solid #aaa;width:450px;"><tr>';
echo '<td align="center" rowspan="10" style="border-right:1px solid #aaa;"><img src="../images/logo.png"></td>';
echo '<td colspan="2" style="border-bottom:1px solid #aaa;" align="center" valign="middle"><b>'._MI_QRCODE_NAME.'</b></td></tr>';
echo '<tr><td style="border-bottom:1px dashed #aaa;">'._QRCODE_VERSION.'</td><td style="border-bottom:1px dashed #aaa;">: '.$version.'</td><tr>';
echo '<tr><td style="border-bottom:1px dashed #aaa;">'._QRCODE_AUTHOR.'</td><td style="border-bottom:1px dashed #aaa;">: <a href="http://www.designburo.nl">'.$author.'</a></td><tr>';
echo '<tr><td>'._QRCODE_RELEASEDATE.'</td><td>: '.$released.'</td><tr></table></p>';
xoops_cp_footer();
?>
