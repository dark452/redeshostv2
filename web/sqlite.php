<?php

include "classes/geo.php";
//$geo = new geo();
$moneda = ip_info("Visitor", "Country Code");
echo "moneda" . $moneda;
?>