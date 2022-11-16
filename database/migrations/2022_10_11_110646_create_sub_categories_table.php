<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('name_fr');
            $table->string('display_name');
            $table->string('display_name_fr');
            $table->text('image')->nullable();
            $table->foreignId('cat_id');
            $table->enum('status', ['1', '0']);
            $table->timestamps();
            $table->softDeletes();
        });

        $data = [
            //Eat Out
            ['name'=>'amenity-bar', 'display_name'=> 'Bar','display_name_fr' =>'', 'image'=>'1667915728_bar.png' ,'cat_id' => 1,'status' => 1],
            ['name'=>'amenity-biergarten', 'display_name'=> 'Biergarten','display_name_fr' =>'', 'image'=>'1667915757_biergarten.png' ,'cat_id' =>1,'status' => 1],
            ['name'=>'amenity-cafe', 'display_name'=> 'Cafe','display_name_fr' =>'', 'image'=>'1667915768_cafe.png' ,'cat_id' => 1,'status' => 1],
            ['name'=>'amenity-fast_food', 'display_name'=> 'Fast Food','display_name_fr' =>'', 'image'=>'1667915784_fast_food.png' ,'cat_id' => 1,'status' => 1],
            ['name'=>'amenity-food_court', 'display_name'=> 'Food Court','display_name_fr' =>'', 'image'=>'1667915796_food_court.png' ,'cat_id' => 1,'status' => 1],
            ['name'=>'amenity-ice_cream', 'display_name'=> 'Ice Cream','display_name_fr' =>'', 'image'=>'1667915813_ice_cream.png' ,'cat_id' => 1,'status' => 1],
            ['name'=>'amenity-pub', 'display_name'=> 'Pub','display_name_fr' =>'', 'image'=>'1667915822_pub.png' ,'cat_id' => 1,'status' => 1],
            ['name'=>'amenity-restaurant', 'display_name'=> 'Restaurant','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 1,'status' => 1],

            //Car service centers
            ['name'=>'amenity-bicycle_parking', 'display_name'=> 'Bicycle Parking','display_name_fr' =>'', 'image'=>'1667915728_bar.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-bicycle_repair_station', 'display_name'=> 'Bicycle Repair Station','display_name_fr' =>'', 'image'=>'1667915757_biergarten.png' ,'cat_id' =>6,'status' => 1],
            ['name'=>'amenity-bicycle_rental', 'display_name'=> 'Bicycle Rental','display_name_fr' =>'', 'image'=>'1667915768_cafe.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-boat_rental', 'display_name'=> 'Boat Rental','display_name_fr' =>'', 'image'=>'1667915784_fast_food.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-boat_sharing', 'display_name'=> 'Boat Sharing','display_name_fr' =>'', 'image'=>'1667915796_food_court.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-bus_station', 'display_name'=> 'Bus Station','display_name_fr' =>'', 'image'=>'1667915813_ice_cream.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-car_rental', 'display_name'=> 'Car Rental','display_name_fr' =>'', 'image'=>'1667915822_pub.png' ,'cat_id' => 6,'status' => 6],
            ['name'=>'amenity-car_sharing', 'display_name'=> 'Car Sharing','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-car_wash', 'display_name'=> 'Car Wash','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-compressed_air', 'display_name'=> 'Compressed Air','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-vehicle_inspection', 'display_name'=> 'Vehcile Inspection','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-charging_station', 'display_name'=> 'Charging Station','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-ferry_terminal', 'display_name'=> 'Ferry Terminal','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-fuel', 'display_name'=> 'Fuel','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-grit_bin', 'display_name'=> 'Grit bin','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-motorcycle_parking', 'display_name'=> 'Motorcycle Parking','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-parking', 'display_name'=> 'Parking','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-parking_entrance	', 'display_name'=> 'Parking Entrance','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-parking_space', 'display_name'=> 'parking Space','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],
            ['name'=>'amenity-taxi	', 'display_name'=> 'taxi','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 6,'status' => 1],

            //Beauty
            ['name'=>'shop-beauty', 'display_name'=> 'Hair Styling saloons','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 7,'status' => 1],
            ['name'=>'shop-cosmetics', 'display_name'=> 'Cosmetology services','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 7,'status' => 1],
            ['name'=>'shop-hairdresser', 'display_name'=> 'Hair Dressers','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 7,'status' => 1],
            ['name'=>'shop-hairdresser_supply', 'display_name'=> 'Hair Dressers Supply','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 7,'status' => 1],
            ['name'=>'shop-optician', 'display_name'=> 'Optician','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 7,'status' => 1],
            ['name'=>'shop-perfumery', 'display_name'=> 'Perfumery','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 7,'status' => 1],
            ['name'=>'shop-tatoo', 'display_name'=> 'tatoo Parlour','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 7,'status' => 1],

            //Entertainment
            ['name'=>'amenity-arts_centre', 'display_name'=> 'Arts Center','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-brothel', 'display_name'=> 'Brothel','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-casino', 'display_name'=> 'Casino','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-cinema', 'display_name'=> 'Cinema','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-community_centre', 'display_name'=> 'Community Center','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-conference_centre', 'display_name'=> 'Conference Center','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-events_venue', 'display_name'=> 'Event Venue','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-fountain', 'display_name'=> 'Fountain','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-gambling', 'display_name'=> 'Gambling','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-love_hotel', 'display_name'=> 'Love Hotels','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-nightclub', 'display_name'=> 'Night Club','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-planetarium', 'display_name'=> 'Planetarium','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-public_bookcase', 'display_name'=> 'Public Bookcase','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-social_centre', 'display_name'=> 'Social Center','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-stripclub', 'display_name'=> 'Strip Club','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 7,'status' => 1],
            ['name'=>'amenity-studio', 'display_name'=> 'Studio','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-swingerclub', 'display_name'=> 'Swinger Club','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],
            ['name'=>'amenity-theatre', 'display_name'=> 'Theaters','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 8,'status' => 1],

            //Healthcare/
            ['name'=>'amenity-pharmacy', 'display_name'=> 'Pharmacies','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],
            ['name'=>'amenity-clinic', 'display_name'=> 'Clinic','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],
            ['name'=>'amenity-dentist', 'display_name'=> 'Dentist','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],
            ['name'=>'amenity-doctors', 'display_name'=> 'Doctors','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],
            ['name'=>'amenity-hospital', 'display_name'=> 'Hospital','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],
            ['name'=>'amenity-nursing_home', 'display_name'=> 'Nursing Home','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],
            ['name'=>'amenity-baby_hatch', 'display_name'=> 'Baby Hatch','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],
            ['name'=>'amenity-social_facility', 'display_name'=> 'Social Facilities','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],
            ['name'=>'amenity-veterinary', 'display_name'=> 'Veterinary','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 9,'status' => 1],

            //Car accessories
            ['name'=>'shop-car', 'display_name'=> 'Motor transport','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-car_repair', 'display_name'=> 'Car Repair','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-car_parts', 'display_name'=> 'Spare Parts','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-caravan', 'display_name'=> 'Caravan','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-jetski', 'display_name'=> 'Jetski','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-motorcycle', 'display_name'=> 'Motorcycle','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-scuba_diving', 'display_name'=> 'Scuba Driving','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-ski', 'display_name'=> 'Ski','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-snowmobile', 'display_name'=> 'Snow Mobile','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-trailer', 'display_name'=> 'Trailers','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],
            ['name'=>'shop-tyres', 'display_name'=> 'Tyres/Wheel rims','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>10,'status' => 1],

            //Education
            ['name'=>'amenity-college', 'display_name'=> 'Colleges','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],
            ['name'=>'amenity-driving_school', 'display_name'=> 'Driving School','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],
            ['name'=>'amenity-kindergarten', 'display_name'=> 'Kindergarten','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],
            ['name'=>'amenity-language_school', 'display_name'=> 'Langauge school','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],
            ['name'=>'amenity-library', 'display_name'=> 'Library','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],
            ['name'=>'amenity-toy_library', 'display_name'=> 'Toy library','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],
            ['name'=>'amenity-music_school', 'display_name'=> 'Music Schools','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],
            ['name'=>'amenity-school', 'display_name'=> 'Schools','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],
            ['name'=>'amenity-university', 'display_name'=> 'University','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>16,'status' => 1],


            ///Government
            ['name'=>'amenity-courthouse', 'display_name'=> 'Courts','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>17,'status' => 1],
            ['name'=>'amenity-fire_station', 'display_name'=> 'Fire Station','display_name_fr' =>'', 'image'=>'767915834_restaurant.png' ,'cat_id' =>17,'status' => 1],
            ['name'=>'amenity-police', 'display_name'=> 'Police','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>17,'status' => 1],
            ['name'=>'amenity-post_box', 'display_name'=> 'Post Box','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>17,'status' => 1],
            ['name'=>'amenity-post_depot', 'display_name'=> 'Post Depot','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>17,'status' => 1],
            ['name'=>'amenity-post_office', 'display_name'=> 'Post Office','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>17,'status' => 1],
            ['name'=>'amenity-prison', 'display_name'=> 'Prison','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>17,'status' => 1],
            ['name'=>'amenity-ranger_station', 'display_name'=> 'Ranger Station','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>17,'status' => 1],
            ['name'=>'amenity-townhall', 'display_name'=> 'Town Hall','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>17,'status' => 1],

            //Others
            ['name'=>'amenity-animal_boarding', 'display_name'=> 'Animal Boarding','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-animal_breeding', 'display_name'=> 'Animal Breeding','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-animal_shelter', 'display_name'=> 'Animal Shelter','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-baking_oven', 'display_name'=> 'Baking Oven','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-childcare', 'display_name'=> 'Child Care','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-clock', 'display_name'=> 'Clock','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-crematorium', 'display_name'=> 'Crematorium','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-dive_centre', 'display_name'=> 'Dive Center','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-funeral_hall', 'display_name'=> 'Funeral Hall','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-grave_yard', 'display_name'=> 'Grave yard','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-hunting_stand', 'display_name'=> 'Hunting Stand','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-internet_cafe', 'display_name'=> 'Internet Cafe','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-kitchen', 'display_name'=> 'Kitchen','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-kneipp_water_cure', 'display_name'=> 'Kneipp Water Cure','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-lounger', 'display_name'=> 'Lounger','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-marketplace', 'display_name'=> 'Market Place','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-monastery', 'display_name'=> 'Monastery','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-photo_booth', 'display_name'=> 'Photo Booth','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-place_of_mourning', 'display_name'=> 'Place of mourning','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-place_of_worship', 'display_name'=> 'Place of worship','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-public_bath', 'display_name'=> 'Public bath','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-refugee_site', 'display_name'=> 'Refugee site','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],
            ['name'=>'amenity-vending_machine', 'display_name'=> 'Vending Machine','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>21,'status' => 1],

            //Repair, construction
            ['name'=>'shop-craft', 'display_name'=> 'Carfts','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>18,'status' => 1],
            ['name'=>'shop-doityourself', 'display_name'=> 'Do It Yourself','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>18,'status' => 1],
            ['name'=>'shop-bathroom_furnishing', 'display_name'=> 'Bathroom Furnishing','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>18,'status' => 1],
            ['name'=>'shop-bathroom_furnishing', 'display_name'=> 'Bathroom Furnishing','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>18,'status' => 1],
            ['name'=>'shop-fabric', 'display_name'=> 'Fabric','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>18,'status' => 1],
            ['name'=>'shop-bathroom_furnishing', 'display_name'=> 'Bathroom Furnishing','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>18,'status' => 1],

            //B2B services
            ['name'=>'shop-copyshop', 'display_name'=> 'Printing','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>20,'status' => 1],

            //Industrial goods
            ['name'=>'shop-fuel', 'display_name'=> 'Fuel','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>19,'status' => 1],
            ['name'=>'shop-gift', 'display_name'=> 'Gift Wrapper','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' =>19,'status' => 1],

            // goods category
            ['name'=>'shop-supermarket', 'display_name'=> 'Supermarket','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-department_store', 'display_name'=> 'Department store','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-general', 'display_name'=> 'General','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-mall', 'display_name'=> 'Mall','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-baby_goods', 'display_name'=> 'Baby goods','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-sports', 'display_name'=> 'Sports','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-tiles', 'display_name'=> 'Tiles','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-curtain', 'display_name'=> 'Curtain','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-bed', 'display_name'=> 'Bed','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-stationery', 'display_name'=> 'Stationery','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-books', 'display_name'=> 'Books','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-gift', 'display_name'=> 'Gift','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-appliance', 'display_name'=> 'Appliance','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],
            ['name'=>'shop-pet', 'display_name'=> 'Pet','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 11,'status' => 1],

            // services category
            ['name'=>'shop-photo', 'display_name'=> 'Photo','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-locksmith', 'display_name'=> 'Locksmith','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-watches', 'display_name'=> 'Watches','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-laundry', 'display_name'=> 'Laundry','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-ticket', 'display_name'=> 'Ticket','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-motorcycle', 'display_name'=> 'Motorcycle','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-car', 'display_name'=> 'Car','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-pawnbroker', 'display_name'=> 'Pawnbroker','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-second_hand', 'display_name'=> 'Second hand','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-money_lender', 'display_name'=> 'Money lender','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-insurance', 'display_name'=> 'Insurance','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],
            ['name'=>'shop-vacant', 'display_name'=> 'Vacant','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 12,'status' => 1],

            //Tourism-tourism
            ['name'=>'tourism-hostel', 'display_name'=> 'Hostel','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 13,'status' => 1],
            ['name'=>'tourism-guest_house', 'display_name'=> 'Guest house','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 13,'status' => 1],
            ['name'=>'shop-travel_agency', 'display_name'=> 'Travel agency','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 13,'status' => 1],
            ['name'=>'tourism-hotel', 'display_name'=> 'Hotel','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 13,'status' => 1],
            ['name'=>'tourism-motel', 'display_name'=> 'Motel','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 13,'status' => 1],
            ['name'=>'tourism-apartment', 'display_name'=> 'Apartment','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 13,'status' => 1],
            ['name'=>'tourism-chalet', 'display_name'=> 'Chalet','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 13,'status' => 1],
            ['name'=>'tourism-caravan_site', 'display_name'=> 'Caravan site','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 13,'status' => 1],


            //Specialty stores
            ['name'=>'shop-furniture', 'display_name'=> 'Furniture','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-kitchen', 'display_name'=> 'Kitchen','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-interior_decoration', 'display_name'=> 'Interior decoration','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-bathroom_furnishing', 'display_name'=> 'Bathroom furnishing','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-florist', 'display_name'=> 'Florist','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-garden_centre', 'display_name'=> 'Garden centre','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-clothes', 'display_name'=> 'Clothes','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-fabric', 'display_name'=> 'Fabric','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-shoes', 'display_name'=> 'Shoes','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],
            ['name'=>'shop-jewelry', 'display_name'=> 'Jewellery','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 14,'status' => 1],


            // Groceries
            ['name'=>'shop-confectionery', 'display_name'=> 'Confectionery','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],
            ['name'=>'shop-supermarket', 'display_name'=> 'Supermarket','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],
            ['name'=>'shop-pastry', 'display_name'=> 'Pastry','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],
            ['name'=>'shop-kiosk', 'display_name'=> 'Kiosk','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],
            ['name'=>'shop-seafood', 'display_name'=> 'Seafood','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],
            ['name'=>'shop-butcher', 'display_name'=> 'Butcher','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],
            ['name'=>'shop-health food', 'display_name'=> 'health food','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],
            ['name'=>'shop-beverages', 'display_name'=> 'beverages','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],
            ['name'=>'shop-beverages', 'display_name'=> 'beverages','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 2,'status' => 1],


            // Sports
            ['name'=>'shop-sports', 'display_name'=> 'Sports','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 15,'status' => 1],
            ['name'=>'shop-swimming_pool', 'display_name'=> 'Swimming_pool','display_name_fr' =>'', 'image'=>'1667915834_restaurant.png' ,'cat_id' => 15,'status' => 1],


            //...
        ];

        DB::table('sub_categories')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
