<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App;
use Session;
  
class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('sidebar');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function change(Request $request)
    {
        App::setLocale('en');
        session()->put('locale', $request->Lang);
        
        return true;
        // $session = $request->session()->all();
        // print_r($session);exit;
        // return redirect()->back();
    }
}