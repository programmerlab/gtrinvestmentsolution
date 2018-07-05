<!-- Footer -->

    <footer class="footer widget-footer">

        <div class="container">

            <div class="row"> 

                <div class="col-lg-3 col-sm-6 reponsive-mb30">  

                    <div class="widget-logo">

                        <div id="logo-footer" class="logo">

                            <a href="index.html" rel="home">

                                <img src="{{url('images/logofooter1.png')}}" alt="GTR Investmentsolution">

                            </a>

                        </div>

                        <p>Welcome to GTR Investmentsolution, We have been known for serving our customers with atmost care and dedication. Our motto has been always aligned with "Delivering Quality Services" and "Customer Satisfaction".</p> 

                        <ul class="flat-information">

                            <li><i class="fa fa-map-marker"></i><a href="#">Plot No 228, Ida Sch No. 54 PU-4 Indore M.P</a></li>

                            <li><i class="fa fa-email"></i> info@gtrinvestmentsolution.com</li>

                        </ul>           

                    </div>         

                </div><!-- /.col-md-3 --> 



                <div class="col-lg-3 col-sm-6 reponsive-mb30">  

                    <div class="widget widget-out-link clearfix">

                        <h5 class="widget-title">Our Links</h5>

                        <ul class="one-half">

                            <li><a href="{{url('/')}}">Home</a></li>

                            <li><a href="{{url('about')}}">About Us</a></li>

                            <li><a href="{{url('services')}}">Services</a></li>

                            <?php $i=1; ?>
                            @foreach($pageMenu as $val)
                            <?php
                            $i++;
                                if($i==4){
                                    break;
                                }
                             ?>
                          <li><a href="{!! url('page/'.str_slug($val->title))!!}"><i class="fa fa-right"></i>{!! ucfirst($val->title)!!}</a></li>
                         @endforeach


                        </ul>

                        <ul class="one-half">
                            <?php $j=1; ?>
                            @foreach($pageMenu as $val)
                            <?php
                            $j++;
                                if($j<=4){
                                    continue;
                                }
                             ?>
                          <li><a href="{!! url('page/'.str_slug($val->title))!!}"><i class="fa fa-right"></i>{!! ucfirst($val->title)!!}</a></li>
                         @endforeach

                        </ul>

                    </div>

                </div><!-- /.col-md-3 -->



                <div class="col-lg-3 col-sm-6 reponsive-mb30">

                    <div class="widget widget-recent-new">

                        <h5 class="widget-title">Recent News</h5>

                        <ul class="popular-new">

                            <li>

                                <div class="text">

                                    <h6><a href="#">Colombia Gets a Business Makeover</a></h6>

                                    <span>2018</span>

                                </div>

                            </li>

                            <li>

                                <div class="text">

                                    <h6><a href="#">Counting the Cost of Delay & Disruption</a></h6>

                                    <span>2018</span>

                                </div>

                            </li>

                        </ul>

                    </div>

                </div><!-- /.col-md-3 -->



                <div class="col-lg-3 col-sm-6 reponsive-mb30">

                    <div class="widget widget-letter">

                        <h5 class="widget-title">Office Address</h5>

                        <p class="info-text">Keep in Touch</p>

                        <form id="subscribe-form" class="flat-mailchimp" method="post" action="#" data-mailchimp="true">

                            <div class="field clearfix" id="subscribe-content"> 

                                 <aside class="widget widget-info">          

                                    <div class="textwidget clearfix">

                                        <div class="info-icon">

                                            <i class="fa fa-map-marker"></i>

                                        </div>

                                        <div class="info-text">

                                           <ul class="flat-information">

                                                <li><i class="fa fa-map-marker"></i><a href="#">Plot No 228, Ida Sch No. 54 PU-4 Indore M.P</a></li>

                                                <li><i class="fa fa-phone"></i><a href="#">+91-812-0694-466</a></li>

                                                <li><a href="www.gtrinvestmentsolution.com">www.gtrinvestmentsolution.com</a></li>

                                            </ul> 

                                        </div>

                                    </div>

                                </aside>
                            </div>

                            <div id="subscribe-msg"></div>

                        </form>

                    </div>

                </div><!-- /.col-md-3 -->

            </div><!-- /.row -->    

        </div><!-- /.container -->

    </footer>



    <!-- Bottom -->

    <div class="bottom">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <div class="copyright"> 

                        <p>@2018 All rights reserved.

                        </p>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <ul class="social-links style2 text-right">

                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>

                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                        <li><a href="#"><i class="fa fa-skype"></i></a></li>

                    </ul> 

                </div>

            </div>          

        </div><!-- /.container -->

    </div><!-- bottom -->

 <!-- Go Top -->

    <a class="go-top">

        <i class="fa fa-angle-up"></i>

    </a>       

    </div>

    

    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>

    <script src="js/tether.min.js"></script>

    <script src="js/bootstrap.min.js"></script> 

    <script src="js/jquery.easing.js"></script>    

    <script src="js/jquery-waypoints.js"></script>    

    <script src="js/jquery-validate.js"></script> 

    <script src="js/jquery.cookie.js"></script>

    <script src="js/smoothscroll.js"></script>

    <script src="js/owl.carousel.js"></script>

    <script src="js/jquery.flexslider-min.js"></script>

    <script src="js/headline.js"></script>

    <script src="js/parallax.js"></script>


    <script src="js/main.js"></script>



    <!-- Revolution Slider -->

    <script src="js/jquery.themepunch.tools.min.js"></script>

    <script src="js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/slider.js"></script>



    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

    <script src="js/revolution.extension.actions.min.js"></script>

    <script src="js/revolution.extension.carousel.min.js"></script>

    <script src="js/revolution.extension.kenburn.min.js"></script>

    <script src="js/revolution.extension.layeranimation.min.js"></script>

    <script src="js/revolution.extension.migration.min.js"></script>

    <script src="js/revolution.extension.navigation.min.js"></script>

    <script src="js/revolution.extension.parallax.min.js"></script>

    <script src="js/revolution.extension.slideanims.min.js"></script>

</body>

</html>