<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Rating;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Lang;



class RatingReviewsController extends Controller 
{

    public function index()
    {

        $data['reviews_rating'] = Rating::orderBy('id','desc')->get();
        return view('admin.rating',$data);
    }

	
   

}    

   
