@extends('layouts.layout')

@section('content')
<!-- start section shose -->
<section class="py-5">
    <div class="container">
         <div class="cars-detais">
           <div class="cars-detais-top">
             <div class="d-flex justify-content-between">
               <h1> {{$cars->name}}</h1>
               <span class="price-cars">{{$cars->price}}<span>DH</span></span>
             </div>
             <ul>
               <li>vile: {{$cars->ville}}</li>
               <li>date: <span> {{$cars->created_at->format('Y.m.d')}}</span></li>
               <li>anonce n° <span> {{$cars->id}}</span></li>
             </ul>
             </div>

           <div class="cars-detais-car">

               <div class="cars-detais-car-img row justify-content-between">
                @php
                   $y = 0;
                @endphp

                 <div id="carouselExampleIndicators" class="carousel slide col-12 col-md-8 slider-content" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    @if (file_exists('dataimg/covercars/'.$cars->cover))
                        <img src="{{url('dataimg/covercars/')}}/{{$cars->cover}}" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="@php echo  $y ; @endphp" class="active" style="width: 100px; height: 100px; border-radius: 50%;" aria-current="true" aria-label="Slide 1">
                    @else
                       <img src="{{url('dataimg/noimage/no-image.png')}}" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="@php echo  $y ; @endphp" class="active" style="width: 100px; height: 100px; border-radius: 50%;" aria-current="true" aria-label="Slide 1">
                    @endif
                       @foreach ($cars->images as $item)
                       @php
                           $y++;
                       @endphp
                          <img src="{{url('dataimg/imgcars/')}}/{{$item->img}}" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="@php echo  $y ; @endphp" class="active" style="width: 100px; height: 100px; border-radius: 50%;" aria-current="true" aria-label="Slide 1">
                       @endforeach
                   </div>
                   <div class="carousel-inner">
                    <div class="carousel-item active slider-content-img">
                        <img src="{{url('dataimg/covercars/')}}/{{$cars->cover}}" class="d-block" alt="...">
                     </div>

                       @foreach ($cars->images as $item)
                          <div class="carousel-item slider-content-img">
                             <img src="{{url('dataimg/imgcars/')}}/{{$item->img}}" class="d-block" alt="...">
                          </div>
                       @endforeach
                   </div>
                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                   </button>
                 </div>
                 <div class="col-md-4 d-md-block d-none" >
                   <!--  -->
            @php
                $x = 0;
            @endphp

                     <ul class="list-unstyled">
                        @foreach ($fcars as $item)
                                        @php
                                            $x++;
                                        @endphp
                                        @if($x == 7)
                                            @break
                                        @endif
                                <li class="row mb-4">
                                    <a href="{{url('show')}}/{{$item->id}}" class="col-3">
                                     <img src="{{url('dataimg/covercars/')}}/{{$item->cover}}" alt="Image" class="rounded img-fluid">
                                    </a>
                                    <div class="col-9">
                                        <h6 class="mb-3 h5 text-dark"> {{$item->name}}</h6>
                                    <div class="d-flex text-small">
                                        <h4 class="text-muted ml-1"> {{$item->price}}DH</h4>
                                    </div>
                                    </div>
                                </a>
                                </li>
                        @endforeach
                   </ul>
                   </div>
                 </div>

                   <!--  -->
                 </div>
               </div>
               <div class="cars-detais-car-info-g d-flex">
                 <ul class="">
                   <li><i class="fa-solid fa-car-rear"></i> : <span>{{$cars->name}}</span></li>
                   <i class="fa-solid fa-m"></i> : <span>{{$cars->name_model}}</span></li>
                   <li><i class="fa-solid fa-calendar"></i> :<span>{{$cars->date_out}}</span></li>
                   <li><i class="fas fa-route"></i> : <span>{{$cars->distance_km}}</span></li>
                 </ul>
                 <ul class="">
                   <li><i class="fa-solid fa-horse-head"></i> : <span>{{$cars->horses}}</span></li>
                   <li><i class="fa-solid fa-gas-pump"></i>   : <span>{{$cars->motor}}</span></li>
                   <li><i class="fa-solid fa-gear"></i>       : <span>{{$cars->Gearboxe}}</span></li>
                   <li><i class="fa-solid fa-file-invoice-dollar"></i> : <span>{{$cars->price}}</span></li>
                 </ul>
               </div>
               <div class="cars-detais-car-desciption">
                 <h1> Detail de l'annonce :</h1>
                 <p>
                    {{$cars->details}}
                 </p>
               </div>
               <div class="cars-detais-car-info-vnd pt-3">
                 <h3> Annonceur  : <span>{{$cars->user->name}}</span></h3>
                 <h3>numéro de téléphone :  {{$cars->user->number_phone}}</h3>
               </div>
             </div>
         </div>

    </div>
  </section>





  <!-- end section shose -->


  <!-- satrt cars here -->
  <section class="latest-cars-add py-5">

    <div class="container">
           <div class="latest-cars-add-items row justify-content-center align-content-center">

             @php
                $z = 0;
            @endphp
             @foreach ($fcars as $item)
             @php
                 $z++;
             @endphp
             @if($z == 4)
                @break
              @endif

             <div class="card card-cars latest-cars-add-item col-12 col-md-3 col-sm-6" style="width: 18rem;">
                <div class="img-cars">
                    @if (file_exists('dataimg/covercars/'.$item->cover))
                                <img src="{{url('dataimg/covercars/')}}/{{$item->cover}}" class="card-img-top w-100" alt="...">
                             @else
                                <img width="100px" height="100px" src="{{url('dataimg/noimage/no-image.png')}}">
                             @endif
                </div>
               <div class="card-body card-body-cars text-center">
                 <h2 class="text-center">{{$item->name}}</h2>
                 <span class="price-cars">{{$item->price}}23445dh</span>
                 <a href="{{url('show')}}/{{$item->id}}" class="btn btn-danger d-block">open </a>
               </div>
               <ul class="d-flex">
                 <li><i class="fa-solid fa-car-rear"></i><span>{{$item->date_out}}</span></li>
                 <li><i class="fa-solid fa-gas-pump"></i> <span>{{$item->motor}}</span></li>
                 <li><i class="fa-solid fa-gear"></i> <span>{{$cars->Gearboxe}}</span></li>
                 <li><i class="fas fa-route"></i> <span>{{$cars->distance_km}}</span></li>
               </ul>
             </div>
             @endforeach
           </div>
    </div>
  </section>
  <!-- end section letest add cars -->
<!-- end cars here -->



@endsection
