
<?php
include "header.php";
?>

			<!----- Contact ----->
			<div class="Contact">
				<!----- header-section ---->
				<div class="header-section">
					<div class="container">
						<h1>Contacto</h1>
					</div>
				</div>
				<!----- header-section ---->
				<!----- hosting-grids ----->
				<div class="contact-grids">
					<div class="container">
						<div class="contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
						</div>
						<div class="contact-bottom-grids">
							<div class="contact-bottom-grid-left">
								<h3>Contact info</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum adipiscing vestibulum sapien, in ultricies tellus dignissim eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
								<p> Praesent mollis dolor eros, vel facilisis nisi auctor ut. Cras id convallis ipsum. Mauris posuere, ligula ac sodales sollicitudin, risus sapien iaculis libero, ac molestie orci arcu non ante. Fusce est leo, ornare ut porta quis, dictum et mi. Aliquam vel pretium sem</p>
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

