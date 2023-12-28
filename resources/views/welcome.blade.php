<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarPoolig</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/FrontEnd/style.css') }}">
    <!-- boxicon css link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body>
    <div class="overlay"></div>
    <header>
       <!--<a href="#" class="logo"><span>C</span>ar <span>P</span>ooling</a> -->
        <img src="{{ asset('assets/img/logo1.png') }}" width="120PX" class="logo">
        <ul class="navlist">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#Choose">Choose Us</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#Opinions">Opinions</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <div class="right-header">
                    <a href="{{ route('login') }}" class="btn">Login </a>
                    <div class="menu-icon">
                        <div class="bar"></div>

                    </div>
                @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn">Register </a>
                        <div class="menu-icon">
                            <div class="bar"></div>
                        </div>
                    </div>
                @endif
            @endauth
        </div>
        @endif
    </header>

    <section class="home" id="home">
        <div class="hero-info">

            <h1>Welcome to Your</h1>

            <div class="text-animate">
                <h2>Carpooling Platform</h2>
            </div>

            <p> <h3>Your Smart Solution for Sustainable and Affordable Commuting! 💰</h3></p>

            <div class="btn-box">
                <a href="#" class="btn">Book Now  <i class='bx bx-right-arrow-alt' ></i></a>

            </div>

            <div class="social-media">
                <div class="bg-icon">
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <span></span>
                </div>

                <div class="bg-icon">
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <span></span>
                </div>

                <div class="bg-icon">
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <span></span>
                </div>

                <div class="bg-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="img-hero">
            <img src="{{ asset('assets/img/home1.png') }}" alt="">
            <div class="rotate-text">
                <div class="text">
                    <p>We Are CarPooling Platform And Always Choose Us The Best</p>
                </div>
                <span><i></i></span>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ asset('assets/img/lolo.png') }}" alt="" class="aboutHero">
            <div class="showcase-ring">
                <img src="{{ asset('assets/img/shapes/ring.png') }}" class="ring">
                <img src="{{ asset('assets/img/shapes/circle.png') }}" class="circle">
            </div>
        </div>
        <div class="about-content">
            <h2 class="heading">About Us</h2>
            <h3>3 Year's Experience on CarPooling</h3>
            <p><span>Our Mission at Carpooling Platform, we believe in transforming daily commuting into a shared, sustainable, and enjoyable experience. Our mission is to:</span></p>
            <div class="about-btn">
                <button class="active">Reduce Traffic Congestion</button>
                <button>Cut Costs</button>
                <button>Environmental Impact</button>
            </div>
            <div class="content-btn">
                <div class="content">
                    <div class="text-box">
                    <p><strong style="color: rgb(66, 66, 66);">At CarPooling Platform</strong>, we are committed to reducing traffic congestion and enhancing your daily commute. By intelligently connecting commuters traveling in the same direction, we strive to alleviate congestion on the roads, ensuring a smoother and more efficient journey for everyone involved. Join our community to contribute to the collective effort of creating streamlined and stress-free transportation solutions. Together, we can make a positive impact on the flow of traffic and transform the way we navigate our daily routes.</p>

                </div>

                </div>

                <div class="content">
                    <div class="text-box">
                    <p><strong style="color: rgb(66, 66, 66);">At CarPooling Platform</strong>, our dedication to your financial well-being is reflected in our commitment to cutting costs on your daily commute. Through shared rides, we provide a practical solution to shared expenses, ensuring more money stays in your wallet. Embrace the economic benefits of carpooling with us, and experience a budget-friendly and sustainable way to travel. Join our community and start enjoying the financial advantages of collaborative transportation.</p>

                </div>

                </div>


                <div class="content">
                    <div class="text-box">
                    <p><strong style="color: rgb(66, 66, 66);">At CarPooling Platform</strong>, we recognize the profound impact transportation has on our environment. With every shared ride, you become a vital part of our mission to create a greener planet. By reducing carbon emissions through communal travel, we're collectively contributing to a positive environmental change. Join us in this eco-friendly journey, and together, let's make a meaningful difference for a sustainable future.</p>

                </div>

                </div>
            </div>

        </div>
    </section>

    <section class="Choose" id="Choose">
        <div class="main-text">
            <h2 class="heading">Why Choose Us</h2>
            <span>CarPooling Platform</span>
        </div>

        <div class="allServices">
            <div class="ChooseItem">
                <div class="icon-Choose">
                    <i class='bx bx-car bx-tada' ></i>

                    <span></span>
                </div>
                <h3>Efficient Matching </h3>
                <p>Our cutting-edge algorithms ensure efficient ride pairing, making it easy for you to find compatible rides.</p>
                <a href="#" class="readMore">Read More</a>
            </div>

            <div class="ChooseItem">
                <div class="icon-Choose">
                    <i class='bx bx-shield-plus bx-tada' ></i>
                    <span></span>
                </div>
                <h3>Verified Community</h3>
                <p>Your safety is our priority. We have a community of verified and reliable members, creating a secure and trustworthy.</p>
                <a href="#" class="readMore">Read More</a>
            </div>

            <div class="ChooseItem">
                <div class="icon-Choose">
                    <i class='bx bx-time-five bx-tada' ></i>
                    <span></span>
                </div>
                <h3>Real-Time Updates</h3>
                <p>Stay connected with real-time updates and communication features for seamless coordination with fellow commuters.</p>
                <a href="#" class="readMore">Read More</a>
            </div>

            <div class="ChooseItem">
                <div class="icon-Choose">
                    <i class='bx bx-donate-heart bx-tada' ></i>
                    <span></span>
                </div>
                <h3>Sense of Community</h3>
                <p> Embrace the camaraderie of shared journeys. Connect with like-minded individuals and make every ride a shared adventure.</p>
                <a href="#" class="readMore">Read More</a>
            </div>
        </div>

        <div class="proposal">
            <div class="text-box">
                <span>Get It Touch</span>
                <h3>Have Additional Properties On Your Mind ?</h3>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
            <img src="{{ asset('assets/img/titi.png') }}" class="first">
        </div>

        <div class="showcase">
            <img src="{{ asset('assets/img/shapes/ring.png') }}" class="ring">
            <img src="{{ asset('assets/img/shapes/circle.png') }}" class="circle">
            <img src="{{ asset('assets/img/shapes/circle.png') }}" class="circle2">
            <img src="{{ asset('assets/img/shapes/circle.png') }}" class="circle3">
        </div>
    </section>

    <section class="Services" id="Services">
        <div class="main-text">
            <h2 class="heading">My Services</h2>
            <span>what i will do for you</span>
        </div>
        <div class="fillter-buttons">
            <button class="button mixitup-control-active" data-filter="all">All Users</button>
            <button class="button" data-filter=".web">For Riders</button>
            <button class="button" data-filter=".uiux">For Drivers</button>

        </div>

        <div class="Services-gallery">
            <div class="Services-box mix uiux">
                <div class="Services-content">
                    <h3>Cost-Efficient Commuting</h3>
                    <p>As a driver in our carpooling community, achieve cost-efficient commuting by sharing expenses with fellow passengers, ensuring more affordable transportation.</p>
                    <a href="#" class="readMore">Explore More</a>
                </div>
                <div class="Services-img">
                    <img src="{{ asset('assets/img/Services/mony1.png') }}" alt="">
                </div>
            </div>

            <div class="Services-box mix web">
                <div class="Services-content">
                    <h3>Affordable Transportation</h3>
                    <p>Access a cost-effective and sustainable transportation option by joining rides with our verified community of drivers. Save money on your daily commute.</p>
                    <a href="#" class="readMore">Explore More</a>
                </div>
                <div class="Services-img">
                    <img src="{{ asset('assets/img/Services/Car.png') }}" alt="">
                </div>
            </div>

            <div class="Services-box mix uiux">
                <div class="Services-content">
                    <h3>Flexible Schedule Management</h3>
                    <p>Gain control over your commuting routine with flexible schedule management as a driver, allowing you to set your own availability for shared rides.</p>
                    <a href="#" class="readMore">Explore More</a>
                </div>
                <div class="Services-img">
                    <img src="{{ asset('assets/img/Services/time.png') }}" alt="">
                </div>
            </div>


            <div class="Services-box mix web">
                <div class="Services-content">
                    <h3>Efficient Ride Matching</h3>
                    <p>Our advanced algorithms ensure efficient ride pairing, connecting you with drivers traveling in the same direction. Save time and enjoy a hassle-free commuting experience.</p>
                    <a href="#" class="readMore">Explore More</a>
                </div>
                <div class="Services-img">
                    <img src="{{ asset('assets/img/Services/pos.png') }}" alt="">
                </div>
            </div>

            <div class="Services-box mix uiux">
                <div class="Services-content">
                    <h3> Earnings Potential</h3>
                    <p>Earn extra income by offering rides to fellow commuters. Our platform facilitates a fair and transparent payment system, allowing you to monetize your regular commute.</p>
                    <a href="#" class="readMore">Explore More</a>
                </div>
                <div class="Services-img">
                    <img src="{{ asset('assets/img/Services/up.png') }}" alt="">
                </div>
            </div>

            <div class="Services-box mix web">
                <div class="Services-content">
                    <h3>Real-Time Updates and Communication</h3>
                    <p>Stay informed with real-time updates on your ride status and communicate seamlessly with your driver. Our platform facilitates easy coordination for a stress-free journey.</p>
                    <a href="#" class="readMore">Explore More</a>
                </div>
                <div class="Services-img">
                    <img src="{{ asset('assets/img/Services/real.png') }}" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="Opinions" id="Opinions">
        <div class="main-text">
            <h2 class="heading">Opinions</h2>
            <span>Some Users Opinions</span>
        </div>

        <div class="Opinions-box swiper mySwiper">
            <div class="cards swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="card-top">
                        <img src="{{ asset('assets/img/Opinions/Emily.jpg') }}" alt="">
                    </div>
                    <div class="card-info">
                        <h2>Emily</h2>
                        <span class="date">Sunday, Nov 29, 2023</span>
                        <p class="excerpt">
                            Joining CarPooling Platform revolutionized my commute, offering reliable rides, incredible cost savings, seamless coordination with real-time updates, and a bonus sense of community, turning it into a shared adventure I eagerly.
                        </p>
                        <a href="#" class="readMore">Explore More</a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card-top">
                        <img src="{{ asset('assets/img/Opinions/Alex.jpg') }}" alt="">
                    </div>
                    <div class="card-info">
                        <h2>Alex</h2>
                        <span class="date">Sunday, Nov 29, 2023</span>
                        <p class="excerpt">
                             CarPooling Platform comes highly recommended for its efficient matching, secure community, and elevated journey with real-time updates, emphasizing a community that values safety and convenience beyond just a ride.
                        </p>
                        <a href="#" class="readMore">Explore More</a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card-top">
                        <img src="{{ asset('assets/img/Opinions/Ilina.jpg') }}" alt="">
                    </div>
                    <div class="card-info">
                        <h2>Ilina</h2>
                        <span class="date">Sunday, Nov 29, 2023</span>
                        <p class="excerpt">
                            Being part of CarPooling Platform has simplified my commute in ways I couldn't have imagined. The flexible scheduling suits my lifestyle, and the cost savings are a significant plus. The community vibe adds a personal touch.
                        </p>
                        <a href="#" class="readMore">Explore More</a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card-top">
                        <img src="{{ asset('assets/img/Opinions/Ryan.jpg') }}" alt="">
                    </div>
                    <div class="card-info">
                        <h2>Ryan</h2>
                        <span class="date">Sunday, Nov 29, 2023</span>
                        <p class="excerpt">
                           CarPooling Platform transforms travel for frequent flyers with its driver earnings, transparent payments, and real-time updates, making it the go-to for stress-free rides,and real-time updates, making it my go-to for stress-free rides.
                        </p>
                        <a href="#" class="readMore">Explore More</a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card-top">
                        <img src="{{ asset('assets/img/Opinions/Mia.jpg') }}" alt="">
                    </div>
                    <div class="card-info">
                        <h2>Mia</h2>
                        <span class="date">Sunday, Nov 29, 2023</span>
                        <p class="excerpt">
                            Joining CarPooling Platform has not only saved me money but also introduced me to a fantastic community of like-minded commuters. The efficient matching system ensures I find compatible rides easily.
                        </p>
                        <a href="#" class="readMore">Explore More</a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card-top">
                        <img src="{{ asset('assets/img/Opinions/Javier.jpg') }}" alt="">
                    </div>
                    <div class="card-info">
                        <h2>Javier</h2>
                        <span class="date">Sunday, Nov 29, 2023</span>
                        <p class="excerpt">
                            I've tried several ride-sharing platforms, but CarPooling Platform stands out. The verified community and safety measures put my mind at ease.Plus, the sense of community and camaraderie on shared journeys,  camaraderie on shared journeys.
                        </p>
                        <a href="#" class="readMore">Explore More</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="swiper-pagination"></div>

        <div class="showcase">
            <img src="{{ asset('assets/img/shapes/ring.png') }}" class="ring">
            <img src="{{ asset('assets/img/shapes/second-circle.png') }}" class="second-circle">
            <img src="{{ asset('assets/img/shapes/circle.png') }}" class="circle">
            <img src="{{ asset('assets/img/shapes/half-ring.png') }}" class="half-ring">
        </div>

    </section>

    <section class="down-box" id="contact">
        <div class="contactSkills">
            <div class="contact-info">
                <div class="main-text">
                    <h2 class="heading">Contact Us</h2>
                    <span>get in touch with Us</span>
                </div>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                    </div>
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Subject">
                    <textarea name="#" id="" cols="30" rows="10">
                    </textarea>
                    <div class="formBtn">
                        <button type="submit" class="btn">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="skills">
                <div class="container">
                    <div class="skillBox">
                        <div class="main-text">
                            <h2 class="heading">Percentage</h2>
                            <span>Percentage Of Opinions</span>
                        </div>
                        <p style="text-align: center;"><strong>Riders</strong></p>
                        <div class="skill-wrap">
                            <div class="skill">
                                <div class="outer-circle">
                                    <div class="inner-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180px" height="180px">
                                            <defs>
                                                <linearGradient id="GradientColor">
                                                <stop offset="0%" stop-color="#e91e63" />
                                                <stop offset="100%" stop-color="#673ab7" />
                                                </linearGradient>
                                            </defs>
                                                <circle cx="85" cy="85" r="75" stroke-linecap="round" />
                                       </svg>
                                       <h2 class="counter">
                                        <span data-target="81">0</span>%
                                       </h2>
                                    </div>
                                </div>
                                <div class="sk-title">
                                    Positive
                                </div>
                            </div>

                            <div class="skill">
                                <div class="outer-circle">
                                    <div class="inner-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180px" height="180px">
                                            <defs>
                                                <linearGradient id="GradientColor">
                                                <stop offset="0%" stop-color="#e91e63" />
                                                <stop offset="100%" stop-color="#673ab7" />
                                                </linearGradient>
                                            </defs>
                                                <circle cx="85" cy="85" r="75" stroke-linecap="round" />
                                       </svg>
                                       <h2 class="counter">
                                        <span data-target="19">0</span>%
                                       </h2>
                                    </div>
                                </div>
                                <div class="sk-title">
                                    Negative
                                </div>
                            </div>
                        </div>
                        <p style="text-align: center;"><strong>Drivers</strong></p>
                        <div class="skill-wrap">
                            <div class="skill">
                                <div class="outer-circle">
                                    <div class="inner-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180px" height="180px">
                                            <defs>
                                                <linearGradient id="GradientColor">
                                                <stop offset="0%" stop-color="#e91e63" />
                                                <stop offset="100%" stop-color="#673ab7" />
                                                </linearGradient>
                                            </defs>
                                                <circle cx="85" cy="85" r="75" stroke-linecap="round" />
                                       </svg>
                                       <h2 class="counter">
                                        <span data-target="74">0</span>%
                                       </h2>
                                    </div>
                                </div>
                                <div class="sk-title">
                                    Positive
                                </div>
                            </div>


                            <div class="skill">
                                <div class="outer-circle">
                                    <div class="inner-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180px" height="180px">
                                            <defs>
                                                <linearGradient id="GradientColor">
                                                <stop offset="0%" stop-color="#e91e63" />
                                                <stop offset="100%" stop-color="#673ab7" />
                                                </linearGradient>
                                            </defs>
                                                <circle cx="85" cy="85" r="75" stroke-linecap="round" />
                                       </svg>
                                       <h2 class="counter">
                                        <span data-target="26">0</span>%
                                       </h2>
                                    </div>
                                </div>
                                <div class="sk-title">
                                    Negative
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright © 2023 by <span>CarPooling</span> || All Right Reservd.</p>
    </footer>

    <div id="progress">
        <span id="progress-value">
            <i class='bx bxs-chevrons-up' ></i>
        </span>
    </div>

    <!-- scroll reveal  -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- mixitup cdn js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="{{ asset('assets/FrontEnd/script.js') }}"></script>
</body>
</html>
