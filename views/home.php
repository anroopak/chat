<!-- Start of Section : Login -->

<div class="col-md-10 col-md-offset-1 home-body">
	

	<div class="row">

		<!-- Start of Section : Description -->
		<div class="col-md-6">
			<h3>
				തലശ്ശേരി  ബർത്താനം 
			</h3>
			<hr />
			<p>
				A Chat Application build by the brilliant brains of <br />
				College of Engineering, Thalassery
			</p>
			<p>
				Please note that I am including 2 traps in the code, with which teachers can identify that you have blindly copied the code. 
				<br />
				<br />
				1. Type "CoETly" in the chat box. The reciever will get a different message. This trap is inside chat.php file
				<br />
				2. Similar trap will be there in one more .php file of the project. Full understanding of the code is required to catch this trap. Find it and by the time you find it, you would have read my entire code. 
			</p>
		</div>

		<!-- End of Section : Description -->

		<!-- Start of Section : Login Form -->

		<div class="col-md-6">
			<form method="post">
				<div class="form-group">
					<label for="txtEmail">
						Email ID
					</label>
					<input type="text" name="email" id="txtEmail" class="form-control">
				</div>
				<div class="form-group">
					<label for="pswdPswd">
						Password
					</label>
					<input type="password" name="password" id="pswdPswd" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Login" class="form-control btn btn-primary">
				</div>
				<a href="register.php">
					New User? Register.
				</a>
				<?php
				if (isset($result)) {
					if($result){
						echo '<p class="alert alert-success">Login Success</p>';
					} else {
						echo '<p class="alert alert-danger">Login Failed</p>';
					}
				}
				?>
			</form>
		</div>

		<!-- End of Section : Login Form -->

	</div>

<!-- End of Section : Login -->
</div>