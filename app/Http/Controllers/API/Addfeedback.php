<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Model\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Addfeedback extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $feedback = Feedback::where('status', '=', 1)->get();

        // print_r($request->osmid);die;
        if ($feedback) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $feedback]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->name) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The name field is required.']);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            //Valid email!
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Please enter valid email address.']);
        }

        if (!$request->contact_no) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The mobile number field is required.']);
        }
        if (!$request->message) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The message field is required.']);
        }
        if (!$request->country_code) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The country code field is required.']);
        }

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'contact_no' => $request->country_code . $request->contact_no,
            'message' => $request->message,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        $feedback = Feedback::insert($data);

        // print_r($request->osmid);die;
        if ($feedback) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
