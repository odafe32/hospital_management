<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medi Plus</title>
    
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
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- ----------styles--------- -->
<link rel="stylesheet" href="./assets/css/style.css">

<!-- --------boxicon ----- -->
       
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
     <!-- Preloader -->
     <div id="preloader">
        <div class="spinner"></div>
    </div>
<!-- -----------navigation header--------- -->

<nav class="navbar">
    <div class="nav_container">
        <h1 class="logo"><img src="./assets/img/logo.png" alt=""></h1>
        <ul class="nav-links">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./about.php">About Us</a></li>
           
            <li><a href="./contact.php">Contact</a></li>
            <li class="dropdown">
                <a href="#services">Staffs <i class='bx bxs-user-detail'></i></a>
                <div class="dropdown-content">
                
                    <a href="./users/user_login.php">Users</a>
                    <a href="./doctor/doctor_login.php">Doctor </a>
                    <a href="">System Admin</a>
                </div>
            </li>
           
            <a  class="button" href="users/user_login.php" > <li>Book Appointment</li></a>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>
</nav>


<!-- ---------fullscreen image----- -->
<div class="slider">
    <div class="slides">
        <!-- Radio buttons for navigation -->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <!-- Slide images with write-ups -->
        <div class="slide first">
            <div class="image-container">
                <img src="./assets/img/2 (1).jpg" alt="Image 1">
            </div>
            <div class="text-overlay">
                <h2>Welcome to Medi Plus</h2>
                <p>Your health, our priority.</p>
                <div class="buttons">
                    <a href="./about.php" class="btn">Learn More</a>
                    <a href="contact.php" class="btn">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="image-container">
                <img src="./assets/img/2 (3).jpg" alt="Image 2">
            </div>
            <div class="text-overlay">
                <h2>Comprehensive Care</h2>
                <p>From preventive care to specialized treatments.</p>
                <div class="buttons">
                    <a href="./about.php" class="btn">Our Services</a>
                    <a href="./users/user_login.php" class="btn">Book Appointment</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="image-container">
                <img src="./assets/img/2 (2).jpg" alt="Image 3">
            </div>
            <div class="text-overlay">
                <h2>Experienced Doctors</h2>
                <p>Our team of experts is here for you.</p>
                <div class="buttons">
                    <a href="./users/user_login.php" class="btn">Meet Our Doctors</a>
                    <a href="#testimonials" class="btn">Testimonials</a>
                </div>
            </div>
        </div>
    
        <!-- Automatic navigation -->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
 
        </div>
    </div>

    <!-- Manual navigation -->
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
      
        <label for="radio4" class="manual-btn"></label>
    </div>
</div>

<!-- ------card options-------- -->

    <!-- Cards Section -->
    <section class="cards-section">
        <div class="card">
            <div class="icon">
                <img src="./assets/img/heart-pulse-2-svgrepo-com.png" alt="Icon 1">
            </div>
            <h3>Personalized Care</h3>
            <p>Our dedicated team provides personalized care tailored to each patient's needs.</p>
        </div>
        <div class="card">
            <div class="icon">
                <img src="./assets/img/firstaid-svgrepo-com.png" alt="Icon 2">
            </div>
            <h3>24/7 AVAILABILITY</h3>
            <p>We have a team of highly skilled specialists in women's health.</p>
        </div>
        <div class="card">
            <div class="icon">
                <img src="./assets/img/podcast-svgrepo-com.png" alt="Icon 3">
            </div>
            <h3>Advanced Technology</h3>
            <p>We utilize the latest technology to ensure the best outcomes for our patients.</p>
        </div>
    </section>

<!-- ----------about us---- -->
   <!-- About Section -->
   <div class="about_heading">
    <img src="./assets/img/section-img.png" alt="img">   <h2>We Offer Different Services To Improve Your Health</h2>
  
   </div>
   <section class="about-section">
    <div class="about-content">
   <h2>About Medi Plus</h2>
   <img src="./assets/img/section-img.png" class="img" alt="img">    
        <p>At Medi Plus, we are dedicated to providing comprehensive healthcare services tailored to meet the unique needs of women at every stage of life. Our experienced team of medical professionals is committed to delivering compassionate and personalized care.</p>
        <p>We offer a range of services from preventive care and screenings to advanced treatments and specialized care. Our goal is to support and empower women to achieve optimal health and well-being.</p>
        <a href="./about.php" class="btn">Learn More</a>
    </div>
    <div class="about-image">
        <img src="./assets/img/about-us.jpg" alt="About Medi Plus">
    </div>
</section>
 <!-- -----------[book appointmemnt------] -->
 <section class="appointment-section">
    <div class="appointment-content">
     
        <h2>Book an Appointment</h2>
        <p>Our team is here to provide you with the care and support you need. Schedule an appointment with one of our specialists today.</p>
        <p>We offer a variety of services tailored to meet your unique health needs, including:</p>
   
        <a href="./users/user_login.php"   class="btn" style="font-size:14px;">Book Appointment <i class='bx bx-chevrons-right'></i></a>
     
    </div>
    </div>
</section>
<!-- ---------contact form -------- -->

    <!-- Contact Section -->
    <!-- <section class="contact-section " id="contact"> 
        <div class="contact-container">
            <div class="contact-writeup">
                <h2>Book an Appointment</h2>
                <img src="./assets/img/section-img.png" class="img" alt="img">  
                <p>To book an appointment, please fill out the form on the right. Our team will get back to you to confirm your appointment. We are committed to providing you with the best healthcare services.</p>
                <p>Medi Plus is located at:</p>
                <address>
                    123 Health Blvd,<br>
                    Wellness City, WC 12345<br>
                    Phone: (123) 456-7890<br>
                    Email: appointments@Mediplus.com
                </address>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9582186.748804923!2d-15.016348882894905!3d54.10209383324115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2sng!4v1717323168085!5m2!1sen!2sng" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form-container">
                <form class="contact-form" action="#" method="post">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>

                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                    <label for="department">Department:</label>
                    <select id="department" name="department" required>
                        <option value="" disabled selected>Select a department</option>
                        <option value="gynecology">Gynecology</option>
                        <option value="obstetrics">Obstetrics</option>
                        <option value="breast-health">Breast Health</option>
                        <option value="fertility-services">Fertility Services</option>
                        <option value="wellness-programs">Wellness Programs</option>
                        <option value="mental-health">Mental Health</option>
                    </select>
                   

                    <label for="preferred-doctor">Preferred Doctor:</label>
                    <input type="text" id="preferred-doctor" name="preferred-doctor">

                    <label for="medical-history">Medical History:</label>
                    <textarea id="medical-history" name="medical-history" rows="4" placeholder="Briefly describe your medical history and any current conditions." required></textarea>

                    <label for="reason-for-visit">Reason for Visit:</label>
                    <textarea id="reason-for-visit" name="reason-for-visit" rows="4" placeholder="Describe the reason for your visit." required></textarea>

                    <label for="preferred-date">Preferred Appointment Date:</label>
                    <input type="date" id="preferred-date" name="preferred-date" required>

                    <label for="message">Additional Message:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Any other information or questions."></textarea>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </section> -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="services-container">
            <h2>Our Services</h2>
            <div class="service-cards">
                <div class="service-card">
                    <img src="./assets/img/health-medical-svgrepo-com.svg" alt="Gynecology" class="service-icon">
                    <h3>Gynecology</h3>
                    <p>Comprehensive gynecological services for women of all ages, including routine exams, contraceptive counseling, and menopause management.</p>
                    <button class="btn">Learn More</button>
                </div>
                <div class="service-card">
                    <img src="./assets/img/health-insurance-svgrepo-com.svg" alt="Obstetrics" class="service-icon">
                    <h3>Obstetrics</h3>
                    <p>Expert care for pregnancy, childbirth, and postpartum, ensuring the health and well-being of both mother and baby.</p>
                    <button class="btn">Learn More</button>
                </div>
                <div class="service-card">
                    <img src="./assets/img/health-svgrepo-com.svg" alt="Breast Health" class="service-icon">
                    <h3>Breast Health</h3>
                    <p>Advanced screening, diagnosis, and treatment for breast health, including mammograms and breast cancer care.</p>
                    <button class="btn">Learn More</button>
                </div>
                <div class="service-card">
                    <img src="./assets/img/alarm-svgrepo-com.svg" alt="Fertility Services" class="service-icon">
                    <h3>Fertility Services</h3>
                    <p>Comprehensive fertility evaluations and treatments to help you on your journey to parenthood.</p>
                    <button class="btn">Learn More</button>
                </div>
                <div class="service-card">
                    <img src="./assets/img/healthcare-medical-stethoscope-svgrepo-com.svg" alt="Wellness Programs" class="service-icon">
                    <h3>Wellness Programs</h3>
                    <p>Programs designed to promote overall health and well-being, including nutrition counseling and stress management.</p>
                    <button class="btn">Learn More</button>
                </div>
                <div class="service-card">
                    <img src="./assets/img/heart-pulse-2-svgrepo-com.png" alt="Mental Health" class="service-icon">
                    <h3>Mental Health</h3>
                    <p>Comprehensive mental health services including counseling and support for women dealing with various mental health issues.</p>
                    <button class="btn">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonials-section">
        <h2>What Our Patients Say</h2>
        <div class="testimonials-carousel">
            <div class="testimonial">
                <p>"The care I received at the Women's Health Center was outstanding. The staff was incredibly compassionate and professional."</p>
                <h4>- Jane Doe</h4>
            </div>
            <div class="testimonial">
                <p>"I felt supported and understood during my entire pregnancy journey. I can't thank the team enough for their dedication."</p>
                <h4>- Mary Smith</h4>
            </div>
            <div class="testimonial">
                <p>"The facilities are top-notch, and the attention to detail is evident in every aspect of the care provided."</p>
                <h4>- Susan Johnson</h4>
            </div>
        </div>
    </section>
    <!-- Animated Footer -->
    <footer class="footer">
        <div class="footer-content">
            <img src="./assets/img/logo.png" alt="">
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


    <!-- ------------------script--------- -->
    <script src="./assets/js/index.js"></script>
</body>
</html>