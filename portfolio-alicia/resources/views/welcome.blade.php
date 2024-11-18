<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alicia</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

</head>


<body id="top">

    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset('images/Alicia..png') }}" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('blog') }}">Projects</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <div class="s-header__contact">
                        <a href="https://www.linkedin.com/in/alicia-lisal-1129ba323/" class="btn btn--primary s-header__contact-btn">Let's Work Together</a>                        
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro">

                <div class="row s-intro__content width-sixteen-col">

                    <div class="column lg-12 s-intro__content-inner grid-block">
                        
                        <div class="s-intro__content-text">
                            <div class="s-intro__content-pretitle text-pretitle">Hello, I'm Alicia</div>
                            <h1 class="s-intro__content-title">
                            I design intuitive <br>
                            interfaces and visuals, <br>
                            powered by <br>
                            clean code.                                
                            </h1>
                        </div> <!-- s-intro__content-text -->

                        <div class="s-intro__content-media"> 
                            <div class="s-intro__content-media-inner">                               
                                <img src="{{ asset('images/intro-bg.png') }}" alt="">
                                <div class="lines">                               
                                    <span></span>                                  
                                </div>
                            </div>
                        </div> <!-- s-intro__content-media -->                      

                        <div class="s-intro__scroll-down">
                            <a href="#about" class="smoothscroll">
                                <div class="scroll-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                                </div>
                                <span>Scroll for more</span>
                            </a>
                        </div> <!-- s-intro__scroll-down -->
                        
                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

            </section> <!-- end s-intro -->

            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row s-about__content width-sixteen-col">
                    <div class="column grid-block grid-section-split">

                        <img src="{{ asset('images/geometric_shape.svg') }}" alt="" class="s-about__content-imgbg">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">About</div>                           
                            <h2 class="text-display-title">
                            Aspiring AI enthusiast, merging design, technology, and innovation.
                            </h2>                           
                        </div> <!-- end section-header -->

                        <div class="s-about__content-main grid-section-split__primary">
                            <p class="attention-getter">
                                As a Computer Science student specializing in Artificial Intelligence, I am passionate about 
                                exploring the intersection of design and technology. With a strong foundation in UI/UX design, 
                                graphic design, and programming, I create intuitive and engaging digital experiences. My focus 
                                is on applying AI principles to solve real-world problems while ensuring seamless user interaction 
                                and functionality in every project I undertake.
                            </p>

                        </div> <!-- end s-about__content-main -->

                        <div class="s-about__content-btn grid-section-split__bottom">
                            <a href="about.html" class="btn btn--stroke u-fullwidth">More About Me</a>

                            <ul class="s-about__social social-list">
                                <li>
                                    <a href="https://github.com/alicialisal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                            <path d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.801 8.207 11.387.6.111.813-.261.813-.58 0-.287-.011-1.043-.016-2.048-3.338.728-4.041-1.61-4.041-1.61-.546-1.383-1.334-1.754-1.334-1.754-1.089-.743.083-.728.083-.728 1.204.085 1.836 1.22 1.836 1.22 1.069 1.832 2.809 1.302 3.497.997.108-.773.419-1.302.762-1.602-2.664-.305-5.464-1.332-5.464-5.923 0-1.307.467-2.373 1.237-3.21-.124-.303-.536-.91-.014-1.887 0 0 .576-.184 1.888.716 1.107-.307 2.286-.461 3.45-.465 1.164.004 2.343.158 3.45.465 1.312-.9 1.888-.716 1.888-.716.522.977.11 1.584-.014 1.887.77.836 1.237 1.903 1.237 3.21 0 4.597-2.801 5.616-5.475 5.917.43.375.762.894.762 1.497 0 1.079-.016 1.949-.016 2.217 0 .319.213.691.818.58C20.563 21.801 24 17.303 24 12c0-6.627-5.373-12-12-12z"></path>
                                        </svg>
                                        <span class="u-screen-reader-text">GitHub</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                        <span class="u-screen-reader-text">Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/alicia_lisal/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                        <span class="u-screen-reader-text">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                        <span class="u-screen-reader-text">Dribbble</span>
                                    </a>
                                </li>
                            </ul> <!-- end s-footer__social -->
                        </div> <!-- end s-about__content-btn -->
                    
                    </div> <!-- content-inner -->
                </div>
                
            </section> <!-- end s-about -->

            <!-- expertise
            ----------------------------------------------- -->
            <section id="expertise" class="s-expertise">

                <div class="row s-expertise__content width-sixteen-col">
                    <div class="column xl-12 grid-block grid-section-split">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Expertise</div>                           
                            <h2 class="text-display-title">
                            My key areas of expertise.
                            </h2>     
                            
                            <p class="lead">
                                As an Informatics student with a focus on Artificial Intelligence, I have honed my skills in both creative and technical fields, including designing engaging content, planning strategies, and coding solutions to solve real-world problems.
                            </p>
                        </div> <!-- end section-header -->

                        <div class="s-expertise__content-main grid-section-split__primary">

                            <div class="grid-list-items list-items show-ctr">
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">UI/UX Designing</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                            I design user interfaces that are not only visually appealing but also intuitive and user-friendly. I focus on creating seamless experiences, conducting user research, wireframing, prototyping, and ensuring that the final design meets the needs of users.
                                        </p>
                                    </div>
                                </div> <!-- list-item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Graphic Design</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                            As a graphic designer, I craft visual identities, create illustrations, and develop designs that communicate messages effectively. My expertise includes designing marketing materials, UI elements, and graphics for digital and print media.
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Front-end Development</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                            I specialize in building intuitive and responsive user interfaces using modern web technologies like HTML, CSS, JavaScript, and frameworks like Laravel. I ensure a seamless and engaging experience for users across devices.
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Basic Programming & Algorithms</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                            I am learning programming in some different languages, such as Python and Java, working on small projects, and solving basic algorithm problems. I focus on understanding coding logic, writing clean code, and applying it to solve problems.
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->

                            </div> <!-- grid-list-items -->
                        </div> <!-- end s-expertise__content-main -->

                        <div class="s-expertise__content-btn grid-section-split__bottom">
                            <a href="{{ route('services') }}" class="btn btn--stroke u-fullwidth">View All Services</a>
                        </div> <!-- end s-about__content-btn -->

                    </div> <!-- end grid-block-->
                </div> <!-- end s-expertise__content -->

            </section> <!-- end s-expertise -->

            <!-- clients
            ----------------------------------------------- -->
            <section id="clients" class="s-clients">          

                <div class="row s-clients__content-block width-sixteen-col">
                    <div class="column xl-12 grid-block grid-section-split">
                    
                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Experiences</div>                           
                            <h2 class="text-display-title">
                            I have had the privilege of working on exciting projects.
                            </h2>       
                        </div> <!-- end section-header -->
                    
                        <div class="grid-section-split__primary">
                            <p class="lead">
                            Throughout my academic journey, I've had the opportunity to apply my skills in real-world projects, collaborating with fellow students, mentors, and organizations to create impactful designs and software solutions. Additionally, I've gained valuable experience through active participation in several student organizations.
                            </p>   

                            <p>
                            As a 3rd-semester Informatics student specializing in AI, with experience in UI/UX design, graphic design, and web development using HTML, CSS, and JavaScript. I've also contributed to the Media / Publication and Documentation department, creating social media content, designing materials, and managing event documentation. These experiences have enhanced my technical and creative skills.
                            </p>
                        </div> <!-- end grid-section-split__primary -->
                    
                    </div> <!-- end column -->
                </div> <!-- end row -->
                                
                <div class="row s-clients__content-block width-sixteen-col">
                    <div class="column xl-12 testimonials">
                    
                        <div class="swiper-container testimonials__slider home-slider">

                            <div class="swiper-wrapper">
                                <div class="testimonials__slide swiper-slide">
                                    <p>
                                        I've had the opportunity to contribute to the Oweek committee, specifically in the Media, Publication, and Documentation (PDD) division. My involvement included graphic design, social media content creation, and multimedia support for various events. These experiences have helped me develop my technical and creative skills while working collaboratively in a team environment.
                                    </p>
                                    <div class="testimonials__author">
                                        <img src="{{ asset('images/oweek.png') }}" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>OWeek Elysian 2024</strong>
                                            <span>UC Makassar</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <p>
                                        As a member of the Creative and Publication team in the Informatics Student Union, I honed my skills in graphic design, content creation, and event branding. I contributed to designing, managing social media campaigns, and ensuring consistent visual identity for various events and initiatives. This role enhanced my ability to think creatively, work under deadlines, and collaborate with a team.
                                    </p>
                                    <div class="testimonials__author">
                                        <img src="{{ asset('images/Logo ISU.png') }}" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>ISU 23/24</strong>
                                            <span>UC Makassar</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <p>
                                        As a member of the Social Media team at my church, I was responsible for creating engaging content for our online platforms. My contributions included designing visuals, managing post schedules, and ensuring that our messages reached the congregation. This role taught me the importance of communication, creativity, and maintaining a consistent online presence to foster community engagement.
                                    </p>
                                    <div class="testimonials__author">
                                        <img src="{{ asset('images/greja.png') }}" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Tim Sosmed Gereja</strong>
                                            <span>GKKA Tanjung Bunga</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <p>
                                        Serving as a member of the Multimedia team at my church, I was responsible for operating visual presentations during services, including song lyrics, sermon slides, and announcement displays. This role required attention to detail, quick thinking, and the ability to coordinate seamlessly with the worship team to ensure a meaningful worship experience for the congregation.
                                    </p>
                                    <div class="testimonials__author">
                                        <img src="{{ asset('images/greja.png') }}" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Tim Multimedia Gereja</strong>
                                            <span>GKKA Tanjung Bunga</span>
                                        </cite>
                                    </div>
                                </div> 
                            </div> <!-- end swiper-wrapper --> 

                            <div class="swiper-pagination"></div>

                        </div> <!--end testimonials__slider -->                    
                    
                    </div> <!-- end column -->
                </div> <!-- end row -->


            </section> <!-- end s-clients -->            

        </section> <!-- s-content-->

        <!-- # cta
        ================================================== -->
        <section id="cta" class="s-cta">

            <div class="row row-x-center text-center">
                <div class="column xl-8 lg-12">

                    <div class="s-cta__content">
                        <h2 class="text-display-title">
                        Get started with a consultation today.
                        </h2>
                        <p class="lead">
                        Ready to take the next step? Let me help you bring your ideas to life. Whether you need expert guidance or creative solutions, I’m here to support you in achieving your goals. Reach out now, and let’s make great things happen!
                        </p>
                        <a href="https://www.linkedin.com/in/alicia-lisal-1129ba323/" class="btn btn--primary">Let's Work Together</a>
                    </div>

                </div>
            </div>

        </section> <!-- end s-cta -->

        {{-- <!-- # journal
        ================================================== -->
        <section id="journal" class="s-journal">

            <div class="row s-journal__content width-sixteen-col">
                <div class="column xl-12 grid-block">

                    <div class="grid-full section-header text-center">
                        <div class="text-pretitle">Recent Projects</div>                           
                        <h2 class="text-display-title">
                        Latest projects from my Me.
                        </h2>  
                    </div> <!-- end section-header --> 

                    <div class="grid-full s-journal__content-main grid-list-items">

                        <div class="grid-list-items__item blog-card">
                            <div class="blog-card__header">
                                <div class="blog-card__cat-links">
                                    <a href="https://www.dreamhost.com/r.cgi?287326">Sponsored</a>
                                </div>
                                <h3 class="blog-card__title"><a href="https://www.dreamhost.com/r.cgi?287326">Need Web Hosting for Your Websites?</a></h3>
                            </div>
                            <div class="blog-card__text">
                                <p>
                                Need hosting for your website? We would highly recommend <a href="https://www.dreamhost.com/r.cgi?287326">DreamHost</a>.
                                Enjoy 100% in-house support, guaranteed performance and uptime, 1-click installs, and a super-intuitive control 
                                panel to make managing your websites and projects easy. <a href="https://www.dreamhost.com/r.cgi?287326">Sign up</a> now to get started.
                                </p>
                            </div>
                        </div> <!-- end blog-card -->
                        <div class="grid-list-items__item blog-card">
                            <div class="blog-card__header">
                                <div class="blog-card__cat-links">
                                    <a href="blog.html">Productivity</a>
                                </div>
                                <h3 class="blog-card__title"><a href="single.html">5 Marketing Productivity Apps for Your Team</a></h3>
                            </div>
                            <div class="blog-card__text">
                                <p>
                                Rerum quam quos. Quibusdam quis autem voluptatibus earum vel ex error ea magni. Aut asperiores 
                                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut 
                                magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
                                </p>
                            </div>
                        </div> <!-- end blog-card -->
                        <div class="grid-list-items__item blog-card">
                            <div class="blog-card__header">
                                <div class="blog-card__cat-links">
                                    <a href="blog.html">SEO</a>
                                </div>
                                <h3 class="blog-card__title"><a href="single.html">7 SEO Factors to Consider for Better Website Ranking</a></h3>
                            </div>
                            <div class="blog-card__text">
                                <p>
                                Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores 
                                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut 
                                magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
                                </p>
                            </div>
                        </div> <!-- end blog card -->
                        <div class="grid-list-items__item blog-card">
                            <div class="blog-card__header">
                                <div class="blog-card__cat-links">
                                    <a href="blog.html">Productivity</a>
                                </div>
                                <h3 class="blog-card__title"><a href="single.html">5 Effective Web Design Principles</a></h3>
                            </div>
                            <div class="blog-card__text">
                                <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum ullam et laborum aperiam. 
                                Dignissimos quae voluptatibus ullam esse sapiente fugiat, rerum labore cupiditate obcaecati 
                                dolore necessitatibus id magni rem officia dolor nam sit laudantium. Quo eaque eveniet quibusdam unde. 
                                </p>
                            </div>
                        </div> <!-- end blog-card -->

                    </div> <!-- end grid-list-items -->

                </div> <!-- end grid-block-->
            </div> <!-- end s-journal__content -->

        </section> <!-- end s-journal -->
 --}}

        <!-- # footer 
        ================================================== -->
        <footer class="s-footer">
            <div class="row s-footer__content">
                <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__about">                    
                    <h3>About Alicia</h3>
                    <p>
                        Hi, I’m Alicia! An Informatics student passionate about creativity and technology. I’ve worked on design, content creation, and problem-solving, while also contributing to social media and multimedia projects at my church. I enjoy collaborating to create meaningful and impactful work.
                    </p>               
                </div>                
                <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
                    <h3>Site Links</h3>
                    <ul class="link-list">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('blog') }}">Projects</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="https://www.linkedin.com/in/alicia-lisal-1129ba323/">LinkedIn</a></li>
                    </ul>
                </div>
                <div class="column xl-3 lg-6 md-12 tab-12 s-footer__block s-footer__newsletter">
                    <h3>Newsletter</h3>

                    <p>
                    Subscribe to get the latest updates, insights, and resources delivered straight to your inbox!  
                    </p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="mc-form">
                            <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Your Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                            <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary btn--small u-fullwidth">
                            <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                            <div class="mc-status"></div>
                        </form>
                    </div>
                </div>
            </div>    
            
            <div class="row s-footer__bottom">
                <div class="column xl-6 lg-12">
                    <ul class="s-footer__social social-list">
                        <li>
                            <a href="https://github.com/alicialisal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.801 8.207 11.387.6.111.813-.261.813-.58 0-.287-.011-1.043-.016-2.048-3.338.728-4.041-1.61-4.041-1.61-.546-1.383-1.334-1.754-1.334-1.754-1.089-.743.083-.728.083-.728 1.204.085 1.836 1.22 1.836 1.22 1.069 1.832 2.809 1.302 3.497.997.108-.773.419-1.302.762-1.602-2.664-.305-5.464-1.332-5.464-5.923 0-1.307.467-2.373 1.237-3.21-.124-.303-.536-.91-.014-1.887 0 0 .576-.184 1.888.716 1.107-.307 2.286-.461 3.45-.465 1.164.004 2.343.158 3.45.465 1.312-.9 1.888-.716 1.888-.716.522.977.11 1.584-.014 1.887.77.836 1.237 1.903 1.237 3.21 0 4.597-2.801 5.616-5.475 5.917.43.375.762.894.762 1.497 0 1.079-.016 1.949-.016 2.217 0 .319.213.691.818.58C20.563 21.801 24 17.303 24 12c0-6.627-5.373-12-12-12z"></path>
                                </svg>
                                <span class="u-screen-reader-text">GitHub</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/alicia_lisal/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul> <!-- end s-footer__social -->
                </div>
                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© Copyright Alicia 2024</span> 
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a href="https://themewagon.com">ThemeWagon</a></span>
                    </p>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="17 11 12 6 7 11"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                    </a>
                </div> <!-- end ss-go-top -->
            </div>
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>