@extends('layout.mysite')
{{-- ABOUT ME SECTION --}}
@section('about')
<div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container-fluid">
        <div class="row align-items-center p-3">
            <div class="col-lg-6 shadow">
                <div class="row justify-content-between gy-4 p-3">
                    {{-- <div class="col-lg-5">
                        <img src="img/about.jpg" class="img-fluid" alt="">
                    </div> --}}
                    <div class="col-lg-12 about-info">
                      <p><strong>Name: </strong> <span>Williams Samuel Olubukunola</span></p>
                      <p><strong>Profile: </strong> <span>Full stack developer</span></p>
                      <p><strong>Email: </strong> <span>s.o.williams021@gmail.com</span></p>
                      <p><strong>Phone: </strong> <span>(+234) 8145030083 </span></p>
                      <p><strong>Linkedin: </strong> <span><a href="https://linkedin.com/in/williams-samuel">linkedin.com/in/williams-samuel</a></span></p>
                      <p><strong>Github: </strong> <span><a href="https://github.com/Willy-sam021">github.com/Willy-sam021</a></span></p>
                    </div>
                  </div>

            </div>
            <div class="col-lg-6 ">
                <div class="about-content">
                    <div class=" ">
                        <h3 class='fw-bold text-center'>About Me</h3>
                        <p class="text-center"><span style="border-bottom: 5px solid red;width:100px;display:inline-block;"></span></p>
                    </div>
                    <div class="about-text">
                        <p>
                            My name is Williams Samuel. Passionate about technology and problem-solving, i thrive in dynamic environments that challenge me to think critically and innovate. I enjoy exploring new ideas, collaborating with like-minded individuals, and continuosly expanding my knowledge.
                        </p>
                    </div>
                    <div>

                        <p>I hold a B.s.c degree in Biochemistry from Mountain Top University, where i developed a strong foundation in analytical thinking and problem-solving. over time, my curiousity for technology led me to transition into software development, where i apply the same analytical mindset to creating innovative solutions. This unique blend of scientific reasoning and technical adaptability allows me to bring a fresh perspective to problem-solving in the digital space.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
{{-- RESUME SECTION --}}
@section('resume')
<section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container-fluid section-title" data-aos="fade-up">
      <h2 class='text-center fw-bold'>My Resume</h2>
      <p class="text-center"><span style="border-bottom: 5px solid red;width:100px;display:inline-block;"></span></p>

    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Professional Summary</h3>

          <div class="resume-item pb-0 wow timeline">
            <p>Highly motivated Junior Web Developer with strong skills in full-stack web development, front-end and back-end technologies, and database management. Experienced in building scalable, user-centered applications using PHP, Laravel, JavaScript, MySQL, and related technologies. Committed to writing clean, maintainable code and passionate about continuous learning and technical excellence.</p>
          </div><!-- Edn Resume Item -->

          <h3 class="resume-title">Technical skill</h3>
          <div class="resume-item wow">
           <p><strong>Languages:</strong>PHP, HTML5, CSS3</p>
           <p><strong>Frameworks and Libraries:</strong> Laravel, ReactJs, jQuery, Bootstrap, AJAX</p>
           <p><strong>Databases: </strong> MySQL</p>
           <p><strong>Tools:  </strong> Git, GitHub, Postman</p>
           <p><strong>Other Skills:</strong>  RESTful APIs, Responsive Web Design, Website Maintenance, API Integration, Version Control, Agile Collaboration, Problem Solving.</p>

          </div><!-- Edn Resume Item -->
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <p>Bachelor of Science (B.Sc.) in Biochemistry</p>
            <p>Mountain Top University, Nigeria — Graduated 2023</p>
            <p>First Class Honours | CGPA: 4.91/5.0</p>
          </div>
          <!-- Edn Resume Item -->
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <h3 class="resume-title">Projects</h3>
          <div class="resume-item wow slideInLeft data-wow-delay='0.1s'">
            <h4>FoodieGo - E-commerce Web Application</h4>
            <h5>GitHub: <a href="https://github.com/Willy-sam021/Foodie_go">github.com/Willy-sam021/Foodie_go</a></h5>
            <h5>March - April, 2025</h5>
            <ul>
              <li>Designed and developed a full-stack e-commerce platform using PHP, MySQL, JavaScript, and Bootstrap.</li>
              <li>Implemented user authentication, product management, shopping cart functionality, and Paystack API integration. </li>
              <li>Enhanced user experience with AJAX-based dynamic interactions.</li>
              <li>Created scalable database schemas for managing product and user data.</li>
            </ul>
          </div><!-- End Resume Item -->

          <div class="resume-item">
            <h4>GeoLife - Property Listing Web Application</h4>
            <h5>GitHub: <a href="https://github.com/Willy-sam021/Geolife">github.com/Willy-sam021/Geolife</a></h5>
            <h5>April, 2025</h5>

            <ul>
              <li>Developed a property listing platform with Laravel, MySQL,  HTML5, and CSS3.</li>
              <li>Designed user inquiry forms and optimized database storage for property data.</li>
              <li>Built mobile-responsive layouts ensuring seamless browsing across devices.</li>

            </ul>
          </div><!-- End Resume Item -->
          <h3 class="resume-title">Certification</h3>
          <h4>Full-Stack Web Development Training</h4>
          <div class="resume-item">
            <p>Moat Academy for Developers | Completed April 2025</p>
            <p>Training in PHP, Laravel, JavaScript, MySQL, HTML5, CSS3, RESTful APIs, Git, and Agile methodology.</p>

          </div>

        </div>

      </div>

    </div>

  </section><!-- /Resume Section -->

@endsection

{{-- ***SKILLS SECTION*** --}}
@section('skills')
<div class="container-fluid mt-md-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h3 class="text-center fw-bold" id="skill">Skills</h3>
            <p class="text-center"><span style="border-bottom: 5px solid red;width:100px;display:inline-block;"></span></p>
        </div>
        <div class="col">
            <div class="row m-3 ">
                <div class="col-md-10 offset-md-2">
                    <div class="row ">
                        <div class="col-md-3 ms-1  shadow">
                            <div class="icon  p-3 text-center ">
                            <img src="img/reactjs.png" class="img-fluid">
                            <p>Reactjs</p>
                            </div>
                        </div>
                        <div class="col-md-3 ms-1 shadow">
                            <div class="icon p-3 text-center ">
                                <img src="img/html5.png" class="img-fluid">
                            <p>HTML5</p>
                            </div>
                        </div>
                        <div class="col-md-3 ms-1 shadow">
                            <div class="icon p-3 text-center">
                            <img src="img/javascript.png" class="img-fluid">
                            <p>Javascript</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-3">
        <div class="col-md-10 offset-md-2">
            <div class="row">
                <div class="col-md-3 m-1  shadow ">
                    <div class="icon p-3 text-center" id="css">
                            <img src="img/css.png" class="img-fluid" style='width:50px'>
                            <p>CSS</p>
                    </div>
                </div>
                <div class="col-md-3 m-1 shadow">
                    <div class="icon text-center p-3">
                            <img src="img/mysql.png" class="img-fluid">
                            <p>MySQL</p>
                    </div>
                </div>
                <div class="col-md-3 m-1 shadow">
                    <div class="icon text-center p-3">
                            <img src="img/php.png" class="img-fluid" style='width:60px'>
                            <p>PHP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- ***PROJECT EXPERIENCE SECTION*** --}}
@section('experience')
<div class="experience" id="project">
    <div class="container-fluid">
        <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <h3 class="text-center fw-bold">Projects</h3>
             <p class="text-center"><span style="border-bottom: 5px solid red;width:100px;display:inline-block;"></span></p>

        </header>
        <div class="timeline">
            <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">April 2025</div>
                    <h2>Foodie go</h2>
                    <h4>E-commerce Platform</h4>
                   <p>Github: <a href=" https://github.com/Willy-sam021/Foodiego"><u>Foodiego</u></a></p>

                    <p>
                        Foodie Go, An e-commerce web application that connects buyers with sellers of raw food items such as chicken and fish, enabling product listing, order placement, and delivery tracking.
                    </p>
                    <p class='fw-bold'>Technologies used:  PHP, MySQL, HTML, CSS, JavaScript, AJAX</p>
                </div>
            </div>
            <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">April-2025</div>
                    <h2>Geolife </h2>
                    <h4> Property Listing Platform </h4>
                    <p>Github: <a href='https://github.com/Willy-sam021/Geolife'>Geolife</a></p>
                    <p>A Laravel-based property listing web app that allows administrators to post land for sale with image galleries. Users can browse listings and submit custom offers, which are managed via an admin dashboard with reply functionality. Includes user authentication and input validation.

                    </p>
                    <p class='fw-bold'>Tech Stack: PHP (Laravel), MySQL, Bootstrap</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

{{-- **PORTFOLIO SECTIONS** --}}
@section('portfolio')
<div class="container-fluid">
<div class="row mt-5">
    <div class="col-md-12">
        <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <h3 class="text-center fw-bold">Portfolios</h3>
             <p class="text-center"><span style="border-bottom: 5px solid red;width:100px;display:inline-block;"></span></p>
        </header>
    </div>
</div>
<!-- portfolio 1 -->

<div class="row mt-3 p-3 mb-5">
    <div class="col-md-5 col-12">
        <div class="project align-items-center justify-content-center d-flex">
          <div class="card  mb-3" >
            <video src="/videos/Foodiegodemo.mp4" height='300px' autoplay muted controls></video>
              {{-- <img src="/img/foodiego.png" class="card-img-top img-fluid " alt="matchmix app"> --}}
              <div class="card-body">
                <div class='card-header'>
                    <h4>Foodie Go</h4>
                </div>
                <p class="card-text">An interactive platform that connects buyers and sellers of raw food items like chicken and fish.
                </p>
              </div>
          </div>
        </div>
    </div>
    <!-- portfolio 2 -->

    <div class="col-md-5 offset-md-2 col-12">

        <div class="project align-items-center justify-content-center d-flex">
            <div class="card " >
                <video src="/videos/Geolifedemo.mp4" height='300px' autoplay muted controls></video>
              <div class='card-header'>
                <h4>Geolife</h4>
              </div>
              <div class="card-body">
                <p class="card-text"> A web application for a pharmaceutical industry,that gives update on products and keeps track of marketers</p>
              </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection


@section('contact')
{{-- ***CONTACT ME SECTION *** --}}
<div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">

    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <div id="success"></div>

                        <form name="sentMessage" id="contactForm" action="https://formspree.io/f/xwpoprll" method="POST" novalidate="novalidate">
                            <h4 class="text-center">Contact Me</h4>
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" name='subject' data-validation-required-message="Please enter a subject" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" name='message' placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
