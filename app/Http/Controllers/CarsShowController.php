<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class CarsShowController extends Controller
{

    public function index()
    {
        $cars = Cars::all();
        $data_cars_ville = DB::table('cars')->select('ville')->distinct()->get();
          $data_cars_name = DB::table('cars')->select('name')->distinct()->get();
        return view('user.index',compact('cars','data_cars_name','data_cars_ville'));
    }
    public function allcars(Request $request)
    {
        Paginator::useBootstrap();

          $data_cars_ville = DB::table('cars')->select('ville')->distinct()->get();
          $data_cars_name = DB::table('cars')->select('name')->distinct()->get();
          /* $data_cars_search = DB::select('select distinct ville from cars'); */


         if($request->search_name_cars){

            $cars = Cars::where('name',$request->search_name_cars)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));



        }
        if($request->search_ville){

            $cars = Cars::where('ville',$request->search_ville)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));

        }
        if($request->search_ville &&  $request->search_name_cars){

            $cars = Cars::where('ville',$request->search_ville)->where('name','LIKE',$request->search_name_cars)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));

        }
        if($request->price_max){

            $cars = Cars::where('price','>=',$request->price_max)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));

        }
        if($request->price_min){

            $cars = Cars::where('price','<=',$request->price_min)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));

        }
        if($request->price_max &&  $request->price_min){

            $cars = Cars::where('price','>=',$request->price_max)->where('price','<=',$request->price_min)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));

        }
        if($request->kml_min){

            $cars = Cars::where('distance_km','<=',$request->kml_min)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));

        }
        if($request->kml_max){

            $cars = Cars::where('distance_km','>=',$request->kml_max)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));

        }
        if($request->kml_max &&  $request->kml_min){

            $cars = Cars::where('distance_km','>=',$request->kml_max)->where('distance_km','<=',$request->kml_min)->latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));

        }

        else{
            $cars = Cars::latest()->paginate(1);
           return view('user.menucars',compact('cars','data_cars_ville','data_cars_name'));
        }

    }



    public function show($id)
    {
        $cars = Cars::find($id);
        $fcars =Cars::all()->where('ville', $cars->ville);
        if($fcars->count() < 2){
            $fcars =Cars::all();
        }
        return view('user.showcar',compact('cars','fcars'));
    }
    public function AboutUs()
    {
        return view('user.aboutus');
    }
    public function ContactUs()
    {
        return view('user.contactus');
    }

}
