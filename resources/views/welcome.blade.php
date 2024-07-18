<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Selamat Datang - YouthJob</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/perpus.svg') }}" rel="icon">
    <link href="{{ asset('assets/img/perpus.svg') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/landing_page') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/landing_page') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/landing_page') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/landing_page') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets/landing_page') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/landing_page') }}/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/youthid.svg') }}" alt="">
                <img src="{{ asset('assets/img/text_logo_youthid.svg') }}" alt="">

            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#recent-posts">Lowongan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <svg style="margin-left:6px" height="25" width="2">
                <line x1="1" y1="0" x2="1" y2="100"
                    style="stroke:#486284;stroke-width:1;" />
            </svg>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a class="btn-getstarted flex-md-shrink-0" href="{{ route('admin.home') }}">Dashboard</a>
                    @else
                        @if (Route::has('register'))
                            <a class="btn-register" href="{{ route('register') }}">Register</a>
                        @endif

                        <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Sign In</a>
                    @endauth
                </nav>
            @endif

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">YouthJob<br>Id.</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Ekspresikan Potensimu Melalui
                            Youth Id. Cari lowongan pekerjaan berdasarkan minat atau perusahaan yang cocok dengan
                            profile kamu</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="#about" class="btn-get-started">Pinjam Sekarang</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0">Lihat
                                semua buku</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('assets/landing_page') }}/img/hero-img.png" class="img-fluid animated"
                            alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->


        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 2000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('assets/landing_page') }}/img/clients/upi.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/landing_page') }}/img/clients/um.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/landing_page') }}/img/clients/unesa.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/landing_page') }}/img/clients/polije.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/landing_page') }}/img/clients/kominfo-removebg.png"
                                class="img-fluid" style="width: 280px; height: auto;" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/landing_page') }}/img/clients/kabupaten_jember-removebg.png"
                                class="img-fluid" style="width: 280px; height: auto;" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/landing_page') }}/img/clients/kampus merdeka.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/landing_page') }}/img/clients/digitalent.jpg" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Untuk Kamu</h2>
          <p>Daftar Lowongan Pekerjaan</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-5">
  
            <div class="col-xl-4 col-md-6">
              <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                  <span class="post-date">December 12</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="job-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
  
            <div class="col-xl-4 col-md-6">
              <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                  <span class="post-date">July 17</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="job-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
  
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-item position-relative h-100">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                  <span class="post-date">September 05</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-item position-relative h-100">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                  <span class="post-date">September 05</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-item position-relative h-100">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                  <span class="post-date">September 05</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-item position-relative h-100">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                  <span class="post-date">September 05</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-item position-relative h-100">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                  <span class="post-date">September 05</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-item position-relative h-100">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                  <span class="post-date">September 05</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-item position-relative h-100">
  
                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                  <span class="post-date">September 05</span>
                </div>
  
                <div class="post-content d-flex flex-column">

                    <!-- Judul pekerjaan -->
                    <h3 class="post-title">Frontend Developer</h3>
              
                    <!-- Informasi pekerjaan -->
                    <ul class="job-info list-unstyled">
                      <li><strong>Salary:</strong> $60,000 - $80,000 per year</li>
                      <li><strong>Category:</strong> Information Technology</li>
                      <li><strong>Company:</strong> Tech Solutions Inc.</li>
                      <li><strong>Status:</strong> Full-time</li>
                      <li><strong>Location:</strong> New York, NY</li>
                    </ul>
              
                    <hr>
              
                    <!-- Link untuk membaca lebih lanjut -->
                    <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              
                  </div>
  
              </div>
            </div><!-- End post item -->
  
          </div>
  
        </div>
  
      </section><!-- /Recent Posts Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Hubungki Kami</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street</p>
                                    <p>New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Hubungi Kami</h3>
                                    <p>+62 8781 55488 55</p>
                                    <p>+62 6678 254445 41</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                    <p>contact@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->



    </main>

    <footer id="footer" class="footer">


        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">FlexStart</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">FlexStart</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/landing_page') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/landing_page') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('assets/landing_page') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets/landing_page') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets/landing_page') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('assets/landing_page') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets/landing_page') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets/landing_page') }}/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/landing_page') }}/js/main.js"></script>

</body>

</html>
