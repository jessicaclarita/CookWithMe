<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cook With Me - Change Password</title>
    <link rel="shortcut icon" href="../assets/logo_icon.png">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" crossorigin="anonymous" href="../css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="form-container">
			<div class="form-inner">
				<form action="change-password-check.php" method="post">
					<div class="title-container">
						<h2 class="form-title">Change Password for
							<span><?php echo $_SESSION['email']; ?></span>
						</h2>
					</div>
					<?php if (isset($_GET['error'])) { ?>
						<p class="error"><?php echo $_GET['error']; ?></p>
					<?php } ?>

					<?php if (isset($_GET['success'])) { ?>
						<p class="success"><?php echo $_GET['success']; ?></p>
					<?php } ?>

					<div class="field">
						<input type="password" 
							name="op" 
							placeholder="Old Password">
					</div>

					<div class="field">
						<input type="password" 
							name="np" 
							placeholder="New Password">
					</div>

					<div class="field">
						<input type="password" 
							name="c_np" 
							placeholder="Confirm New Password">
					</div>
					
					<div class="field btn">
						<div class="btn-layer"></div>
						<input type="submit" value="Change"></input>
					</div>

					<div class="back-link">
						<a href="profile.php">Back to Profile</a>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php 
}else{
     header("Location: forms.php");
     exit();
}
 ?>