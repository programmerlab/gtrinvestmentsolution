
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
                    Over The Last 30 Years, We’ve Been In This Corporate Consulting Business, We Were Able To Help Hundreds Of Top-Flight Companies And Thousands Of SMBs To Call The Right Decisions…
                </div>
                <div class="sub-title">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
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
                        <h1 class="title">Meet Our Team</h1>
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
                <div class="col-lg-3 col-sm-6">
                    <div class="flat-team">                            
                        <div class="avatar">             
                            <img src="images/team/5.jpg" alt="image">
                        </div>                        
                        <div class="content text-center">
                            <h5 class="name">Jonh Nash</h5>
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
                            <img src="images/team/6.jpg" alt="image">
                        </div>                        
                        <div class="content text-center">
                            <h5 class="name">Rebeca Masew</h5>
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
                            <img src="images/team/7.jpg" alt="image">
                        </div>                        
                        <div class="content text-center">
                            <h5 class="name">Bruce Hill</h5>
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
                            <img src="images/team/8.jpg" alt="image">
                        </div>                        
                        <div class="content text-center">
                            <h5 class="name">Daisy King</h5>
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
                <div class="col-lg-6 history-text">
                    <div class="title-section style3 left">
                        <h1 class="title">Our History</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consec-tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in vo-luptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat.-Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="#" class="flat-button style2">Read more</a>
                </div>
                <div class="col-lg-6">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->

@stop