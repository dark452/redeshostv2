<?php
include "header.php";
?>
<script>
$('#pricing').addClass("active");
</script>
			<!----- Pricing ----->
			<div class="Pricing">
				<!----- header-section ---->
				<div class="header-section">
					<div class="container">
						<h1>Nuestros Planes</h1>
					</div>
				</div>
				<!----- header-section ---->
				<!----- Pricing-tables ---->
				<div class="pricing-tables">
					<div class="container">
						<!----- planes-head ----->
						<div class="plans-head text-center">
							<h2>Our Hosting plans</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<!----- planes-head ----->
						<?php 
						$db = new SQLite3('bd/redeshost') or die('Unable to open database');

$result = $db->query('SELECT p.id_product,UPPER(p.product_name) product_name,p.product_price, p.description_product, d.campo1,d.campo2,d.campo3,d.campo4,d.campo5,d.campo6,d.campo7
FROM product p, product_detail d
WHERE p.id_product=d.id_product');
while ($row = $result->fetchArray()){?>

						<div class="col-md-3">
							<div class="pricing-table-grid">
								<h3><?php echo $row['product_name'];?></h3>
								<ul>
									<li><span>$<?php echo $row['product_price'];?> Mensual</span></li>
									<li><a href="#">Espacio Disco <?php echo $row['campo1'];?></a></li>
									<li><a href="#">Tráfico Mensual <?php echo $row['campo2'];?></a></li>
									<li><a href="#">Nº BDs <?php echo $row['campo3'];?></a></li>
									<li><a href="#">Cuentas de Correos <?php echo $row['campo4'];?></a></li>
									<li><a href="#">Dominios Adicionales <?php echo $row['campo5'];?></a></li>
									<li><a href="#">Panel de control <?php echo $row['campo6'];?></a></li>
									<li><a href="#">Velocidad enlace <?php echo $row['campo7'];?></a></li>
								</ul>
								<a class="order-btn" href="producto.php?id_product=<?php echo $row['id_product'];?>">Contratar</a>
							</div>
						</div>
						
						
					
				<?php }?>
				</div>
				</div>
				<div class="clearfix"> </div>
			
				<!----- Pricing-tables ---->
				<!----- out-features ----->
				<div class="our-features">
					<div class="container">
						<div class="our-features-head text-center">
							<h2>Our Hosting features</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<!------ our-features -grids ----->
						<div class="col-md-6">
							<div class="h-features-grid">
								<div class="features-grid-left">
									<img src="../web/images/f-icon.png" title="name" />
								</div>
								<div class="features-grid-right">
									<h4>Lorem ipsum dolor</h4>
									<span>consectetur adipisicing elit,</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="h-features-grid">
								<div class="features-grid-left">
									<img src="../web/images/f-icon1.png" title="name" />
								</div>
								<div class="features-grid-right">
									<h4>vitae rhoncus sed</h4>
									<span>consectetur adipisicing elit,</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
							<div class="col-md-6">
							<div class="h-features-grid">
								<div class="features-grid-left">
									<img src="../web/images/f-icon2.png" title="name" />
								</div>
								<div class="features-grid-right">
									<h4>Curabitur arcu nun</h4>
									<span>consectetur adipisicing elit,</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="h-features-grid">
								<div class="features-grid-left">
									<img src="../web/images/f-icon3.png" title="name" />
								</div>
								<div class="features-grid-right">
									<h4>facilisis hendrerit</h4>
									<span>consectetur adipisicing elit,</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
							<div class="col-md-6">
							<div class="h-features-grid">
								<div class="features-grid-left">
									<img src="../web/images/f-icon4.png" title="name" />
								</div>
								<div class="features-grid-right">
									<h4>Aliquam tempor cursus</h4>
									<span>consectetur adipisicing elit,</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="h-features-grid">
								<div class="features-grid-left">
									<img src="../web/images/f-icon5.png" title="name" />
								</div>
								<div class="features-grid-right">
									<h4>consectetur adipisicing</h4>
									<span>consectetur adipisicing elit,</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
						<!------ our-features -grids ----->
					</div>
				</div>
				<!----- out-features ----->
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
							<a class="price-btn" href="pricing.html">Plans & Pricing</a>
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

