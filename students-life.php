<?php
include "navbar.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Students Life -Anglican girls grammer school </title>
 <meta name="description" content=" student life  page of Anglican girls grammar school obalende ijebu-ode ogunstate nigeria ">
  <meta name="keywords" content="Anglican girls grammar school obalende ijebu-ode ogunstate nigeria, best school in ijebu-ode, schools in ogunstate, no 1 female secondary school, schools with boarding facilities">
  <meta name="Author" content="@debcodes- Joseph Deborah oluwadarasimi(an old girl set 2018/2024)">

  <!-- Favicons -->
   <link rel="shortcut icon" href="assets/img/aggspics/logo.png" type="image/x-icon">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="students-life-page">

 
            

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background position-relative" style="background-image: url(assets/img/aggspics/background2.jpg);">
      <div class="container position-relative">
        <h1>Student Life</h1>
      <p>Student life at Anglican Girls'Grammar School is vibrant and empowering ,offering opportunities for growth , leadership and lifelong friendships.  </p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Students Life</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Students Life Section -->
    <section id="students-life" class="students-life section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Hero Banner -->
        <div class="students-life-banner" data-aos="zoom-in" data-aos-delay="200">
          <div class="banner-content" data-aos="fade-right" data-aos-delay="300">
            <h2>Experience Campus Life</h2>
            <p>Discover a supportive and vibrant environment where  students grow academically ,s social and spiritually-shaping future leaders with purpose </p>
          </div>
          <img src="assets/img/aggspics/campus.jpg" alt="Campus Life" class="img-fluid">
        </div>

        <!-- Life Categories -->
        <div class="life-categories mt-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row g-4">
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
              <div class="category-card">
                <div class="icon-container">
                  <i class="bi bi-people-fill"></i>
                </div>
                <h4>Clubs</h4>
                <p>50+ Organizations</p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
              <div class="category-card">
                <div class="icon-container">
                  <i class="bi bi-trophy-fill"></i>
                </div>
                <h4>Athletics</h4>
                <p> 7+ sporting facilities</p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
              <div class="category-card">
                <div class="icon-container">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <h4>Events</h4>
                <p>20+ Annual Events</p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
              <div class="category-card">
                <div class="icon-container">
                  <i class="bi bi-house-door-fill"></i>
                </div>
                <h4>Housing</h4>
                <p>3+ Dormitories</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabs Section -->
        <div class="students-life-tabs mt-5" data-aos="fade-up" data-aos-delay="200">
          <ul class="nav nav-pills mb-4 justify-content-center" id="studentLifeTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="clubs-tab" data-bs-toggle="pill" data-bs-target="#students-life-clubs" type="button" role="tab" aria-controls="clubs" aria-selected="true">
                <i class="bi bi-people"></i> Clubs &amp; Organizations
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="athletics-tab" data-bs-toggle="pill" data-bs-target="#students-life-athletics" type="button" role="tab" aria-controls="athletics" aria-selected="false">
                <i class="bi bi-trophy"></i> Athletics
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="facilities-tab" data-bs-toggle="pill" data-bs-target="#students-life-facilities" type="button" role="tab" aria-controls="facilities" aria-selected="false">
                <i class="bi bi-building"></i> Campus Facilities
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="support-tab" data-bs-toggle="pill" data-bs-target="#students-life-support" type="button" role="tab" aria-controls="support" aria-selected="false">
                <i class="bi bi-shield-check"></i> Support Services
              </button>
            </li>
          </ul>

          <div class="tab-content" id="studentLifeTabsContent">
            <!-- Clubs & Organizations Tab -->
            <div class="tab-pane fade show active" id="students-life-clubs" role="tabpanel" aria-labelledby="clubs-tab">
              <div class="row g-4">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                  <div class="tab-content-image">
                    <img src="assets/img/aggspics/club.jpg" alt="Student Clubs" class="img-fluid  rounded">
                    <div class="stat-badge">
                      <span class="number">50+</span>
                      <span class="text">Active Clubs</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                  <div class="tab-content-text">
                    <h3>Join a Community That Shares Your Interests</h3>
                    <p>
                      At Anglican Girls' Grammar School , students are encouraged to explore their passions through vibrant clubs and organizations.
                      From arts and culture to academics and service, there's a place for every girl to thrive, lead and belong.
                    </p>

                    <div class="row g-3 mt-4">
                      <div class="col-md-6">
                        <div class="club-category">
                          <div class="icon-box">
                            <i class="bi bi-palette"></i>
                          </div>
                          <div class="content">
                            <h5>Arts &amp; Culture</h5>
                            <p>2 Organizations</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="club-category">
                          <div class="icon-box">
                            <i class="bi bi-globe"></i>
                          </div>
                          <div class="content">
                            <h5>Departmental clubs</h5>
                            <p>3 Organizations</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="club-category">
                          <div class="icon-box">
                            <i class="bi bi-lightbulb"></i>
                          </div>
                          <div class="content">
                            <h5>Academic</h5>
                            <p>3 Organizations</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="club-category">
                          <div class="icon-box">
                            <i class="bi bi-music-note-beamed"></i>
                          </div>
                          <div class="content">
                            <h5>Music</h5>
                            <p>3 Organizations</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- <a href="contact.html" class="btn btn-explore mt-4 text-center display-block"> For more info<i class="bi bi-arrow-right"></i></a> -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Athletics Tab -->
            <div class="tab-pane fade" id="students-life-athletics" role="tabpanel" aria-labelledby="athletics-tab">
              <div class="row g-4 mb-4 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                  <h3>Athletics &amp; Recreation Programs</h3>
                  <p>Our athletics and recreation programs are designed to promote fitness , teamwork and leadership.
                    Students enjoy a wide range of sports and activities that support a 
                    healthy and balanced lifestyle.
                  </p>
                  <a href="contact.php" class="btn btn-explore">View more<i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                  <!-- <div class="stats-container">
                    <div class="stat-item">
                      <span class="number">15+</span>
                      <span class="label">Sports Teams</span>
                    </div>
                    <div class="stat-item">
                      <span class="number">20+</span>
                      <span class="label">Championships</span>
                    </div>
                    <div class="stat-item">
                      <span class="number">300+</span>
                      <span class="label">Athletes</span>
                    </div>
                  </div> -->
                  <div>
                  <img src="assets/img/aggspics/field.jpg" class="img-fluid rounded fieldImage" alt="" srcset="">

                  </div>
                </div>
              </div>

              <!-- <div class="athletic-programs-slider swiper init-swiper" data-aos="fade-up" data-aos-delay="400" id="moreOnAthletic">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "576": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      },
                      "1200": {
                        "slidesPerView": 4
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="assets/img/education/activities-2.webp" class="img-fluid" loading="lazy" alt="Swimming">
                      <div class="sport-info">
                        <h5>Swimming</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="assets/img/education/activities-4.webp" class="img-fluid" loading="lazy" alt="Basketball">
                      <div class="sport-info">
                        <h5>Basketball</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="assets/img/education/activities-6.webp" class="img-fluid" loading="lazy" alt="Soccer">
                      <div class="sport-info">
                        <h5>Soccer</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div> -->
                  <!-- </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="assets/img/education/activities-8.webp" class="img-fluid" loading="lazy" alt="Tennis">
                      <div class="sport-info">
                        <h5>Tennis</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="assets/img/education/activities-10.webp" class="img-fluid" loading="lazy" alt="Volleyball">
                      <div class="sport-info">
                        <h5>Volleyball</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            -->
               </div>

            <!-- Facilities Tab -->
            <div class="tab-pane fade" id="students-life-facilities" role="tabpanel" aria-labelledby="facilities-tab">
              <div class="row g-4">
                <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                  <div class="facilities-gallery">
                    <div class="row g-3">
                      <div class="col-md-8">
                        <img src="assets/img/aggspics/housing.jpg" alt="Housing" class="img-fluid rounded">
                      </div>
                      <div class="col-md-4 ">
                        <img src="assets/img/aggspics/dining.jpg" alt="Dining"  class="img-fluid rounded">
                      </div>
                      <div class="col-md-4">
                        <img src="assets/img/aggspics/hall.jpg" alt="Library" class="img-fluid rounded">
                      </div>
                      <div class="col-md-8">
                        <img src="assets/img/aggspics/field.jpg" alt="Recreation" class="img-fluid rounded">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                  <div class="facilities-info">
                    <h3>Modern Campus Facilities</h3>
                    <p>
                      At <span title="Anglican Girls' Grammar School">A.G.G.S</span> , we provide a safe and inspiring environment for learning and growth.
                      Our modern campus includes well-maintained classrooms , comfortable hostels and serene surroundings  to support academic excellence and character development.
                    </p>

                    <div class="facilities-list">
                      <div class="facility-item">
                        <i class="bi bi-house-door"></i>
                        <h5>Residence Halls</h5>
                        <p>4 modern residence halls with flexible room options</p>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-cup-hot"></i>
                        <h5>Dining Options</h5>
                        <p>Nutritious meals served in hygienic dining spaces</p>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-book"></i>
                        <h5>Libraries</h5>
                        <p>Resource-rich libraries that encourage research and reading culture</p>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-bicycle"></i>
                        <h5>Recreation Center</h5>
                        <p>State-of-the-art fitness equipment and facilities</p>
                      </div>
                    </div>

                    <a href="assets/img/aggspics/virtualtour.mp4" class="btn btn-explore mt-3 glightbox">Virtual Campus Tour <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Support Services Tab -->
            <div class="tab-pane fade" id="students-life-support" role="tabpanel" aria-labelledby="support-tab">
              <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                  <div class="support-card">
                    <div class="icon">
                      <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h5>Health &amp; Wellness</h5>
                    <p>We prioritize students' physical and mental wellbeing through regular healths checkups, counselling and wellness programs.</p>
                    <a href="contact.php" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                  <div class="support-card">
                    <div class="icon">
                      <i class="bi bi-briefcase"></i>
                    </div>
                    <h5>Career Services</h5>
                    <p>
                      Our guidance counselors support students in discovering their strengths, setting academic goals and preparing for a future career paths.
                    </p>
                    <a href="contact.php" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="support-card">
                    <div class="icon">
                      <i class="bi bi-universal-access"></i>
                    </div>
                    <h5>Accessibility</h5>
                    <p>We are committed  to creating an inclusive environment with equal 
                      aceccess to facilities and learning resources for all students.
                    </p>
                    <a href="contact.php" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="support-card">
                    <div class="icon">
                      <i class="bi bi-mortarboard"></i>
                    </div>
                    <h5>Academic Support</h5>
                    <p>Students receive extra academic help through tutoring, mentoring and personalized support to excel in their studies.</p>
                    <a href="contact.php" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="row mt-5" data-aos="fade-up" data-aos-delay="500">
                <div class="col-md-6 offset-md-3 text-center">
                  <div class="contact-info-box">
                    <h4>Need Assistance?</h4>
                    <p>Our student support team is available Monday through Friday, 8am to 5pm.</p>
                    <a href="contact.php" class="btn btn-explore mt-2">Contact Student Services <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Student Life Gallery -->
        <div  class="students-life-gallery mt-5" data-aos="fade-up" data-aos-delay="200">
          <div class="section-header text-center">
            <h3>Life on Campus</h3>
            <p>Take a glimpse into our vibrant student community</p>
          </div>

          <div class="row g-3">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/aggspics/events.jpg" class="gallery-item glightbox">
                <img src="assets/img/aggspics/events.jpg" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <span>School Events</span>
                </div>
              </a>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/aggspics/event2.jpeg" class="gallery-item glightbox">
                <img src="assets/img/aggspics/event2.jpeg" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <span>Student Clubs</span>
                </div>
              </a>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/aggspics/alumn.jpeg" class="gallery-item glightbox">
                <img src="assets/img/aggspics/alumn.jpeg" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <span>Founder's Day Events</span>
                </div>
              </a>
            </div>

            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/aggspics/alumni2.jpeg" class="gallery-item glightbox">
                <img src="assets/img/aggspics/alumni2.jpeg" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <span>Alumni Events</span>
                </div>
              </a>
            </div>

            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="500">
              <a href="assets/img/aggspics/campusfacilities.jpg" class="gallery-item glightbox">
                <img src="assets/img/aggspics/campusfacilities.jpg" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <span>School Facilities</span>
                </div>
              </a>
            </div>
          </div>
        </div>

        
      </div>

    </section><!-- /Students Life Section -->

  </main>

   <?php
include "footer.php";

?>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
      <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>