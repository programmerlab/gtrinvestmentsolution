@extends('layouts.master')
@section('title', 'HOME')

@section('header')
<h1>Home</h1>
@stop
@section('content')
@include('partials/menu') 
<!--Page Header-->
@include('partials/titlebar')
<!--Page Header-->

<section class="flat-row page-contact" style="padding-bottom: 0;">
        <div class="container">
            <div class="wrap-infobox" style="padding-bottom: 20px;margin-bottom: 0;">
               <div class="row">
      <div class="col-md-12 wow fadeInLeft animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
       <h2 class="heading heading_space text-center-service"><span>Our </span>Services </h2>
       <p class="bottom25">We are recommending Intraday / BTST/ STBT /Positional tips in various Product(Packages). Our Stock Cash , Derivatives (FnO) MCX/NCDEX Product are designed ideally to suit investors needs. Investors are advised to trade in multiple lots as per their trading capacity , investment amount as well as exposure suggested by your desired broker</p>
       
      </div>
        
    </div>
            </div>
        </div>
       
    </section>  
    <br></br>

<section id="course_all" class="padding-bottom">
  <div class="container">
    <div class="row">
        @if($service->count()<=0)
            <div class="col-sm-6 col-md-4 equalheight">
                <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
                    Service Page is in Maintainance
                </div>
            </div>
        @endif
        
        @foreach($service as $result)
        <div class="col-sm-6 col-md-4 equalheight">
            <div class="course margin_top wow fadeIn" data-wow-delay="400ms" style="padding: 12px; min-height: 510px">
               <div class="image bottom25">
                
                @if(file_exists(asset('storage/services/'.$result->category_image)))
                <img src="{{ asset('storage/services/'.$result->category_image)}}" alt="Services" class="border_radius" style="width: 100%; height: 200px">
                @else
                  <img src="images/team/tips-1.jpg" alt="Services" class="border_radius" style="width: 100%; height: 200px">
                @endif
                


              </div>
              <h3 class="bottom10" id="title_{!! $result->id !!}">{!! $result->title !!}</h3>
              <div class="" id="desc_{!! $result->id !!}" style="font-size: 11px; font-weight: 100">{!! $result->description !!}
                <br>
                 <input type="hidden" id="feature_{!! $result->id !!}" value="{!! $result->feature !!}">
              <a class="flat-button" href="#" id="{!! $result->id !!}"  onClick="openModel(this.id)"  data-toggle="modal" data-target="#modelpopUp" style="margin-top:10px ">view details</a>

              </div>
              
            </div>

        </div>

        @endforeach
     
    </div>
  </div>
</section>



<!-- Modal -->
<div class="modal fade" id="modelpopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div id="desc"></div>
          <p id="modelFeature" style="margin-top: 10px; font-weight: bold"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>
{!! $jsUrl !!}
<script> 
    function openModel(id){
        var title   =   $('h3#title_'+id).text();
        var desc    =   $('div#desc_'+id).text(); 
        var feature =   $('#feature_'+id).val();
        
        if(feature.length>0){
            feature = "Feature: "+feature;
        }
        
        $('#exampleModalLongTitle').html(title);
        $('#desc').html(desc);
        $('#modelFeature').html(feature);
    }
    $(function(){
        //function 
    });
</script>

@stop