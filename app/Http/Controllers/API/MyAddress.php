<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\my_address;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MyAddress extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->id == 0) {
 
            if (!$request->userId) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The userId field is required.']);
            }
            if (!$request->type) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The type field is required.']);
            }
            if (!$request->address) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The type field is required.']);
            }
            if (!$request->lat) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The type field is required.']);
            }
            if (!$request->long) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The type field is required.']);
            }

            $check = my_address::where([
                ['type', '=', strtolower($request->type)],
                ['userId', '=', $request->userId]
            ])->get();
            if (count($check) > 0) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Already Save address.']);
            } else {


                $data = array(
                    'userId' => $request->userId,
                    'type' => $request->type,
                    'address' => $request->address,
                    'lat' => $request->lat,
                    'lng' => $request->long,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                );
                $insert = my_address::insert($data);
                if ($insert) {
                    $address = my_address::where([
                        ['type', '=', strtolower($request->type)],
                        ['userId', '=', $request->userId]
                    ])->first();

                    return response()
                        ->json(['statusCode' => 1, 'statusMessage' => 'My address saved successfully','data' => $address]);
                } else {
                    return response()
                        ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
                }
            }
        } else {

            if (!$request->userId) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The userId field is required.']);
            }
            
            if (!$request->address_id) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The address_id field is required.']);
            }

            $check = my_address::where([['id','=',$request->address_id],['userId', '=', $request->userId]])->first();
                $data = array(
                    'userId' => $request->userId,
                    'type' => $request->type,
                    'address' => $request->address,
                    'lat' => $request->lat,
                    'lng' => $request->long,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                );

                $update = my_address::where('id', $check->id)->update($data);

                if ($update) {
                    $updateaddress = my_address::where([
                        ['type', '=', strtolower($request->type)],
                        ['userId', '=', $request->userId]
                    ])->first();
                    return response()
                        ->json(['statusCode' => 1, 'statusMessage' => 'My address updated successfully','data' => $updateaddress]);
                } else {
                    return response()
                        ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
                }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The userId field is required.']);
        }
        $check = my_address::where('userId', '=', $request->userId)->orderBy('id','DESC')->get();
        if ($check) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $check]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
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
    public function delete(Request $request)
    {
        $id = $request->address_id;

        $delete = my_address::where('id', $id)->delete();
        if ($delete) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'deleted Successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
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
}
