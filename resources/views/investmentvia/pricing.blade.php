
@extends('layouts.master')
@section('title', 'HOME')

@section('header') 
@stop
@section('content')
@include('partials/menu')
 
  
@include('partials/titlebar')
<!--Pricings-->

  <section class="flat-row page-contact">
        <div class="container">
            <div class="wrap-infobox" style="padding-bottom: 0;border-bottom: 0;margin-bottom: 0;">
                <div class="row">
          @foreach($pricing as $result)
              <div class="col-lg-4">
                <div class="pricing_item wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                    
                    <h3>{{$result->title}}</h3> 

                    <table class="table table-striped table-hover table-bordered">
                      <tr>
                        <th>Monthly</th>
                        <td><i class="fa fa-rupee"></i>{!! $result->monthly_price !!} </td>
                        <td><span class="flat-button">
                      <a href="#" target="_blank">Pay Now</a></span></p>
                    </td>
                      </tr>
                      <!-- {{url('checkOutEBS/'.str_slug($result->title).'?amount='.$result->monthly_price)}} -->
                      <tr>
                        <th>Quarterly</th>
                        <td><i class="fa fa-rupee"></i>{!! $result->quarterly_price !!} </td>
                        <td><span class="flat-button">
                      <a href="#" target="_blank">Pay Now</a></span></p>
                    </td>
                      </tr>
                      <!-- {{url('checkOutEBS/'.str_slug($result->title).'?amount='.$result->quarterly_price)}} -->
                       <tr>
                        <th>Half Yearly</th>
                        <td><i class="fa fa-rupee"></i>{!! $result->half_yearly_price !!} </td>
                        <td><span class="flat-button">
                      <a href="#" target="_blank">Pay Now</a></span></p>
                    </td>
                      </tr>
                        <!-- {{url('checkOutEBS/'.str_slug($result->title).'?amount='.$result->half_yearly_price)}} -->
                       <tr>
                        <th>Yearly</th>
                        <td><i class="fa fa-rupee"></i>{!! $result->yearly_price !!} </td>
                        <td><span class="flat-button">
                      <a href="#"  target="_blank">Pay Now</a></span></p>
                    </td>
                    <!-- {{url('checkOutEBS/'.str_slug($result->title).'?amount='.$result->yearly_price)}} -->
                      </tr>
                    </table>
                  </div>
                </div>
            @endforeach
          
        </div>
        
      </div>
    </div>
  </div>
</section>
<!--Pricings-->

 @stop