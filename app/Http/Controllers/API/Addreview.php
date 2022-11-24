<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\reviews_rating;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Addreview extends Controller
{
    public $profile_path = 'http://10.10.1.133:8000/uploads/review/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reviews_rating = reviews_rating::get();
        if($reviews_rating){
        return response()
        ->json(['statusCode' => 1, 'statusMessage' => 'Successfully','data' => $reviews_rating]);
    }else{
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
        $id = $request['osmids'];
        $userid = $request['userId'];
        $message = $request['message'];
        $rating = $request['rating'];
        $firstname = $request['firstname'];
        $lastname =  $request['lastname'];
        $name = trim($request['restaurantname'],'"');
        $photos = "index.png";
        // $latitude = $request->coordinates[0];
        // $longitude = $request->coordinates[1];
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");
        $array_images = array();
        $request->file('review_image');
        $array_name = " ";
        if($request->file('review_image')){
        for ($i = 0; $i < count($request->file('review_image')); $i++) {
          $newfilename = "image_". rand();
          $extension   = pathinfo($request->file('review_image')[$i], PATHINFO_EXTENSION);
          $basename    = $newfilename . "." . $extension;
          $file1       = $request->file('review_image')[$i];
          $target_path = "uploads/review/" . $basename;
          $array_images[] = $basename;
          move_uploaded_file($request->file('review_image')[$i], $target_path);
         
        }
        $array_name = implode(",",$array_images);
        }
        // echo "<pre>"; print_r($array_images);die;



        $data = array(
            'user_id' => $userid,
            'osm_id' => $id,
            'title' => $name,
            'message' => $message,
            'ratings' => $rating,
            'image' => $array_name,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        // $sql = "INSERT INTO review_rating (user_id, osm_id, title, message, rating, photos, status, created_at, updated_at)
        //  VALUES ('".$userid."', '".$id."', '".$name."', '".$message."', '".$rating."', '".$array_name."', '1', '".$created_at."', '".$updated_at."')";
        $sql = reviews_rating::insert($data);
              //$last_insert_id = $conn->insert_id;
              if($sql){
                return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully']);
            }else{
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
    public function show(Request $request)
    {
        
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        if (!$request->osmids) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The osmids field is required.']);
        }

        $exites = reviews_rating::where('user_id', $request->userId)->where('osm_id', $request->osmids)->where('is_deleted',0)->first();
        if($exites){
            return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $exites]);
        }else{
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Review not add yet']);
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
    public function update(Request $request)
    {
        $id = $request['osmids'];
        $userid = $request['userId'];
        $message = $request['message'];
        $rating = $request['rating'];
        $name = trim($request['restaurantname'],'"');
        $array_images = array();
        $request->file('review_image');
        if($request->file('review_image')){
        for ($i = 0; $i < count($request->file('review_image')); $i++) {
          $newfilename = "image_". rand();
          $extension   = pathinfo($request->file('review_image')[$i], PATHINFO_EXTENSION);
          $basename    = $newfilename . "." . $extension;
          $file1       = $request->file('review_image')[$i];
          $target_path = "uploads/review/" . $basename;
          $array_images[] = $basename;
          move_uploaded_file($request->file('review_image')[$i], $target_path);
        }
        $array_name = implode(",",$array_images);
        }else{
            $exites = reviews_rating::where('user_id', $request->userId)->where('osm_id', $request->osmids)->first();
            $array_name = $exites->image;
        }
        // echo "<pre>"; print_r($array_images);die;
        $data = array(
            'user_id' => $userid,
            'osm_id' => $id,
            'title' => $name,
            'message' => $message,
            'ratings' => $rating,
            'image' => $array_name,
            'status' => 1,
            'updated_at' => Carbon::now()
        );
        // $sql = "INSERT INTO review_rating (user_id, osm_id, title, message, rating, photos, status, created_at, updated_at)
        //  VALUES ('".$userid."', '".$id."', '".$name."', '".$message."', '".$rating."', '".$array_name."', '1', '".$created_at."', '".$updated_at."')";
        $sql = reviews_rating::where('user_id', $request->userId)->where('osm_id', $request->osmids)->update($data);
              //$last_insert_id = $conn->insert_id;
              if($sql){
                return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Updated Successfully']);
            }else{
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
        $id = $request['osmids'];
        $userid = $request['userId'];
        $data = array(
            'is_deleted' =>1
        );
        $sql = reviews_rating::where('user_id', $request->userId)->where('osm_id', $request->osmids)->update($data);
        //$last_insert_id = $conn->insert_id;
        if($sql){
          return response()
          ->json(['statusCode' => 1, 'statusMessage' => 'deleted Successfully']);
      }else{
          return response()
              ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
      }
    }
}
