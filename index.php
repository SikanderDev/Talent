<?php
  require_once "PHPTelnet.php";
	$telnet = new PHPTelnet();
	$telnet->show_connect_error=0;
	$result = $telnet->Connect('198.244.202.141',8081,'c!;82!O6H8.7@8F');
	if ($result == 0){
		$telnet->DoCommand('admin add steam_76561198032704712 0', $result);
		print_r($result);
		echo "Telnet Server is working!";	
	}else{
		echo "Telnet Server is not working!";	
	}
?>
