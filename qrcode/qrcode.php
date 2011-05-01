<?php
//  ------------------------------------------------------------------------ //
//  Author: Designburo.nl (info@designburo.nl)                               //
//  http://www.designburo.nl                                                 //
//  Project: QRcode v1.0                                                     //
//  ------------------------------------------------------------------------ //		
function qrcode($type="",$data=array(),$size="250")
{
	if($type!='')
	{
		switch ($type)
		{
			//QRCode with sending e-mail
			case "email":
			if (!$data['email']) { return "error no e-mail"; break;}	
			else
			{
				$l = "SMTP:".$data['email'].":".$data['subject'].":".$data['txt'];
				$ul = rawurlencode(utf8_encode($l)); 
				return "<img src=\"http://www.designburo.nl/ett2/modules/Xurl/_getimage.php?chl=".$ul."&s=".$size."\">";
				break;
			}
			// QRCode with phonenumber
			case "phone":
			if (!$data['phonenr']) { return "error no phonenumber"; break;}	
			else {
				$l = "TEL:".$data['phonenr'];
				$ul = rawurlencode(utf8_encode($l)); 
				return "<img src=\"http://www.designburo.nl/ett2/modules/Xurl/_getimage.php?chl=".$ul."&s=".$size."\">";
				break;
			}
			// QRCcode sending SMS
			case "sms";
			if (!$data['phonenr']) { return "error no gsm number"; break;}	
			else {
				$l = "SMSTO:".$data['phonenr'].":".$data['txt'];
				$ul = rawurlencode(utf8_encode($l)); 
				return "<img src=\"http://www.designburo.nl/ett2/modules/Xurl/_getimage.php?chl=".$ul."&s=".$size."\">";
				break;
			}
			// QRCode plain text
			case "txt";
			if (!$data['txt']) { return "error no text"; break;}	
			else {
				$l = $data['txt'];
				$ul = rawurlencode(utf8_encode($l)); 
				return "<img src=\"http://www.designburo.nl/ett2/modules/Xurl/_getimage.php?chl=".$ul."&s=".$size."\">";
				break;
			}
			//QRCode url			
			case "url";
			if (!$data['url']) { return "error no url"; break;}	
			else {
				$l = $data['url'];
				$ul = rawurlencode(utf8_encode($l)); 
				return "<img src=\"http://www.designburo.nl/ett2/modules/Xurl/_getimage.php?chl=".$ul."&s=".$size."\">";
				break;
			}
			//QRCode gps coordinates
			case "gps";
			$l = "geo:".$data['lat'].",".$data['long'].",100";
			$ul = rawurlencode(utf8_encode($l)); 
			return "<img src=\"http://www.designburo.nl/ett2/modules/Xurl/_getimage.php?chl=".$ul."&s=".$size."\">";
			break;
			//QRcode business card
			case "contact";
			$eor= "\r\n";
			$l = "MECARD:";
			$l.= "N:".$data['surname'].",".$data['name'].";";
			$l.= "TEL-AV:".$data['mobile'].";";
			$l.= "TEL:".$data['phonenr'].";";
			$l.= "ADR:,,".$data['adres'].",".$data['state'].",".$data['city'].",".$data['zipcode'].",".$data['country'].";";
			$l.= "EMAIL:".$data['email'].";";
			$l.= "URL:".$data['url'].";";
			$l.= "NOTE:".$data['title']." @ ".$data['company'].";";
			$l.= "BDAY:".$data['b_year'].$data['b_month'].$data['b_day'].";";
			$l.= ";";
			$ul = rawurlencode(utf8_encode($l)); 
			return "<img src=\"http://www.designburo.nl/ett2/modules/Xurl/_getimage.php?chl=".$ul."&s=".$size."\">";
			break;
		}
	}
	else
	{
		return "error no type definition";
	}
}
?>
