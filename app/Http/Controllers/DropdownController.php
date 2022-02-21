<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DropdownController extends Controller
{
	public function index(Request $request)
	{
		// $countries = DB::table("countries")->pluck("name","id");

		//$countries = DB::table("locations")->get();

		$countries = DB::table('locations')->orderBy('province')->get()->groupBy(function($item) {
            return $item->province;
        });

				//dd($countries);


			// $countries = json_encode($request->district);



		

		return view('dropdown',compact('countries',));
	}

	public function getState(Request $request)
	{
		$states = DB::table("locations")
		->orderBy('district')->get()->groupBy(function($item) {
            return $item->district;
        });
		
		return response()->json($states);
		// return json_encode($request->district);
		dd($states);

		
	}

	public function getCity(Request $request)
	{
		$cities = DB::table("cities")
		->where("state_id",$request->state_id)
		->pluck("name","id");
		return response()->json($cities);
	}
}