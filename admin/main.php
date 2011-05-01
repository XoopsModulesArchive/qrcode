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
if(isset($_GET['a']))
{

	switch ($_GET['a'])
	{
		
	case "url":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_URL_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_url.png" border="0" title="'._QRCODE_URL_D.'"></td><td>';
		echo '<h2>'._QRCODE_URL_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_URL_F_URL.'</td><td><input name="qr_url" type="text" size="50" /></td><td align=right><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr></table></td></tr></table>
    </div></form></div></div></td></tr></table>';
	break;
	
	case "email":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_EMAIL_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_email.png" border="0" title="'._QRCODE_EMAIL_D.'"></td><td>';
		echo '<h2>'._QRCODE_EMAIL_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_EMAIL_F_TO.'</td><td><input name="qr_email_to" type="text" size="50" /></td><td rowspan="3"align="right" valign="bottom"><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr>';
		echo '<tr>
    <td valign="middle">'._QRCODE_EMAIL_F_SUBJECT.'</td><td valign="top"><input name="qr_email_sub" type="text" size="50" /></td>
    </tr><tr>    
    <td>'._QRCODE_EMAIL_F_TXT.'</td><td><input name="qr_email_txt" type="text" size="50" /></td>
    </tr>
	
	';
	echo '</table></td></tr></table>
    </div></form></div></div></td></tr></table>';
	break;

	case "phone":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_PHONE_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_phone.png" border="0" title="'._QRCODE_PHONE_D.'"></td><td>';
		echo '<h2>'._QRCODE_PHONE_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_PHONE_F_NR.'</td><td><input name="qr_phone" type="text" size="50" /></td><td align=right><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr></table></td></tr></table>
    </div></form></div></div></td></tr></table>';
	break;

	case "sms":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_SMS_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_sms.png" border="0" title="'._QRCODE_SMS_D.'"></td><td>';
		echo '<h2>'._QRCODE_SMS_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_SMS_F_NR.'</td><td><input name="qr_sms_to" type="text" size="50" maxsize="140" /></td><td rowspan="3"align="right" valign="bottom"><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr>';
		echo '<tr>
    <td>'._QRCODE_SMS_F_TXT.'</td><td><input name="qr_sms_txt" type="text" size="50" /></td>
    </tr>
	
	';
	echo '</table></td></tr></table>
    </div></form></div></div></td></tr></table>';
	break;

	case "txt":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_TXT_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_txt.png" border="0" title="'._QRCODE_TXT_D.'"></td><td>';
		echo '<h2>'._QRCODE_TXT_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_TXT_F_TXT.'</td><td><textarea "qr_txt" cols="45" rows="3" /></textarea></td><td rowspan="3"align="right" valign="bottom"><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr>';

	echo '</table></td></tr></table>
    </div></form></div></div></td></tr></table>';
	break;
	
	case "geo":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_GEO_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_geo.png" border="0" title="'._QRCODE_GEO_D.'"></td><td>';
		echo '<h2>'._QRCODE_GEO_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_GEO_F_LA.'</td><td><input name="qr_latitude" type="text" size="50" /></td><td rowspan="3"align="right" valign="bottom"><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr>';
		echo '<tr>
    <td>'._QRCODE_GEO_F_LO.'</td><td><input name="qr_longtitude" type="text" size="50" /></td>
    </tr>
	
	';
	echo '</table></td></tr></table>
    </div></form></div></div></td></tr></table>';
	break;	
	
	
	case "bus":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_BUS_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_contact.png" border="0" title="'._QRCODE_BUS_D.'"></td><td>';
		echo '<h2>'._QRCODE_BUS_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_BUS_F_SNAME.'</td><td><input name="qr_c_anaam" type="text" size="50" /></td><td rowspan="17"align="right" valign="bottom"><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr>';
		echo '<tr><td>'._QRCODE_BUS_F_FNAME.'</td><td><input name="qr_c_vnaam" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_COMPANY.'</td><td><input name="qr_c_bedrijf" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_TITLE.'</td><td><input name="qr_c_functie" type="text" size="50" /></td></tr>';
		echo '<tr><td colspan=2><BR><BR></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_PHONE.'</td><td><input name="qr_c_phone" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_MOB.'</td><td><input name="qr_c_gsm" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_EMAIL.'</td><td><input name="qr_c_email" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_WEB.'</td><td><input name="qr_c_web" type="text" size="50" /></td></tr>';
		echo '<tr><td colspan=2><BR><BR></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_ADRES.'</td><td><input name="qr_c_adres" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_ZIP.'</td><td><input name="qr_c_zip" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_CITY.'</td><td><input name="qr_c_city" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_STATE.'</td><td><input name="qr_c_state" type="text" size="50" /></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_COUNTRY.'</td><td><input name="qr_c_land" type="text" size="50" /></td></tr>';
		echo '<tr><td colspan=2><BR><BR></td></tr>';
		echo '<tr><td>'._QRCODE_BUS_F_BDAY.'</td><td><select name="qr_c_gdag">';
		for($rt=1;$rt<=31;$rt++){
			echo "<option value=\"".sprintf('%02d',$rt)."\">".sprintf('%02d',$rt)."</option>\n";
		}
		echo '</select> / <select  name="qr_c_gmaand">';
		for($rt=1;$rt<=12;$rt++){
			echo "<option value=\"".sprintf('%02d',$rt)."\">".sprintf('%02d',$rt)."</option>\n";
		}
		echo '</select> / <select name="qr_c_gjaar">';
		for($rt=2011;$rt>=1920;$rt--){
			echo "<option value=\"".$rt."\">".$rt."</option>\n";
		}
		echo '</select></td></tr>';
	echo '</table></td></tr></table>
    </div></form></div></div></td></tr></table>';
	break;	

	}
	
	
	
	
}
else {




$module_handler =& xoops_gethandler('module');
$versioninfo =& $module_handler->get($xoopsModule->getVar('mid'));
$version=$versioninfo->getInfo('version');
$description=$versioninfo->getInfo('description');
$author=$versioninfo->getInfo('author');
$license=$versioninfo->getInfo('license');
$licensefile=$versioninfo->getInfo('help');
$status=$versioninfo->getInfo('status');
$released=$versioninfo->getInfo('releasedate');
echo '<table width="100%"><TR><td width="50%">';
echo _QRCODE_DESCRIPTION;
echo '<BR><p>';
echo '<table style="border:0px solid #aaa;width:450px;"><tr>';
echo '<td align="center" rowspan="10" style="border-right:0px solid #aaa;"><img src="../images/logo.png"></td>';
echo '<td colspan="2" style="border-bottom:0px solid #aaa;" align="center" valign="middle"><b>'._MI_QRCODE_NAME.'</b></td></tr>';
echo '<tr><td style="border-bottom:1px dashed #aaa;">'._QRCODE_VERSION.'</td><td style="border-bottom:1px dashed #aaa;">: '.$version.'</td><tr>';
echo '<tr><td style="border-bottom:1px dashed #aaa;">'._QRCODE_AUTHOR.'</td><td style="border-bottom:1px dashed #aaa;">: <a href="http://www.designburo.nl">'.$author.'</a></td><tr>';
echo '<tr><td>'._QRCODE_RELEASEDATE.'</td><td>: '.$released.'</td><tr></table></p>';
echo '</td><td width="50%"><div style="margin:30px;padding:10px;border:1px solid #aaa;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">'._QRCODE_CHOOSE;
echo '<BR><BR><a href="main.php?a=url"><img src="../images/create_url.png" border="0" title="'._QRCODE_URL_D.'"></a><a href="main.php?a=email"><img src="../images/create_email.png" border="0" title="'._QRCODE_EMAIL_D.'"></a><a href="main.php?a=phone"><img src="../images/create_phone.png" border="0" title="'._QRCODE_PHONE_D.'"></a><a href="main.php?a=sms"><img src="../images/create_sms.png" border="0" title="'._QRCODE_SMS_D.'"></a><BR><a href="main.php?a=txt"><img src="../images/create_txt.png" border="0" title="'._QRCODE_TXT_D.'"></a><a href="main.php?a=geo"><img src="../images/create_geo.png" border="0" title="'._QRCODE_GEO_D.'"></a><a href="main.php?a=bus"><img src="../images/create_contact.png" border="0" title="'._QRCODE_BUS_D.'"></a>';



echo '</div></div></td></tr></table>';
}
xoops_cp_footer();
?>
