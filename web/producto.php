<?php
include "header.php";
$id=$_GET['id_product'];
include "classes/geo.php";

$moneda = ip_info("Visitor", "Country Code");

$db = new SQLite3('bd/redeshost') or die('Unable to open database');

$result = $db->query('SELECT p.id_product,UPPER(p.product_name) product_name,p.product_price_clp, 
p.product_price_usd, p.description_product,p.logo, d.campo1,d.campo2,d.campo3,d.campo4,d.campo5,d.campo6,d.campo7
FROM product p, product_detail d
WHERE p.id_product=d.id_product 
ORDER BY p.id_product');
while ($row = $result->fetchArray())
{
  $product_name= $row['product_name'];
  $product_description =$row['description_product'];
  $product_price_clp = $row['product_price_clp'];
  $product_price_usd = $row['product_price_usd'];
  $logo = $row['logo'];
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
								<img src="../web/images/<?php echo $logo;?>" height="80%" width="80%" />

								<p><?php echo $product_description;?></p>
								
							</div>
								
							<div class="contact-bottom-grid-right">
								<h3>Detalle</h3>
																
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
									

								</div>	
								
							
									
									
							
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
						<div class="pricing-plan">
							<div class="container">
					<div class="pricing-plan-grids">
							        <div class="pricing-plan-left">
							         <h2>Seleccione una opción :	</h2>
										<select id="cd-dropdown">
											<option selected>1 Mes - $<?php 
											if($moneda=='CL'){
												echo $product_price_clp. " CLP";
											}else{
												echo $product_price_usd. " USD";
											
											}
											?>
											</option>
											<option>12 Meses - $<?php
												if($moneda=='CL'){
												echo (12*$product_price_clp)*0.834." CLP";
											}else{
												echo (12*$product_price_usd)*0.834. " USD";
											}
											?>
											</option>
										</select></div>
										<div class="pricing-plan-right">
										<a class="price-btn" href="pricing.html">Agregar al carro</a>									
									</div>	
									<div class="clearfix"> </div>	
									</div>							
							</div>
							</div>
					</div>
				</div>
				<!----- hosting-grids ----->
			</div>
			<!----- About ----->
			
			<?php include "footer.php";
			?>
	</body>
</html>

