<?php

namespace App\Http\Controllers\API;

use App\Claim_orgnization;
use App\Http\Controllers\Controller;
use App\PromotOrganisation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Claimorgnizatioon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $new_company = 'http://10.10.1.133:8000/uploads/new_company/';
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
        if (!$request->osm_id) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The osm_id field is required.']);
        }
        if (!$request->name) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The companyname field is required.']);
        }
        if (!filter_var($request->useremail, FILTER_VALIDATE_EMAIL)) {
            //Valid email!
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Please enter valid email address.']);
        }
        if (!$request->dial_code) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The dial_code field is required.']);
        }

        if (!$request->contact_no) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The Contact field is required.']);
        }
        if (!$request->companytime) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The Time field is required.']);
        }
        if (!$request->organization) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The organization field is required.']);
        }
        if (!$request->description) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The description field is required.']);
        }
        if (!$request->categories) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The categories field is required.']);
        }
        if (!$request->subcategories) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The subcategories field is required.']);
        }
        if (!$request->address) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The address field is required.']);
        }
        if (!filter_var($request->company_email, FILTER_VALIDATE_EMAIL)) {
            //Valid email!
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Please enter valid email address.']);
        }
        if (!$request->user_dial_code) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The dial_code field is required.']);
        }
        if (!$request->company_contact_no) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The company contact no field is required.']);
        }
        if (!$request->website) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The website field is required.']);
        }
        if (!$request->social) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The social field is required.']);
        }
        if (!$request->file('companyimage')) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The company image field is required.']);
        }

        if ($request->file('companyimage')) {
            $destinationPath = public_path() . '/uploads/new_company/';
            $image = $request->file('companyimage');
            $main_image = md5(time() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $main_image);
        } else {
            $main_image = '';
        }
        $data = array(
            'osm_id' => $request->osm_id,
            'companyname' => $request->name,
            'companyemail' => $request->useremail,
            'dial_code' => $request->dial_code,
            'companycontact_no' => $request->contact_no,
            'companytime' => $request->companytime,
            'organization' => $request->organization,
            'description' => $request->description,
            'categories' => $request->categories,
            'subcategories' => $request->subcategories,
            'address' => $request->address,
            'company_email' => $request->company_email,
            'user_dial_code' => $request->user_dial_code,
            'company_contact_no' => $request->company_contact_no,
            'website' => $request->website,
            'social' => $request->social,
            'companyimage' => $main_image,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );

        $new_company = Claim_orgnization::insert($data);

        if ($new_company) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'successfully']);
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
    public function PromotOrganisation(Request $request ){
        if (!$request->osm_id) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The osm_id field is required.']);
        }
        if (!$request->advertisement_name) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The advertisement name field is required.']);
        }
        if (!filter_var($request->advertisement_email, FILTER_VALIDATE_EMAIL)) {
            //Valid email!
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Please enter valid email address.']);
        }
        if (!$request->adv_dial_code) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The dial_code field is required.']);
        }

        if (!$request->advertisement_contact_no) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The Contact field is required.']);
        }

        if (!$request->advertisement_time) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The Time field is required.']);
        }


        $data = array(
            'osm_id' => $request->osm_id,
            'advertisement_name' => $request->advertisement_name,
            'advertisement_email' => $request->advertisement_email,
            'adv_dial_code' => $request->adv_dial_code,
            'advertisement_contact_no' => $request->advertisement_contact_no,
            'advertisement_time' => $request->advertisement_time,  
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );

        $Promot = PromotOrganisation::insert($data);

        if ($Promot) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'successfully']);
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
