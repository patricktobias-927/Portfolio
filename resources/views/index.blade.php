@extends('layouts.app')

@section('content')
   <!-- ======= About Section ======= -->
   <section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>About</h2>
                </div>
            </div>
        </div>    
      
      <div class="row d-flex">
          <div class="col-lg-3 about_item aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/responsive.png') }}" class="about_img mx-auto d-block">
                <h3>Responsive</h3>
                <p class="about_text">
                        My layouts look and work great on any screen size.
                </p>
          </div>
          <div class="col-lg-3 about_item aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('images/intuitive.png') }}" class="about_img mx-auto d-block">
                <h3>Intuitive</h3>
                <p class="about_text">
                    Easy to understand and navigate user interface (UI/UX).
                </p>
          </div>
          <div class="col-lg-3 about_item aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('images/fast.png') }}"  class="about_img mx-auto d-block">
                <h3>Fast</h3>
                <p class="about_text">
                    I aim for the shortest loading times for my projects.
                </p>
        </div>
        <div class="col-lg-3 about_item aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="700">
                <img src="{{ asset('images/accessible.png') }}" class="about_img mx-auto d-block">
                <h3>Accessible</h3>
                <p class="about_text">
                    Designed to function properly with assistive technologies and ensure usability for every
                    visitor.
                </p>
        </div>
      </div>
    <br>
      <div class="row">
        <div class="col-lg-4 pt-5">
          <img src="{{ asset('images/profile.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-0 pt-lg-0 content">
          <h3>Web Developer.</h3>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> July 21, 1996</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                <li><i class="icofont-rounded-right"></i> <strong>Mobile Number:</strong> +639159800091</li>
                <li><i class="icofont-rounded-right"></i> <strong>Address:</strong> Tabe, Guiguinto 3015, Bulacan</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 24</li>
                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Bachelor of Science In Information Technology</li>
                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> patricktobias.business@gmail.com</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
              </ul>
            </div>
          </div>
          <br>
          <h3>Random facts about me:</h3>
          <ul>
            <li><i class=""></i> <strong>I love music!</strong> I play some instruments too! Or to put it in short, I am a musician. :)</li>
            <li><i class=""></i> <strong>Favorite things to do:</strong> traveling, yoga, biking and "cracking the code".</li>
            <li></li>
            <li></li>
            <li></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-primary btn-lg" id="download" href="{{ asset('files/CV-PatrickMaineCruzTobias.pdf') }}" download>Download My CV</a>
            </li>
          </ul>
        </div>
      </div>
     
    </div>
  </section><!-- End About Section -->

     <!-- ======= Facts Section ======= -->
     <section id="facts" class="facts">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Web Development Skills</h2>
            </div>

            <div class="skills">
                <img src="{{ asset('images/laravel_logo.png') }}" id="laravel" class="img-fluid" alt="">
                <img src="{{ asset('images/codeigniter_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/js_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/html_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/css_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/jquery_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/bootstrap_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/php_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/sql_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/node_logo.png') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/mongodb_logo.png') }}" class="img-fluid" alt="">
            </div>
            <div class="row" id="git">
                <div class="skills col-lg-12 col-md-12 mt-md-4 d-flex justify-content-center">
                    <img src="{{ asset('images/adobe_logo.png') }}" class="img-fluid" alt="">
                    <img src="{{ asset('images/git_logo.png') }}" class="img-fluid" alt="">
                </div>
            </div>

            </div>

        </div>
    </section><!-- End Facts Section -->  


    <!-- ======= Portfolio Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>My Portfolio</h2>
            <p></p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  <i class="bx bx-layer"></i>
                </div>
                <h4><a href="">Blog Site</a></h4>
                <p>A Simple Blog site using Laravel 8, with users authentication module</p>
                <br>
                <a href="https://github.com/patricktobias-927/BlogSite" target="__blank" class="btn btn-success">CODE</a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                  </svg>
                  <i class="bx bx-file"></i>
                </div>
                <h4><a href="">Masterlist Generator</a></h4>
                <p>A Students Masterlist Generator, a complex web application made with a backend framework Codeigniter 3 with MySQL database</p>
                <br>
                <a href="https://github.com/patricktobias-927/CBT_Masterlist_Generator" target="__blank" class="btn btn-success">CODE</a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-pink">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                  </svg>
                  <i class="bx bx-file"></i>
                </div>
                <h4><a href="">My Portfolio</a></h4>
                <p>Yes, the very website you are currently looking at. It is written in Laravel too, with a touch of JS, JQuery and Bootsrap 4</p>
                <br>
                <a href="https://github.com/patricktobias-927/Portfolio" target="__blank" class="btn btn-success">CODE</a>
              </div>
               
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-yellow">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                  </svg>
                  <i class="bx bx-layer"></i>
                </div>
                <h4><a href="">Museum of Sweets</a></h4>
                <p>A simple Gallery app with a touch of Bootstrap 4 Grid system and Flexbox!</p>
                <br>
                <a href="https://github.com/patricktobias-927/MuseumOfSweets" target="__blank" class="btn btn-success">CODE</a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-teal">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                  </svg>
                  <i class="bx bx-arch"></i>
                </div>
                <h4><a href=""></a></h4>
                <p>Additional Portofolios Coming up soon.</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="row">
          <div class="col-lg-12 section-title">
            <h2>Contact</h2>
          </div>
        </div>
          <div class="row mt-1">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 ">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>214, Tabe, Guiguinto, Bulacan 3015</p>
                </div>
  
                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>patricktobias.business@gmail.com</p>
                </div>
  
                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+639159800091</p>
                </div>
  
              </div>
  
            </div>
          </div>
  
        </div>
      </section><!-- End Contact Section -->

  
   
  
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div> 
  


 

@endsection