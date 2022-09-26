<?
	//보내는이
	$from_email = '3m@crob.co.kr';
	$from_name = '=?UTF-8?B?'.base64_encode($name).'?=';



	//받는이
	$to_email = '3m@crob.co.kr';
	$to_name = '=?UTF-8?B?'.base64_encode($name).'?=';


	$subject = '크로브 홈페이지 - CONTACT';
	//$subject = '=?UTF-8?B?'.base64_encode($name).'?=';

	$rDate = date('Y-m-d H:i:s');

	//실제전송파일
	$file_name = 'email.html';

	if($buffer = file_exists($file_name)){

		$sMessage = '';

		$fp = fopen($file_name, "r");

		if ($fp != NULL) {
			while(!feof($fp)){
				$sMessage .=  fread($fp,100);
			}
		}

		$sMessage = str_replace("#email", $email, $sMessage);
		$sMessage = str_replace("#name", $name, $sMessage);
		$sMessage = str_replace("#address", $address, $sMessage);
		$sMessage = str_replace("#ment", $ment, $sMessage);
		$sMessage = str_replace("#rDate", $rDate, $sMessage);
		$sMessage = str_replace("#userip", $_SERVER['REMOTE_ADDR'], $sMessage);

		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
	//	$headers .= "To: ".$to_name." <".$to_email.">\r\n";
		$headers .= "From: ".$from_name." <".$from_email.">\r\n";

		mail($to_email, $subject, $sMessage, $headers);
	}
?>