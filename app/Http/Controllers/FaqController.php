<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Faq;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Lang;



class FaqController extends Controller 
{
	public function index()

    {
    
            
        if(Session::get('locale') == 'fr'){
        $data['faq'] = Faq::orderBy('id','desc')->get(['question_fr as question','answer_fr as answer','status','id']);
    }else{
        $data['faq'] = Faq::orderBy('id','desc')->get(['question as question','answer as answer','status','id']);
    }
    
		// $data['featuretext'] = Featuretext::orderBy('id','desc')->get();
        return view('admin.faq.index',$data);
	}
	public function create()
    {
    	
        return view('admin.faq.create');
    }
	public function store(Request $request)
{
      
        $input = $request->all();

        if($request->input('status')){
            $status = 1;
         }else{
            $status = 0;
        }

        $data = array(

            'question' => $request->input('question'),
            'question_fr' => $request->input('question_fr'),
            'answer' => $request->input('answer'),
            'answer_fr' => $request->input('answer_fr'),
            'status' => $status

        );
        $insert = Faq::create($data);
        if($insert){
            return redirect()->action('FaqController@index')->with('success',Lang::get('language.text_success'));
        }else{
            return redirect()->back()->with('error',Lang::get('language.error_msg'));
        }
    }

	public function edit($id)
    {
        $row['faq'] = Faq::where('id',$id)->first();
  
        return view('admin.faq.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if($request->input('status')){
            $status = 1;
         }else{
            $status = 0;
        }
        $create = Faq::where('id',$id)->update([

            "question" => $request->input('question'),
            "question_fr" => $request->input('question_fr'),
            "answer" => $request->input('answer'),
            "answer_fr" => $request->input('answer_fr'),
            "status" => $status
        ]);
		return redirect()->action('FaqController@index')->with('success',Lang::get('language.text_update'));

        
	}
    
	public function delete(Request $request){
        $id = $request->id;
        $delete = Faq::where('id',$id)->delete();
        if($delete)
        {
          echo "delete";
        }
        else
        {
            echo "notdelete";
        }
        
    }

    public function faq_status(Request $request)
    {
    	$id = $request->input('id');
    	$status = $request->input('status');
    	if($status == 1)
    	{
    		DB::table('faq')->where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		DB::table('faq')->where('id',$id)->update(['status' => 1]);
                return response()->json(['return' => 'Active']);
    	}
    	else
    	{
    		return redirect()->back()
	         		->with('error','Unable to change the status');
    	}
    }

       public function view($id)
    {

        
        if(Session::get('locale') == 'fr'){
            $data['faq'] = Faq::orderBy('id','desc')->get(['question_fr as question','answer_fr as answer','status','id']);
    }else{
        $data['faq'] = Faq::orderBy('id','desc')->get(['question as question','answer as answer','status','id']);
    }
        $data['faq'] = Faq::where('id',$id)->first();
        return view('admin.faq.view',$data);
    }

   
}