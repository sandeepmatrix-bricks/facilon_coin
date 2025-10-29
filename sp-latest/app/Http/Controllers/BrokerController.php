<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;

class BrokerController extends Controller
{
    public function service_provider_registration_step1_show(Request $request, $provider_id)
    {
       
        $status = $request->query('status'); // or $request->get('status')
    
         $sp_email_address = Crypt::decrypt($status);
         
        // echo $sp_email_address;exit;
        //$sp_email_address = 51;
        // $fetch_scheduling_detail = DB::table('service_provider_details')
        //                     ->where('id',$sp_email_address)
        //                     ->first();
        $fetch_scheduling_details = DB::table('service_providers_scheduling')
                            ->where('compliance_email','=',$sp_email_address)
                            ->first();
        return view('service-provider.register',compact('provider_id','fetch_scheduling_details','status'));
    }
    public function service_provider_registration_step1_submit(Request $request)
    {
        
        $encrypt_email = $request->input('unique_provider_id');
        
        $sp_email_address = Crypt::decrypt($encrypt_email);
        //echo $encrypt_email;exit;
        
        
        
        $fetch_scheduling_details = DB::table('service_providers_scheduling')
                            ->where('compliance_email',$sp_email_address)
                            ->first();
        $key_person_name = $fetch_scheduling_details->compliance_name;
        $key_person_email = $fetch_scheduling_details->compliance_email;
        
        
        $provider_id = $request->input('provider_id');
        $provider_unique_number = 'FSP'.date('Ymd').rand(1000,10000);
        $status = 2;
        if($provider_id == 1 || $provider_id == 2 || $provider_id == 3)
        {
            
            // $this->validate($request,[
            // 'full_name'=>'required',
            // 'corporate_office_address'=>'required',
            // 'tel_no'=>'required',
            // 'fax_no'=>'required',
            // 'website'=>'required',
            // 'cin_no'=>'required',
            // 'nse_sebi_reg_no'=>'required',
            // 'nse_f_and_o_sebi_reg_no'=>'required',
            
            // ]);
           
        
            $provider_id = $request->input('provider_id');
            $full_name = $request->input('full_name');
            $corporate_office_address = $request->input('corporate_office_address');
            $corporate_office_address_line2 = $request->input('corporate_office_address_line2');
            $tel_no = $request->input('tel_no');
            $fax_no = $request->input('fax_no');
            $website = $request->input('website');
            $cin_no = $request->input('cin_no');
            $nse_sebi_reg_no = $request->input('nse_sebi_reg_no');
            $nse_f_and_o_sebi_reg_no = $request->input('nse_f_and_o_sebi_reg_no');
            $bse_sebi_reg_no = $request->input('bse_sebi_reg_no');
            $bse_f_and_o_sebi_reg_no = $request->input('bse_f_and_o_sebi_reg_no');
            $sp_pan_no = $request->input('sp_pan_no');
            $sp_gst_no = $request->input('sp_gst_no');
            
            $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$full_name,'corp_office_address'=>$corporate_office_address,'tel_no'=>$tel_no,
            'fax_no'=>$fax_no,'website'=>$website,'cin_no'=>$cin_no,'nse_sebi_reg'=>$nse_sebi_reg_no,'nse_f_o_sebi_reg'=>$nse_f_and_o_sebi_reg_no,
            'status'=>$status);
            
           
            $insert_values = DB::table('service_provider_details')
                        ->insertGetId($values);
            
            $get_sp_det = DB::table('service_provider_details')
                        ->where('id','=',$insert_values)
                        ->first();
                        
            $values1 = array('unique_code'=>$get_sp_det->unique_id,'compliance_office_address'=>$corporate_office_address,'compliance_office_address2'=>$corporate_office_address_line2,
            'compliance_phone_no'=>$tel_no,'cin_no'=>$cin_no,'pan_no'=>$sp_pan_no,'gst_no'=>$sp_gst_no,'website'=>$website,'nse_sebi_reg_no'=>$nse_sebi_reg_no,
            'nse_f_and_o_sebi_reg_no'=>$nse_f_and_o_sebi_reg_no,'bse_sebi_reg_no'=>$bse_sebi_reg_no,'bse_f_and_o_sebi_reg_no'=>$bse_f_and_o_sebi_reg_no);
            
                        
            $update_scheduling = DB::table('service_providers_scheduling')
                                ->where('compliance_email',$sp_email_address)
                                ->limit(1)
                                ->update($values1);
            $unique_codes = Crypt::encrypt($key_person_email);
        
        
            return redirect()->route('service_provider_register_step2_show',['unique_code'=>$unique_codes]);
        }else if($provider_id == 4)
        {
            $this->validate($request,[
            'bank_name'=>'required',
            'contact_person_name'=>'required',
            'address_line1'=>'required',
            'address_line2'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'pin_zip_code'=>'required',
            'email_id'=>'required',
            'phone_no'=>'required',
            'contact_phone_no'=>'required',
            ]);
            
            $provider_id = $request->input('provider_id');
            $bank_name = $request->input('bank_name');
            $contact_person_name = $request->input('contact_person_name');
            $address_line1 = $request->input('address_line1');
            $address_line2 = $request->input('address_line2');
            $country = NULL;
            $state = NULL;
            $city = NULL;
            $pin_zip_code = $request->input('pin_zip_code');
            $email_id = $request->input('email_id');
            $phone_no = $request->input('phone_no');
            $contact_phone_no = $request->input('contact_phone_no');
            
            $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$bank_name,'contact_person_name'=>$contact_person_name,'address_line1'=>$address_line1,'address_line2'=>$address_line2,
            'country'=>$country,'state'=>$state,'city'=>$city,'pin_zip_code'=>$pin_zip_code,'email_id'=>$email_id,'tel_no'=>$phone_no,'contact_phone_no'=>$contact_phone_no,'status'=>$status);
            
            $insert_values = DB::table('service_provider_details')
                        ->insert($values);
            $unique_codes = Crypt::encrypt($provider_unique_number);
        
        
            return redirect()->route('service_provider_register_thank_you_show');
        }else{
            
            $natural_person = $request->input('natural_person');
            
            if($natural_person == 'Natural Person')
            {
                $this->validate($request,[
                'full_name'=>'required',
                'email_id'=>'required',
                'mobile_no'=>'required',
                'address_line1'=>'required',
                'address_line2'=>'required',
                'country_code'=>'required',
                'state'=>'required',
                'city'=>'required',
                'pin_zip_code'=>'required',
                'overseas_regulator'=>'required',
                'license_no'=>'required',
                'license_valid'=>'required',
                'sebi_reg_no'=>'required',
                'sebi_valid'=>'required',
                
                ]);
                
                $provider_id = $request->input('provider_id');
                $full_name = $request->input('full_name');
                $email_id = $request->input('email_id');
                $phone_no = $request->input('mobile_no');
                $address_line1 = $request->input('address_line1');
                $address_line2 = $request->input('address_line2');
                $country = $request->input('country_code');
                $state = $request->input('state');
                $city = $request->input('city');
                $pin_zip_code = $request->input('pin_zip_code');
                $overseas_regulator = $request->input('overseas_regulator');
                $license_no = $request->input('license_no');
                $license_valid = $request->input('license_valid');
                $sebi_reg_no = $request->input('sebi_reg_no');
                $sebi_valid = $request->input('sebi_valid');
                
                $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$full_name,'email_id'=>$email_id,'tel_no'=>$phone_no,
                'address_line1'=>$address_line1,'address_line2'=>$address_line2,'country'=>NULL,'state'=>NULL,'city'=>NULL,'pin_zip_code'=>$pin_zip_code,
                'overseas_regulator'=>$overseas_regulator,'license_no'=>$license_no,'license_valid'=>$license_valid,'sebi_reg_no'=>$sebi_reg_no,'sebi_valid'=>$sebi_valid,'register_as'=>$natural_person);
            }else{
                $this->validate($request,[
                'introducer_name'=>'required',
                'introducer_phone'=>'required',
                'contact_person_name'=>'required',
                'contact_mobile_no'=>'required',
                'contact_email_id'=>'required',
                'contact_designation'=>'required',
                'address_line1'=>'required',
                'address_line2'=>'required',
                'country_code'=>'required',
                'state'=>'required',
                'city'=>'required',
                'pin_zip_code'=>'required',
                'overseas_regulator'=>'required',
                'license_no'=>'required',
                'license_valid'=>'required',
                'sebi_reg_no'=>'required',
                'sebi_valid'=>'required',
                ]);
                
                $provider_id = $request->input('provider_id');
                $full_name = $request->input('introducer_name');
                $phone_no = $request->input('introducer_phone');
                $contact_person_name = $request->input('contact_person_name');
                $contact_mobile_no = $request->input('contact_mobile_no');
                $contact_email_id = $request->input('contact_email_id');
                $contact_designation = $request->input('contact_designation');
                $address_line1 = $request->input('address_line1');
                $address_line2 = $request->input('address_line2');
                $country = $request->input('country_code');
                $state = $request->input('state');
                $city = $request->input('city');
                $pin_zip_code = $request->input('pin_zip_code');
                $overseas_regulator = $request->input('overseas_regulator');
                $license_no = $request->input('license_no');
                $license_valid = $request->input('license_valid');
                $sebi_reg_no = $request->input('sebi_reg_no');
                $sebi_valid = $request->input('sebi_valid');
                
                $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$full_name,'tel_no'=>$phone_no,
                'contact_person_name'=>$contact_person_name,'contact_phone_no'=>$contact_mobile_no,'email_id'=>$contact_email_id,
                'address_line1'=>$address_line1,'address_line2'=>$address_line2,'country'=>$country,'state'=>$state,'city'=>$city,'pin_zip_code'=>$pin_zip_code,
                'overseas_regulator'=>$overseas_regulator,'license_no'=>$license_no,'license_valid'=>$license_valid,'sebi_reg_no'=>$sebi_reg_no,'sebi_valid'=>$sebi_valid,'register_as'=>$natural_person);
            }
            
            $insert_values = DB::table('service_provider_details')
                        ->insert($values);
            $unique_codes = Crypt::encrypt($provider_unique_number);
        
        
            return redirect()->route('service_provider_register_thank_you_show'); 
        }
        
        
        
    }
    
    public function service_provider_register_step2_show($unique_codes)
    {
         $unique_code = Crypt::decrypt($unique_codes);
        //$unique_code = $unique_codes;
        //echo $unique_code;exit;
        $fetch_sp_details = DB::table('service_providers_scheduling')
                            ->where('compliance_email','=',$unique_code)
                            ->first();
        return view('service-provider.register-step2',compact('unique_codes','fetch_sp_details'));
    }
    
    public function service_provider_register_step2_submit(Request $request)
    {
        $this->validate($request,[
            'primary1_name'=>'required',
            'primary1_phone'=>'required',
            'primary1_email'=>'required',
            
            
        ]);
        
        $unique_code_sp = $request->input('unique_code');
        $primary1_name = $request->input('primary1_name');
        $primary1_phone = $request->input('primary1_phone');
        $primary1_email = $request->input('primary1_email');
        
        $unique_id = Crypt::decrypt($unique_code_sp);
        
        
        $values = array('primary1_name'=>$primary1_name,'primary1_phone'=>$primary1_phone,'primary1_email'=>$primary1_email);
        
        $values2 = array('primary_contact_name1'=>$primary1_name,'primary_contact_phone1'=>$primary1_phone,'primary_contact_email1'=>$primary1_email);
        
        $fetch_un_code = DB::table('service_providers_scheduling')
                        ->where('compliance_email','=',$unique_id)
                        ->first();
                        
        $insert_values = DB::table('service_provider_details')
                        ->where('unique_id','=',$fetch_un_code->unique_code)
                        ->limit(1)
                        ->update($values);
                        
        $update_scheduling = DB::table('service_providers_scheduling')
                            ->where('compliance_email','=',$unique_id)
                            ->limit(1)
                            ->update($values2);
        
        $unique_codes = Crypt::encrypt($unique_id);
        
        
        return redirect()->route('service_provider_step3_show',['unique_code'=>$unique_codes]);
    }
    
    public function service_provider_step3_show($unique_codes)
    {
        $unique_code = Crypt::decrypt($unique_codes);
        //echo $unique_code;
        $fetch_sp_details = DB::table('service_providers_scheduling')
                            ->where('compliance_email','=',$unique_code)
                            ->first();
        return view('service-provider.register-step3',compact('unique_codes','fetch_sp_details'));
    }
    public function service_provider_step3_submit(Request $request)
    {
    //   $this->validate($request,[
    //         'escalation1_name'=>'required',
    //         'escalation1_phone'=>'required',
    //         'escalation1_email'=>'required',
            
    //         'confirmation' => 'required',
    //         'agree_terms' => 'required'
            
            
    //     ]);
    
        $service_provider_email_main = $request->input('unique_code');
        
        $unique_id = Crypt::decrypt($service_provider_email_main);
        $escalation1_name = $request->input('escalation1_name');
        $escalation1_phone = $request->input('escalation1_phone');
        $escalation1_email = $request->input('escalation1_email');
        
        //echo $unique_id;exit;
        
        $get_un_code = DB::table('service_providers_scheduling')
                        ->where('compliance_email','=',$unique_id)
                        ->first();
        
        $confirmation = 1;
        $agree_terms = 1;
        
        $values = array('escalation1_name'=>$escalation1_name,'escalation1_phone'=>$escalation1_phone,'escalation1_email'=>$escalation1_email,
        'confirmation'=>$confirmation);
        
        $values2 = array('escalation_contact_name1'=>$escalation1_name,'escalation_contact_phone1'=>$escalation1_phone,'escalation_contact_email1'=>$escalation1_email);
        
        $insert_values = DB::table('service_provider_details')
                        ->where('unique_id','=',$get_un_code->unique_code)
                        ->limit(1)
                        ->update($values);  
       // return redirect()->route('service_provider_register_thank_you_show');
    
    //echo $unique_id;exit;
    $update_scheduling = DB::table('service_providers_scheduling')
                        ->where('compliance_email','=',$unique_id)
                        ->limit(1)
                        ->update($values2);
     
      $fetch_provider_details = DB::table('service_provider_details')
                                ->where('unique_id','=',$get_un_code->unique_code)
                                ->first();
       
      $contact_firstname = $fetch_provider_details->primary1_name;  
      $contact_phone = $fetch_provider_details->primary1_phone;
      $contact_email = $fetch_provider_details->primary1_email;
       
      $service_provider_name = $fetch_provider_details->full_name;
      $service_provider_phone = $fetch_provider_details->tel_no;
      $service_provider_email = $fetch_provider_details->primary1_email;
      $service_provider_nse_sebi_reg = $fetch_provider_details->nse_sebi_reg;
      $service_provider_nse_f_o_sebi_reg = $fetch_provider_details->nse_f_o_sebi_reg;
      $service_provider_fax_no = $fetch_provider_details->fax_no;
      $service_provider_website = $fetch_provider_details->website;
      $service_provider_cin_no = $fetch_provider_details->cin_no;
       
      $service_provider_unique_id = $fetch_provider_details->unique_id;
      
//       $curl = curl_init();

//         curl_setopt_array($curl, array(
//             CURLOPT_URL => 'https://login.microsoftonline.com/82bfe941-8424-460e-b024-540394d1a92e/oauth2/v2.0/token',
//             CURLOPT_RETURNTRANSFER => true,
//             CURLOPT_ENCODING => '',
//             CURLOPT_MAXREDIRS => 10,
//             CURLOPT_TIMEOUT => 0,
//             CURLOPT_FOLLOWLOCATION => true,
//             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//             CURLOPT_CUSTOMREQUEST => 'POST',  // Change to POST
//             CURLOPT_POSTFIELDS => 'grant_type=client_credentials&client_secret=IwW8Q~wokTzK.SUThhEBp6t7Wj1iFAnNfgC9obv8&client_id=a684dded-7896-4f95-8628-813f1a2e2f6c&scope=https%3A%2F%2Ffportalvapt.crm8.dynamics.com%2F.default',
//             CURLOPT_HTTPHEADER => array(
//                 'Content-Type: application/x-www-form-urlencoded'
//             ),
//         ));
    
//         $response = curl_exec($curl);
//         curl_close($curl);


// // Check if the response contains the access token
// $data = json_decode($response, true);
// if (isset($data['access_token'])) {
//     $accessToken = $data['access_token'];
// } else {
//     die('Error: Unable to retrieve access token');
// }
        
//     // Create a Contact in Dynamics CRM
    
//     //echo $accessToken;exit;
// $curl1 = curl_init();

// curl_setopt_array($curl1, array(
//   CURLOPT_URL => 'https://fportalvapt.crm8.dynamics.com/api/data/v9.2/contacts',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>json_encode(array(
//     'firstname' => $service_provider_name,
//     'lastname' => '',
//     'emailaddress1' => $service_provider_email,
//     'mobilephone' => $service_provider_phone
//   )),
//   CURLOPT_HTTPHEADER => array(
//     'Authorization: Bearer '.$accessToken,
//     'Content-Type: application/json',
//     'OData-Version: 4.0',
//     'OData-MaxVersion: 4.0',
//     'Accept: application/json',
//     'Prefer: return=representation',
//     'Cookie: ARRAffinity=9e9a16df6ef41a9536c363db431201f71c7a46908dd6fa4952d119020dc7178415134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD6B5F7A8622700000002027080967; ReqClientId=015b7421-082e-4763-994e-da52f4886d42; last_commit_time=2025-03-25 11:17:26Z; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
//   ),
// ));

// $response1 = curl_exec($curl1);

// curl_close($curl1);

// $data = json_decode($response1, true);
// $contact_id = $data['contactid'];

// $values1 = array('contact_id'=>$contact_id);
// $update_value = DB::table('service_provider_details')
//                         ->where('unique_id','=',$unique_id)
//                         ->limit(1)
//                         ->update($values1);
// // echo $contact_id; echo '<br><br><br>';
// // echo $response1; echo '<br><br><br>';

// //Account entry
// $curl2 = curl_init();

// curl_setopt_array($curl2, array(
//   CURLOPT_URL => 'https://fportalvapt.crm8.dynamics.com/api/data/v9.2/accounts',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>json_encode(array(
//     'name' => $service_provider_name,
//     'telephone1' => $service_provider_phone,
//     'emailaddress1' => $service_provider_email,
//     'ss_nsesebiregnno' =>$service_provider_nse_sebi_reg,
//     'ss_nsefosebiregnno'=>$service_provider_nse_f_o_sebi_reg,
//     'fax'=>$service_provider_fax_no,
//     'websiteurl'=>$service_provider_website,
//     'ss_cinnumber'=>$service_provider_cin_no,
//     'customertypecode'=>4
    
//   )),

//   CURLOPT_HTTPHEADER => array(
//     'Authorization: Bearer '.$accessToken,
//     'Content-Type: application/json',
//     'OData-Version: 4.0',
//     'OData-MaxVersion: 4.0',
//     'Accept: application/json',
//     'Prefer: return=representation',
//     'Cookie: ARRAffinity=9e9a16df6ef41a9536c363db431201f71c7a46908dd6fa4952d119020dc7178415134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD6B5F7A8622700000002027080967; ReqClientId=015b7421-082e-4763-994e-da52f4886d42; last_commit_time=2025-03-25 11:17:26Z; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
//   ),
// ));

// $response2 = curl_exec($curl2);

// curl_close($curl2);

// $data2 = json_decode($response2, true);
// $account_id = $data2['accountid'];

// $values2 = array('account_id'=>$account_id);
// $update_value1 = DB::table('service_provider_details')
//                         ->where('unique_id','=',$unique_id)
//                         ->limit(1)
//                         ->update($values2);
// // echo $broker_id; echo '<br><br><br>';
// // echo $response2;
// // echo '<br><br><br>';
// $curl3 = curl_init();

// curl_setopt_array($curl3, array(
//   CURLOPT_URL => 'https://fportalvapt.crm8.dynamics.com/api/data/v9.2/contacts('.$contact_id.')',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'PATCH',
//   CURLOPT_POSTFIELDS =>'{
//     "ss_EntityName@odata.bind": "https://fportalvapt.crm8.dynamics.com/api/data/v9.2/accounts('.$account_id.')"
// }',
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/json',
//     'Authorization: Bearer '.$accessToken,
//     'Cookie: ARRAffinity=9e9a16df6ef41a9536c363db431201f71c7a46908dd6fa4952d119020dc7178415134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD6DEE381426A30000000089039848; ReqClientId=015b7421-082e-4763-994e-da52f4886d42; last_commit_time=2025-03-28 11:20:36Z; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
//   ),
// ));

// $response3 = curl_exec($curl3);

// curl_close($curl3);
// //echo $response;

// //Broker Entry
// $curl4 = curl_init();

// curl_setopt_array($curl4, array(
//   CURLOPT_URL => 'https://fportalvapt.crm8.dynamics.com/api/data/v9.2/ss_brokers',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>'{
//     "ss_name":"'.$service_provider_unique_id.'",
//     "ss_registeredwithfacilon":1,
//     "ss_NameoftheFirm@odata.bind": "https://fportalvapt.crm8.dynamics.com/api/data/v9.2/accounts('.$account_id.')"
// }',


//   CURLOPT_HTTPHEADER => array(
//     'Authorization: Bearer '.$accessToken,
//     'Content-Type: application/json',
//     'OData-Version: 4.0',
//     'OData-MaxVersion: 4.0',
//     'Accept: application/json',
//     'Prefer: return=representation',
//     'Cookie: ReqClientId=015b7421-082e-4763-994e-da52f4886d42; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
//   ),
// ));


// $response4 = curl_exec($curl4);

// curl_close($curl4);
// $data3 = json_decode($response4, true);
// $broker_id = $data3['ss_brokerid'];
// $values3 = array('broker_id'=>$broker_id);
// $update_value1 = DB::table('service_provider_details')
//                         ->where('unique_id','=',$unique_id)
//                         ->limit(1)
//                         ->update($values3);




//end broker entry
//return redirect()->route('service_provider_online_sow_service_agreement_show');
return redirect()->route('service_provider_online_sow_service_agreement_show', ['service_provider_email' => $service_provider_email_main]);
$key_person_name = $request->input('key_person_name');
$key_person_email = $request->input('key_person_email');


//exit;
    }
    
    public function service_provider_register_thank_you_show()
    {
       return view('register-thank-you'); 
    }
    
    public function broker_registration_step1_show()
    {
        return view('broker.register');
    }
    public function broker_registration_step1_submit(Request $request)
    {
        //echo 'welcome';exit;
        $broker_unique_number = 'BR'.date('Ymd').rand(1000,10000);
        $status = 2;

        $this->validate($request,[
            'full_name'=>'required',
            'corporate_office_address'=>'required',
            'tel_no'=>'required',
            'fax_no'=>'required',
            'website'=>'required',
            'cin_no'=>'required',
            'nse_sebi_reg_no'=>'required',
            'nse_f_and_o_sebi_reg_no'=>'required',
            'bse_sebi_reg_no'=>'required',
            'bse_f_and_o_sebi_reg_no'=>'required',
        ]);
        
        $full_name = $request->input('full_name');
        $corporate_office_address = $request->input('corporate_office_address');
        $tel_no = $request->input('tel_no');
        $fax_no = $request->input('fax_no');
        $website = $request->input('website');
        $cin_no = $request->input('cin_no');
        $nse_sebi_reg_no = $request->input('nse_sebi_reg_no');
        $nse_f_and_o_sebi_reg_no = $request->input('nse_f_and_o_sebi_reg_no');
        $bse_sebi_reg_no = $request->input('bse_sebi_reg_no');
        $bse_f_and_o_sebi_reg_no = $request->input('bse_f_and_o_sebi_reg_no');
        
        $values = array('unique_id'=>$broker_unique_number,'full_name'=>$full_name,'corp_office_address'=>$corporate_office_address,'tel_no'=>$tel_no,
        'fax_no'=>$fax_no,'website'=>$website,'cin_no'=>$cin_no,'nse_sebi_reg'=>$nse_sebi_reg_no,'nse_f_o_sebi_reg'=>$nse_f_and_o_sebi_reg_no,
        'bse_sebi_reg'=>$bse_sebi_reg_no,'bse_f_o_sebi_reg'=>$bse_f_and_o_sebi_reg_no,'status'=>$status);
        
        //print_r($values);exit;
        
        $insert_values = DB::table('service_provider_details')
                        ->insert($values);
        $unique_codes = Crypt::encrypt($broker_unique_number);
        
        
        return redirect()->route('broker_register_step2_show',['unique_code'=>$unique_codes]);
    }
    
    public function broker_register_step2_show($unique_codes)
    {
        $unique_code = Crypt::decrypt($unique_codes);
        return view('broker.register-step2',compact('unique_code')); 
    }
    
    public function broker_register_step2_submit(Request $request)
    {
       $this->validate($request,[
            'primary1_name'=>'required',
            'primary1_phone'=>'required',
            'primary1_email'=>'required',
            'primary2_name'=>'required',
            'primary2_phone'=>'required',
            'primary2_email'=>'required',
            'primary3_name'=>'required',
            'primary3_phone'=>'required',
            'primary3_email'=>'required',
            
        ]);
        
        $unique_id = $request->input('unique_code');
        $primary1_name = $request->input('primary1_name');
        $primary1_phone = $request->input('primary1_phone');
        $primary1_email = $request->input('primary1_email');
        $primary2_name = $request->input('primary2_name');
        $primary2_phone = $request->input('primary2_phone');
        $primary2_email = $request->input('primary2_email');
        $primary3_name = $request->input('primary3_name');
        $primary3_phone = $request->input('primary3_phone');
        $primary3_email = $request->input('primary3_email');
        
        $values = array('primary1_name'=>$primary1_name,'primary1_phone'=>$primary1_phone,'primary1_email'=>$primary1_email,
        'primary2_name'=>$primary2_name,'primary2_phone'=>$primary2_phone,'primary2_email'=>$primary2_email,
        'primary3_name'=>$primary3_name,'primary3_phone'=>$primary3_phone,'primary3_email'=>$primary3_email);
        
        $insert_values = DB::table('service_provider_details')
                        ->where('unique_id','=',$unique_id)
                        ->limit(1)
                        ->update($values);
        $unique_codes = Crypt::encrypt($unique_id);
        
        
        return redirect()->route('broker_register_step3_show',['unique_code'=>$unique_codes]);
    }
    
    public function broker_register_step3_show($unique_codes)
    {
        $unique_code = Crypt::decrypt($unique_codes);
        return view('broker.register-step3',compact('unique_code'));
    }
    public function broker_register_step3_submit(Request $request)
    {
      $this->validate($request,[
            'escalation1_name'=>'required',
            'escalation1_phone'=>'required',
            'escalation1_email'=>'required',
            'escalation2_name'=>'required',
            'escalation2_phone'=>'required',
            'escalation2_email'=>'required',
            'confirmation' => 'required',
            'agree_terms' => 'required'
            
            
        ]);
        
        $unique_id = $request->input('unique_code');
        $escalation1_name = $request->input('escalation1_name');
        $escalation1_phone = $request->input('escalation1_phone');
        $escalation1_email = $request->input('escalation1_email');
        $escalation2_name = $request->input('escalation2_name');
        $escalation2_phone = $request->input('escalation2_phone');
        $escalation2_email = $request->input('escalation2_email');
        $confirmation = 1;
        $agree_terms = 1;
        
        $values = array('escalation1_name'=>$escalation1_name,'escalation1_phone'=>$escalation1_phone,'escalation1_email'=>$escalation1_email,
        'escalation2_name'=>$escalation2_name,'escalation2_phone'=>$escalation2_phone,'escalation2_email'=>$escalation2_email,
        'confirmation'=>$confirmation,'agree_terms'=>$agree_terms);
        
        $insert_values = DB::table('service_provider_details')
                        ->where('unique_id','=',$unique_id)
                        ->limit(1)
                        ->update($values);  
        return redirect()->route('broker_register_thank_you_show');
    }
    public function broker_register_thank_you_show()
    {
        return view('register-thank-you');
    }
    //  Home
    public function index()
    {
        $fetch_banner_details   = DB::table('banner')
                                ->where('id','=','1')
                                ->first();
                                
                                
        $list_key_points    = DB::table('key_points')
                            ->where('status','=','1')
                            ->get();
        
        return view('welcome', compact('fetch_banner_details', 'list_key_points'));
    }
        
        
    //  Custody
    public function custody()
    {
        $fetch_custody_basic_details    = DB::table('custody_basic_details')
                                        ->where('id','=','1')
                                        ->first();

        $list_custody_services  = DB::table('custody_services')
                                ->where('status','=','1')
                                ->get();
        
        return view('custody', compact('fetch_custody_basic_details', 'list_custody_services'));
    }


    //  Derivatives Trading
    public function derivatives_trading()
    {
        $fetch_derivatives_trading_basic_details    = DB::table('derivatives_trading_basic_details')
                                                    ->where('id','=','1')
                                                    ->first();

        $list_types_of_derivatives  = DB::table('types_of_derivatives')
                                    ->where('status','=','1')
                                    ->get();

        $list_derivatives_trading_services  = DB::table('derivatives_trading_services')
                                            ->where('status','=','1')
                                            ->get();
        
        return view('derivatives-trading', compact('fetch_derivatives_trading_basic_details', 'list_types_of_derivatives', 'list_derivatives_trading_services'));
    }


    //  Portfolio Investment Scheme
    public function portfolio_investment_scheme()
    {
        $fetch_portfolio_investment_scheme_basic_details    = DB::table('portfolio_investment_scheme_basic_details')
                                        ->where('id','=','1')
                                        ->first();

        $list_portfolio_investment_scheme_services  = DB::table('portfolio_investment_scheme_services')
                                                    ->where('status','=','1')
                                                    ->get();
        
        return view('portfolio-investment-scheme', compact('fetch_portfolio_investment_scheme_basic_details', 'list_portfolio_investment_scheme_services'));
    }


    //  Portfolio Management Services
    public function portfolio_management_services()
    {
        $fetch_portfolio_management_services_basic_details  = DB::table('portfolio_management_services_basic_details')
                                                            ->where('id','=','1')
                                                            ->first();

        $list_portfolio_management_services = DB::table('portfolio_management_services')
                                            ->where('status','=','1')
                                            ->get();
        
        return view('portfolio-management-services', compact('fetch_portfolio_management_services_basic_details', 'list_portfolio_management_services'));
    }

    //  Trading in Listed Securities
    public function trading_listed_securities()
    {
        $fetch_trading_listed_securities_basic_details  = DB::table('trading_listed_securities_basic_details')
                                                        ->where('id','=','1')
                                                        ->first();

        $list_trading_listed_securities_services    = DB::table('trading_listed_securities_services')
                                                    ->where('status','=','1')
                                                    ->get();
        
        return view('trading-listed-securities', compact('fetch_trading_listed_securities_basic_details', 'list_trading_listed_securities_services'));
    }


    //  Service Providers
    public function service_providers()
    {
        $list_service_providers = DB::table('service_providers')
                                ->where('status','=','1')
                                ->get();
        
        return view('service-providers', compact('list_service_providers'));
    }
}
