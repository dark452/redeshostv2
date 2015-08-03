<!----- footer ----->
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-right">
						<h3>Navigation</h3>
						<ul class="footer-nav">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="about.php">Nosotros</a></li>
							<li><a href="domain.php">Dominios</a></li>
							<li><a href="hosting.php">Hosting</a></li>
							<li><a href="contact.php">Contacto</a></li>
						</ul>
						<ul class="footer-social-icons">
							<li><a class="twiter" href="#"><span> </span></a></li>
							<li><a class="photo" href="#"><span> </span></a></li>
							<li><a class="google-pluse" href="#"><span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
						<a class="to-top" href="#move-top">Subir</a>
					</div>
					<!----- map-point ----->
					<div class="map-point">
						<a href="#"><span> </span>Antofagasta, Chile</a>
					</div>
					<!----- map-point ----->
					<div class="clearfix"> </div>
				</div>
				<!----- copy-right ----->
				<div class="copy-right text-center">
					<a href="#"><img src="../web/images/footer-logo.png" title="Maguwohost" /></a>
					<p>Copyright <?php echo date('Y');?></p>
				</div>
				<!----- copy-right ----->
			</div>
			<!----- footer ----->
			<!---smoth-scrlling---->
							<script type="text/javascript">
									$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
							</script>
					<!---//smoth-scrlling---->