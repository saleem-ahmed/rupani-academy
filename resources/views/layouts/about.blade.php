@include('Frontend.header')
<div class="about-header">
    <div class="about-content">
        <h2>ABOUT US</h2>
    </div>
</div>
{{-- <div class="approch p-5">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2>Approaches To Learning</h2>
            </div>
            <div class="row mt-5 mx-auto">
                <div class="col mb-3 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('Frontend') }}/Assests/thinking.png" alt="">
                    <h3>Thinking <br>
                        Skills</h3>
                </div>
                <div class="col mb-3 d-flex flex-column justify-content-center align-items-center flex-wrap">
                    <img src="{{ asset('Frontend') }}/Assests/socail.png" alt="">
                    <h3>Social <br>
                        Skills</h3>
                </div>
                <div class="col mb-3 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('Frontend') }}/Assests/commu.png" alt="">
                    <h3>Communication <br>
                        Skills</h3>
                </div>
                <div class="col mb-3 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('Frontend') }}/Assests/self.png" alt="">
                    <h3>Self-Management <br>
                        Skills</h3>
                </div>
                <div class="col mb-3 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('Frontend') }}/Assests/research.png" alt="">
                    <h3>Research <br>
                        Skills</h3>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row flex-lg-row flex-md-column">
        <div class="col-lg-6 col-md-12 d-flex justify-content-center aligin-items-center my-5" >
            <img class="w-75" src="{{ asset('Frontend/Assests/pyp1.png') }}" alt="">
        </div>
        <div class="col-lg-6 col-md-12 d-flex justify-content-center aligin-items-center my-5">
            <img class="w-75" src="{{ asset('Frontend/Assests/pyp2.png') }}" alt="">
        </div>
    </div>
</div>
<div class="about-section my-5" id="background">
    <div class="container-md">
        <div class="row upsidedown">
            <div class="col-lg-5 col-md-12 d-flex justify-content-center align-items-center">
                <img class="w-75" src="{{ asset('Frontend') }}/Assests/background.png" alt="">
            </div>
            <div class="col-lg-7 col-md-12 d-flex flex-column justify-content-center align-items-center">
                <p>Rupani Academy is based on an ideal to abridge the    hiatuses in conventional ecosystem of education.
                    Our years of experience in the education field persuaded us to move forward and take the
                    responsibility of setting a new trend by introducing curriculum and education systems as per the
                    need and requirement of the progressing and developing world. After pioneering in Early Childhood
                    Development (ECD) in Pakistan Rupani Academy now aims to bring International Baccalaureate (IB)
                    curriculum in Gilgit-Baltistan for the first time to nurture students as global contributing
                    citizens.
                </p>
                <p>

                    Rupani Academy (RA) was founded on a simple belief that access to quality education is crucial for
                    unleashing the real potential of mountain communities. Inspired by their resilience and values, our
                    aim was to create an educational system which promotes inquiry based learning, critical thinking,
                    leadership, inclusion and democratic values. Following our traditions of going extra miles in
                    providing marginalized communities with quality education, skill development and learning resources,
                    Rupani Academy spent years of planning for a world class educational institution that would bring
                    excellence and brilliance to children living in the mountainous valleys of Gilgit Baltistan. The
                    curriculum, campus, teaching and learning programs, sports, critical thinking and social development
                    practices at Rupani Academy are realizations of the same dream of bringing excellence and brilliance
                    to the communities.
                </p>
            </div>

        </div>
    </div>
</div>
<div class="mission">
    <div id="mission-carosel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mission-carosel" data-bs-slide-to="1" aria-label="Slide 1">
                <i class="fa-solid fa-check-double"></i>
            </button>
            <button type="button" data-bs-target="#mission-carosel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 2">
                <i class="fa-solid fa-eye"></i>
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-8  wow animate__animated animate__fadeInUpBig">
                            <h2>Our Vision</h2>
                            <p>To provide quality education focusing on life skills and personality development for the
                                upbringing of a generation of productive and contributing global citizens.</p>
                            <a class="btn" href="">learn More</a>
                        </div>
                        <div class="col-4 mission-img  wow animate__animated animate__fadeInUpBig">
                            <img class="img-fluid" src="{{ asset('Frontend') }}/Assests/mission-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-8  wow animate__animated animate__fadeInUpBig">
                            <h2>Our Mission</h2>
                            <p>Provision of quality education of the International standards to the young generation for
                                sustainable development of locale, Pakistan, and the Global Community.</p>
                            <a class="btn" href="">learn More</a>
                        </div>
                        <div class="col-4 mission-img  wow animate__animated animate__fadeInUpBig">
                            <img class="img-fluid" src="{{ asset('Frontend') }}/Assests/mission-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#mission-carosel" data-bs-slide="prev">
            <span aria-hidden="true">
                <i class="fa-solid fa-arrow-left-long"></i>
            </span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mission-carosel" data-bs-slide="next">
            <span aria-hidden="true">
                <i class="fa-solid fa-arrow-right-long"></i>
            </span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- <hr class="bg-danger" style="height: 1px; width: 100%"> --}}
</div>
<div class="row" id="principal-message"></div>
<div class="container principal-message" >
    <div class="row flex-lg-row flex-md-column justify-content-center aligin-items-center">
        <div class="col-lg-4 col-md-12 d-flex flex-column justify-content-center aligin-items-center aligin-content-center">
            <img class="w-75"  src="{{ asset('Frontend/Assests/principal.png') }}" alt="">

            <marquee behavior="scroll" direction="left">
                <p>
                    <b>
                        Farzana Mansoor Ali
                    </b>
                    <br>
                    Principal, Rupani Academy,
                    Gilgit
                </p>
            </marquee>

        </div>
        <div class="col-lg-8 col-md-12 d-flex justify-content-center aligin-items-end">
            <div class="row">
                <p class="d-flex flex-column justify-content-end aligin-items-center">
                    <b>
                        Dear Students and Parents,
                    </b>
                    <br>
                    <br>
                    Education is only worthwhile if we are able to inculcate the love for the surrounding and mankind
                    with true practices. We, as, educationist have a huge responsibility to deliver far more than
                    content based learning. We need to impart knowledge that goes beyond the realm of the classroom.
                    Self-awareness is the first step to success. And that is where guidance plays the most important
                    role.

                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <p>
            At Rupani Academy, the 1st IB Candidate School in Gilgit-Baltistan, we emphasize on active learning, deeper
            understanding of the world around us and problem-solving capabilities. The students are encouraged to become
            inquirers and lifelong learners. We endeavour to inculcate within each student the practice of taking
            ownership of one’s own learning. It is our responsibility as educators to nurture and develop every pupil to
            prepare them for life ahead. The well-rounded education provided at Rupani Academy, balances each individual
            student’s, academic, social, physical and emotional growth. We believe that each child is an individual who
            is equipped with skills that need specific nurturing and care to adapt himself/herself in this ever changing
            world.
        </p>
        <p>
            As a diversified school, we are aspiring to work in harmony to build a strong community of leaders. The
            thoughtfulness, the empathy, the element of care in our culture will be the focal point in education
            processes at Rupani Academy, ensuring that our future generations will lead us positively.
        </p>
    </div>
</div>
@include('Frontend.footer')