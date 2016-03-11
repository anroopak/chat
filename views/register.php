<div class="col-md-8 col-md-offset-2 home-body">
	<form method="post">
		<div class="form-group">
			<label for="txtName">
				Name	
			</label>
			<input type="text" name="name" id="txtName" class="form-control">
		</div>
		<div class="form-group">
			<label for="txtEmail">
				Email
			</label>
			<input type="text" name="email" id="txtEmail" class="form-control">
		</div>
		<div class="form-group">
			<label for="pswdPassword">
				Password
			</label>
			<input type="password" name="password" id="pswdPassword" class="form-control">
		</div>
		<div class="form-group">
			<label for="pswdRepassword">
				Re-Enter Password
		</label>
			<input type="password" name="repassword" id="pswdRepassword" class="form-control">
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<a href="index.php" class="form-control btn btn-default col-md-6"> Back to Home Page </a>
				</div>
				<div class="col-md-6">
					<input type="submit" name="register" value="Register" class="form-control btn btn-primary">
				</div>
			</div>
		</div>
		<div class="form-group">
			<?php
			if(isset($result)){
				if($result['valid']){
					echo '<p class="alert alert-success">' . $result['message'] . '</p>';
				} else {
					echo '<p class="alert alert-danger">' . $result['message'] . '</p>';
				}
			}
			?>
		</div>
	</form>
</div>