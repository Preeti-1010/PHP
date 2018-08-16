<?php

if(!empty($_SERVER['HTTP_CLIENT_IP'])){

	 $ip_add = $_SERVER['HTTP_CLIENT_IP'];

}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	
	 $ip_add = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

else {
	
	 $ip_add = $_SERVER['REMOTE_ADDR'];
}

echo $ip_add;

?>