@extends('layouts.layout')

@section('content')
<header>
    <div class="slider-header-center">
           <div class="carousel-inner slider-header-center-items">

             <div class="slider-header-center-item-first">
             <div class="information-page-header">
               <h1>zad car</h1>
                     <h4>Agent commercial pour la vente de voitures d'occasion </h4>
                     <p>+212 625595887</p>
               <ul class="socailmedia-classes">
                 <li> <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                 <li> <a href="#" target="_blank"><i class="fa-brands fa-instagram-square"></i></a></li>
                 <li><a href="#" target="_blank"><i class="fa-brands fa-whatsapp-square"></i></a></li>
                 <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
               </ul>
             </div>
               <img src="{{url('frontapp/images/imgslider2.jpg')}}" class="d-block w-100" alt="images1">
             </div>
         </div>
   </div>

      </header>
<section class="section-search-cars">
    <div class="title-section">
      <h1>chercher une voiture</h1>
    </div>
    <div class="container py-5">
      <form action="{{ route('all-cars')}}" method="GET" class="form-header pb-5">
        @csrf
      <div class="section-search-cars-select d-md-flex justify-content-around">
         <select class="form-select" name="search_name_cars" aria-label="Default select example">
          <option selected disabled>sélectionner le nom de voiture</option>
          @forelse($data_cars_name as $data)
          <option value="{{$data->name}}">{{$data->name}}</option>
          @empty
          <option selected="selected" disabled>no data</option>
          @endforelse
         </select>
         <select class="form-select" name="search_ville" aria-label="Default select example">
          <option selected disabled>Sélectionnez le nom de la ville</option>
          @forelse($data_cars_ville as $data )
             <option value="{{$data->ville}}">{{$data->ville}}</option>
          @empty
             <option selected="selected" disabled>no data</option>
          @endforelse
         </select>
       <button type="submit" class="btn btn-primary">Chercher</a>
      </div>
    </form>
    </div>
  </section>
  <!-- end search cars -->
  <!-- start best number  -->
<section class="section-numbers py-5">
 <div class="container">
     <div class="row justify-content-around">
         <div class="col item d-flex">
             <div class="icon">
               <i class="fa-solid fa-car"></i>
             </div>
             <div class="section-numbers-item">
               <h2>{{$cars->count()}}+</h2>
             </div>
         </div>

         <div class="col item d-flex">
           <div class="icon">
             <i class="fa-solid fa-users"></i>
           </div>
           <div class="section-numbers-item">
             <h2>356+</h2>
           </div>
       </div>

       <div class="col item d-flex">
           <div class="icon">
             <i class="fa-solid fa-house-chimney"></i>
           </div>
           <div class="section-numbers-item">
             <h2>356+</h2>
           </div>
       </div>

       <div class="col item d-flex">
           <div class="icon">
               <i class="fas fa-hands-helping"></i>
           </div>
           <div class="section-numbers-item">
             <h2>356+</h2>
           </div>
       </div>

     </div>
 </div>
</section>
<!-- end section number -->

  <section class="latest-cars-add py-5">
   <div class="title-section">
     <h1 class="text-white">dernières voitures ajoutées</h1>
   </div>
    <div class="container">
        @php
        $x =0;

        @endphp

           <div class="latest-cars-add-items row justify-content-center align-content-center">
               @foreach($cars as $item)
                 @php
                          $x++;

                  @endphp

                   @if($x == 9)
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
                    <span class="price-cars">{{$item->price}}DH</span>
                    <a href="{{url('show')}}/{{$item->id}}" class="btn btn-danger d-block">Afficher</a>
                    </div>
                    <ul class="d-flex">
                    <li><i class="fa-solid fa-car-rear"></i><span>{{$item->date_out}}</span></li>
                    <li><i class="fa-solid fa-gas-pump"></i> <span>{{$item->motor}}</span></li>
                    <li><i class="fa-solid fa-gear"></i> <span>{{$item->Gearboxe}}</span></li>
                    <li><i class="fas fa-route"></i> <span>{{$item->distance_km}}K</span></li>
                    </ul>
                   </div>


                @endforeach


           </div>
           <a href="{{url('all-cars')}}" class="btn btn-primary btn-showmore btn-show-more">afficher plus</a>
    </div>
  </section>
  <!-- end section letest add cars -->
  <!-- start famous car brands-->
  <section class="famous-car-brands py-5">
   <div class="container">
       <div class="row justify-content-around">
           <div class="col item">
               <div class="content-item">
                  <img src="{{url('frontapp/images/car1.png')}}" alt="">
               </div>
           </div>
           <div class="col item">
             <div class="content-item">
               <img src="{{url('frontapp/images/car2.png')}}" alt="">
             </div>
          </div>
           <div class="col item">
             <div class="content-item">
               <img src="{{url('frontapp/images/car3.png')}}" alt="">

             </div>
          </div>
          <div class="col item">
             <div class="content-item">
               <img src="{{url('frontapp/images/car4.png')}}" alt="">
             </div>
          </div>
          <div class="col item">
           <div class="content-item">
             <img src="{{url('frontapp/images/car5.png')}}" alt="">
           </div>
        </div>
        <div class="col item">
         <div class="content-item">
           <img src="{{url('frontapp/images/car6.png')}}" alt="">
         </div>
      </div>
       </div>
   </div>
</section>
<!-- end famous car brands-->
<!-- start contact us -->
<section class="contact-us py-5" id="ContactUs">
 <div class="container">
   <div class="title-section">
     <h1>Contactez-nous</h1>
   </div>
   <div class="alert alert-primary d-none envoi-message alert-dismissible fade show" role="alert" id="messsagesend">
       <i class="fas fa-check-square"></i>  Message envoi anec success
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

     </div>
     <div class="d-flex justify-content-center contact-us-item text-center">
                <i class="fas fa-envelope d-none d-md-block contact-us-item-logo"></i>
       <div class="contact-us-item-form w-50">
             <form action="">
               <div>
                   <i class="fas fa-bookmark"></i>
                   <input type="text" id="subject" placeholder="Sujet">
                   <i class="fas fa-exclamation-circle erore-icon invisible"></i>
                   <p class="text-danger erore-form">erore message</p>
                 </div>
                 <div>
                   <i class="fas fa-user-alt"></i>
                   <input type="text" id="name" placeholder="Votre nom..">
                   <i class="fas fa-exclamation-circle erore-icon invisible"></i>
                   <p class="text-danger erore-form">erore message</p>
                 </div>
                 <div>
                   <i class="fas fa-at"></i>
                   <input type="email" id="email" placeholder="ex: myname@example.com">
                   <i class="fas fa-exclamation-circle erore-icon invisible"></i>
                   <p class="text-danger erore-form">erore message</p>
                 </div>
                 <div>
                   <i class="fas fa-envelope"></i>
                   <textarea name="message" id="message" placeholder="Écris quelque chose.."></textarea>
                   <i class="fas fa-exclamation-circle erore-icon invisible"></i>
                   <p class="text-danger erore-form">erore message</p>
                 </div>
                 <div>
                   <i class="fas fa-paper-plane icon-send-message"></i>
                     <button class="btn btn-primary" type="submit" id="sendmessage">envoyer un e-mail</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
</section>
<!-- end contact us -->
@endsection
