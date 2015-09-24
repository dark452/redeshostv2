<?php
$db = new SQLite3('bd/redeshost') or die('Unable to open database');

$result = $db->query('SELECT * FROM product') or die('Query failed');
while ($row = $result->fetchArray())
{
  echo "producto: {$row['product_name']}\nPrecio: {$row['product_price']}\n";
}
?>