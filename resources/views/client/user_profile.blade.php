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
<style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 5px;
        text-align: center;
        }
        th {
        text-align: center;
        }
</style>
    <body>
        <div class="container">
            <header>
                 <div class="row">
                      <img src="recource/img/logo-white.png" alt="Omni food logo" class="logo">
                          <ul class="main-nav">
                              <li><a href="{{route('user_profile')}}"><span class="fas fa-user icon-small"></span> {{ Auth::user()->name }}</a></li>
                              <li><a href="{{route('logout')}}"><span class="fas fa-sign-out-alt icon-small"></span> Logout</a></li>

                          </ul>
                    <div class="hero-text">
                      <h1>
                           Goodbye junk food.<br> Hello super healthy meals.
                      </h1>
                        <a href="{{ route('look_meal') }}" class="btn btn-full">I’m hungry </a>
                   </div> 
                </div>  
            </header>
            <section class="section-features ">
                <div class="row">
                 
                    <h2>Hello {{ Auth::user()->name }}</h2>
                    <p class="long-copy">
                        Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise! <br >Thanks a lot for use our website.
                    </p>
                    
                    
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>    
                            <th>Username</th>
                            <th>Email</th> 
                            <th>Premium</th>
                            <th>Pro</th>
                            <th>Starter</th>
                            <th>Phone No</th>
                            <th>Address</th>   
                        </tr>
                        <tr>
                            <td>{{ auth()->user()->id }}</td>
                            <td>{{ auth()->user()->name }}</td>
                            <td>{{ auth()->user()->email }}</td>
                            <td>{{ auth()->user()->premium_user }}</td>
                            <td>{{ auth()->user()->pro_user }}</td>
                            <td>{{ auth()->user()->starter_user }}</td>
                            <td>{{ auth()->user()->phone_number }}</td>
                            <td>{{ auth()->user()->address }}</td>    
                        </tr>  
                    </table>  <br> <br> 
                    @if(auth()->user()->order_user !== '0')
                        <div>
                        <a href="{{ route('user_order_lists') }}" class="btn btn-full">Click Here To View Your Order Lists</a>
                        </div>
                    @else
                        <div>
                        <p class="long-copy"> You can order meals by press hungry button</p>
                        </div>
                    @endif  

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
                            <a href='{{ route("premium_user") }}' class="btn btn-full">Sign UP</a>
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
                            <a href="{{ route('pro_user') }}" class="btn btn-ghost">Sign UP</a>
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
                            <a href="{{ route('starter_user') }}" class="btn btn-ghost">Sign UP</a>
                        </div>
                    </div>
                </div>
            </section>
                
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>



