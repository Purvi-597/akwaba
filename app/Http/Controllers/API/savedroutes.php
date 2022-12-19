<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Saveroute;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class savedroutes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        if (!$request->start_coordinates) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The start_coordinates field is required.']);
        }

        if (!$request->end_coordinates) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The end_coordinates field is required.']);
        }
        if (!$request->start_address) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The start_address field is required.']);
        }
        if (!$request->end_address) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The end_address field is required.']);
        }
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The userId field is required.']);
        }

        $check_coordinates = Saveroute::where([
            ['start_coordinates', '=', $request->start_coordinates],
            ['end_coordinates', '=', $request->end_coordinates],
            ['userId', '=', $request->userId]
        ])->get();
        // print_r(count($check_coordinates));die;
        if (count($check_coordinates) > 0) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Already Save route.']);
        } else {
            # code...


            $data = array(
                'start_coordinates' => $request->start_coordinates,
                'end_coordinates' => $request->end_coordinates,
                'start_address' => $request->start_address,
                'end_address' => $request->end_address,
                'userId' => $request->userId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            );
            $insert = Saveroute::insertGetId($data);
            if ($insert) {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Route saved successfully','route_id' => $insert]);
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
        if ($request->userId) {
            $user = Saveroute::where('userId', '=', $request->userId)->where('is_deleted', '=', 0)->get();
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
    public function delete(request $request)
    {
        if ($request->userId) {
            if (!$request->routeid) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The routeid field is required.']);
            }

            $user = Saveroute::where('id', '=', $request->routeid)->where('userId', '=', $request->userId)->get();
            if ($user) {
                $data = array(
                    'is_deleted' => $request->userId
                );
                $insert = Saveroute::where('id', '=', $request->routeid)->update($data);
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
    public function destroy(Request $request)
    {
        //
        if ($request->userId) {
            $user = Saveroute::where('userId', '=', $request->userId)->get();
            if ($user) {
                foreach ($user as $delete) {
                    $data = array('is_deleted' => $request->userId);
                    $insert = Saveroute::where('id', '=', $delete->id)->update($data);
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


    public function checkroute(Request $request)
    {
        $check_coordinates = Saveroute::where([
            ['start_coordinates', '=', $request->start_coordinates],
            ['end_coordinates', '=', $request->end_coordinates],
            ['userId', '=', $request->userId]
        ])->get();
        // print_r(count($check_coordinates));die;
        if (count($check_coordinates) > 0) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Already Save route.','flag' => 1,'route' => $check_coordinates->id]);
        }else{
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'Not Save route.','flag' => 0,'route' => 0]);
        }
    }
}
