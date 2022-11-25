<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Notes;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Lang;



class NotesController extends Controller 
{

    public function index()
    {

        $data['notes'] = Notes::leftjoin('users','users.id','=','notes.user_id')->orderBy('notes.id','desc')->get();

        
        return view('admin.notes',$data);
    }

	
   

}    

   
