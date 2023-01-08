@extends('frontEndWebsite.mainContent')


@section('cssLinks')
<link rel="stylesheet" href="{{ asset('assets/frontEnd/css/style.css')}}">
@endsection
@section('content')






<section class="features text-center">
    <div class="features-data">
        <span>...</span>
        <h5>Technology Features</h5>
        <span>...</span>
        <h1>Full Potential Modern Features</h1>
    </div>

    <div class="container text-center">

        <div class="row g-3">
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/Bootstarp.png')}}" alt="">
                    <h5>Bootstarp</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/HTML.png')}}" alt="">
                    <h5>HTML</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/CSS.png')}}" alt="">
                    <h5>CSS</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/JS.png')}}" alt="">
                    <h5>JS</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/Angular.png')}}" alt="">
                    <h5>Angular</h5>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/React.png')}}" alt="">
                    <h5>React JS</h5>
                </div>
            </div>
        </div>


        <div class="row g-3">
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/sass_Logo.png')}}" alt="">
                    <h5>Sass</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/PHP-logo.png')}}" alt="">
                    <h5>PHP</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/graphic-design.jpg')}}" alt="">
                    <h5>Graphic Design</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/web-design.jpeg')}}" alt="">
                    <h5>Web Design</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/MySQL-Logo.wine.png')}}" alt="">
                    <h5>MySQL</h5>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg">
                <div class="features-item">
                    <img src="{{ asset('assets/frontEnd/images/laravel.png')}}" alt="">
                    <h5>Laravel</h5>
                </div>
            </div>
        </div>
    </div>
</section>






<section class="programming-acadmic">
    <div class="container">
        <div class="programming-acadmic-stage">
            <div class="row">
                <h4 class="text-center welcoming"> Hello <span class="welcoming-changeable">World!</span> </h4>
                <h2 class="text-center mb-5">Programming Acadmic <br> Programs</h2>
                <div class="col-sm-12 col-md-6 animate__animated animate__fadeInLeft">
                    <div class="programming-acadmic-stage-data">
                        <span class="age">Ages: 6-8</span>
                        <h2>Junior Coding Program</h2>
                        <h3>
                            Essential for the early development of logic and language
                            skills.
                        </h3>
                        <p>
                            This program offers a clear understanding of computers and the
                            basics of coding for your kids, which will help them develop a
                            solid appreciation of how these technologies work and will
                            change their view of the world!
                        </p>
                        <div class="more-info">
                            <a href="#" class="btn rounded-pill enroll-me">Enrol Now</a>
                            <a href="#" class="btn rounded-pill how-to-study">how to study</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="image-programming-stage">
                        <img class="main-image-stage animate__animated animate__fadeIn" src="{{ asset('assets/frontEnd/images/scratch.webp')}}" alt="" />
                        <img class="binary-code-scratch animate__animated animate__bounce" src="{{ asset('assets/frontEnd/images/binary-code.webp')}}" alt="" />
                        <img class="code-scratch animate__animated animate__bounce" src="{{ asset('assets/frontEnd/images/code-scratch.webp')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="programming-acadmic-stage programming-acadmic-stage-2">
            <div class="row">
                <div class="col-sm-12 col-md-6">

                    <div class="image-programming-stage">
                        <img class="main-image-stage animate__animated animate__fadeIn" src="{{ asset('assets/frontEnd/images/python-stage.webp')}}" alt="" />
                        <img class="code-scratch animate__animated animate__bounce" src="{{ asset('assets/frontEnd/images/lamp-python.webp')}}" alt="" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 animate__animated animate__fadeInRight">
                    <div class="programming-acadmic-stage-data">

                        <span class="age">AGES: 9-12 </span>
                        <h2>Young Developers Program</h2>
                        <h3>The ideal age to start learning how to code!</h3>
                        <p>
                            This age range is great to start learning. In this program,
                            students will learn professional computer coding languages such
                            as Python and JavaScript, and also will learn the solid
                            foundations of game development via game engines such as Unity
                            and Unreal Engine.
                        </p>
                        <div class="more-info">
                            <a href="#" class="btn rounded-pill enroll-me">Enrol Now</a>
                            <a href="#" class="btn rounded-pill how-to-study">how to study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="programming-acadmic-stage">
            <div class="row">
                <div class="col-sm-12 col-md-6 animate__animated animate__fadeInLeft">

                    <div class="programming-acadmic-stage-data">

                        <span class="age">AGES: 13-18 </span>
                        <h2>Teen Programmers Program</h2>
                        <h3>Best choice for older kids!</h3>
                        <p>
                            If your kids build a solid foundation now, they will have an
                            easier time later, by joining this program your kids will be
                            able to build a strong portfolio of advanced projects that will
                            help them excel in college and the job market.
                        </p>
                        <div class="more-info">
                            <a href="#" class="btn rounded-pill enroll-me">Enrol Now</a>
                            <a href="#" class="btn rounded-pill how-to-study">how to study</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="image-programming-stage">
                        <img class="main-image-stage  animate__animated animate__fadeIn" src="{{ asset('assets/frontEnd/images/front.webp')}}" alt="" />
                        <img class="math animate__animated animate__bounce" src="{{ asset('assets/frontEnd/images/math.png')}}" alt="" />
                        <img class="font animate__animated animate__bounce" src="{{ asset('assets/frontEnd/images/font.webp')}}" alt="" />
                        <img class="focus animate__animated animate__bounce" src="{{ asset('assets/frontEnd/images/focus.webp')}}" alt="" />
                        <img class="pen animate__animated animate__bounce" src="{{ asset('assets/frontEnd/images/pen.webp')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="services-data">
        <span>...</span>
        <h5>Our Popular Services</h5>
        <span>...</span>
        <h1> Amazing Web Design Service</h1>
    </div>


    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/frontEnd/images/services-icon-1.png')}}" alt="">
                    <h5>React js Development</h5>
                    <p>Focus provide beautiful layout client look make import</p>
                    <a href="">Read More <i class="fa-sharp fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/frontEnd/images/services-icon-2.png')}}" alt="">
                    <h5>React Native Development</h5>
                    <p>Focus provide beautiful layout client look make import</p>
                    <a href="">Read More <i class="fa-sharp fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/frontEnd/images/services-icon-3.png')}}" alt="">
                    <h5>Jamstack Development</h5>
                    <p>Focus provide beautiful layout client look make import</p>
                    <a href="">Read More <i class="fa-sharp fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/frontEnd/images/services-icon-4.png')}}" alt="">
                    <h5>Front-end development</h5>
                    <p>Focus provide beautiful layout client look make import</p>
                    <a href="">Read More <i class="fa-sharp fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/frontEnd/images/services-icon-5.png')}}" alt="">
                    <h5>MVP Development</h5>
                    <p>Focus provide beautiful layout client look make import</p>
                    <a href="">Read More <i class="fa-sharp fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/frontEnd/images/services-icon-6.png')}}" alt="">
                    <h5>Web app Development</h5>
                    <p>Focus provide beautiful layout client look make import</p>
                    <a href="">Read More <i class="fa-sharp fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/frontEnd/images/services-icon-7.png')}}" alt="">
                    <h5>Mobile app Development</h5>
                    <p>Focus provide beautiful layout client look make import</p>
                    <a href="">Read More <i class="fa-sharp fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/frontEnd/images/services-icon-8.png')}}" alt="">
                    <h5>Team Agumentation</h5>
                    <p>Focus provide beautiful layout client look make import</p>
                    <a href="">Read More <i class="fa-sharp fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    </div>

</section>




<section class="school-steps">
    <h4 class="card-title mb-5 text-center text-capitalize">From idea to company</h4>
    <h3 class="text-center"></h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline">
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                            <div class="timeline-year">2017</div>
                            <p class="description text-capitalize">
                                An idea via Facebook to provide technical advice in the field of programming and
                                electronics, then a
                                technical course in the field of electronics. </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <div class="timeline-year">2018</div>
                            <p class="description text-capitalize">
                                A set of technical courses in the field of programming, electronics and dealing with
                                electricity for
                                kindergartens
                            </p>
                        </a>
                    </div>

                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <div class="timeline-year">2019</div>
                            <p class="description text-capitalize">
                                The School of Engineers has become a room consisting of 12 chairs, 3 tables,
                                laptops, and a simple
                                section of electronic parts. </p>
                        </a>
                    </div>

                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <div class="timeline-year">2020</div>
                            <p class="description text-capitalize">
                                The School of Engineers has developed into 6 training halls equipped and licensed by
                                the Ministry of
                                Education in the name of Wasla Foundation for Training and Development. </p>
                        </a>
                    </div>

                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <div class="timeline-year">2021</div>
                            <p class="description text-capitalize">
                                The School of Engineers has developed to open a new branch in Gaza City with 3
                                training halls equipped
                                and licensed by the Ministry of National Economy in the name of Academic and Wasla
                                Company. </p>
                        </a>
                    </div>


                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <div class="timeline-year">2022</div>
                            <p class="description text-capitalize">
                                The launch of the online distance training service inside the Gaza Strip, and we
                                aspire to launch the
                                electronic platform for our school to learn technical skills remotely within 6
                                months from now and to
                                enter new markets outside the Gaza Strip. </p>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>

</section>


<section class="courses" id="courses">
    <div class="courses-data">
        <span>...</span>
        <h5>INDUSTRIES WE SERVE</h5>
        <span>...</span>
        <h1>Courses We Deliver truly prominent</h1>
    </div>

    <div class="courses-item">
        <div class="container">
            <div class="row g-4">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="courses-inner">
                        <img src="{{ asset('assets/frontEnd/images/project-3.jpg')}}" alt="">
                        <div class="inner-data">
                            <h3>Computer Skills</h3>

                            <p>The prospects for a company operating in this new market are varied and exciting. The
                                potential </p>
                        </div>
                        <a href="">
                            <h5>Read More>></h5>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="courses-inner">
                        <img src="{{ asset('assets/frontEnd/images/project-2.jpg')}}" alt="">
                        <div class="inner-data">
                            <h3>Graphic Design</h3>

                            <p>The prospects for a company operating in this new market are varied and exciting. The
                                potential </p>
                        </div>
                        <a href="">
                            <h5>Read More>></h5>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="courses-inner">
                        <img src="{{ asset('assets/frontEnd/images/project-2.jpg')}}" alt="">
                        <div class="inner-data">
                            <h3>Java Programming</h3>

                            <p>The prospects for a company operating in this new market are varied and exciting. The
                                potential </p>
                        </div>
                        <a href="">
                            <h5>Read More>></h5>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="courses-inner">
                        <img src="{{ asset('assets/frontEnd/images/services_ac_2.webp')}}" alt="">
                        <div class="inner-data">
                            <h3>Another Programs</h3>

                            <p>The prospects for a company operating in this new market are varied and exciting. The
                                potential </p>
                        </div>
                        <a href="">
                            <h5>Read More>></h5>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>


<section class="about">
    <div class="container">
        <div class="row">
            <div class="about-data">
                <span>...</span>
                <h5>Why Choose Us </h5>
                <h1>Web design company that <br> you can trust</h1>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about-item">
                    <div class="about-item-inner">
                        <div>
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="about-item-data">
                            <h4>Competitive rates</h4>
                            <p>We use strategic marketing tactics that have been proven programming for most complex
                                functions.</p>
                        </div>
                    </div>

                    <div class="about-item-inner">
                        <div>
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="about-item-data">
                            <h4>Premium Development</h4>
                            <p>We use strategic marketing tactics that have been proven programming for most complex
                                functions.</p>
                        </div>
                    </div>

                    <div class="about-item-inner">
                        <div>
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="about-item-data">
                            <h4>Retina Ready & Super Flexible</h4>
                            <p>We use strategic marketing tactics that have been proven programming for most complex
                                functions.</p>
                        </div>
                    </div>

                    <div class="about-item-inner">
                        <div>
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="about-item-data">
                            <h4>
                                No contracts needed</h4>
                            <p>We use strategic marketing tactics that have been proven programming for most complex
                                functions.</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <img src="{{ asset('assets/frontEnd/images/about-img.png')}}" alt="">
            </div>
        </div>
    </div>
</section>




<section class="project text-center" id="projects">
    <div class="features-data">
        <span>...</span>
        <h5>Pre-Made Template</h5>
        <span>...</span>
        <h1> Our Popular Website Template</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="project-item">
                    <img src="{{ asset('assets/frontEnd/images/project-2.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="project-item">
                    <img src="{{ asset('assets/frontEnd/images/project-3.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="project-item">
                    <img src="{{ asset('assets/frontEnd/images/project-4.jpg')}}" alt="">
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="project-item">
                    <img src="{{ asset('assets/frontEnd/images/project-5.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="project-item">
                    <img src="{{ asset('assets/frontEnd/images/project-6.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="project-item">
                    <img src="{{ asset('assets/frontEnd/images/project-7.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>





<section class="Blog">
    <div class="Blog_item">
        <h2>The New From Our Blog</h2>
        <p>Do you want to have a website that stands out and impresses your clients? Then we are ready to help!
            Click the button below to contact us and discuss your ideas.</p>
    </div>


    <div class="data">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="data_inner">
                        <img src="{{ asset('assets/frontEnd/images/about.jpg')}}" alt="">
                        <div class="Blog_item_inner">
                            <div class="Blog_date">
                                <span><i class="fa-solid fa-calendar-days"></i> Octoper 24,2022</span>
                            </div>
                            <h4>
                                Ways of Lying to Yourself About Your New Relationship.
                            </h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium totam aperiam...</p>
                            <h6>Read More <i class="fa-solid fa-arrow-right"></i></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="data_inner">
                        <img src="{{ asset('assets/frontEnd/images/about.jpg')}}" alt="">
                        <div class="Blog_item_inner">
                            <div class="Blog_date">
                                <span> <i class="fa-solid fa-calendar-days"></i>Octoper 24,2022</span>
                            </div>
                            <h4>
                                Ways of Lying to Yourself About Your New Relationship.
                            </h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium totam aperiam...</p>
                            <h6>Read More <i class="fa-solid fa-arrow-right"></i></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="data_inner">
                        <img src="{{ asset('assets/frontEnd/images/about.jpg')}}" alt="">
                        <div class="Blog_item_inner">
                            <div class="Blog_date">
                                <span><i class="fa-solid fa-calendar-days"></i> Octoper 24,2022</span>
                            </div>
                            <h4>
                                Ways of Lying to Yourself About Your New Relationship.
                            </h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium totam aperiam...</p>
                            <h6>Read More <i class="fa-solid fa-arrow-right"></i></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<section class="contactUs">
    <div class="container">
        <div class="row gy-5 w-100 ">
            <div class="col-sm-12 col-md-12 col-lg-6 shadow rounded contact_form">
                <h2 class="mb-5 fw-bolder contact_h2">Send Message</h2>

                <form action="{{ url('/storecommunication') }}" method="POST">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name_customer" style="border-color: #1955cc;" placeholder="Leave a comment here" style="height: 50px">
                        <label for="floatingTextarea2">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" style="border-color: #1955cc;" placeholder="Leave a comment here" style="height: 50px">
                        <label for="floatingTextarea2">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" name="phone" style="border-color: #1955cc;" placeholder="Leave a comment here" style="height: 50px">
                        <label for="floatingTextarea2">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="subject" style="border-color: #1955cc;" placeholder="Leave a comment here" style="height: 50px">
                        <label for="floatingTextarea2">Subject</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="message" style="border-color: #1955cc; height: 150px;" placeholder="Leave a comment here"></textarea>
                        <label for="floatingTextarea2">Message</label>
                    </div>

                    <input type="submit" class="btn py-3 w-100 btn-submit" value="Send Message">
            </div>
            </form>

            <div class="col-sm-12 col-md-12 col-lg-6  text-light rounded shadow-lg px-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d108839.01361760004!2d34.52396872021483!3d31.518139691852312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1671007938285!5m2!1sar!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection





<!-- Footer Start -->

<!-- Footer End -->