<?php

//echo SHA2(SHA1(MD5(SHA1("pamelarivera1953"))));
 

$hash= '$2y$10$fA3UqaN3hahGI6YKg2G6i..rm.B.6fIpbTKsX4zVtYTx04Ed4RX7W';
//password_hash("pamelarivera1953", PASSWORD_DEFAULT);
echo $hash."<br>";
if(password_verify("pamelarivera1953",$hash)) {
	echo "estamos ready";
}else{
	echo "cry at the beach";
}

?>