 <!-- Boxed -->

    <div class="boxed"> 
    <div class="top">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-sm-6 reponsive-onehalf"> 
                    <p class="info-text">Welcome to Financial Services Consultant! 
                        </p>

                </div><!-- /.col-md-6 -->       

                <div class="col-lg-6 col-sm-6 reponsive-onehalf">

                    <div class="wrap-top">

                        <ul class="flat-top social-links">

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>

                        </ul>

                        <div class="flat-top flat-language">                        

                            <ul class="unstyled">

                                <li class="current"><a href="#">English</a>
 
                                 </li>

                            </ul>

                       </div> 

                    </div>

                </div>        
                <marquee>  "We do not offer any Demat service. Our company SEBI registered Investment advisory. All Disputes are Subject to Indore Jurisdiction. we do not offer Refund." </marquee>
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.top -->



    <div class="flat-header-wrap">

        <!-- Header -->            

        <div class="header widget-header clearfix">

            <div class="container">

                <div class="header-wrap clearfix">

                    <div class="row"> 

                        <div class="col-lg-3">

                            <div id="logo" class="logo">

                                <a href="/" rel="home">

                                    <img src="{{url('images/logo1.png')}}" alt="image">

                                </a>

                            </div><!-- /.logo -->

                            

                        </div>

                        <div class="col-lg-9">

                            <div class="wrap-widget-header clearfix">

                                <aside  class="widget widget-info">

                                    <div class="btn-click">

                                        <a href="{{url('free-trial')}}" class="flat-button">FREE TRIAL</a>

                                    </div>

                                </aside>

                                <aside class="widget widget-info">          

                                    <div class="textwidget clearfix">

                                        <div class="info-icon">

                                            <i class="fa fa-map-marker"></i>

                                        </div>

                                        <div class="info-text">

                                            <h6>Plot No 228, Ida Sch </h6>

                                            <p> No. 54 PU-4 Indore M.P</p>

                                        </div>

                                    </div>

                                </aside>

                                <aside class="widget widget-info">          

                                    <div class="textwidget clearfix">

                                        <div class="info-icon">

                                            <i class="fa fa-phone"></i>

                                        </div>

                                        <div class="info-text">

                                            <h6>+91 812-0694-466</h6>

                                            <p>info@gtrinvestmentsolution.com</p>

                                        </div>

                                    </div>

                                </aside>               

                            </div>

                        </div>   

                    </div><!-- /.row -->                   

                </div><!-- /.header-wrap -->                 

                

            </div>

        </div><!-- /.header -->



        <header id="header" class="header header-classic header-style1">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="flat-wrap-header">

                            <div class="nav-wrap clearfix">        

                                <nav id="mainnav" class="mainnav">

                                    <ul class="menu"> 

                                        <li class="active">

                                            <a href="{{url('/')}}">Home</a>

                                        </li>

                                        <li><a href="{{url('about')}}">About Us</a></li>

                                        <li><a href="{{url('services')}}">Services</a>

                                        </li>

                                        <li> 
                                            <a href="{{url('pricing')}}">Pricing</a>
                                        </li>

                                        <li> 
                                            <a href="{{url('payment')}}">Payment</a>
                                        </li>

                                        <li><a href="{{url('free-trial')}}">Free Trial</a> 
                                        </li>

                                        <li><a href="{{url('kyc')}}">Free Kyc</a> 
                                        </li>


                                        <li><a href="{{url('contact')}}">Contact</a>

                                            
                                        </li> 

                                         <li class="dropdown">
 
                                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">More</a>

                                            <ul class="dropdown-content">
        

          @foreach($pageMenu as $val)
          <li><a href="{!! url('page/'.str_slug($val->title))!!}"><i class="fa fa-right"></i>{!! ucfirst($val->title)!!}</a></li>
         @endforeach
                                            </ul>  
                                        </li>   


                                    </ul><!-- /.menu -->

                                </nav><!-- /.mainnav -->  

                                <div class="top-search">                        

                                    <form action="#" id="searchform-all" method="get">

                                        <div>

                                            <input type="text" id="input-search" class="sss" placeholder="Search...">

                                            <input type="submit" id="searchsubmit">

                                        </div>

                                    </form>

                                </div>

                                <ul class="menu menu-extra">

                                    <li id="s" class="show-search">

                                        <a href="#search" class="flat-search"><i class="fa fa-search"></i></a>

                                    </li>

                                   
                                </ul> 

                                <div class="btn-menu">

                                    <span></span>

                                </div><!-- //mobile menu button --> 

                            </div><!-- /.nav-wrap -->

                            

                        </div>

                    </div>

                </div>

            </div>

        </header>

    </div>

    <style type="text/css">
        
        .dropbtn {
    background-color: #0f3661;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.dropdown a {
        text-align: left;
    border-bottom: 1px solid #ccc;
}
.heading_space{
    margin-top: 50px;
}
.faq_content {
    margin-bottom:50px;
}
.faq_content table, th, td {
   border: 1px solid black;
   padding: 10px;
}
ul.list-inline li{
    display: inline;
     list-style-type: none;
    margin: 0;
    padding: 0;
}
    </style>
