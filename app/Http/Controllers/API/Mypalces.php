<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\myplaces;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use mysqli;

class Mypalces extends Controller
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
        if (!$request->location_coordinates) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The location_coordinates field is required.']);
        }

        if (!$request->location_address) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The location_address field is required.']);
        }
        if (!$request->category) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The category field is required.']);
        }
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The userId field is required.']);
        }
        if (!$request->osmid) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The osmid field is required.']);
        }
        $data = array(
            'location_coordinates' => $request->location_coordinates,
            'location_address' => $request->location_address,
            'category' => $request->category,
            'userId' => $request->userId,
            'osmid' => $request->osmid,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        );
        $insert = myplaces::insert($data);
        if ($insert) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'My place saved successfully']);
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
    public function show(request $request)
    {
        if ($request->userId) {
            $user = myplaces::where('userId', '=', $request->userId)->where('is_deleted', '=', 0)->get();
            if ($user) {
                // $data = array(
                //     'first_name' => $user->first_name,
                //     'last_name' => $user->last_name,
                //     'email' => $user->email,
                //     'country_code' => $user->country_code,
                //     'contact' => $user->contact_no,
                //     'role' => 'User',
                //     'profile_image' => $user->profile_pic,
                //     'profile_path' => $this->profile_path,
                //     'created_at' => Carbon::now(),
                //     'updated_at' => Carbon::now()
                // );
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $user]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
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
    public function delete(request $request)
    {
        if ($request->userId) {
            if (!$request->myplaceid) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The myplaceid field is required.']);
            }

            $user = myplaces::where('id', '=', $request->myplaceid)->where('userId', '=', $request->userId)->get();
            if ($user) {
                $data = array(
                    'is_deleted' => $request->userId
                );
                $insert = myplaces::where('id', '=', $request->myplaceid)->update($data);
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully']);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
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
    public function destroy(Request $request)
    {
        //
        if ($request->userId) {
            $user = myplaces::where('userId', '=', $request->userId)->get();
            if ($user) {
                foreach ($user as $delete) {
                    $data = array('is_deleted' => $request->userId);
                    $insert = myplaces::where('id', '=', $delete->id)->update($data);
                }
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully']);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }
}
