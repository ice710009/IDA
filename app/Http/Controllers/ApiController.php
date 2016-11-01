<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Picture;
use App\Location;
use Input;
use Response;

class ApiController extends Controller
{
    //
	public function pictures(){
		$code=Input::get('group_code');
		$feedbacks = Array();
		$pictures = Picture::all();
		foreach ($pictures as $index){
			if($index->group == $code){
				array_push($feedbacks, Array('group_code' => $code, 'name' => $index->name, 'description' => $index->description, 'url' => $index->url, 'group' => $index->group));
			}
			else{
	
			}
		}
		return Response::json($feedbacks);
	}
	public function locations(){
		//$code=Input::get('group_code');
		$feedbacks = Array();
		$locations = Location::all();
		foreach ($locations as $index){
			array_push($feedbacks, Array('name' => $index->name, 'longitude' => $index->longitude, 'latitude' => $index->latitude, 'address' => $index->address, 'introduction' => $index->introduction, 'store' => $index->store, 'phone' => $index->phone, 'date' => $index->date, 'url' => $index->url));
		}
		return Response::json($feedbacks);
	}
}
