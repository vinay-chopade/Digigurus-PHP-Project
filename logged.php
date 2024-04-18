<?php
session_start();
include("function.php");
if (isset($_SESSION["user_id"])) {
   if (isLoginSessionExpired()) {
      header("Location:logout.php?session_expired=1");
   }
}
?>


<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
   <link rel="stylesheet" href="css/logged.css">

   <title>Dreamweaver|Dreamweaver.com</title>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

   <nav class="navbar fixed-top navbar-expand-lg navbar-light ">
      <div class="container-fluid">
         <a class="navbar-brand logo-text" href="logged.php">DigiGurus</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="user">
            <?php if (isset($_SESSION["uname"])) { ?>
               Welcome
               <?php echo $_SESSION["uname"]; ?>
            <?php } ?>
         </div>

         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

               <li class="nav-item user">
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#shome">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#services">Services</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#examples">Examples</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#features">Features</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="#contact">Contact</a>
               </li>
               <li class="nav-item ">
                  <a href="logout.php" class="btn">Logout</a>
               </li>

            </ul>
         </div>
      </div>
   </nav>

   <!-- INTRO -->
   <section id="shome" class="shome">

      <div class="container text-center">
         <div class="row justify-content-center">

            <div class="col-md-7">
               <h1 class="title display-4">Your Gateway to a Successful Career</h1>
               <p class="text-white fw-bold">The first step to building a successful career is to identify your goals.
                  Be
                  specific about what you want to achieve and set measurable targets to help you track your progress.
                  Make sure your goals are realistic and align with your skills, interests, and values.</p>
               <a href="#contact" class="btn btn-brand">Contact</a>
            </div>

         </div>
      </div>

   </section>


   <!-- SERVICES -->
   <section id="services">

      <div class="container">
         <div class="row">
            <div class="col-12 section-intro">
               <h1 class="label">Our Services</h1>
               <div class="hline"></div>
            </div>
         </div>
      </div>

      <div class="card-main-container row">

         <div class="card col-lg-4"><img src="img/coding.jpg" alt="image" style="width: 100%;">
            <h4 class="text-black text-center">CODING</h4>
            <div class="data">
               <h3 class="card-title">CODING</h3>
               <p class="card-info">Coding, sometimes called computer programming, is how we communicate with computers.
                  Code tells a computer what actions to take, and writing code is like creating a set of instructions.
                  By learning to write code, you can tell computers what to do or how to behave in a much faster way.
               </p>
               <div class="btnc">
                  <button class="raise" style="margin-left:30px"><a href="https://www.codechef.com/" target="_blank"
                        class="text-white">CodeChef</a></button>
                  <button class="raise"><a href="https://leetcode.com/" target="_blank"
                        class="text-white">LeetCode</a></button>
                  <button class="raise" style="margin-left: 80px;"><a href="https://www.hackerrank.com/" target="_blank"
                        class="text-white">HackerRank</a></button>
               </div>
            </div>
         </div>

         <div class="card col-lg-4"><img src="img/ui.jpg" alt="image" style="width: 100%;">
            <h4 class="text-black text-center">UI DESIGN</h4>
            <div class="data">
               <h3 class="card-title">UI DESIGN</h3>
               <p class="card-info"> Codigoviduals who are seeking guidance in their career choices or transitions, at
                  no cost. This guidance may include advice on job search strategies, res</p>
               <div class="btnc">
                  <button class="raise" style="margin-left:40px; padding-left:20px; padding-right:20px"><a
                        href="https://www.figma.com/" target="_blank" class="text-white">Figma</a></button>
                  <button class="raise" style="margin-left: 20px;"><a href="https://www.sketch.com/" target="_blank"
                        class="text-white">Sketch</a></button><br>
                  <button class="raise" style="margin-left: 90px;"><a href="https://helpx.adobe.com/" target="_blank"
                        class="text-white">AdobeXD</a></button>
               </div>
            </div>
         </div>

         <div class="card col-lg-4"><img src="img/web.jpg" alt="image" style="width: 100%;">
            <h4 class="text-black text-center">WEB DESIGN</h4>
            <div class="data">
               <h3 class="card-title">WEB DESIGN</h3>
               <p class="card-info"> CodigoThis guidance may include advice on job search strategies, r .</p>
               <div class="btnc">
                  <button class="raise" style="margin-left: 35px; padding-left:30px; padding-right:30px "><a
                        href="https://www.wix.com/" target="_blank" class="text-white">Wix</a></button>
                  <button class="raise"><a href="https://wordpress.com/" target="_blank"
                        class="text-white">WordPress</a></button>
                  <button class="raise" style="margin-left: 95px;"><a href="https://www.weebly.com/in" target="_blank"
                        class="text-white">Weebly</a></button>
               </div>
            </div>
         </div>

         <div class="card col-lg-4 "><img src="img/graphics.jpg" alt="image" style="width: 100%; height:92%;">
            <h4 class="text-black text-center">GRAPHICS DESIGN</h4>
            <div class="data">
               <h3 class="card-title">GRAPHICS DESIGN</h3>
               <p class="card-info">Graphic design is a profession, academic discipline and applied art whose activity
                  consists in
                  projecting visual communications intended to transmit specific messages to social groups, with
                  specific objectives.</p>
               <div class="btnc text-white">
                  <button class="raise" style="margin-left: 50px;"><a href="https://www.canva.com/" target="_blank"
                        class="text-white">Canva</a></button>
                  <button class="raise"><a href="https://www.adobe.com/express/" target="_blank"
                        class="text-white">Adobe</a></button>
                  <button class="raise" style="margin-left: 95px;"><a href="https://create.vista.com/" target="_blank"
                        class="text-white">Crello</a></button>
               </div>
            </div>
         </div>

         <div class="card col-lg-4"><img src="img/photo.jpg" alt="image" style="width: 100%;">
            <h4 class="text-black text-center">PHOTOGRAPHY</h4>
            <div class="data">
               <h3 class="card-title">PHOTOGRAPHY</h3>
               <p class="card-info"> CodigoCodigo It refers to the provision of professional advice and support to
                  individuals
                  who are seeking guidance in their car .</p>
               <div class="btnc">
                  <button class="raise" style="margin-left: 25px;"><a href="https://petapixel.com/" target="_blank"
                        class="text-white">PetaPixel</a></button>
                  <button class="raise"><a href="https://www.freelancer.com/" target="_blank"
                        class="text-white">Freelancer</a></button>
                  <button class="raise" style="margin-left: 95px;"><a href="https://www.lynda.com.cach3.com/"
                        target="_blank" class="text-white">Lynda</a></button>
               </div>
            </div>
         </div>

         <div class="card col-lg-4"><img src="img/hack.jpg" alt="image" style="width: 100%; height:92%;">
            <h4 class="text-black text-center">HACKING</h4>
            <div class="data">
               <h3 class="card-title">HACKING</h3>
               <p class="card-info"> Codigomakes it easier for individuals and businesses to find the education and
                  training they need to improve their skills, knowledge, and performance. .</p>
               <div class="btnc">
                  <button class="raise" style="margin-left: 40px;"><a href="https://www.fortinet.com/" target="_blank"
                        class="text-white">Fortinet</a></button>
                  <button class="raise"><a href="https://www.cybrary.it/" target="_blank"
                        class="text-white">Cybrary</a></button>
                  <button class="raise" style="margin-left: 90px;"><a href="https://owasp.org/" target="_blank"
                        class="text-white">OWASP</a></button>
               </div>
            </div>
         </div>

      </div>

   </section>



   <!-- WORK EXAMPLES -->
   <div class="sl">
      <section id="examples" class="slide ">

         <div class="col-12 section-intro">
            <h1>SOME PHOTOGRAPHY EXAMPLES</h1>
            <div class="hline1"></div>
         </div>

         <div id="carouselExample" class="carousel slide">

            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                  aria-label="Slide 4"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                  aria-label="Slide 5"></button>
            </div>

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img/e1.jpeg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="img/e2.jpeg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="img/e3.jpeg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="img/e4.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="img/e5.jpg" class="d-block w-100" alt="...">
               </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>

         </div>

      </section>


      <section id="examples1" class="slide1">

         <div class="col-12 section-intro">
            <h1>SOME UI EXAMPLES</h1>
            <div class="hline1"></div>
         </div>

         <div id="carouselExample1" class="carousel slide">

            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                  aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img/ui1.jpeg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="img/ui2.jpeg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="img/ui3.jpeg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="img/ui4.jpeg" class="d-block w-100" alt="...">
               </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>

         </div>

      </section>

   </div>

   <!-- FEATURES -->

   <div class="featureall">

      <section id="features">

         <div class="container">

            <div class="row">
               <div class="col-12 section-intro feature ">
                  <h1 class="text-white">Our Features</h1>
                  <div class="hline"></div>
               </div>
            </div>

            <div class="row gy-4">
               <div class="col-lg-4 col-sm-6 feature d-flex">
                  <div class="icon-box me-3">
                     <i class='bx bxs-right-arrow' style='color:#0dcaf0'></i>
                  </div>
                  <div>
                     <h5 class="title-md text-white">All courses at one place</h5>
                     <p> Makes it easier for individuals and businesses to find the education and training they need to
                        improve their skills, knowledge, and performance.
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 feature d-flex">
                  <div class="icon-box me-3">
                     <i class='bx bxs-right-arrow' style='color:#0dcaf0'></i>
                  </div>
                  <div>
                     <h5 class="title-md text-white">Best Courses suggestions</h5>
                     <p>Suggestions can help clients save time and effort in choosing the right courses for their
                        specific
                        needs.
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 feature d-flex">
                  <div class="icon-box me-3">
                     <i class='bx bxs-right-arrow' style='color:#0dcaf0'></i>
                  </div>
                  <div>
                     <h5 class="title-md text-white">Reliable study material</h5>
                     <p>It refers to educational content and resources that are trustworthy, accurate, and relevant to
                        the
                        courses or programs being offered. This can include textbooks, guides, online modules, videos,
                        and
                        other materials used for teaching and learning.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 feature d-flex">
                  <div class="icon-box me-3">
                     <i class='bx bxs-right-arrow' style='color:#0dcaf0'></i>
                  </div>
                  <div>
                     <h5 class="title-md text-white">No need of any membership</h5>
                     <p>It means that clients can access the consultancy's services and resources without having to pay
                        for
                        a membership or subscription fee. This suggests that the consultancy offers a pay-per-use or
                        pay-per-service model, where clients only pay for the specific services they use or the courses
                        they enroll in.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 feature d-flex">
                  <div class="icon-box me-3">
                     <i class='bx bxs-right-arrow' style='color:#0dcaf0'></i>
                  </div>
                  <div>
                     <h5 class="title-md text-white">Free Career guidance</h5>
                     <p>It refers to the provision of professional advice and support to individuals who are seeking
                        guidance in their career choices or transitions, at no cost. This guidance may include advice on
                        job search strategies, resume writing, interview preparation, career planning, and other related
                        topics.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 feature d-flex">
                  <div class="icon-box me-3">
                     <i class='bx bxs-right-arrow' style='color:#0dcaf0'></i>
                  </div>
                  <div>
                     <h5 class="title-md text-white">Free Learning</h5>
                     <p>By offering free learning opportunities, the consultancy is likely trying to attract potential
                        clients who may be seeking to improve their skills and knowledge, but may not have the financial
                        resources to pay for private education or training.</p>
                  </div>
               </div>
            </div>

         </div>

      </section>

   </div>

   <!-- CONTACT US  -->
   <section id="contact">

      <div class="container">
         <div class="row align-items-center">

            <div class="col-12 section-cnt">
               <h1>Contact Us</h1>
               <div class="hline1"></div>
            </div>

            <div class="col-lg-4">
               <img class="cnt-img" src="img/cnt.jpeg" alt="...">
            </div>

            <div class="col-lg-6 offset-lg-1">

               <form name="myform" action="http://localhost/Digigurus/Dreamdata.php" method="post">
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1">*</span>
                     <input type="text" class="form-control" placeholder="First Name" name="fname"
                        onblur="return first()">
                  </div>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1">*</span>
                     <input type="text" class="form-control" placeholder="Last Name" name="lname"
                        onblur="return last()">
                  </div>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1">@</span>
                     <input type="email" class="form-control" placeholder="Email" name="email"
                        onsubmit="return ValidateEmail(document.myform.email)">
                     <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                  </div>
                  <div class="input-group mb-4">
                     <span class="input-group-text">Comments</span>
                     <textarea class="form-control" aria-label="Comments" name="comment"></textarea>
                  </div>
                  <button type="submit" name="insert" value="insert" class="btn btn-brand"
                     onsubmit="alert('Submitted')">Submit</button>
               </form>
            </div>
         </div>
      </div>

   </section>

   <!-- RANDOM SENTENCE -->
   <section id="cta" class="py-1"></section>

   <!-- FOOTER PART -->
   <footer>
      <div class="footer-top">
         <div class="container">
            <div class="row">

               <div class="col-md-4">
                  <h4 class="logo-text-sm" style="font-family: Arial, Helvetica, sans-serif;">DigiGurus</h4>
                  <div class="social-icons ">
                     <div class="sociali-icons">
                        <a href="https://www.instagram.com/"><i class='bx bxl-instagram bx-md '></i></a>
                     </div>
                     <div class="socialt-icons">
                        <a href="https://twitter.com/"><i class='bx bxl-twitter bx-md '></i></a>
                     </div>
                     <div class="socialf-icons">
                        <a href="https://www.facebook.com/"><i class='bx bxl-facebook bx-md '></i></a>
                     </div>
                     <div class="socialw-icons">
                        <a href="https://www.whatsapp.com/"><i class='bx bxl-whatsapp bx-md '></i></a>
                     </div>
                  </div>
               </div>

               <div class="col-md-2">
                  <h5 class="title-sm">Navigation</h5>
                  <div class="footer-links">
                     <a href="#">Services</a>
                     <a href="#">Our Work</a>
                     <a href="#">Team</a>
                     <a href="#">Blog</a>
                  </div>
               </div>

               <div class="col-md-2">
                  <h5 class="title-sm">More</h5>
                  <div class="footer-links">
                     <a href="#">FAQ's</a>
                     <a href="#">Privacy & Policy</a>
                     <a href="#">Liscences</a>
                  </div>
               </div>

               <div class="col-md-3">
                  <h5 class="title-sm">Contact</h5>
                  <div class="footer-links">
                     <p class="mb-0">Shaitan gali, khatra mahal, andher nagar, shamshan ke samne</p>
                     <p class="mb-0">9999888822</p>
                     <p class="mb">mainkyubatau@gmail.com</p>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </footer>

   <!-- ************************************************************ -->
   <!-- FOOTER BOTTOM-->
   <div class="footer-bottom">
      <div class="container">

         <div class="row">
            <div class="text-center">
               <p class="mb-0">© Designed and developed by ❤️ by SS | Copyright ©2023 All rights reserved.</p>
            </div>
         </div>

      </div>
   </div>

   <script src="script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>