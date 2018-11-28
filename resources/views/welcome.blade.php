@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">

                </div>


                <!DOCTYPE html>
                <html>
                    <head>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                        <title>Volunteer 2 Organisation</title>
                <!--

                Template 2089 Meteor

                http://www.tooplate.com/view/2089-meteor

                -->
                        <meta name="description" content="">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="apple-touch-icon" href="apple-touch-icon.png">

                        <link rel="stylesheet" href="css/bootstrap.min.css">
                        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
                        <link rel="stylesheet" href="css/fontAwesome.css">
                        <link rel="stylesheet" href="css/hero-slider.css">
                        <link rel="stylesheet" href="css/tooplate-style.css">

                        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

                        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
                    </head>

                <body>




                    <section class="cd-hero">
                        <ul class="cd-hero-slider autoplay">
                        <!--
                            <ul class="cd-hero-slider autoplay"> for slider auto play
                            <ul class="cd-hero-slider"> for disabled auto play
                        -->
                            <li class="selected first-slide">
                                <div class="cd-full-width">
                                    <div class="tm-slide-content-div slide-caption">
                                    </div>
                                </div> <!-- .cd-full-width -->
                            </li>

                            <li class="second-slide">
                                <div class="cd-full-width">
                                    <div class="tm-slide-content-div slide-caption">

                                    </div>
                                </div> <!-- .cd-full-width -->
                            </li>

                            <li class="third-slide">
                                <div class="cd-full-width">
                                    <div class="tm-slide-content-div slide-caption">

                                    </div>
                                </div> <!-- .cd-full-width -->
                            </li>
                        </ul> <!-- .cd-hero-slider -->

                        <div class="cd-slider-nav">
                            <nav>
                                <span class="cd-marker item-1"></span>

                                <ul>
                                    <li class="selected"><a href="#0"></a></li>
                                    <li><a href="#0"></a></li>
                                    <li><a href="#0"></a></li>
                                </ul>
                            </nav>
                        </div> <!-- .cd-slider-nav -->
                    </section> <!-- .cd-hero -->

                    <div id="about" class="page-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-heading">
                                        <h4>Choose your cause</h4>
                                        <div class="line-dec"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="service-item first-service">
                                        <div class="icon"></div>
                                        <h4>Animal Care</h4>
                                        <p>This rewarding volunteer role would suit applicants that love animals and are committed to improving their welfare. </p>
                                    </div>
                                </div>
                                 <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="service-item second-service">
                                        <div class="icon"></div>
                                        <h4>Child Care</h4>
                                        <p>People who volunteer with kids get to provide education, healthcare, and most importantly loving attention to these young souls.</p>
                                    </div>
                                </div>
                                 <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="service-item third-service">
                                        <div class="icon"></div>
                                        <h4>Senior Citizens Care</h4>
                                        <p>Whether it’s at a community center or a nursing home, there are many opportunities to spend time with seniors all across the country.</p>
                                    </div>
                                </div>
                                 <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="service-item fourth-service">
                                        <div class="icon"></div>
                                        <h4>Sports</h4>
                                        <p>Lead after school clubs and leagues, physical education lessons, and community sports. Help young people have fun.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="what-we-do">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left-text">
                                        <h4>Volunteering is life.<br>Join now and make a difference.</h4>
                                        <p>We believe everyone should have the chance to make a difference. That's why we make it easy for good people and good causes to connect. We've connected dozens of people with a great place to volunteer and helped dozens of organizations better leverage volunteers to create real impact.<br>
                                        <ul>
                                            <li>
                                                <div class="white-button">
                                                    <a href="{{ route('register') }}"  data-id="portfolio">Register Now</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="primary-button">

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right-image">
                                        <img src="img/rawpixel-1103763-unsplash.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="copyright-text">
                                        <p>Copyright &copy; Volunteer 2 Organisation

                                        - Design: <a href="http://www.tooplate.com/view/2089-meteor" target="_parent">Meteor</a></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-icons">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-rss"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>


                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

                    <script src="js/vendor/bootstrap.min.js"></script>

                    <script src="js/plugins.js"></script>
                    <script src="js/main.js"></script>

                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        // navigation click actions
                        $('.scroll-link').on('click', function(event){
                            event.preventDefault();
                            var sectionID = $(this).attr("data-id");
                            scrollToID('#' + sectionID, 750);
                        });
                        // scroll to top action
                        $('.scroll-top').on('click', function(event) {
                            event.preventDefault();
                            $('html, body').animate({scrollTop:0}, 'slow');
                        });
                        // mobile nav toggle
                        $('#nav-toggle').on('click', function (event) {
                            event.preventDefault();
                            $('#main-nav').toggleClass("open");
                        });
                    });
                    // scroll function
                    function scrollToID(id, speed){
                        var offSet = 50;
                        var targetOffset = $(id).offset().top - offSet;
                        var mainNav = $('#main-nav');
                        $('html,body').animate({scrollTop:targetOffset}, speed);
                        if (mainNav.hasClass("open")) {
                            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                            mainNav.removeClass("open");
                        }
                    }
                    if (typeof console === "undefined") {
                        console = {
                            log: function() { }
                        };
                    }
                    </script>
                </body>
                </html>



            </div>
        </div>

@endsection
