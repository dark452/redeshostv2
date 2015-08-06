<?php

include_once('./classes/SQlite3ToJSONConverter.class.php');

$sDatabaseFileName = 'bd/redeshost';
$oDatabaseHandler = new SQlite3ToJSONConverter($sDatabaseFileName);
$sJSON = $oDatabaseHandler->getJSONFromTable('product');
var_dump($sJSON);

?>

?>