<!DOCTYPE html>
<html>
    <head>
        <title>Cook With Me - User Forms</title>
        <link rel="shortcut icon" href="../assets/logo_icon.png">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" crossorigin="anonymous" href="../css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="form-container">
                <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Register</label>
                <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                <form action="login-check.php" method="post" class="login">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="#">Register now</a>
                    </div>
                </form>
                <form action="signup-check.php" method="post" class="signup">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
           
                     <?php if (isset($_GET['success'])) { ?>
                          <p class="success"><?php echo $_GET['success']; ?></p>
                     <?php } ?>
                    
                    <div class="field">
                    <?php 
                    if (isset($_GET['name'])) { ?>
                        <input type="text" 
                        name="name" 
                        placeholder="Name" 
                        value="<?php echo $_GET['name']; ?>" 
                        required>
                        <?php }
                    else{ ?>
                        <input type="text" 
                        name="name" 
                        placeholder="Name">
                    <?php }?>
                    </div>

                    <div class="field">
                    <?php
                    if (isset($_GET['email'])) { ?>
                        <input type="text" 
                        name="email" 
                        placeholder="Email Address"
                        value="<?php echo $_GET['email']; ?>" 
                        required>
                        <?php }
                    else{ ?>
                    <input type="text" 
                        name="email" 
                        placeholder="Email Address">
                    <?php }?>
                    </div>

                    <div class="field">
                        <input type="password" 
                        name="password" 
                        placeholder="Password" 
                        required>
                    </div>

                    <div class="field">
                        <input type="password" 
                        name="re_password" 
                        placeholder="Confirm Password" 
                        required>
                    </div>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Register">
                    </div>
                </form>
                </div>
            </div>
        </div>
        <script>
            const loginText = document.querySelector(".title-text .login");
            const loginForm = document.querySelector("form.login");
            const loginBtn = document.querySelector("label.login");
            const signupBtn = document.querySelector("label.signup");
            const signupLink = document.querySelector("form .signup-link a");
            signupBtn.onclick = (()=>{
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
            });
            loginBtn.onclick = (()=>{
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
            });
            signupLink.onclick = (()=>{
            signupBtn.click();
            return false;
            });
        </script>
    </body>
</html>