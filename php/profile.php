<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
   <title>Cook With Me - Profile Page</title>
   <link rel="shortcut icon" href="../assets/logo_icon.png">
   <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" crossorigin="anonymous" href="../css/profile.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../css/bootstrap-grid.css">
</head>
<body>
   <!-- Navigation Bar -->
   <div class = "navbar">
            <ul>
                <li>
                    <a href = "../about.html"><img src = "../assets/logo.png" id="logo"></a>
                </li>
                <div class="linkbuttons">
                <li>
                    <a href = "../homepage.html"><i class="fa fa-home"></i></a>
                </li>
                <li>
                    <a href = "../recipes.html"><i class ="fa fa-book"></i></a>
                </li>
                <li>
                    <a href = "profile.php"><i class="fa fa-user"></i></a>
                </li>
                <li>
                    <a href = "upload.html"><i class="fa fa-upload"></i></a>
                </li>
                </div>
            </ul>
        </div>

   <!-- Content -->
     <nav class="home-nav">
     	<a href="change-password.php">Change Password</a>
     </nav>

     <div class="container">
        <div class="main">
            <!-- Navigation Bar -->
            <div class = "navbar">
                <ul>
                    <li>
                        <a href = "../about.html"><img src = "../assets/logo.png" id="logo"></a>
                    </li>
                    <div class="linkbuttons">
                    <li>
                        <a href = "../homepage.html"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href = "../recipes.html"><i class ="fa fa-book"></i></a>
                    </li>
                    <li>
                        <a href = "profile.php"><i class="fa fa-user"></i></a>
                    </li>
                    <li>
                        <a href = "../upload.html"><i class="fa fa-upload"></i></a>
                    </li>
                    </div>
                </ul>
            </div>

            <div class="row">
                <div class="cold-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="../assets/homepage/user.jpg" class="rounded-circle" width="200">
                            <div class="mt-3">
                                <a href="../posts.html">Recent Posts</a>
                                <a href="change-name.php">Change Name</a>
                                <a href="change-password.php">Change Password</a>
                                <a href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cold-md-4 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">Profile</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Full Name</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <p><?php echo $_SESSION['name']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <p><?php echo $_SESSION['email']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Footer -->
     <div class="search-text"> 
            <div class="container">
              <div class="row text-center">
              
                <div class="form">
                    <h4>SIGN UP TO OUR NEWSLETTER</h4>
                     <form id="search-form" class="form-search form-horizontal">
                         <input type="text" class="input-search" placeholder="Email Address">
                         <button type="submit" class="btn-search">Submit</button>
                     </form>
                 </div>
                 <p>© Cook With Me <span id="year"></span> . All Rights Reserved</p>
             
               </div>         
            </div>     
         </div>

    <script type="text/javascript">
        // for the footer's year
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
</body>
</html>

<?php 
}else{
     header("Location: forms.php");
     exit();
}
 ?>