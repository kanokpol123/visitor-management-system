<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitors;
use App\Models\cards;
use App\Models\transactions;
use App\Models\vehices;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class add_visitor_controller extends Controller
{
    public function qr_code(Request $req) {
        $id = $req->input('id');
        $data = [ 'id' => $id];
        $cd = new cards();
        $allcd = $cd->show_all_cards();
        foreach ($allcd as $i) {
            if($id == "00".$i->card_id) {
                if($i->card_is_active == 0) {
                    return view('v_add_new_visitor', $data);
                }
                else {
                    return redirect()->back()->with('is_active', 'This id is now active!');
                }
            }
        }
    }
    public function addVis(Request $req)
    {
        $number = $_POST['number'];
        $myinput= $_POST['my-input'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $datepicker = $_POST['datepicker'];
        $religion = $_POST['religion'];
        $address = $_POST['address'];
        $data=array("vis_citizen_number"=>$number,
            "vis_prefix"=>$myinput,
            "vis_first_name"=>$firstname,
            "vis_last_name"=>$lastname,
            "vis_dob"=>$datepicker,
            "vis_religion"=>$religion,
            "vis_address"=>$address);
        DB::table('visitors')->insert($data);
        return response()->json(['success' => true]);
    }
    public function submit(Request $request)
    {
        $companyName = $_POST['company_name'];
        $contactName = $_POST['contact_name'];
        $telephone = $_POST['telephone'];
        $purpose = $_POST['purpose'];
        $carType = $_POST['car_type'];
        $brand = $_POST['brand'];
        $color = $_POST['color'];
        $licensePlate = $_POST['license_plate'];
        $data1=array(
//              ['vehi_id', 'vehi_type', 'vehi_registration', 'vehi_brand', 'vehi_color'];
            "vehi_type"=>$carType,
            "vehi_registration"=>$licensePlate,
            "vehi_brand"=>$brand,
            "vehi_color"=>$color);
        DB::table('vehices')->insert($data1);
        $data2=array(
//            ['trans_id', 'trans_visitor_id', 'trans_vehi_id', 'trans_card_id', 'trans_user_id'
//                , 'trans_company', 'trans_purpose', 'trans_remark' , 'trans_phone_number', 'trans_duration'
//                , 'trans_check_out', 'trans_check_in'];
            "trans_visitor_id"=>$contactName,
            "trans_vehi_id"=>$licensePlate,
            "trans_card_id"=>"002",
            "trans_user_id"=>"1",
            "trans_company"=>$companyName,
            "trans_purpose"=>$purpose,
            "trans_phone_number"=>$telephone,
            "trans_duration"=>"-",
            "trans_check_out"=>"-",
            "trans_check_in"=>"-");
        DB::table('transactions')->insert($data2);
        return response()->json(['message' => 'Data received successfully'], 200);
    }

    public function save_image(Request $request){
        $jsonData = $request->input('visitor');
        $visitorData = json_decode($jsonData, true);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);
            return response()->json(['message' => 'Image saved']);
        } else {
            return response()->json(['message' => 'No image provided']);
        }
    }
}
