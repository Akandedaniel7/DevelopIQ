<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Quote - DevelopIQ</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link rel="shortcut icon" href="/assets/img/logo">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/index.css">
  
    <!-- Whatsapp Chatbot -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  </head>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/index.html">Develop<span class="logo-span">IQ</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/index.html">Home</a></li>
          <li class="dropdown"><a href="/about.html">About</a> 
          </li>
          <li><a class="nav-link scrollto" href="/service.html">Services</a></li> 
          <li><a class="nav-link scrollto " href="/portfolio.html">Portfolio</a></li>
          
          <li><a class="nav-link scrollto" href="/contact.html">Contact</a></li>
          <li><a class="getstarted scrollto" href="/quote.html">REQUEST A QUOTE</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs-1 d-flex align-items-center" style="background-image: url('/assets/img/service\ 1.webp');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Get A Quote</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Get A Quote</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <main id="main">
     <!-- ======= Get Started Section ======= -->
     <section id="get-started" class="get-started section-bg">
        <div class="container">
         <form action="">
          <!-- Form -->
          <div class="form1Flex">
            <!-- flex 1 -->
            <div class="formFlex_i">
              <label for="name">Name</label>
              <input type="text" placeholder="Enter Name" name="name" required>
            </div>
            <!-- flex 2 -->
            <div class="formFlex_ii">
             <label for="email">Email</label>
             <input type="email" name="email" id=""  placeholder="Enter Email" required>
            </div>
          </div>

          <!-- Form -->
          <div class="form1Flex">
            <!-- flex 1 -->
            <div class="formFlex_i">
              <label for="name">Contact</label>
              <input type="number" placeholder="Enter Contact Number " name="number" required>
            </div>
            <!-- flex 2 -->
            <div class="formFlex_ii">
             <label for="text">Country</label>
             <input type="text" name="text" id=""  placeholder="Enter Country Name" required>
            </div>
          </div>

          <!-- Form -->
          <div class="form1Flex">
            <!-- flex 1 -->
            <div class="formFlex_i">
              <label for="name">Approximate Budget</label>
              <select id="dropdown" name="dropdown">
                <option value="option1" disable selected>Select Aproxilate Budget</option>
                <option value="option2">$5000 to $10000</option>
                <option value="option3">$10000 to $25000</option>
                <option value="option4">$25000 to $50000</option>
                <option value="option5">$50000+</option>
                <option value="option6">Negotiable</option>
              </select>
            </div>
            <!-- flex 2 -->
            <div class="formFlex_ii form2">
             <label for="number"></label>
             <input type="number" name="text" id=""  placeholder="Enter Whatsapp Number" required>
            </div>
          </div>

         <!-- formGeneral  -->
         <div class="formGeneral">
          <label for="name">Details</label>
          <textarea name="text" id="" cols="10" rows="4" placeholder="Project Description"></textarea>
         </div>

         <!-- serviceTypes  -->
         <div class="serviceTypes">
          <h4>Select Service Type</h4>
          <div class="serviceDetails">
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for="">Web Design</label>
          </div>
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for="">Web Design</label>
          </div>
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for="">Software Design</label>
          </div>
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for="">Mobile App</label>
          </div>
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for=""> Graphics/Animation</label>
          </div>
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for=""> Digital Marketting</label>
          </div>
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for="">Game Design</label>
          </div>
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for="">Maintanace</label>
          </div>
          <!-- details -->
          <div class="serviceTypesDetails">
            <input type="checkbox" name="" id="">
            <label for="">Consulting</label>
          </div>
          </div>
         </div>
         
           <!-- Form -->
           <div class="form1Flex">
            <!-- flex 1 -->
            <div class="formFlex_i">
              <label for="name">Start Date</label>
              <input type="text" placeholder="When are you ready to start? " name="text" required>
            </div>
            <!-- flex 2 -->
            <div class="formFlex_ii">
             <label for="text">Company Name </label>
             <input type="text" name="text" id=""  placeholder="Enter your company or bussiness name" required>
            </div>
          </div>

           <!-- Form -->
           <div class="form1Flex">
            <!-- flex 1 -->
            <div class="formFlex_i">
              <label for="name">Position</label>
              <input type="number" placeholder="What is your position in your company " name="number" required>
            </div>
            <!-- flex 2 -->
            <div class="formFlex_ii">
              <label for="name">How did you know DevelopIQ</label>
              <select id="dropdown" name="dropdown">
                <option value="option1" disabled selected>Referral</option>
                <option value="option2">Facebook</option>
                <option value="option3">Twitter</option>
                <option value="option4">LinkedIn</option>
                <option value="option5">Instagram</option>
                <option value="option6">Goggle Search</option>
                <option value="option7">Clutch</option>
                <option value="option8">Family or Friends</option>
                <option value="option9">WhatsApp</option>
                <option value="option10">Sortlist</option>
                <option value="option11">TrustPilot</option>
                <option value="option12">GoodFirm</option>
                <option value="option13">Others</option>
              </select>
            </div>
          </div>

          <!-- Nda files  -->
          <div class="browerseFile ">
            <label for="fileInput">Select a file:</label>
            <input type="file" id="fileInput" name="fileInput" class="file-input">
            <p>Only doc, docx, pdf, rtf, txt, zip, rar files are allowed</p>
          </div>
          
          <div class="QuoteBtn">
            <button type="submit">Submit</button>
          </div>
          
         </form>
          </div>
      </section>
      
      <!-- End Get Started Section -->
  </main>
  
</footer><!-- End Footer -->

    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
          
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6 linkAll-i linkAll">
                    <h5 class="h1 text-white ">DevelopIQ</h5>
                    <p class="small text-muted logoAll-group">Software Website...</p>
                    <p class="small text-muted mb-0 linkAll">DevelopIQ is a Nigeria IT Brand of excellence that offers High quality and easy to use bespoke website,
                       software, digital marketing, branding, IT and associated services at affordable prices for business growth worldwide and profit
                        traction.</p>
                </div>
                <div class="col-lg-2 col-md-6 ">
                    <h5 class="text-white mb-3">Useful links</h5>
                    <ul class="list-unstyled text-muted linkAll">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Appilcation</a></li>
                        <li><a href="#">Graphics Design</a></li>
                        <li><a href="#">Plugin Development</a></li>
                        <li><a href="#">Marketing SEO</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Terms</a></li>
                      
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Links</h5>
                    <ul class="list-unstyled text-muted linkAll">
                        <li><a href="/index.html">Home</a></li>
                        <li><a href="/about.html">About</a></li>
                        <li><a href="/service.html">Services</a></li>
                        <li><a href="/portfolio.html">Portfolio</a></li>
                        <li><a href="#">Team</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 linkAll">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small text-muted linkAll">Subscribe to get Latest Technology and Business News, Offer and connect With Us.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary buttonAll" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class="copyright">
          Copyright © 2021 DevelopIQ. All rights reserved  
        </div>
    </footer>
</div>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <a href="https://api.whatsapp.com/send?phone=%2B2348149823761&text&app_absent=0"  target="_blank" class="whatsapp_float"><i class="fa-brands fa-whatsapp whatsapp-icon"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
