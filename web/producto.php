
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
								<h3>Catch me</h3>
								<form>
									<div class="text">
										<div class="text-fild">
											<span>Nombre:</span>
											<input type="text" class="text" value="Nombre aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name here';}">
										</div>
										<div class="text-fild">
											<span>Email:</span>
											<input type="text" class="text" value="Email aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="msg-fild">
											<span>Asunto:</span>
											<input type="text" class="text" value="Asunto aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Subject here';}">
									</div>
									<div class="message-fild">
											<span>Mensaje:</span>
											<textarea> </textarea>
									</div>
									<input type="submit" value="Enviar" />
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
							<h2>Do you want to view Plans & Pricing ?</h2>
							<span>Follow the button in the right section.</span>
						</div>
						<div class="pricing-plan-right">
							<a class="price-btn" href="pricing.php">Plans & Pricing</a>
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

