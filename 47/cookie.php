<?php
	$cookie_adi="kullanici";
	if(isset($_COOKIE[$cookie_adi])){
		$cookie_degeri=$_COOKIE[$cookie_adi]+1;
	   setcookie ($cookie_adi,$cookie_degeri,time()+(60*60*24));
	    echo $_COOKIE[$cookie_adi];
	}
	 else {
		 $cookie_degeri=0;
		 setcookie($cookie_adi, $cookie_degeri,time() + (60*60*24));
	 }

?>