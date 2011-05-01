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
if(isset($_POST['type']))
{
	switch ($_POST['type'])
	{
	

	case "phone":
		if (!$_POST['qr_phone']) 
		{ 
			$res= _QRCODE_PHONE_F_ERROR_NR;
		}	
		else 
		{
			$data=array();
			$type="phone";
			$data['phonenr'] = $_POST['qr_phone'];
			$res= qrcode($type,$data);

		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:500px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;"><p>'._QRCODE_RESULT.'</p>';
	echo $res;
	echo '</div><BR><a href="main.php">'._QRCODE_MORE.'</a></div></td></tr><table>';
	xoops_cp_footer();
		}
		break;

	case "url":
		if (!$_POST['qr_url']) 
		{ 
			$res= _QRCODE_URL_F_ERROR_URL;
		}	
		else 
		{
			$data=array();
			$type="url";
			$data['url'] = $_POST['qr_url'];
			$res= qrcode($type,$data);

		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:500px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;"><p>'._QRCODE_RESULT.'</p>';
	echo $res;
	echo '</div><BR><a href="main.php">'._QRCODE_MORE.'</a></div></td></tr><table>';
	xoops_cp_footer();
		}
		break;
	case "email":
		if (!$_POST['qr_email_to']) 
		{ 
			$res= _QRCODE_EMAIL_F_ERROR_EMAIL;
		}	
		else 
		{
			$data=array();
			$type="email";
			$data['email']=$_POST['qr_email_to']; // Send email to ?
			$data['subject']=$_POST['qr_email_sub']; // Subject of the email
			$data['txt']=$_POST['qr_email_txt']; // Body of the email
			$res= qrcode($type,$data);
			

		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:500px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;"><p>'._QRCODE_RESULT.'</p>';
	echo $res;
	echo '</div><BR><a href="main.php">'._QRCODE_MORE.'</a></div></td></tr><table>';
	xoops_cp_footer();
		}
		break;
		
	case "sms":
		if (!$_POST['qr_sms_to']) 
		{ 
			$res= _QRCODE_SMS_F_ERROR_NR;
		}	
		else 
		{
			$data=array();
			$type="sms";
			$data['phonenr']=$_POST['qr_sms_to']; 
			$data['txt']=$_POST['qr_sms_txt'];
			$res= qrcode($type,$data);
			

		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:500px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;"><p>'._QRCODE_RESULT.'</p>';
	echo $res;
	echo '</div><BR><a href="main.php">'._QRCODE_MORE.'</a></div></td></tr><table>';
	xoops_cp_footer();
		}
		break;
		
	case "txt":
		if (!$_POST['qr_txt']) 
		{ 
			$res= _QRCODE_TXT_F_ERROR_TXT;
		}	
		else 
		{
			$data=array();
			$type="txt";
			$data['txt'] = $_POST['qr_txt'];
			$res= qrcode($type,$data);

		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:500px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;"><p>'._QRCODE_RESULT.'</p>';
	echo $res;
	echo '</div><BR><a href="main.php">'._QRCODE_MORE.'</a></div></td></tr><table>';
	xoops_cp_footer();
	
		}
		break;
		
	case "geo":

			$data=array();
			$type="geo";
			$data['lat'] = $_POST['qr_latitude'];
			$data['long'] = $_POST['qr_longtitude'];
			$res= qrcode($type,$data);

		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:500px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;"><p>'._QRCODE_RESULT.'</p>';
	echo $res;
	echo '</div><BR><a href="main.php">'._QRCODE_MORE.'</a></div></td></tr><table>';
	xoops_cp_footer();
	
		break;
		
	case "bus":

			$data=array();
			$type="contact";
			$data['surname']=$_POST['qr_c_anaam'];
			$data['name']=$_POST['qr_c_vnaam'];
			$data['mobile']=$_POST['qr_c_gsm'];
			$data['phonenr']=$_POST['qr_c_phone'];
			$data['adres']=$_POST['qr_c_adres'];
			$data['state']=$_POST['qr_c_state'];
			$data['city']=$_POST['qr_c_city'];
			$data['zipcode']=$_POST['qr_c_zip'];
			$data['country']=$_POST['qr_c_land'];
			$data['email']=$_POST['qr_c_email'];
			$data['url']=$_POST['qr_c_web'];
			$data['title']=$_POST['qr_c_functie'];
			$data['company']=$_POST['qr_c_bedrijf'];
			$data['b_year']=$_POST['qr_c_gjaar'];
			$data['b_month']=$_POST['qr_c_gmaand'];
			$data['b_day']=$_POST['qr_c_gdag'];
			$res= qrcode($type,$data);

		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:500px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;"><p>'._QRCODE_RESULT.'</p>';
	echo $res;
	echo '</div><BR><a href="main.php">'._QRCODE_MORE.'</a></div></td></tr><table>';
	xoops_cp_footer();
	
		break;

		
	}


	break;

}

if(isset($_GET['a']))
{

	switch ($_GET['a'])
	{
		
	case "url":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_URL_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_url.png" border="0" title="'._QRCODE_URL_D.'"></td><td>';
		echo '<h2>'._QRCODE_URL_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_URL_F_URL.'</td><td><input name="qr_url" id="qr_url" type="text" size="50" value="http://" /></td><td align=right><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr></table></td></tr></table>
    </div><input type="hidden" name="type" value="url"></form></div></div></td></tr></table>';
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
    </div><input type="hidden" name="type" value="email"></form></div></div></td></tr></table>';
	break;

	case "phone":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_PHONE_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_phone.png" border="0" title="'._QRCODE_PHONE_D.'"></td><td>';
		echo '<h2>'._QRCODE_PHONE_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_PHONE_F_NR.'</td><td><input name="qr_phone" type="text" size="50" /></td><td align=right><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr></table></td></tr></table>
    </div><input type="hidden" name="type" value="phone"></form></div></div></td></tr></table>';
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
    </div><input type="hidden" name="type" value="sms"></form></div></div></td></tr></table>';
	break;

	case "txt":
		echo '<table width="400"><tr><td width="800"><div style="margin:30px;padding:10px;border:1px solid #aaa;width:700px;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.' :: '._QRCODE_TXT_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">';
		echo '<table><tr><td width="150" align="left"><img src="../images/create_txt.png" border="0" title="'._QRCODE_TXT_D.'"></td><td>';
		echo '<h2>'._QRCODE_TXT_D.'</h2>'._QRCODE_FORM.'<BR><BR>';
		echo '<form id="form1" name="form1" method="post" action="main.php">';
		echo '<div id="url_div"><table class="tabel"><tr><td>'._QRCODE_TXT_F_TXT.'</td><td><textarea name="qr_txt" cols="45" rows="3" /></textarea></td><td rowspan="3"align="right" valign="bottom"><input name="submit" id="submit" type="submit" value="'._QRCODE_FORM_SUBMIT.'" /></td>
    </tr>';

	echo '</table></td></tr></table>
    </div><input type="hidden" name="type" value="txt"></form></div></div></td></tr></table>';
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
    </div><input type="hidden" name="type" value="geo"></form></div></div></td></tr></table>';
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
    </div><input type="hidden" name="type" value="bus"></form></div></div></td></tr></table>';
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
echo '<div style="margin:30px;padding:10px;border:1px solid #aaa;">';
echo '<table><tr>';
echo '<td align="center" style="border-right:0px solid #aaa;"><img src="../images/logo.png"></td>';
echo '<td><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_DESCRIPTION.'</h3><BR><BR></div></td></tr>';
echo '<tr><td colspan="2"><div style="margin:30px;padding:10px;border:1px solid #aaa;"><div style="margin-bottom:5px;border-bottom:1px solid #aaa;"><h3>'._QRCODE_WIZARD_H.'</h3><font size="-2">'._QRCODE_WIZARD_D.'</font><BR><BR></div><div style="padding:10px;">'._QRCODE_CHOOSE;
echo '<BR><BR><table><tr><td><a href="main.php?a=url"><img src="../images/create_url.png" border="0" title="'._QRCODE_URL_D.'"></a></td><td><a href="main.php?a=email"><img src="../images/create_email.png" border="0" title="'._QRCODE_EMAIL_D.'"></a></td><td><a href="main.php?a=phone"><img src="../images/create_phone.png" border="0" title="'._QRCODE_PHONE_D.'"></a></td><td><a href="main.php?a=sms"><img src="../images/create_sms.png" border="0" title="'._QRCODE_SMS_D.'"></a></td><td><a href="main.php?a=txt"><img src="../images/create_txt.png" border="0" title="'._QRCODE_TXT_D.'"></a></td><td><a href="main.php?a=geo"><img src="../images/create_geo.png" border="0" title="'._QRCODE_GEO_D.'"></a></td><td><a href="main.php?a=bus"><img src="../images/create_contact.png" border="0" title="'._QRCODE_BUS_D.'"></a></td></tr><tr>';
echo '<td align="center">'._QRCODE_URL_H.'</td><td align="center">'._QRCODE_EMAIL_H.'</td><td align="center">'._QRCODE_PHONE_H.'</td><td align="center">'._QRCODE_SMS_H.'</td><td align="center">'._QRCODE_TXT_H.'</td><td align="center">'._QRCODE_GEO_H.'</td><td align="center">'._QRCODE_BUS_H.'</td></tr></table>';

echo '</div></td></tr></table></div>';
}
xoops_cp_footer();
?>
