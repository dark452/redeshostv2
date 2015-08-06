<?php
include "header.php";
$id=$_GET['id_product'];
//$moneda = $_GET['moneda'];

$db = new SQLite3('bd/redeshost') or die('Unable to open database');

$result = $db->query('SELECT * FROM product WHERE id_product='.$id) or die('Query failed');
while ($row = $result->fetchArray())
{
  $product_name= $row['product_name'];
  $product_description =$row['description_product'];
  $product_price_clp = $row['product_price_clp'];
  $product_price_usd = $row['product_price_usd'];


  $logo = $row['logo'];
}
$result_detalle = $db->query('SELECT * FROM product_detail WHERE id_product='.$id) or die('Query failed');
while ($row = $result_detalle->fetchArray())
{
  $campo1= 	$row['campo1'];
  $campo2 =	$row['campo2'];
  $campo3 = $row['campo3'];
  $campo4 = $row['campo4'];
  $campo5 = $row['campo5'];
  $campo6 = $row['campo6'];
  $campo7 = $row['campo7'];

}
?>

			<!----- product ----->
			<div class="Contact">
				<!----- header-section ---->
				<div class="header-section">
					<div class="container">
						<h1> <?php echo $product_name; ?></h1>
					</div>
				</div>
				<!----- header-section ---->
				<!----- hosting-grids ----->
				<div class="contact-grids">
					<div class="container">						
						<div class="contact-bottom-grids">
							<div class="contact-bottom-grid-left">
								<h3>Descripción</h3>
								<img src="../web/images/<?php echo $logo;?>" title="name" />

								<p><?php echo $product_description;?></p>
								
							
									
								</div>
							<div class="contact-bottom-grid-right">
								<h3>Detalle</h3>
								<form>									
									<div class="pricing-table-grid">
										
										<ul>
											<li><a href="#">Espacio Disco: <?php echo $campo1;?></a></li>
											<li><a href="#">Tráfico Mensual: <?php echo $campo2;?></a></li>
											<li><a href="#">Nº BDs: <?php echo $campo3;?></a></li>
											<li><a href="#">Cuentas de Correos: <?php echo $campo4;?></a></li>
											<li><a href="#">Dominios Adicionales: <?php echo $campo5;?></a></li>
											<li><a href="#">Panel de control: <?php echo $campo6;?></a></li>
											<li><a href="#">Velocidad enlace: <?php echo $campo7;?></a></li>
										</ul>										
									</div>								
																	
									<input type="submit" value="Enviar" />
									</div>	
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!----- hosting-grids ----->
			</div>
			<!----- About ----->
			<!----- pricing and plan ----->
			<div class="pricing-plan">
				<div class="container">
					<div class="pricing-plan-grids">
						<div class="pricing-plan-left">
							<h2>Desea ver nuestros planes y precios?</h2>
							<span>Presione el botón en la sección derecha.</span>
						</div>
						<div class="pricing-plan-right">
							<a class="price-btn" href="pricing.php">Planes y precios</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- pricing and plan ----->
			<?php include "footer.php";
			?>
	</body>
</html>

