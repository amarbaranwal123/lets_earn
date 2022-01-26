<?php
    session_start();
    $name = $_SESSION['NAME'];
    if ($name==true) {
        
    }
    else
    {
        header("location:..\PHP\Login Form.php");
    }
?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="/cdn-cgi/apps/head/1HuD3dqKbkSvw3kR5SIn-To9RsE.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="..\CSS\home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Lets Learn</title>
    <link rel="shortcut icon" href="..\Images\logo.jpeg" type="image/x-icon" />
    
  </head>
  <body>
<section id="header">
<div class="container">
    <div class="back">
    <img src="..\Images\background.jpg"></div>
<div class="websitelogo">
<img src="..\Images\logo1.jpg" alt="Logo" class="logo">
</div>
<h2 class="logo"><br>Welcome !!</h2>
<div class="header-text">
<h1>Our purpose is to <br> teach and bring learning to all..</h1>
<span class="square"></span>
<p>
Our main aim is to help students Community in their academics . We provide notes of Computer Science of all
branches to score them well in their academics. Along with academics we also provide you topics and
materials for your placements.
</p>
<div class="line">
<span class="line-1"></span><br>
<span class="line-2"></span><br>
<span class="line-3"></span>
</div>
</div>
</div>
</section>

<nav id="sideNav">
<ul>
<li><a href="#header"><i class="fa fa-home" style="font-size: 24px; padding-right: 8px;"></i> HOME</a></li>
<li><a href="#about"><i class="far fa-address-card" style="font-size: 18px; padding-right: 8px;"></i> ABOUT US</a></li>
<li><a href="#features"><i class="fas fa-clipboard" style="font-size: 18px; padding-right: 8px;"></i> FEATURES</a></li>
<li><a href="#contact"><i class="fas fa-envelope" style="font-size: 18px; padding-right: 8px;"></i> CONTACT</a></li>
<li><a href="#team"><i class="fas fa-users" style="font-size: 18px; padding-right: 8px;"></i> OUR TEAM</a></li>
<li><a href="..\PHP\logout.php"><i class="fas fa-sign-out-alt" style="font-size: 18px; padding-right: 8px;"></i> LOG OUT</a></li>
</ul>
</nav>
<img src="..\Images\menu.jpg" alt="" id="menuBtn" onclick="myFunction()">

<section id="about">
<div class="about-left-col" data-aos="fade-down" data-aos-duration="1500">
<img src="..\Images\about.jpg" alt="">
</div>
<div class="about-right-col" data-aos="fade-up" data-aos-duration="1500">
<div class="about-text">
<h1>About Us</h1>
<span class="square"></span>
<p>"Let's Learn" community is here to help you in all forms. Our purpose is to teach and bring learning to the
students for helping them to learn and grow better. Helping students to learn, collaborate and
interact more effectively. </p><br>
<div class="line">
<span class="line-1"></span><br>
<span class="line-2"></span><br>
<span class="line-3"></span>
</div>
<h2>‘‘Every Student can learn, just not on the same day or in the same way’’</h2>
<h3>–George Evans</h3>
</div>
</div>
</section>

<section id="features">
<div class="feature-heading">
<h1>FEATURES</h1>
</div>
<div class="feature-row">
<div class="feature-col col-images" data-aos="fade-up" data-aos-duration="1500">
<img src="..\Images\notes.jfif" alt="">
<h4>ACADEMICS NOTES</h4>
<hr>
<div class="feature-box">


<table>
<tbody>
<tr>
<td><span>&#x2714</span></td>
<td>Stream Vise</td>
</tr>
<tr>
<td><span>&#x2714</span></td>
<td>Semester Vise</td>
</tr>
<tr>
<td><span>&#x2714</span></td>
<td>All Subjects</td>
</tr>
</tbody>
</table>
</div>
<button class="common-btn" onclick="window.location.href='../PHP/notes.php'">Download</button>
</div>
<div class="feature-col" data-aos="fade-up" data-aos-duration="1500">
<img src="..\Images\brain.jfif" alt="">
<h4>PLACEMENT SERIES</h4>
<hr>
<div class="feature-box">


<table>
<tbody>
<tr>
 <td><span>&#x2714</span></td>
<td>Placement Questions</td>
</tr>
<tr>
<td><span>&#x2714</span></td>
<td>Computer Programming Questions</td>
</tr>
<tr>
<td><span>&#x2714</span></td>
<td>DSA Questions</td>
</tr>
</tbody>
</table>
</div>
<button class="common-btn" onclick="window.location.href='../PHP/placement.php'">Download</button>
</div>
<div class="feature-col" data-aos="fade-up" data-aos-duration="1500">
<img src="..\Images\exam.jfif" alt="">
<h4>QUESTION PAPERS </h4>
<hr>
<div class="feature-box">


<table>
<tbody>
<tr>
<td><span>&#x2714</span></td>
<td>Previous Papers</td>
</tr>
<tr>
<td><span>&#x2714</span></td>
<td>Class Test Papers</td>
</tr>
<tr>
<td><span>&#x2714</span></td>
<td>All Subjects</td>
</tr>
</tbody>
</table>
</div>

<button class="common-btn" onclick="window.location.href='../PHP/paper.php'">Download</button>
</div>
</div>
<div class="feature-btn">
<div class="line">
<span class="line-1"></span><br>
<span class="line-2"></span><br>
<span class="line-3"></span>
</div>

</div>
</section>



    <section id="contact">
<div class="container contact-row">
<div class="contact-left-col" data-aos="fade-up" data-aos-duration="1500">
<h1>Contact Us</h1>
<form method="POST" action="..\PHP\contact.php">
<input type="text" name="name" placeholder="Your name" required>
<input type="email" name="email" placeholder="Your email" required>
<input type="tel" name="mobile" placeholder="Contact Number" required>
<input type="text" name="subject" placeholder="Subject" required>
<textarea name="msg" id="textarea" cols="12" rows="5" placeholder="Your message/query" required></textarea>
<div class="btn-box">
<input type="submit" value="Send" class="contact-btn">
<input type="reset" value="Reset " class="contact-btn">
</div>
</form>
<div class="line">
<span class="line-1"></span><br>
<span class="line-2"></span><br>
<span class="line-3"></span>
</div>
</div>
<div class="contact-right-col" data-aos="fade-down" data-aos-duration="1500">
<img src="..\Images\contact.jpg" alt="">
</div>
</div>
</section>

    <section id="team">
    <h1 class="title">Our Team</h1>
    <div class="team-row">
        <div class="member" data-aos="zoom-in" data-aos-duration="1500">
            <img src="..\Images\aanchal.png">
            <h2>Aanchal Priya</h2>

            <div class="social-media">
                <ul>
                    <li><a style="text-decoration: none;" href="https://www.instagram.com/appy_8257/" target="_blank" class="fa fa-instagram" aria-hidden="true"></a></li>

                    <li><a style="text-decoration: none;" href="https://www.linkedin.com/in/aanchal-priya-79bb451a5" target="_blank" class="fa fa-linkedin" aria-hidden="true"></a></li>
                </ul>
            </div>
        </div>

        <div class="member" data-aos="zoom-in" data-aos-duration="1500">
            <img src="..\Images\sir.jpeg">
            <h2>Mr. Sushil Kulkarni</h2>

            <div class="social-media">
                <ul>
                    <li><a style="text-decoration: none;" href="https://www.instagram.com/sushil_1011/" target="_blank" class="fa fa-instagram" aria-hidden="true"></a></li>

                    <li><a style="text-decoration: none;" href="https://www.linkedin.com/in/sushil1011/" target="_blank" class="fa fa-linkedin" aria-hidden="true"></a></li>
                </ul>
            </div>
        </div>

        <div class="member" data-aos="zoom-in" data-aos-duration="1500">
        <img src="..\Images\AMAR.jpg">
        <h2>Amarnath Baranwal</h2>

    <div class="social-media">
<ul>
<li><a style="text-decoration: none;" href="https://www.instagram.com/amar_baranwal21/" target="_blank" class="fa fa-instagram" aria-hidden="true"></a></li>

<li><a style="text-decoration: none;" href="https://www.linkedin.com/in/amarnath-baranwal-9b7941207/" target="_blank" class="fa fa-linkedin" aria-hidden="true"></a></li>
</ul>
</div>
</div>
</div>
</section>

<section id="footer">
<div class="container  footer-row">
<hr>
<div class="footer-left-col">

<div class="footer-links">
<div class="link-title">
<h4>Features</h4>
<a href="../PHP/notes.php"><small>Notes</small><br></a>
<a href="../PHP/paper.php"><small>Question Papers</small></a>
</div>
<div class="link-title">
<h4>Contact</h4>
<a href="#contact"><small>Contact Us</small></a><br>
</div>
<div class="link-title">
<h4>Let's Learn</h4>
<a href="#about"><small>About Us</small></a><br>
<a href="#"><small>FAQs</small><br></a>
</div>
</div>
</div>
<div class="footer-right-col">
<div class="footer-info">
<div class="copyright-text">
<small>letslearn@gmail.com
</small><br>
<small>Copyright &copy; 2021-22 <br>Let's Learn <br> All Rights Reserved. </small>
</div>
<div class="footer-logo">
<img src="..\Images\logo1.jpg" alt="">

</div>
</div>
</div>
</div>
</section>


<script>
        function myFunction() {
            var menuBtn = document.getElementById("menuBtn");
            var sideNav = document.getElementById("sideNav");
            document.onclick = function (e) {
                if (e.target.id == 'menuBtn') {
                    if (sideNav.style.right == "-690px") {
                        sideNav.style.right = "-300px";
                    } else {
                        sideNav.style.right = "-690px";
                    }
                }
                else {
                    sideNav.style.right = "-690px";
                }
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1000,
            speedAsDuration: true
        });
    </script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
