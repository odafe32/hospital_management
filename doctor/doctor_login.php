<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Doctor - Medi Plus</title>
    
    <!-- Meta tags -->
    <meta name="description" content="Medi Plus providing comprehensive healthcare services for women of all ages. Specializing in gynecology, obstetrics, and prenatal care.">
    <meta name="keywords" content="women's health, healthcare, gynecology, obstetrics, prenatal care">
    <meta name="author" content="daniel">
    <meta name="robots" content="index, follow"> <!-- To allow search engines to index the site -->
    
    <!-- Open Graph meta tags for social media sharing -->
    <meta property="og:title" content="Medi Plus">
    <meta property="og:description" content="Medi Plus providing comprehensive healthcare services for women of all ages. Specializing in gynecology, obstetrics, and prenatal care.">
    <meta property="og:image" content="https://ibb.co/BcnqHbF">
    <meta property="og:url" content="https://ibb.co/BcnqHbF">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Medi Plus">
    <meta name="twitter:description" content="Medi Plus providing comprehensive healthcare services for women of all ages. Specializing in gynecology, obstetrics, and prenatal care.">
    <meta name="twitter:image" content="https://ibb.co/BcnqHbF">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- ----------styles--------- -->


<!-- --------boxicon ----- -->
       
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./style.css">
         
    <title></title> 
</head>
<body>
         <!-- Preloader -->
         <div id="preloader">
        <div class="spinner"></div>
    </div>
<!-- -----------navigation header--------- -->

<nav class="navbar">
    <div class="nav_container">
        <h1 class="logo"><img src="./img/logo.png" alt=""></h1>
        <ul class="nav-links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="/about.php">About Us</a></li>
           
            <li><a href="/contact.php">Contact</a></li>
            <li class="dropdown">
                <a href="#services">Staffs <i class='bx bxs-user-detail'></i></a>
                <div class="dropdown-content">
                
                    <a href="../users/user_login.php">Users</a>
                    <a href="#">Doctor </a>
                    <a href="#">System Admin</a>
                </div>
            </li>
           
            <a  class="button" href="../users/user_login.php" > <li>Book Appointment</li></a>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>
</nav>
<!-- --------------------------------------------- -->
<div class="top">
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Doctor's Login</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                      
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup form2">
                <span class="title"> Doctor's Registration</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your Address" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Signup">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>


       <!-- Animated Footer -->
       <footer class="footer">
        <div class="footer-content">
            <img src="./img/logo.png" alt="">
            <p>Committed to providing the best healthcare services for women.</p>
            <ul class="socials">
                <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; <span id="year"></span> Medi Plus | Designed by YourName</p>
        </div>
    </footer>

     <script src="./script.js"></script> 
</body>
</html>