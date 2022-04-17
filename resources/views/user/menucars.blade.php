@extends('layouts.layout')

@section('content')
 <!-- start section shose -->
 <section class="py-5">
    <div class="container">
         <div class="shose-cars">
           <div class="shose-cars-select d-flex">
            <form action="{{ route('all-cars')}}" method="GET" class="form-header d-flex justify-content-center pb-5">
                @csrf
                <select class="form-select" name="search_name_cars" aria-label="Default select example">

                <option  selected disabled>sélectionner le nom de voiture</option>
                @forelse($data_cars_name as $data )
                <option value="{{$data->name}}">{{$data->name}}</option>
                @empty
                <option selected="selected" disabled>no data</option>
                @endforelse
                </select>
                <select class="form-select" name="search_ville" aria-label="Default select example">
                <option selected disabled>Sélectionnez le nom de la ville</option>
                @forelse( $data_cars_ville as $data )
                    <option value="{{$data->ville}}">{{$data->ville}}</option>
                @empty
                    <option selected="selected" disabled>no data</option>
                @endforelse
                </select>
           </div>
           <div class="shose-cars-range row">
            <div class="col-12 col-sm-12 col-md-6">
              <label for="customRange1" class="form-label">prix minimum</label>
              <label for="customRange1" class="form-label number-range" id="prixminimum">0K(DH)</label>
             <input type="range" value="" name="price_min" class="form-range" max="1000" min="0" id="Rangeprixminimum">
            </div>
            <div class="col-12 col-sm-12 col-md-6">
              <label for="customRange1" class="form-label">prix maximum</label>
              <label for="customRange1" class="form-label number-range" id="prixmaximum">0K(DH)</label>
             <input type="range" value="" name="price_max" max="1000" min="0" class="form-range" id="Rangeprixmaximum">
            </div>
            <div class="col-12 col-sm-12 col-md-6">
              <label for="customRange1" class="form-label">min klm</label>
              <label for="customRange1" class="form-label number-range" id="minklm">OK(KM)</label>
             <input type="range" name="kml_min" min="0" max="1000" class="form-range" id="Rangeminklm">
            </div>
            <div class="col-12 col-sm-12 col-md-6">
              <label for="customRange1" class="form-label">max klm</label>
              <label for="customRange1" class="form-label number-range" id="maxklm">OK(KM)</label>
             <input type="range" name="kml_max" min="0" max="1000" class="form-range" id="Rangemaxklm">
            </div>
          </div>
           <button class="btn btn-primary" id="serchecars">chercher</button>
        </form>
         </div>
</div>

</section>
<section>
<!-- start section list cars -->
<section class="latest-cars-add py-5">
    <div class="title-section">
      <h1 class="text-white">Toutes les voitures</h1>
    </div>
     <div class="container">

            <div class="latest-cars-add-items row justify-content-center align-content-center">
                @foreach($cars as $item)
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
               <div class="text-center ms-auto">
                   {{ $cars->links() }}
               </div>
            </div>
     </div>
   </section>
   <!-- end section list cars -->

</section>

@endsection
