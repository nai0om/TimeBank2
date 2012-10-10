
<?php defined('SYSPATH') or die('No direct script access.');

class Timebankutil {
	
	// Truncate long string
	public static function truncate($string, $length = 40, $etc = '..', $charset='UTF-8', $middle = false)
	{
		if ($length == 0)
		{
			return '';
		}
	 
		if (strlen($string) > $length) {
			$length -= min($length, strlen($etc));
			
			if(!$middle) 
			{
				// english alphabet only
				if(ctype_alnum($string) == TRUE)
				{
					$length = $length*3/4;
				}
				//echo $etc;
				//echo $length;
				return mb_substr($string, 0, $length, $charset) . $etc;
			} 
			else 
			{
				return mb_substr($string, 0, $length/2, $charset) . $etc . mb_substr($string, - $length/2, $charset);
			}
		} 
		else 
		{
			return $string;
		}
	}	
	
	public static function randomstring($length)
	{
		$pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
		$randomstr = '';
		for($i=0;$i<$length;$i++)
		{
			 $randomstr .= $pattern{rand(0,35)};
		}
		return $randomstr;
	}
	
	// Send an email using amazon ses
	public static function send_email($from, $to, $subject, $body)
	{
		require_once Kohana::find_file('vendor', 'awssdk-1.5.2/sdk.class');

		// Send mail using amazon ses
		$ses = new AmazonSES();
		try
		{
			$response = $ses->send_email(
				$from, // Source (aka From)
				array('ToAddresses' => $to), // Destination (aka To)
				array( // Message (short form)
					'Subject.Data' => $subject,
					'Body.Html.Data' => $body
				)
			);
			// Success?
			//print_r($response);
			$success = $response->isOK();
			return $success;
		}
		catch (Exception $e)
		{
			return 0;
		}
		/*
		// As a backup we send SMTP
		if($success == 0)
		{
			// -------------------------------------------------
			// smtp way
			$headers = "From: ". $from .">\r\n" ;
			$headers .= "MIME-Version: 1.0\r\n" ;
			$headers .= "Content-type: text/html; charset=UTF-8\r\n" ;
			$headers .= "X-Priority: 3\n";
			$headers .= "X-MSmail-Priority: High\n";
			$headers .= "X-Mailer: Shoppingsija mailer";
	
			$success = @mail($to, $subject, $body, $headers);
			// End smtp way
			// -------------------------------------------------			
		}		
		*/
	}
	public static function send_sms($refno, $msn, $msg)
	{
		$user = 'api1610966';
		$password = 'jbankapisms';
		$postData = '&RefNo='.$refno;
		$postData .= '&Sender='.urlencode('JitArsaBank'); 
		$postData .= '&Msn=66'.substr($msn, 1);
		$postData .= '&MsgType=T';
		$postData .= '&Msg='.urlencode(iconv("UTF-8", "windows-874", $msg));
		$postData .= '&User='.urlencode($user);
		$postData .= '&Password='.urlencode($password);
		//RefNo=$sendrefno&Msn=$sendmsn&Msg=$sendmsg&Encoding=$sendencoding&MsgType=$sendmsgtype&User=$senduser&Password=$sendpassword"
	
		// Post parameters (Use curl) 
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,"http://corpsms.dtac.co.th/servlet/com.iess.socket.SmsCorplink"); 
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_POST ,1);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$postData);
		$status = curl_exec($ch); // Status from DTAC 
		curl_close($ch);
		$status = explode(' ', $status);
		return $status;	
	}
	
	// Convert unix time to "10 secs ago" format
	public static function timesince($in_time, $suffix = " ago")
	{ 
		$s = time() - $in_time;
		
		$m=0;$hr=0;$d=0;$td="now"; 
		if($s < 59)
		{
			return $s.' secs'.$suffix;
		}
		if($s>59) { 
			$m = (int)($s/60); 
			$s = $s-($m*60); // sec left over 
			$td = "$m min"; 
		} 
		if($m>59){ 
			$hr = (int)($m/60); 
			$m = $m-($hr*60); // min left over 
			$td = "$hr hr"; if($hr>1) $td .= "s"; 
			if($m>0) $td .= ", $m min"; 
			if($m>1) $td .= "s"; 
		} 
		if($hr>23){ 
			$d = (int)($hr/24); 
			$hr = $hr-($d*24); // hr left over 
			$td = "$d day"; if($d>1) $td .= "s"; 
			if($d<3){ 
				if($hr>0) $td .= ", $hr hr"; if($hr>1) $td .= "s"; 
			} 
		} 
		
		if ($td == 'now')
		{
			return $td;
		}
		else
		{
			return $td.$suffix; 
		}
	} 
}
