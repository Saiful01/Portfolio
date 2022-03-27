<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Saiful Islam - Resume / CV </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Saiful Islam - Resume/ CV"/>
    <meta name="keywords" content="saiful islam"/>
    <meta name="author" content="Saiful Islam"/>
    <link rel="shortcut icon" href="/images/photo.jpg">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/animate.css" type="text/css">
    <link rel="stylesheet" href="/css/animations.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <script src="/js/modernizr.custom.js"></script>
</head>
<body>
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner"></div>
    </div>
</div>
<div id="page" class="page">
    @include('sweetalert::alert')
    <header id="site_header" class="header mobile-menu-hide">
        <div class="header-content clearfix">
            <div class="my-photo"><img src="/images/photo.jpg" alt="image"></div>
            <div class="site-title-block">
                <div class="site-title">Saiful Islam</div>
            </div>
            <div class="site-nav">
                <ul id="nav" class="site-main-menu">
                    <li><a class="pt-trigger" href="#about-me">About Me</a></li>
                    <li><a class="pt-trigger" href="#resume">Resume</a></li>
                    <li><a class="pt-trigger" href="#portfolio">Portfolio</a></li>
                    <li><a class="pt-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="social-links">
                {{--  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a> --}}
                <a href="https://www.linkedin.com/in/saiful-islam-254282207/" target="_blank"><i
                        class="fab fa-linkedin"></i></a>
                <a href="https://www.facebook.com/saiful0131" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="copyrights">© {{date('Y')}} All rights reserved.</div>
        </div>
    </header>
    <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
            <div class="mobile-header-image"><a href="#"> <img src="/images/photo.jpg" alt="image"> </a></div>
            <div class="mobile-site-title"><a href="#">Saiful Islam</a></div>
        </div>
        <a class="menu-toggle mobile-visible"> <i class="fa fa-bars"></i> </a></div>
    <div class="lmpixels-arrows-nav">
        <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
    </div>
    <div id="main" class="site-main">
        <div class="pt-wrapper">
            <div class="subpages">
                <section class="pt-page" data-id="about-me">
                    <div class="section-inner start-page-full-width">
                        <div class="start-page-full-width">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="inner-content">
                                        <div class="fill-block"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="inner-content">
                                        <div class="hp-text-block">
                                            <div class="owl-carousel text-rotation">
                                                <div class="item">
                                                    <div class="sp-subtitle">Web Developer</div>
                                                </div>
                                                <div class="item">
                                                    <div class="sp-subtitle">Laravel-developer</div>
                                                </div>
                                            </div>
                                            <h2 class="hp-main-title">Saiful Islam</h2>
                                            <p>Hi, I'm a software engineer specialized in
                                                both front-end and back-end web development.
                                                I am an allround web developer. I love structure and order and I also
                                                stand for quality. I love spending time on fixing little details and
                                                optimizing web apps. Also I like working in a team, you'll learn faster
                                                and much more. As the saying goes: 'two heads are better than one'.</br>
                                                Have an exceptional {{date('l')}}</p>
                                            <div class="hp-buttons"><a href="/Saiful Islam.pdf" target="_blank"
                                                                       class="btn btn-primary" download="Saiful_islam">Download
                                                    CV</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-inner custom-page-content">
                        <div class="page-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-inner">
                                        <div class="block-title"><h3>What I Do</h3></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-inner">
                                        <div class="info-list-w-icon">
                                            <div class="info-block-w-icon">
                                                <div class="info-block-w-icon">
                                                    <div class="ci-icon"><i class="lnr lnr-laptop-phone"></i></div>
                                                    <div class="ci-text"><h4>Web Development</h4>
                                                        <p>I have working experience in any kind of web development with
                                                            client requirement</p></div>
                                                </div>
                                                <div class="ci-icon"><i class="lnr lnr-store"></i></div>
                                                <div class="ci-text"><h4>Ecommerce</h4>
                                                    <p>I have working experience in any kind of ecommerce like single
                                                        vendor, multi vendor etc</p></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-inner">
                                        <div class="info-list-w-icon">
                                            <div class="info-block-w-icon">
                                                <div class="ci-icon"><i class="lnr lnr-laptop-phone"></i></div>
                                                <div class="ci-text"><h4>Learning Management System</h4>
                                                    <p>I have working experience in Learning management System</p></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-inner ts-25 bs-50">
                                        <div class="block-title"><h3>Testimonials<span></span></h3></div>
                                        <div class="testimonials owl-carousel">
                                            <div class="testimonial-item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text"><p>It is a distinct pleasure for me to
                                                            recommend Saiful islam he has been professional,
                                                            comprehensive and competent throughout the process of our
                                                            working together. The reaction to our new web site has been
                                                            overwhelmingly positive; as one commented the site is
                                                            “FANTASTIC” </p></div>
                                                </div>
                                                <div class="testimonial-credits">
                                                    {{--    <div class="testimonial-picture"><img
                                                                src="images/testimonials/testimonial-2.jpg"
                                                                alt="Gary Johnson"/>
                                                        </div>--}}
                                                    <div class="testimonial-author-info"><p class="testimonial-author">
                                                            Asgar Ali</p>
                                                        <p class="testimonial-firm">Owner Of Quiz carnival</p></div>
                                                </div>
                                            </div>
                                            <div class="testimonial-item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text"><p>Fantastic work! I am just impressed
                                                            by their service quality and working strategy. I hired them
                                                            for the development of my ecommerce Mart Venue and they have
                                                            satisfied me to the full by delivering the exceptional
                                                            solution. They have a great expertise, are dedicated,
                                                            attentive, talented and care much about the client needs.
                                                            Highly recommended.</p></div>
                                                </div>
                                                <div class="testimonial-credits">
                                                    {{--   <div class="testimonial-picture"><img
                                                               src="images/testimonials/testimonial-1.jpg"
                                                               alt="Daniel Pringle"/>
                                                       </div--}}>
                                                    <div class="testimonial-author-info"><p class="testimonial-author">
                                                            Taposh Saha</p>
                                                        <p class="testimonial-firm">Owner Mart Venue</p></div>
                                                </div>
                                            </div>
                                            {{--  <div class="testimonial-item">
                                                  <div class="testimonial-content">
                                                      <div class="testimonial-text"><p>Etiam pretium ipsum quis justo
                                                              dictum accumsan. Phasellus egestas odio a velit scelerisque,
                                                              imperdiet elementum lorem aliquet.</p></div>
                                                  </div>
                                                  <div class="testimonial-credits">
                                                      <div class="testimonial-picture"><img
                                                              src="images/testimonials/testimonial-3.jpg"
                                                              alt="Billy Adams"/>
                                                      </div>
                                                      <div class="testimonial-author-info"><p class="testimonial-author">
                                                              Billy Adams</p>
                                                          <p class="testimonial-firm">Sagebrush</p></div>
                                                  </div>
                                              </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="pt-page" data-id="resume">
                    <div class="section-inner custom-page-content">
                        <div class="section-title-block second-style"><h2 class="section-title">Resume</h2> <h5
                                class="section-description">2 Years of Experience</h5></div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8">
                                    <div class="col-inner bs-30">
                                        <div class="block-title"><h3>Education</h3></div>
                                        <div class="timeline timeline-second-style bs-30 clearfix">
                                            <div class="timeline-item clearfix">
                                                <div class="left-part"><h5 class="item-period">Mar 2015 - Nov 2019</h5>
                                                    <span
                                                        class="item-company"> Institute of Science Trade and Technology, Dhaka.</span>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="right-part"><h4 class="item-title">B.Sc in Computer Science
                                                        and Engineering</h4>
                                                    <p>CGPA: 3.05 out of 4.00.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="timeline-item clearfix">
                                                <div class="left-part"><h5 class="item-period">2012 - 2014</h5> <span
                                                        class="item-company">Govt. City College, Chittagong.</span>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="right-part">
                                                    <h4 class="item-title">Higher Secondary Certificate</h4>
                                                    <p>
                                                        Group: Science, GPA: 4.40 out of 5.00.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="timeline-item clearfix">
                                                <div class="left-part"><h5 class="item-period">2012</h5> <span
                                                        class="item-company">Charondwip Rajavia Fadil Madrasah, Chittagong.</span>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="right-part">
                                                    <h4 class="item-title"> Secondary School Certificate</h4>
                                                    <p>
                                                        Group: Science, GPA: 5.00 out of 5.00.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-title"><h3>Experience<span></span></h3></div>
                                        <div class="timeline timeline-second-style clearfix">
                                            <div class="timeline-item clearfix">
                                                <div class="left-part"><h5 class="item-period">JAN 2020 - JUN 2020</h5>
                                                    <span
                                                        class="item-company">Qubit Solution</span></div>
                                                <div class="divider"></div>
                                                <div class="right-part"><h4 class="item-title">Internship</h4>
                                                    <p>Six Month internship web development</p></div>
                                            </div>

                                        </div>
                                        <div class="timeline timeline-second-style clearfix">
                                            <div class="timeline-item clearfix">
                                                <div class="left-part"><h5 class="item-period">JUL 2020 - Current</h5>
                                                    <span
                                                        class="item-company">Qubit Solution</span></div>
                                                <div class="divider"></div>
                                                <div class="right-part"><h4 class="item-title">Junior Web Developer</h4>
                                                    <p>After Six Month internship i'm working as a junior web developer
                                                        position. </p></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="col-inner">
                                        <div class="block-title"><h3>Frontend Skills<span></span></h3></div>
                                        <div class="skills-info skills-second-style">
                                            <div class="clearfix"><h4>HTML5</h4>
                                                <div class="skill-value">80%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-1"></div>
                                            </div>
                                            <div class="clearfix"><h4>CSS3</h4>
                                                <div class="skill-value">80%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-1"></div>
                                            </div>
                                            <div class="clearfix"><h4>Bootstrap4</h4>
                                                <div class="skill-value">80%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-1"></div>
                                            </div>
                                            <div class="clearfix"><h4>JavaScript</h4>
                                                <div class="skill-value">50%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-4"></div>
                                            </div>
                                            <div class="clearfix"><h4> Angular Js</h4>
                                                <div class="skill-value">50%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-4"></div>
                                            </div>
                                            <div class="clearfix"><h4> Vue Js </h4>
                                                <div class="skill-value">20%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-2"></div>
                                            </div>
                                        </div>
                                        <div class="block-title ts-10"><h3>Backend Skills<span></span></h3></div>
                                        <div class="skills-info skills-second-style">
                                            <div class="clearfix"><h4>PHP</h4>
                                                <div class="skill-value">85%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-5"></div>
                                            </div>
                                            <div class="clearfix"><h4>PHP OOP</h4>
                                                <div class="skill-value">70%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-3"></div>
                                            </div>
                                            <div class="clearfix"><h4>Laravel</h4>
                                                <div class="skill-value">80%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-1"></div>
                                            </div>
                                            <div class="clearfix"><h4>Rest Api</h4>
                                                <div class="skill-value">70%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-3"></div>
                                            </div>
                                            <div class="clearfix"><h4>MySQL</h4>
                                                <div class="skill-value">80%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-1"></div>
                                            </div>
                                            <div class="clearfix"><h4>GitHub</h4>
                                                <div class="skill-value">80%</div>
                                            </div>
                                            <div class="skill-container">
                                                <div class="skill-percentage skill-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-inner ts-30"><a href="/Saiful Islam.pdf" target="_blank"
                                                                    class="btn btn-primary" download="Saiful_islam">Download
                                            CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pt-page" data-id="portfolio">
                    <div class="section-inner custom-page-content">
                        <div class="section-title-block second-style"><h2 class="section-title">Portfolio</h2> <h5
                                class="section-description">My Works</h5></div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="portfolio-content">
                                        <ul class="portfolio-filters">
                                            <li class="active"><a class="filter btn btn-sm btn-link"
                                                                  data-group="category_all">All</a></li>
                                            <li><a class="filter btn btn-sm btn-link"
                                                   data-group="category_media">Ecommerce</a></li>
                                            <li><a class="filter btn btn-sm btn-link"
                                                   data-group="category_mockups">Lms</a>
                                            </li>
                                            <li><a class="filter btn btn-sm btn-link" data-group="category_soundcloud">Tour
                                                    Guide</a>
                                            </li>
                                            <li><a class="filter btn btn-sm btn-link"
                                                   data-group="category_vimeo-videos">Website</a></li>

                                        </ul>
                                        <div class="portfolio-grid three-columns">
                                            <figure class="item lbaudio"
                                                    data-groups='["category_all", "category_mockups"]'>
                                                <div class="portfolio-item-img"><img src="/images/quizcarnival.jpg"
                                                                                     alt="Learning Management System"
                                                                                     title=""/>
                                                    <a href="/images/quizcarnival.jpg"
                                                       class="lightbox mfp-iframe" title="Quiz Carnival"></a></div>
                                                <i class="fa fa-volume-up"></i> <h4 class="name">Learning Management
                                                    System</h4>
                                                <span class="category">
                                                    <a target="_blank"
                                                       href="https://quizcarnival.com/">Quiz Carnival</a>
                                                </span></figure>
                                            <figure class="item lbaudio"
                                                    data-groups='["category_all", "category_soundcloud""]'>
                                                <div class="portfolio-item-img"><img src="/images/ruchi.jpg"
                                                                                     alt="Ruchi
                                                        Explore Limitless"
                                                                                     title=""/>
                                                    <a href="/images/ruchi.jpg"
                                                       class="lightbox mfp-iframe" title="Quiz Carnival"></a></div>
                                                <i class="fa fa-volume-up"></i> <h4 class="name">Ruchi
                                                    Explore Limitless</h4>
                                                <span class="category">
                                                    <a target="_blank"
                                                       href="https://ruchiexplorelimitless.com/">Ruchi</a>
                                                </span></figure>

                                            <figure class="item lbvideo"
                                                    data-groups='["category_all", "category_media"]'>
                                                <div class="portfolio-item-img"><img src="/images/martvenue.jpg"
                                                                                     alt="MartVenue" title=""/> <a
                                                        href="/images/martvenue.jpg"
                                                        class="lightbox mfp-iframe" title="Vimeo Video 1"></a></div>
                                                <i class="fas fa-video"></i> <h4 class="name"><a href="https://martvenue.com/" target="_blank">
                                                        MartVenue
                                                    </a> </h4> <span
                                                    class="category">Ecommerce</span></figure>
                                            <figure class="item standard"
                                                    data-groups='["category_all", "category_media"]'>
                                                <div class="portfolio-item-img"><img src="/images/firebox.jpg"
                                                                                     alt="Firebox" title=""/> <a
                                                        href="/images/firebox.jpg" class="ajax-page-load"></a></div>
                                                <i class="far fa-file-alt"></i> <h4 class="name">Firebox</h4>
                                                <span class="category">Ecommerce</span></figure>
                                            <figure class="item lbimage"
                                                    data-groups='["category_all", "category_media"]'>
                                                <div class="portfolio-item-img"><img src="/images/kenarhat.jpg"
                                                                                     alt="Kenarhat" title=""/> <a
                                                        class="lightbox" title="Mockup Design 1"
                                                        href="images/portfolio/5.jpg"></a></div>
                                                <i class="far fa-image"></i> <h4 class="name">Kenarhat</h4> <span
                                                    class="category">Ecommerce</span></figure>
                                            <figure class="item lbvideo"
                                                    data-groups='["category_all", "category_vimeo-videos"]'>
                                                <div class="portfolio-item-img"><img src="/images/zsc.jpg"
                                                                                     alt="ZSC Enterprise" title=""/> <a
                                                        href="/images/zsc.jpg"
                                                        class="lightbox mfp-iframe" title="ZSC Enterprise"></a></div>
                                                <i class="fas fa-video"></i> <h4 class="name">ZSC Enterprise</h4> <span
                                                    class="category">Website</span></figure>
                                            <figure class="item lbvideo"
                                                    data-groups='["category_all", "category_vimeo-videos"]'>
                                                <div class="portfolio-item-img"><img src="/images/military.jpg"
                                                                                     alt="Bangabandhu Military Museum" title=""/> <a
                                                        href="/images/military.jpg"
                                                        class="lightbox mfp-iframe" title="Bangabandhu Military Museum"></a></div>
                                                <i class="fas fa-video"></i> <h4 class="name">Bangabandhu Military Museum</h4> <span
                                                    class="category">Website</span></figure>
                                            <figure class="item lbvideo"
                                                    data-groups='["category_all", "category_vimeo-videos"]'>
                                                <div class="portfolio-item-img"><img src="/images/eventtech.jpg"
                                                                                     alt="Eventtech Bd" title=""/> <a
                                                        href="/images/eventtech.jpg"
                                                        class="lightbox mfp-iframe" title="Eventtech Bd"></a></div>
                                                <i class="fas fa-video"></i> <h4 class="name">Eventtech Bd</h4> <span
                                                    class="category">Website</span></figure>
                                            <figure class="item lbvideo"
                                                    data-groups='["category_all", "category_vimeo-videos"]'>
                                                <div class="portfolio-item-img"><img src="/images/kitefest.jpg"
                                                                                     alt="Eventtech Bd" title=""/> <a
                                                        href="/images/kitefest.jpg"
                                                        class="lightbox mfp-iframe" title="Kitefest California"></a></div>
                                                <i class="fas fa-video"></i> <h4 class="name">Kitefest California</h4> <span
                                                    class="category">Website</span></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pt-page" data-id="contact">
                    <div class="section-inner custom-page-content">
                        <div class="section-title-block second-style"><h2 class="section-title">Contact</h2> <h5
                                class="section-description">Get in Touch</h5></div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="col-inner bs-30">
                                        <div class="lm-info-block gray-default"><i class="lnr lnr-phone-handset"></i>
                                            <h4><a href="tel:01825013101">01825013101</a></h4> <span
                                                class="lm-info-block-value"></span> <span
                                                class="lm-info-block-text"></span></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="col-inner bs-30">
                                        <div class="lm-info-block gray-default"><i class="lnr lnr-map-marker"></i> <h4>
                                                Tolarbag, Mirpur-1, Dhaka</h4> <span class="lm-info-block-value"></span>
                                            <span
                                                class="lm-info-block-text"></span></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="col-inner bs-30">
                                        <div class="lm-info-block gray-default"><i class="lnr lnr-envelope"></i> <h4><a
                                                    href=""
                                                    class="__cf_email__"
                                                    data-cfemail=""></a>
                                            </h4> <span class="lm-info-block-value"></span>saiful013101@gmail.com<span
                                                class="lm-info-block-text"></span></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="col-inner bs-30">
                                        <div class="lm-info-block gray-default"><i class="lnr lnr-checkmark-circle"></i>
                                            <h4>Freelance Available</h4> <span class="lm-info-block-value"></span> <span
                                                class="lm-info-block-text"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-xs-12 col-sm-8 offset-sm-1 offset-sm-2">
                                <div class="col-inner ts-20">
                                    <div class="block-title"><h3>How Can I Help You?</h3></div>
                                    <form class="contact-form"
                                          action="/contact/send"
                                          method="post">
                                        @csrf
                                        <div class="messages"></div>
                                        <div class="controls two-columns">
                                            <div class="fields clearfix">
                                                <div class="left-column">
                                                    <div class="form-group form-group-with-icon"><input id="form_name"
                                                                                                        type="text"
                                                                                                        name="name"
                                                                                                        class="form-control"
                                                                                                        placeholder="Full Name"
                                                                                                        required="required"
                                                                                                        data-error="Name is required.">
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group form-group-with-icon"><input id="form_name"
                                                                                                        type="text"
                                                                                                        name="phone"
                                                                                                        class="form-control"
                                                                                                        placeholder="Your Phone"
                                                                                                        required="required"
                                                                                                        data-error="Phone is required.">
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group form-group-with-icon"><input id="form_email"
                                                                                                        type="email"
                                                                                                        name="email"
                                                                                                        class="form-control"
                                                                                                        placeholder="Email Address"
                                                                                                        required="required"
                                                                                                        data-error="Valid email is required.">
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group form-group-with-icon"><input
                                                            id="form_subject" type="text" name="subject"
                                                            class="form-control" placeholder="Subject"
                                                            required="required"
                                                            data-error="Subject is required.">
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="right-column">
                                                    <div class="form-group form-group-with-icon"><textarea
                                                            id="form_message" name="message" class="form-control"
                                                            placeholder="Message" rows="7" required="required"
                                                            data-error="Please, leave me a message."></textarea>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g-recaptcha"
                                                 data-sitekey=""
                                                 data-theme="dark"></div>
                                            <input type="submit" class="button btn-send" value="Send message"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>


<script data-cfasync="false" src="/js/email-decode.min.js"></script>
<script src="/js/jquery-2.1.3.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/pages-switcher.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/validator.js"></script>
<script src="/js/jquery.shuffle.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/main.js"></script>
<script src="https://lmpixels.com/404.shtml"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6e841922cb8278bb","version":"2021.12.0","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}'
        crossorigin="anonymous"></script>
{{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if(Session::has('error'))

    Swal.fire({
        text: '{{ Session::get('error')}}',
        icon: 'error',
        confirmButtonText: 'Ok '
    })

    @endif


    @if(Session::has('message'))

    Swal.fire({
        icon: 'success',
        title: '{{ Session::get('message')}}',
        showConfirmButton: true,
        confirmButtonText: 'ok'
    })

    @endif
</script>--}}
</body>

</html>
