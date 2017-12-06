<!DOCTYPE html>
<html>
<div class="agileheader-topbar">
			<div class="container">
				<div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid1">
					<p></p>
				</div>
				<div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid2">
					<ul>
						<li><a href="faq.html">FAQ</a></li>
						<li><a class="popup-with-zoom-anim" href="#small-dialog1">Login</a></li>
						<li><a class="popup-with-zoom-anim" href="#small-dialog2">Sign Up</a></li>
                        <li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

				<!-- Popup-Box -->
				<div id="popup">
					<div id="small-dialog1" class="mfp-hide agileinfo">
						<div class="pop_up">
							<form action="login.php" method="post">
								<h3>LOGIN</h3>
								<input type="text" Name="Userame" placeholder="Username" required>
								<input type="password" Name="Password" placeholder="Password" required>
								<ul class="tick w3layouts agileinfo">
									<li>
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>Remember me</label>
									</li>
									<li>
										<a href="#">Forgot Password?</a>
									</li>
								</ul>
								<div class="send-button wthree agileits">
									<input type="submit" value="LOGIN" name="login">
								</div>
							</form>
						</div>
					</div>
					<div id="small-dialog2" class="mfp-hide agileinfo">
						<div class="pop_up">
							<form action="signup.php" method="post">
								<h3>SIGN UP</h3>
								<input type="text" Name="name" placeholder="Name" required>
								<input type="text" Name="email" placeholder="Email" required>
								<input type="password" Name="password" placeholder="Password" required>
								<input type="text" Name="mobile" placeholder="Phone Number" required>
								<div class="send-button wthree agileits">
									<input type="submit" value="SIGN UP" name="signup">
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- //Popup-Box -->

		</div>
</html>