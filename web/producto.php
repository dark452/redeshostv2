<?php
include "header.php";
$id=$_GET['id_product'];

$db = new SQLite3('bd/redeshost') or die('Unable to open database');

$result = $db->query('SELECT * FROM product WHERE id_product='.$id) or die('Query failed');
while ($row = $result->fetchArray())
{
  $product_name= $row['product_name'];
  $product_price =$row['product_price'];
  $product_description = $row['description_product'];
}
$result_detalle = $db->query('SELECT * FROM product_detail WHERE id_product='.$id) or die('Query failed');
while ($row = $result_detalle->fetchArray())
{
  $campo1= $row['campo1'];
  $campo2 =$row['campo2'];
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
								<p><?php echo $product_description;?></p>
								
							</div>
							<div class="contact-bottom-grid-right">
								<h3>Detalle</h3>
								<form>
									<div class="col-md-3">
										<div class="features-grid">
									 	<h3>Espacio Disco: </h3> 
									 	<p><?php echo $campo1;?></p>
									 	</div>
									 	<tr>
									 	<td>Tráfico Mensual</td>
									 	<td><?php echo $campo2;?></td>
									 	</tr>
									 	<tr>
									 	<td>Bases de datos</td>
									 	<td><?php echo $campo3;?></td>
									 	</tr>
									 	<td>
										<select name="meses" >
										  <option value="1">1 Mes <?php echo $product_price;?></option>
										  <option value="2">1 Año <?php echo ($product_price*12)*0.84;?></option>										  
										</select></td>
										</table>
																	
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

