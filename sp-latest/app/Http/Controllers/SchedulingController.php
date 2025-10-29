<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;

class SchedulingController extends Controller
{
    public function view_new_service_provider_scheduling()
    {
        // $response = Http::asForm()->post('https://login.microsoftonline.com/23aa2f44-5546-4456-8bee-04a71a73b03e/oauth2/v2.0/token', [
        //     'client_id' => 'c7d988bd-b152-4416-b571-87b6b6e2e992',
        //     'client_secret' => '_NN8Q~wCfR2oZ~3x.GQFgFVw82LqxAS8Jv4osa~x',
        //     'scope' => 'https://graph.microsoft.com/.default',
        //     'grant_type' => 'client_credentials',
        // ]);

        // return $response->json()['access_token'];
        
        // exit;
        
//         $full_name = 'Demo Suneet';
//         $investor_password_main = 'Provider@123';
//         $email_id = 'suneet@facilonteam.testinator.com';
//         $full_name = $email_id;
//         $response11 = Http::withHeaders([
//             'Content-Type' => 'application/json',
//             'Authorization' => 'Bearer ' . $this->getAzureAccessToken(),
//         ])->post('https://graph.microsoft.com/v1.0/invitations', [
//     'invitedUserEmailAddress' => $email_id,
//     'inviteRedirectUrl' => 'https://fportalvapt.powerappsportals.com/signin-openid_1',  // must be valid
//     'sendInvitationMessage' => true,
//     'invitedUserDisplayName' => $full_name,
// ]);

//           dd($response11->json());
         
//         $client = new Client();
//                 $response = $client->post("https://login.microsoftonline.com/82bfe941-8424-460e-b024-540394d1a92e/oauth2/v2.0/token", [
//                     'form_params' => [
//                         'client_id' => '3eb83171-58a2-4841-a565-b9f8d4a280e8',
//                         'client_secret' => 'GGd8Q~_zrvNCnX9~ectlg4Mo~oloA1Ek_0fAEb5Z',
//                         'scope' => 'https://graph.microsoft.com/.default',
//                         'grant_type' => 'client_credentials',
//                     ]
//                 ]);


//         $accessToken = json_decode($response->getBody()->getContents())->access_token; 
         
//          $data1 = array('contact_person_name'=>$full_name);
//         $emailContent2 = View::make('service-provider-registration-mail', $data1)->render();
        
//         $response1 = $client->post('https://graph.microsoft.com/v1.0/users/no-reply@facilonservices.com/sendMail', [
//                         'headers' => [
//                             'Authorization' => 'Bearer ' . $accessToken,
//                             'Content-Type' => 'application/json',
//                         ],
//                         'json' => [
//                             'message' => [
//                                 'subject' => 'Service Agreement with Facilon Services',
//                                 'body' => [
//                                     'contentType' => 'HTML', 
//                                     'content' => $emailContent2, 
//                                 ],
//                                 'toRecipients' => [
//                                     ['emailAddress' => ['address' => $email_id]],
//                                 ],
//                             ],
//                         ],
//                     ]);

        return view('admin.service-providers.new-scheduling');
    }
    private function getAzureAccessToken()
    {
        $response = Http::asForm()->post('https://login.microsoftonline.com/82bfe941-8424-460e-b024-540394d1a92e/oauth2/v2.0/token', [
            'client_id' => '676ebc59-2a3b-4fbf-b110-b1c6617db8b5',
            'client_secret' => 'pDG8Q~XUcYsyUTZ2N4FrH1c3dOgSIP5SQhQC1cxr',
            'scope' => 'https://graph.microsoft.com/.default',
            'grant_type' => 'client_credentials',
        ]);

        return $response->json()['access_token'];
    }

    public function new_service_provider_scheduling_add(Request $request)
    {
        
        // $response = Http::asForm()->post('https://login.microsoftonline.com/23aa2f44-5546-4456-8bee-04a71a73b03e/oauth2/v2.0/token', [
        //     'client_id' => 'c7d988bd-b152-4416-b571-87b6b6e2e992',
        //     'client_secret' => '_NN8Q~wCfR2oZ~3x.GQFgFVw82LqxAS8Jv4osa~x',
        //     'scope' => 'https://graph.microsoft.com/.default',
        //     'grant_type' => 'client_credentials',
        // ]);

        // return $response->json()['access_token'];
        
        // exit;
        
        $date_of_agreement = $request->input('date_of_agreement');
        $place_of_execution = $request->input('place_of_execution');
        $date_of_msa = $request->input('date_of_msa');
        
        $name_of_client = $request->input('name_of_client');
        $type_of_entity = $request->input('type_of_entity');
        $company_director_name = $request->input('company_director_name');
        $company_director_din = $request->input('company_director_din');
        $partner_name = $request->input('partner_name');
        $partner_dpin = $request->input('partner_dpin');
        $pan_no = $request->input('pan_no');
        $tan_no = $request->input('tan_no');
        $gst_no = $request->input('gst_no');
        $cin_no = $request->input('cin_no');
        $rbi_regulation_name = $request->input('rbi_regulation_name');
        $rbi_registration_no = $request->input('rbi_registration_no');
        $sebi_registration_no = $request->input('sebi_registration_no');
        $name_of_sebi_regulation = $request->input('name_of_sebi_regulation');
        $nse_sebi_reg_no = $request->input('nse_sebi_reg_no');
        $nse_f_and_o_sebi_reg_no = $request->input('nse_f_and_o_sebi_reg_no');
        $bse_sebi_reg_no = $request->input('bse_sebi_reg_no');
        $bse_f_and_o_sebi_reg_no = $request->input('bse_f_and_o_sebi_reg_no');
        $exchange_name = $request->input('exchange_name');
        $segment_name = $request->input('segment_name');
        
        $compliance_name = $request->input('compliance_name');
        $compliance_middle_name = $request->input('compliance_middle_name');
        $compliance_last_name = $request->input('compliance_last_name');
        $compliance_phone_no = $request->input('compliance_phone_no');
        $compliance_email = $request->input('compliance_email');
        $compliance_office_address = $request->input('compliance_office_address');
        $compliance_office_address2 = $request->input('compliance_office_address2');
        $compliance_office_address3 = $request->input('compliance_office_address3');
        $com_city = $request->input('com_city');
        $com_state = $request->input('com_state');
        $com_country = $request->input('com_country');
        $com_zip_code = $request->input('com_zip_code');
        
        $compliance_name1 = $request->input('compliance_name1');
        $compliance_middle_name1 = $request->input('compliance_middle_name1');
        $compliance_last_name1 = $request->input('compliance_last_name1');
        $compliance_phone_no1 = $request->input('compliance_phone_no1');
        $compliance_email1 = $request->input('compliance_email1');
        $compliance_office_address1 = $request->input('compliance_office_address1');
        $compliance_office_address21 = $request->input('compliance_office_address21');
        $compliance_office_address31 = $request->input('compliance_office_address31');
        $com_city1 = $request->input('com_city1');
        $com_state1 = $request->input('com_state1');
        $com_country1 = $request->input('com_country1');
        $com_zip_code1 = $request->input('com_zip_code1');
        
        
        $client_registered_office_address = $request->input('client_registered_office_address');
        $contact_person_name = $request->input('contact_person_name');
        $contact_person_designation = $request->input('contact_person_designation');
        
        $contact_person_phone = $request->input('contact_person_phone');
        $place_of_branch = $request->input('place_of_branch');
        $address_of_branch = $request->input('address_of_branch');
        
        $primary_contact_name = $request->input('primary_contact_name1');
        $primary_contact_email = $request->input('primary_contact_email1');
        $primary_contact_phone = $request->input('primary_contact_phone1');
        
        $primary_contact_designation = $request->input('primary_contact_designation1');
        
        
        
        //$secondary_contact_email1
        $escalation_contact_name1 = $request->input('escalation_contact_name1');
        $escalation_contact_designation1 = $request->input('escalation_contact_designation1');
        $escalation_contact_phone1 = $request->input('escalation_contact_phone1');
        $escalation_contact_email1 = $request->input('escalation_contact_email1');
        $group_email_address = $request->input('group_email_address');
        
        // $request->validate([
        // 'upload_of_msa' => 'required|file|mimes:pdf|max:10240',
        // ]);
    
        if ($request->hasFile('agreement_upload')) {
            $file = $request->file('agreement_upload');
    
            // Generate unique name
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Save to public folder
            $file->move(public_path('uploads'), $fileName);
    
            // Save to database
    
           
        }else{
            $fileName = 'dummy.pdf';
        }

        
        $values = array('date_of_agreement'=>$date_of_agreement,'place_of_execution'=>$place_of_execution,'date_of_msa'=>$date_of_msa,
        'upload_of_msa'=>$fileName,'name_of_client'=>$name_of_client,'type_of_entity'=>$type_of_entity,'company_director_name'=>$company_director_name,
        'company_director_din'=>$company_director_din,'partner_name'=>$partner_name,'partner_dpin'=>$partner_dpin,'pan_no'=>$pan_no,'tan_no'=>$tan_no,
        'gst_no'=>$gst_no,'cin_no'=>$cin_no,'rbi_regulation_name'=>$rbi_regulation_name,'rbi_registration_no'=>$rbi_registration_no,'sebi_registration_no'=>$sebi_registration_no,
        'name_of_sebi_regulation'=>$name_of_sebi_regulation,'exchange_name'=>$exchange_name,'segment_name'=>$segment_name,
        'compliance_name'=>$compliance_name,'compliance_middle_name'=>$compliance_middle_name,'compliance_last_name'=>$compliance_last_name,
        'compliance_phone_no'=>$compliance_phone_no,'compliance_email'=>$compliance_email,'compliance_office_address'=>$compliance_office_address,
        'compliance_office_address2'=>$compliance_office_address2,'com_city'=>$com_city,'com_state'=>$com_state,'com_country'=>$com_country,'com_zip_code'=>$com_zip_code,
        'compliance_name1'=>$compliance_name1,'compliance_middle_name1'=>$compliance_middle_name1,'compliance_last_name1'=>$compliance_last_name1,
        'compliance_phone_no1'=>$compliance_phone_no1,'compliance_email1'=>$compliance_email1,'compliance_office_address1'=>$compliance_office_address1,
        'compliance_office_address21'=>$compliance_office_address21,'com_city1'=>$com_city1,'com_state1'=>$com_state1,'com_country1'=>$com_country1,'com_zip_code1'=>$com_zip_code1,
        'client_registered_office_address'=>$client_registered_office_address,'address_of_branch'=>$address_of_branch,
        'primary_contact_name1'=>$primary_contact_name,'primary_contact_email1'=>$primary_contact_email,
        'primary_contact_phone1'=>$primary_contact_phone,'primary_contact_designation1'=>$primary_contact_designation,
        'escalation_contact_name1'=>$escalation_contact_name1,'escalation_contact_designation1'=>$escalation_contact_designation1,
        'escalation_contact_phone1'=>$escalation_contact_phone1,'escalation_contact_email1'=>$escalation_contact_email1,'group_email_id'=>$group_email_address,
        'nse_sebi_reg_no'=>$nse_sebi_reg_no,'nse_f_and_o_sebi_reg_no'=>$nse_f_and_o_sebi_reg_no,'bse_sebi_reg_no'=>$bse_sebi_reg_no,'bse_f_and_o_sebi_reg_no'=>$bse_f_and_o_sebi_reg_no);
        
        
        //echo '<pre>'; print_r($values);echo '</pre>'; 
        $insert_scheduling = DB::table('service_providers_scheduling')
                            ->insert($values);
                            
        //exit;
                            
        $sp_email_address = Crypt::encrypt($compliance_email);
        
        //$service_agreement_url = 'https://anvaya.online/facilon-co-in/demo/sp-service-agreement?status='.$sp_email_address;
        
        $service_agreement_url = 'https://anvaya.online/facilon-co-in/demo/service-provider/register/step1/1?status='.$sp_email_address;
        
        
        
        $data1 = array('contact_person_name'=>$contact_person_name,'service_agreement_url'=>$service_agreement_url,'date_of_agreement'=>$date_of_agreement,'name_of_client'=>$name_of_client);
        $emailContent2 = View::make('mails.service-provider-scheduling-mail', $data1)->render();
        
        $client = new Client();
                $responseemail = $client->post("https://login.microsoftonline.com/82bfe941-8424-460e-b024-540394d1a92e/oauth2/v2.0/token", [
                    'form_params' => [
                        'client_id' => '3eb83171-58a2-4841-a565-b9f8d4a280e8',
                        'client_secret' => 'SOW8Q~q~EN83ohcPnXVfdHnc12UuWkMu2JkCBcAK',
                        'scope' => 'https://graph.microsoft.com/.default',
                        'grant_type' => 'client_credentials',
                    ]
                ]);


        $accessTokenemail = json_decode($responseemail->getBody()->getContents())->access_token;
        
$responseemail1 = $client->post('https://graph.microsoft.com/v1.0/users/no-reply@facilonservices.com/sendMail', [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $accessTokenemail,
                            'Content-Type' => 'application/json',
                        ],
                        'json' => [
                            'message' => [
                                'subject' => 'Complete Your Registration with Facilon Services',
                                'body' => [
                                    'contentType' => 'HTML', 
                                    'content' => $emailContent2, 
                                ],
                                'toRecipients' => [
                                    ['emailAddress' => ['address' => $compliance_email]],
                                ],
                            ],
                        ],
                    ]);


        
    return redirect()->route('admin.view_scheduling_all_service_providers');   
        
        // $response1 = $client->post('https://graph.microsoft.com/v1.0/users/no-reply@facilonservices.com/sendMail', [
        //                 'headers' => [
        //                     'Authorization' => 'Bearer ' . $accessToken,
        //                     'Content-Type' => 'application/json',
        //                 ],
        //                 'json' => [
        //                     'message' => [
        //                         'subject' => 'Service Agreement with Facilon Services',
        //                         'body' => [
        //                             'contentType' => 'HTML', 
        //                             'content' => $emailContent2, 
        //                         ],
        //                         'toRecipients' => [
        //                             ['emailAddress' => ['address' => $compliance_email]],
        //                         ],
        //                     ],
        //                 ],
        //             ]);
        
        
    }
    
    public function view_scheduling_all_service_providers()
    {
        $fetch_all_scheduling = DB::table('service_providers_scheduling')
                            ->get();
        return view('admin.service-providers.all-scheduling',compact('fetch_all_scheduling'));
    }
     public function view_update_service_provider_scheduling($id)
    {
        $fetch_all_scheduling = DB::table('service_providers_scheduling')
                            ->where('id','=',$id)
                            ->first();
                            
        return view('admin.service-providers.update-scheduling',compact('fetch_all_scheduling'));
    }
    
    public function view_all_available_enviorments()
    {
        $fetch_all_enviorments = DB::table('all_enviorments')
                                ->get();
            
        return view('admin.service-providers.all-enviorments',compact('fetch_all_enviorments'));
    }
}