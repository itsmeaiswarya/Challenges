<?php
require 'register.php';
require 'csrf.php';
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login CSRF</title>
	
</head>
<body>


	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login CSRF
				</span>
				<form method="post" action="index.php">
				<?= $error ; ?>

					<!--file  CSRF	-->
					<input type="hidden" name="token" value="<?=csrf_token();?>">
				
				 	<div class="login100-form validate-form p-b-33 p-t-5"> 
						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="username" placeholder="User name">
							<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						</div>
						
						<div class="container-login100-form-btn m-t-32">
							<input type="submit"name="submit" value="Login CSRF" class="login100-form-btn">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
		
</body>
</html>