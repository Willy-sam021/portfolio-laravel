@extends('layout.mysite')


@section('about')
<div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header text-left">
                        <p>Learn About Me</p>
                        <h2></h2>
                    </div>
                    <div class="about-text">
                        <p>
                            My name is Williams Samuel. Passionate about technology and problem-solving, i thrive in dynamic environments that challenge me to think critically and innovate. I enjoy exploring new ideas, collaborating with like-minded individuals, and continuosly expanding my knowledge. Whether its tackling complex challenges or refinig existing processes, I am always eager to learn and grow. My curiousity drives me to stay updated with the latest trends and advancements, ensuring that i bring fresh perspectives to everything i do.
                        </p>
                    </div>
                    <div>
                        <h1>Education</h1>
                        <p>I hold a B.s.c degree in Biochemistry from Mountain Top University, where i developed a strong foundation in analytical thinking and problem-solving. My background in science has honed my ability to approach challenges methodically and think critically. over time, my curiousity for technology led me to transition into software development, where i apply the same analytical mindset to creating innovative solutions. This unique blend of scientific reasoning and technical adaptability allows me to bring a fresh perspective to problem-solving in the digital space.</p>
                    </div>
                    {{-- <div>
                        <h1>Hobbies</h1>
                        <p>
                            <strong>
                            <p class="fw-bold text-muted">My hobbies are</p>
                            <ul>
                                <li>Coding</li>
                                <li>Reading</li>
                                <li>Playing chess</li>
                                <li>Solving problems</li>

                            </ul>
                            </strong>
                        </p>
                    </div> --}}

                    {{-- <a class="btn" href="">Learn More</a> --}}
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('skills')
<div class="row">
    <div class="col-md-12 mb-3">
        <h1 class="text-center" id="skill">Skills</h1>
        <p class="text-center"><span style="border-bottom: 5px solid red;width:100px;display:inline-block;"></span></p>
        <div class="row mt-3 gx-5 justify-content-center">
            <div class="col-md-3">
                <div class="icon p-3  ">
                <img src="img/reactjs.png" class="img-fluid">
                <p>Reactjs</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon p-3 ">
                <img src="img/html5.png" class="img-fluid">
                <p>HTML5</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon p-3 ">
                <img src="img/javascript.png" class="img-fluid">
                <p>Javascript</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mb-5">
    <div class="col-md-3">
        <div class="icon p-3" id="css">
                <img src="img/css.png" class="img-fluid">
                <p>CSS</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="icon p-3">
                <img src="img/mysql.png" class="img-fluid">
                <p>MySQL</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="icon p-3">
                <img src="img/python.png" class="img-fluid">
                <p>Python</p>
        </div>
    </div>

</div>

@endsection



@section('experience')

<div class="experience" id="experience">
    <div class="container">
        <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>My Resume</p>
            <h2>Projects</h2>
        </header>
        <div class="timeline">
            <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">2025</div>
                    <h2>Foodie go</h2>
                    <h4>url:https://github.com/Willy-sam021 </h4>
                    <h4>Technologies used:  PHP, MySQL, HTML, CSS, JavaScript, AJAX</h4>
                    <p>
                        Foodie Go, An e-commerce web application that connects buyers with sellers of raw food items such as chicken and fish, enabling product listing, order placement, and delivery tracking.
                    </p>
                </div>
            </div>
            {{-- <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">2045 - 2050</div>
                    <h2>Web Developer</h2>
                    <h4>Soft Agency, San Francisco, CA</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div> --}}
            {{-- <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">2045 - 2050</div>
                    <h2>Web Developer</h2>
                    <h4>Soft Agency, San Francisco, CA</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div> --}}
            {{-- <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">2045 - 2050</div>
                    <h2>Web Developer</h2>
                    <h4>Soft Agency, San Francisco, CA</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div> --}}
            {{-- <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">2045 - 2050</div>
                    <h2>Web Developer</h2>
                    <h4>Soft Agency, San Francisco, CA</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div> --}}
            {{-- <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">2045 - 2050</div>
                    <h2>Web Developer</h2>
                    <h4>Soft Agency, San Francisco, CA</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div> --}}
        </div>
    </div>
</div>



@endsection


@section('portfolio')
<div class="row mt-5">
    <div class="col-md-12">
        <h1 class="text-center" id="project">Project/Portfolios</h1>
        <p class="text-center"><span style="border-bottom: 5px solid red;width:100px;display:inline-block;"></span></p>
    </div>
</div>
<!-- portfolio 1 -->
<div class="row mt-3 mb-5">
    <div class="col-md-6 col-12">
        <div class="project align-items-center justify-content-center d-flex">
          <div class="card lorem mb-3" style="width: 18rem;">
              <img src="img/project1.png" class="card-img-top img-fluid " alt="matchmix app">
              <div class="card-body">
                <p class="card-text"><b>Matchmix:</b> An application that allows users to connect with their true love <br>
                </p>
              </div>
          </div>
        </div>
    </div>
    <!-- portfolio 2 -->

    <div class="col-md-6 col-12">

        <div class="project align-items-center justify-content-center d-flex">
            <div class="card lorem" style="width: 18rem;">
              <img src="img/project2.png" class="card-img-top img-fluid " alt="...">
              <div class="card-body">
                <p class="card-text"> <b>Novamed;</b> A web application for a pharmaceutical industry,that gives update on products and keeps track of marketers</p>
              </div>
            </div>
        </div>

    </div>
</div>



@endsection
