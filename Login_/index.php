<?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'Becode' && $_POST['motsdepasse'] === 'Formation') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: Portfolio/dashboard.php');
        exit();
    } else {
        $erreur = "Identifiants incorrects";
    }
}

require 'auth/auth.php';
if (est_connecte()) {
    header('Location: Portfolio/dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
<?php if ($erreur): ?>
<div class="alert alert-danger">
	<?=$erreur?>
</div>
<?php endif?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>

		<form action="" method="post">

			<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Pseudo</span>
					</div>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					</form>



						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<br><br>

						<a href="https://www.facebook.com/nelsoncaterino/" class="text-center">
							<img src="https://img.icons8.com/color/25/000000/facebook-circled.png">
						</a>

						<a href="https://twitter.com/Nelson_Caterino" class="text-center">
							<img src="https://img.icons8.com/color/25/000000/twitter-circled.png">
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/LOGO.png');
				background-color:black;">
				</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>