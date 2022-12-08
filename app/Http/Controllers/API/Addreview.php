<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Model\Users;
use App\Likes_review;
use App\report_review;
use App\reviews_rating;
use App\table_review;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Addreview extends Controller
{
    public $profile_path = 'http://10.10.1.133:8000/uploads/review/';
    public $user_path = 'http://10.10.1.133:8000/uploads/users/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filter_id == 0) {
            $reviews_rating = reviews_rating::leftjoin('users', 'reviews_rating.user_id','=','users.id')->where('osm_id', '=', $request->osmid)->get();
            
            $main = array();
            foreach($reviews_rating as $row){
                $like = Likes_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
                $report = report_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
              $main[]= array(
                'id' => $row->id,
                'osmid' => $row->osm_id,
                'title' => $row->title,
                'message' => $row->message,
                'rating' => $row->ratings,
                'user_name' => $row->first_name.' '.$row->last_name,
                'path' => $this->user_path,
                'profile_pic' => $row->profile_pic,
                'Like' => count($like),
                'report' => count($report),
                'created_at' => strtotime($row->created_at)
              );
            }
            if ($reviews_rating) {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $main]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
        } elseif ($request->filter_id == 1) {
            $reviews_rating = reviews_rating::leftjoin('users', 'reviews_rating.user_id','=','users.id')->where('osm_id', '=', $request->osmid)->where('ratings', 1)->get();
            $main = array();
            foreach($reviews_rating as $row){
                $like = Likes_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
                $report = report_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
              $main[]= array(
                'id' => $row->id,
                'osmid' => $row->osm_id,
                'title' => $row->title,
                'message' => $row->message,
                'rating' => $row->ratings,
                'user_name' => $row->first_name.' '.$row->last_name,
                'path' => $this->user_path,
                'profile_pic' => $row->profile_pic,
                'Like' => count($like),
                'report' => count($report),
                'created_at' => strtotime($row->created_at)
              );
            }
            // print_r($request->osmid);die;
            if ($reviews_rating) {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $main]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
        } elseif ($request->filter_id == 2) {
            $reviews_rating = reviews_rating::leftjoin('users', 'reviews_rating.user_id','=','users.id')->where('osm_id', '=', $request->osmid)->where('ratings', 2)->get();
            $main = array();
            foreach($reviews_rating as $row){
                $like = Likes_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
                $report = report_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
              $main[]= array(
                'id' => $row->id,
                'osmid' => $row->osm_id,
                'title' => $row->title,
                'message' => $row->message,
                'rating' => $row->ratings,
                'user_name' => $row->first_name.' '.$row->last_name,
                'path' => $this->user_path,
                'profile_pic' => $row->profile_pic,
                'Like' => count($like),
                'report' => count($report),
                'created_at' => strtotime($row->created_at)
              );
            }
            if ($reviews_rating) {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $main]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
        } elseif ($request->filter_id == 3) {
            $reviews_rating = reviews_rating::leftjoin('users', 'reviews_rating.user_id','=','users.id')->where('osm_id', '=', $request->osmid)->where('ratings', 3)->get();
            $main = array();
            foreach($reviews_rating as $row){
                $like = Likes_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
                $report = report_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
              $main[]= array(
                'id' => $row->id,
                'osmid' => $row->osm_id,
                'title' => $row->title,
                'message' => $row->message,
                'rating' => $row->ratings,
                'user_name' => $row->first_name.' '.$row->last_name,
                'path' => $this->user_path,
                'profile_pic' => $row->profile_pic,
                'Like' => count($like),
                'report' => count($report),
                'created_at' => strtotime($row->created_at)
              );
            }
            if ($reviews_rating) {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $main]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
        } elseif ($request->filter_id == 4) {
            $reviews_rating = reviews_rating::leftjoin('users', 'reviews_rating.user_id','=','users.id')->where('osm_id', '=', $request->osmid)->where('ratings', 4)->get();
            $main = array();
            foreach($reviews_rating as $row){
                $like = Likes_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
                $report = report_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
              $main[]= array(
                'id' => $row->id,
                'osmid' => $row->osm_id,
                'title' => $row->title,
                'message' => $row->message,
                'rating' => $row->ratings,
                'user_name' => $row->first_name.' '.$row->last_name,
                'path' => $this->user_path,
                'profile_pic' => $row->profile_pic,
                'Like' => count($like),
                'report' => count($report),
                'created_at' => strtotime($row->created_at)
              );
            }
            if ($reviews_rating) {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $main]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
        } elseif ($request->filter_id == 5) {
            $reviews_rating = reviews_rating::leftjoin('users', 'reviews_rating.user_id','=','users.id')->where('osm_id', '=', $request->osmid)->where('ratings', 5)->get();
            $main = array();
            foreach($reviews_rating as $row){
                $like = Likes_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
                $report = report_review::where('userId', $row->user_id)->where('osm_id', $row->osm_id)->get();
              $main[]= array(
                'id' => $row->id,
                'osmid' => $row->osm_id,
                'title' => $row->title,
                'message' => $row->message,
                'rating' => $row->ratings,
                'user_name' => $row->first_name.' '.$row->last_name,
                'path' => $this->user_path,
                'profile_pic' => $row->profile_pic,
                'Like' => count($like),
                'report' => count($report),
                'created_at' => strtotime($row->created_at)
              );
            }
            // print_r($request->osmid);die;
            if ($reviews_rating) {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $main]);
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
        $name = trim($request['restaurantname'], '"');
        $photos = "index.png";
        // $latitude = $request->coordinates[0];
        // $longitude = $request->coordinates[1];
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");
        $array_images = array();
        $request->file('review_image');
        $array_name = " ";
        if ($request->file('review_image')) {
            for ($i = 0; $i < count($request->file('review_image')); $i++) {
                $main_image = md5(time() . '_' . $request->file('review_image')[$i]->getClientOriginalName()) . '.' . $request->file('review_image')[$i]->getClientOriginalExtension();
                $target_path = "uploads/review/" . $main_image;
                $array_images[] = $main_image;
                move_uploaded_file($request->file('review_image')[$i], $target_path);
            }
            $array_name = implode(",", $array_images);
        }
        // echo "<pre>"; print_r($array_images);die


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
        if ($sql) {
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


        $exites = reviews_rating::where('user_id', $request->userId)->where('osm_id', $request->osmids)->where('is_deleted', 0)->first();
        $PHOTOS = table_review::where('userId', $request->userId)->where('osm_id', $request->osmids)->get();
        $Transmission = array();
        for ($i = 0; $i < count($PHOTOS); $i++) {
            $Transmission[] = array(
                'id' => $PHOTOS[$i]['id'],
                'images' => $PHOTOS[$i]['image_name']
            );
        }
        if ($exites) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'path' => $this->profile_path, 'data' => $exites, 'images' => $Transmission]);
        } else {
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
        $name = trim($request['restaurantname'], '"');
        $array_images = array();
        $request->file('review_image');
        if ($request->file('review_image')) {
            for ($i = 0; $i < count($request->file('review_image')); $i++) {
                $main_image = md5(time() . '_' . $request->file('review_image')[$i]->getClientOriginalName()) . '.' . $request->file('review_image')[$i]->getClientOriginalExtension();
                $target_path = "uploads/review/" . $main_image;
                $array_images[] = $main_image;
                move_uploaded_file($request->file('review_image')[$i], $target_path);
            }
            $array_name = implode(",", $array_images);
        } else {
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
        if ($sql) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Updated Successfully']);
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
        $id = $request['osmids'];
        $userid = $request['userId'];
        $data = array(
            'is_deleted' => 1
        );
        $sql = reviews_rating::where('user_id', $request->userId)->where('osm_id', $request->osmids)->update($data);
        //$last_insert_id = $conn->insert_id;
        if ($sql) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'deleted Successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }

    public function addreviewphotos(Request $request)
    {
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        if (!$request->osmids) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The osmids field is required.']);
        }
        $UID = $request->userId;
        $osm = $request->osmids;
       
        // print_r($_FILES['review_image']['name']);die;

        if ($request->file('review_image')) {
            for ($i = 0; $i < count($request->file('review_image')); $i++) {
                $main_image = md5(time() . '_' . $request->file('review_image')[$i]->getClientOriginalName()) . '.' . $request->file('review_image')[$i]->getClientOriginalExtension();
                $target_path = "uploads/review/" . $main_image;
                // $array_images[] = $main_image;
                move_uploaded_file($request->file('review_image')[$i], $target_path);
                $data = array(
                    'userId' => $request->userId,
                    'osm_id' => $request->osmids,
                    'image_name' => $main_image
                );

                $sql = table_review::insertGetId($data);
            }
            if ($sql) {
                $photos = table_review::where('userId', $UID)->where('osm_id', $osm)->get();
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'updated Successfully', 'path' => $this->profile_path, 'photos' => $photos]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
            // $array_name = implode(",",$array_images);
        }
        else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Select image']);
        }


       
    }


    public function delete_review_photos(Request $request)
    {
        $id = $request->Id;
        $delete = table_review::where('id', $id)->delete();
        if ($delete) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'deleted Successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }


    public function Report_review(Request $request)
    {

        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        if (!$request->osmids) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The osmids field is required.']);
        }
        if (!$request->review_id) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The review_id field is required.']);
        }
        if (!$request->report_msg) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The message field is required.']);
        }
        $data = array(
            'userId' => $request->userId,
            'osm_id' => $request->osmids,
            'review_id' => $request->review_id,
            'report_msg' => $request->report_msg,
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );

        $sql = report_review::insertGetId($data);
        if ($sql) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Reported Successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }

    public function like_review(Request $request)
    {

        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        if (!$request->osmids) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The osmids field is required.']);
        }
        if (!$request->review_id) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The review_id field is required.']);
        }
        // if ($request->like == 1)
        // {
        //     $check = Likes_review::where('user_id', $request->userId)
        //         ->where('osm_id', $request->osmids)
        //         ->first();
        //     if (empty($check))
        //     {
        //         $data = array(
        //             'user_id' => $request->userId,
        //             'feed_id' => $request->feedId,
        //             'created_at' =>  Carbon::now() ,
        //             'updated_at' =>  Carbon::now()
        //         );
        //         $add = Likes_review::insert($data);
        //         if ($add)
        //         {
        //             $getcount = Likes_review::where('feed_id', $request->feedId)
        //                 ->count();
        //                 $data2 = array(
        //                 'status' => (int)$request->status,
        //                 'like_count' => $getcount,
        //                 'is_like_user'=>$this->userlike($request->feedId,$request->userId)
        //                 );
        //             return response()
        //                 ->json(['statusCode' => 1, 'statusMessage' => 'Post Liked Successfully','data' => $data2]);
        //         }
        //         else
        //         {
        //             return response()
        //                 ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong']);
        //         }
        //     }
        //     else
        //     {
        //         return response()
        //             ->json(['statusCode' => 0, 'statusMessage' => 'Post already Liked']);
        //     }
        // }
        // else
        // {
        //     $check = Likes::where('user_id', $request->userId)
        //         ->where('feed_id', $request->feedId)
        //         ->first();
        //     if (empty($check))
        //     {
        //         return response()->json(['statusCode' => 0, 'statusMessage' => 'Post Like required']);
        //     }
        //     else
        //     {
        //         $remove = Likes::where('user_id', $request->userId)
        //             ->where('feed_id', $request->feedId)
        //             ->delete();
        //         if ($remove)
        //         {
        //             $getcount = Likes::where('feed_id', $request->feedId)
        //                 ->count();
        //              $data2 = array(
        //                 'status' =>(int)$request->status,
        //                 'like_count' => $getcount,
        //                 'is_like_user'=>
        //                 );
        //             return response()->json(['statusCode' => 1, 'statusMessage' => 'Post Disliked Successfully','data' => $data2]);
        //         }
        //         else
        //         {
        //             return response()
        //                 ->json(['statusCode' => 0, 'statusMessage' => 'Soemthing went wrong']);
        //         }
        //     }
        // }

        $like = $request->like;
        if ($like == 1) {
            $UNlike = Likes_review::where('userId', $request->userId)->where('review_id', $request->review_id)->where('osm_id', $request->osmids)->get();
            //    print_r($UNlike);die;
            if ($UNlike) {
                $UNlike = Likes_review::where('userId', $request->userId)->where('review_id', $request->review_id)->where('osm_id', $request->osmids)->delete();
                return response()
                    ->json(['statusCode' => 1, 'Like' => 0, 'statusMessage' => 'Unlike']);
            } else {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'already like', 'data' => $UNlike]);
            }
        } else {
            $data = array(
                'userId' => $request->userId,
                'osm_id' => $request->osmids,
                'review_id' => $request->review_id,
                'like' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            );

            $sql = Likes_review::insertGetId($data);
            if ($sql) {
                return response()
                    ->json(['statusCode' => 1, 'Like' => 1, 'statusMessage' => 'Like']);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
        }
    }
}
