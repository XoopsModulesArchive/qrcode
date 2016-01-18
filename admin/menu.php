<?php
//  ------------------------------------------------------------------------ //
//  Author: Designburo.nl (info@designburo.nl)                               //
//  http://www.designburo.nl                                                 //
//  Project: QRcode v1.0                                                     //
//  ------------------------------------------------------------------------ //	

$adminmenu = array();

$i = 1;
$adminmenu[$i]["title"] = _MI_QRCODE_HOME;
$adminmenu[$i]["link"]  = "admin/index.php";
$adminmenu[$i]["icon"] = "images/admin/home.png";
$i++;
$adminmenu[$i]['title'] = _MI_QRCODE_NAME;
$adminmenu[$i]['link'] = "admin/main.php";
$adminmenu[$i]['desc'] = 'QRCodes 4 XOOPS';
$adminmenu[$i]['icon'] = "images/admin/qrcode.png";
$i++;
$adminmenu[$i]["title"] = _MI_QRCODE_ABOUT;
$adminmenu[$i]["link"]  = "admin/about.php";
$adminmenu[$i]["icon"] = "images/admin/about.png";

// $adminmenu[2]['title'] = _MI_QRCODE_HELP;
// $adminmenu[2]['link'] = "admin/help.php";
// $adminmenu[2]['desc'] = 'Help on QRCode';
// $adminmenu[2]['icon'] = "images/admin/help.png";
?>