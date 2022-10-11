<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encyclopedia;
class EncyclopediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['story'] = Encyclopedia::where('is_deleted',0)->get();
        return view('admin.encyclopedia.index',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.encyclopedia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    $input = $request->all();
      $request->validate([
                'story' => 'required'
        ]);


       if(isset($input['status'])){
           $status = 1;
       }else{
            $status =0;
       }
       $data = array(
        'story' => $request->input('story'),
        'status' => $status
       );
       $insert = Encyclopedia::insert($data);
       if($insert){
        return redirect()->back()->with('success','Encyclopedia Added Successfully');
       }else{
        return redirect()->back()->with('error','Something went wrong');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        //
        return view('admin.encyclopedia.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['rows'] = Encyclopedia::find($id);
        return view('admin.encyclopedia.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $request->validate([
                'story' => 'required'
        ]);


       if(isset($input['status'])){
           $status = 1;
       }else{
            $status = 0;
       }
       $data = array(
        'story' => $request->input('story'),
        'status' => $status
       );
       $update = Encyclopedia::where('id',$id)->update($data);
       if($update){
        return redirect()->back()->with('success','Encyclopedia updated Successfully');
       }else{
        return redirect()->back()->with('error','Something went wrong');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        public function encyclopedia_status(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        if($status == 1)
        {
            Encyclopedia::where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
        }
        elseif($status == 0)
        {
           Encyclopedia::where('id',$id)->update(['status' => 1]);
                return response()->json(['return' => 'Active']);
        }
        else
        {
            return redirect()->back()
                    ->with('error','Unable to change the status');
        }
    }
}
