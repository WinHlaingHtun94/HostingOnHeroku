<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>OMNI Food</title>
    <link rel="stylesheet" href="verdor/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="verdor/css/4cols.css">
    <link rel="stylesheet" href="verdor/css/all.css">
    <link rel="stylesheet" href="recource/css/style.css">
    <link rel="stylesheet" href="recource/css/quries.css">

</head>
    <body>
        <div class="container">
            <header>
                 <div class="row">
                      <img src="recource/img/logo-white.png" alt="Omni food logo" class="logo">
                          <ul class="main-nav">
                              <!-- <li><a href="#">Food delivery </a></li> -->
                              <!-- <li><a href="{{ url('admin_page') }}">Admin  </a></li> -->
                              <!-- <li><a href="#">Our cities   </a></li> -->
                              <li><a href="{{route('user_profile')}}"><span class="fas fa-user icon-small"></span> {{ Auth::user()->name }}</a></li>
                              <li><a href="{{route('logout')}}"><span class="fas fa-sign-out-alt icon-small"></span> Logout</a></li>
                              
                          </ul>
                    <div class="hero-text">
                      <h1>
                           Goodbye junk food.<br> Hello super healthy meals.
                      </h1>
                        <a href="{{ route('hungry') }}" class="btn btn-full">I’m hungry </a>
                        <a href="{{ route('admin_page') }}" class="btn btn-ghost">Admin </a> 
                   </div> 
                </div>  
            </header>
            <section class="section-features ">
               <div class="row">
                 
                  <h2>Get food fast &mdash; not fast food.</h2>
                    <p class="long-copy">
                        Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
                    </p>
                   <div class="col span_1_of_4 box">
                    <i class="fas fa-concierge-bell icon-big"></i>
                     <h3>Up to 365 days/year</h3>
                         <p>
                             Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                         </p>  
                   </div>
                   <div class="col span_1_of_4 box">
                    <i class="fas fa-shipping-fast icon-big"></i>
                     <h3>Ready in 20 minutes</h3>
                         <p>
                             You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                         </p>  
                   </div>
                   <div class="col span_1_of_4 box">
                    <i class="fab fa-pagelines icon-big"></i>
                     <h3>100% organic</h3>
                         <p>
                             All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                         </p>  
                   </div>
                   <div class="col span_1_of_4 box">
                    <i class="fas fa-map-marked-alt icon-big"></i>
                     <h3>Order anything</h3>
                         <p>
                             We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                         </p>  
                   </div>
               </div>         
            </section>
            <section class="section-meals ">
                <ul class="meal-showcase clear-fix">
                    <li>
                       <figure class="meal-photo">
                            <a href="#"><img src="recource/img/1.jpg" alt="Korean bibimbap with egg and vegetables"></a>
                        </figure>
                    </li>
                    <li>
                       <figure class="meal-photo">
                        <img src="recource/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                        </figure>
                    </li>
                    <li>
                       <figure class="meal-photo">
                        <img src="recource/img/3.jpg" alt="Chicken breast steak with vegetables">
                        </figure>
                    </li>
                    <li>
                       <figure class="meal-photo">
                        <img src="recource/img/4.jpg" alt="Korean bibimbap with egg and vegetables">
                        </figure>
                    </li>
                </ul>
                    <ul class="meal-showcase clear-fix">

                         <li>
                           <figure class="meal-photo">
                            <img src="recource/img/5.jpg" alt="Paleo beef steak with vegetables">
                            </figure>
                        </li>
                         <li>
                           <figure class="meal-photo">
                            <img src="recource/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                            </figure>
                        </li>
                        <li>
                           <figure class="meal-photo">
                            <img src="recource/img/7.jpg" alt="Burger with cheddar and bacon">
                            </figure>
                        </li>
                        <li>
                           <figure class="meal-photo">
                            <img src="recource/img/8.jpg" alt="Granola with cherries and strawberries">
                            </figure>
                        </li>
                    </ul>
                
            </section>






            <section class="section-meals ">
                <ul class="meal-showcase clear-fix">
                    <li>
                       <figure class="meal-photo">
                            <a href="#"><img src="recource/img/1.jpg" alt="Korean bibimbap with egg and vegetables"></a>
                        </figure>
                    </li>
                    <li>
                       <figure class="meal-photo">
                        <img src="recource/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                        </figure>
                    </li>
                    <li>
                       <figure class="meal-photo">
                        <img src="recource/img/3.jpg" alt="Chicken breast steak with vegetables">
                        </figure>
                    </li>
                    <li>
                       <figure class="meal-photo">
                        <img src="recource/img/4.jpg" alt="Korean bibimbap with egg and vegetables">
                        </figure>
                    </li>
                </ul>
                    <ul class="meal-showcase clear-fix">

                         <li>
                           <figure class="meal-photo">
                            <img src="recource/img/5.jpg" alt="Paleo beef steak with vegetables">
                            </figure>
                        </li>
                         <li>
                           <figure class="meal-photo">
                            <img src="recource/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                            </figure>
                        </li>
                        <li>
                           <figure class="meal-photo">
                            <img src="recource/img/7.jpg" alt="Burger with cheddar and bacon">
                            </figure>
                        </li>
                        <li>
                           <figure class="meal-photo">
                            <img src="recource/img/8.jpg" alt="Granola with cherries and strawberries">
                            </figure>
                        </li>
                    </ul>
                
            </section>







            <section class="section-step ">
                <div class="row">
                    <h2 class="aa">How it works - Simple as 1, 2, 3</h>
                </div>
                <div class="row">
                    <div class="col span_1_of_2 step-box">
                        <img src="recource/img/app-iPhone.png" alt="OMNI Food Iphone Screen" class="app-screen">
                    </div>
                    <div class="col span_1_of_2 step-box">
                        <div class="work-step">
                            <div>1</div>
                            <p>
                               Choose the subscription plan that best fits your needs and sign up today. 
                            </p>
                        </div>
                        <div class="work-step">
                            <div>2</div>
                            <p>
                               Order your delicious meal using our mobile app or website. Or you can even call us! 
                            </p>
                        </div>
                        <div class="work-step">
                            <div>3</div>
                            <p>
                               Enjoy your meal after less than 20 minutes. See you the next time! 
                            </p>
                        </div>
                        <div>
                            <a href="#" class="btn-app"><img src="recource/img/download-app.svg" alt="App Store"></a>
                        
                            <a href="#" class="btn-app"><img src="recource/img/download-app-android.png" alt="Play Store"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-cities">
                <div class="row">
                    <h2>We're currently in these cities</h2>
                </div>
                <div class="row">
                    <div class="col span_1_of_4 box">
                        <img src="recource/img/lisbon-3.jpg" alt="Lisbon">
                        <h3>Lisbon</h3>
                        <div class="city-feature">
                            <i class="fas fa-user-tie icon-small"></i>
                            1600+ happy eaters
                        </div>
                        <div class="city-feature">
                            <i class="fas fa-cheese icon-small"></i>
                            60+ top chefs
                        </div>
                         <div class="city-feature">
                            <i class="fab fa-twitter icon-small"><a href="#">@omnifood_lx</a></i>
                        </div>
                    </div>
                     <div class="col span_1_of_4 box">
                        <img src="recource/img/san-francisco.jpg" alt="San Francisco">
                        <h3>San Francisco</h3>
                        <div class="city-feature">
                            <i class="fas fa-user-tie icon-small"></i>
                            3700+ happy eaters
                        </div>
                        <div class="city-feature">
                            <i class="fas fa-cheese icon-small"></i>
                            160+ top chef
                        </div>
                         <div class="city-feature">
                            <i class="fab fa-twitter icon-small"><a href="#">@omnifood_sf</a></i>
                        </div>
                    </div>
                     <div class="col span_1_of_4 box">
                        <img src="recource/img/berlin.jpg" alt="Berlin">
                        <h3>Berlin</h3>
                        <div class="city-feature">
                            <i class="fas fa-user-tie icon-small"></i>
                            2300+ happy eaters
                        </div>
                        <div class="city-feature">
                            <i class="fas fa-cheese icon-small"></i>
                            110+ top chefs
                        </div>
                         <div class="city-feature">
                            <i class="fab fa-twitter icon-small"><a href="#">@omnifood_berlin</a></i>
                        </div>
                    </div>
                     <div class="col span_1_of_4 box">
                        <img src="recource/img/london.jpg" alt="London">
                        <h3>London</h3>
                        <div class="city-feature">
                            <i class="fas fa-user-tie icon-small"></i>
                            1200+ happy eaters
                        </div>
                        <div class="city-feature">
                            <i class="fas fa-cheese icon-small"></i>
                            50+ top chefs
                        </div>
                         <div class="city-feature">
                            <i class="fab fa-twitter icon-small"><a href="#">@omnifood_london</a></i>  
                        </div>
                    </div>
                </div>
            </section>
            <section class="customer-testimonials">
               <div class="row">
                   <h2>Our customers can't live without us</h2>
               </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <blockquote>
                            Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                            <cite>
                                <img src="recource/img/customer-1.jpg" alt="Alberto Duncan">
                                Alberto Duncan
                            </cite>
                        </blockquote>
                    </div>
                    <div class="col span_1_of_3">
                        <blockquote>
                           Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                            <cite>
                                <img src="recource/img/customer-2.jpg" alt="Joana Silva">
                                Joana Silva
                            </cite>
                        </blockquote>
                    </div>
                    <div class="col span_1_of_3">
                        <blockquote>
                            I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                            <cite>
                                <img src="recource/img/customer-3.jpg" alt="Milton Chapman">
                                Milton Chapman
                            </cite>
                        </blockquote>
                    </div>
                </div>
            </section>
            <section class="section-plan clear-fix">
                <div class="row">
                    <h2>Start eating healthy today</h2>
                </div>
                <div class="col span_1_of_3">
                    <div class="plan-box">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">399$ <span>/ month</span></p>
                            <p class="plan-price-meal">That’s only 13.30$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="fas fa-check icon-small"></i>1 meal every day</li>
                                <li><i class="fas fa-check icon-small"></i>Order 24/7</li>
                                <li><i class="fas fa-check icon-small"></i>Access to newest creations</li>
                                <li><i class="fas fa-check icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Sign UP</a>
                        </div>
                    </div>
                </div>
                <div class="col span_1_of_3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">149$ <span>/ month</span></p>
                            <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="fas fa-check icon-small"></i>1 meal 10 days/month</li>
                                <li><i class="fas fa-check icon-small"></i>Order 24/7</li>
                                <li><i class="fas fa-check icon-small"></i>Access to newest creations</li>
                                <li><i class="fas fa-check icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign UP</a>
                        </div>
                    </div>
                </div>
                <div class="col span_1_of_3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">19$ <span>/ meal</span></p>
                            <p class="plan-price-meal">&nbsp;</p>

                        </div>
                        <div>
                            <ul>
                                <li><i class="fas fa-check icon-small"></i>1 meal</li>
                                <li><i class="fas fa-check icon-small"></i>Order from 8 am to 12 pm</li>
                                <li><i class="fas fa-check icon-small"></i>Free delivery</li>
                                <li>&nbsp;</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign UP</a>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="row">
                    <div class="col span-of-2">
                        <ul class="footer-nav">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">iOS App</a></li>
                            <li><a href="#">Android App</a></li>
                        </ul>
                    </div>
                    <div class="col span-of-2">
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <p>
                        Copyright &copy; 2020 Win Hlaing Htun
                    </p>
                </div>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/responsive/1.0.5/responsive.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="recource/js/script.js"></script>
    </body>
</html>



