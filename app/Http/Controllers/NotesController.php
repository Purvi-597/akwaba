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
<<<<<<< HEAD

        
=======
        // echo "<pre>";
        // print_r($data);die;
>>>>>>> 39d9f2bb85a4b2f396fe243e601b55b6c5e31db2
        return view('admin.notes',$data);
    }




}


