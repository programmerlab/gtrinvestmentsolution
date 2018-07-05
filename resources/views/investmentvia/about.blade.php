
@extends('layouts.master')
@section('title', 'HOME')

@section('header')
<h1>Home</h1>
@stop
@section('content')
@include('partials/menu') 
@include('partials/titlebar') 
  
  <section class="section-aboutus wrap-blance blancejqurey bg-section2 clearfix">
        <div id="blance1" class="featured-aboutus float-left">
            <img src="images/about.jpg" alt="image">
        </div>
        <div id="blance2" class="info-aboutus float-left" style="height: 473px;">
            <div class="title-section style2 left">
                <h1 class="title"><span>We advise</span> you, you call the right decision!</h1>
                <div class="sub-title">
                   We feels proud for the role we have played in enabling and empowering self-directed and non directed traders and investors for last several years. Since years, our enduring individuals have put their trust in us to score incredible success.
                </div>
                <div class="sub-title">
                    We have best SEBI investment advisor which gives you profitable call , so that you can earn much better than from other advisers.
                </div>
            </div>
            <div class="about-counter">
                <div class="flat-counter float-left color-another text-center">                            
                    <div class="content-counter float-left">
                        <div class="icon-count">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="numb-count" data-to="120" data-speed="2000" data-waypoint-active="yes">120</div>
                        <div class="name-count">Consultants</div>
                    </div>
                </div><!-- /.flat-counter -->
                <div class="flat-counter color-another float-left text-center">                            
                    <div class="content-counter float-left">
                        <div class="icon-count">
                            <i class="ti-bookmark-alt"></i>
                        </div>
                        <div class="numb-count" data-to="50" data-speed="2000" data-waypoint-active="yes">50</div>
                        <div class="name-count">Awards Winning</div>
                    </div>
                </div><!-- /.flat-counter -->
                <div class="flat-counter color-another float-left text-center">                            
                    <div class="content-counter">
                        <div class="icon-count">
                            <i class="ti-heart-broken"></i>
                        </div>
                        <div class="numb-count" data-to="240" data-speed="2000" data-waypoint-active="yes">240</div>
                        <div class="name-count">Satisfied Customers</div>
                    </div>
                </div><!-- /.flat-counter -->
            </div>
        </div>
    </section>

  <section class="flat-row  page-teammember">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style3 text-center">
                        <h1 class="title">Meet Core Our Team</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="flat-team">                            
                        <div class="avatar">             
                            <img src="images/team/1.jpg" alt="image">
                        </div>                        
                        <div class="content text-center">
                            <h5 class="name">Shaya Hill</h5>
                            <p class="position">Tax Advice</p>
                            <ul class="social-links style2 team">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="flat-team">                            
                        <div class="avatar">             
                            <img src="images/team/2.jpg" alt="image">
                        </div>                        
                        <div class="content text-center">
                            <h5 class="name">Keith King</h5>
                            <p class="position">Tax Advice</p>
                            <ul class="social-links style2 team">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="flat-team">                            
                        <div class="avatar">             
                            <img src="images/team/3.jpg" alt="image">
                        </div>                        
                        <div class="content text-center">
                            <h5 class="name">Anthony Jones</h5>
                            <p class="position">Tax Advice</p>
                            <ul class="social-links style2 team">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="flat-team">                            
                        <div class="avatar">             
                            <img src="images/team/4.jpg" alt="image">
                        </div>                        
                        <div class="content text-center">
                            <h5 class="name">Jackson Nelson</h5>
                            <p class="position">Tax Advice</p>
                            <ul class="social-links style2 team">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<section class="flat-row padingbotom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 history-text">
                    <div class="title-section style3 left">
                        <h1 class="title">GTR Investmentsolution</h1>
                    </div>
                    <p>Gtr Investmentsolution : Top Investment Advisor: having the sole motto as ‘Sign of Trust ’ , and is meant to be translated into an proposition that is led by capitalism and creativity, sheltered by creditable and validate outcome. Research clients progressively stepping up with the smart recommendation provided by one and only Research Infotech team' - giving them consistent idea into investments, that is soak up as profit and fame into the target market.

                    </p>
                     
                </div>


                <div class="col-lg-6 history-text">
                    <div class="title-section style3 left">
                        <h1 class="title">Gtr Investmentsolution VIEWPOINT.</h1>
                    </div>
                    <p>Research Infotech is SEBI registered company in India. Since last few years we are constantly analyzing the market and what we cropped out is a bitter truth that may get surprised you hard somewhere. Most of the investors invest huge revenues from their livelihood, with a sole view of earning profits from the investment. But, situation becomes worse when you invest as a No-Voice investor, which lets you into a down graph. We are SEBI registered tips provider and provides you a tips that will surely provide you a profit with proper target.

                    </p>
                     
                </div>


                <div class="col-lg-6 history-text">
                    <div class="title-section style3 left">
                        <h1 class="title">PERCEPTION & VALUES .</h1>
                    </div>
                    <p>Research Infotech, is SEBI registered investment advisory,in which top experts forecast market by-product smartly, keeping risk-factors into their mind with a view to make computation and earn profit in the pocket of investing customer Research Infotech with SEBI registered investment advisors is one of the most favourable workplace, due to its following singularities: <br>

·        Sharp Judgement <br>

·        Acute perception<br>

·        Concurrent connection with multiple clients<br>

·        Availability<br>

·        Leadership<br>

We believe on maintain healthy and long-term relation with our clients on the basis of client satisfaction.

                    </p>
                     
                </div>


              <!--   <div class="col-lg-6">
                    <div class="main-history">
                        <div class="wrap-step clearfix">
                            <div class=" data-step float-left">
                                <span class="year">1990</span>
                            </div>
                            <div class=" info-step float-left">
                                <h5>Entrepreneurship Hall of Fame</h5>
                                <p>nother family member reinforced the younger man’s inter-est in the field. Joe’s uncle was an architect and a general contractor and encouraged Joe.</p>
                            </div>
                        </div>
                        <div class="wrap-step clearfix">
                            <div class=" data-step float-left">
                                <span class="year">2010</span>
                            </div>
                            <div class=" info-step float-left">
                                <h5>Entrepreneurship Hall of Fame</h5>
                                <p>nother family member reinforced the younger man’s inter-est in the field. Joe’s uncle was an architect and a general contractor and encouraged Joe.</p>
                            </div>
                        </div>
                        <div class="wrap-step clearfix">
                            <div class=" data-step float-left">
                                <span class="year">2015</span>
                            </div>
                            <div class=" info-step float-left">
                                <h5>Entrepreneurship Hall of Fame</h5>
                                <p>nother family member reinforced the younger man’s inter-est in the field. Joe’s uncle was an architect and a general contractor and encouraged Joe.</p>
                            </div>
                        </div>
                        <div class="wrap-step clearfix">
                            <div class=" data-step float-left">
                                <span class="year">2017</span>
                            </div>
                            <div class=" info-step float-left">
                                <h5>Entrepreneurship Hall of Fame</h5>
                                <p>nother family member reinforced the younger man’s inter-est in the field. Joe’s uncle was an architect and a general contractor and encouraged Joe.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Footer -->

@stop