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

class FrontendController extends Controller
{
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
    public function about_us()
    {
        
       return view('about_us');
    }
    
    public function thank_you_show()
    {
        return view('thank-you');
    }
    
     public function our_team()
    {
        
       return view('our_team');
    }
    
     public function our_expertise()
    {
        
       return view('our_expertise');
    }
    
    
     public function terms_of_use()
    {
        
       return view('terms_of_use');
    }
    
     public function privacy_policy()
    {
        
       return view('privacy_policy');
    }
    
public function coming_soon_show()
    {
        return view('coming-soon');
    }    
public function faq_show()
{
return view('faqs_sd');
}

public function welcome_show()
{
return view('welcome1');
}



 public function tradinglistedsecurities_show()
    {
        $fetch_trading_listed_securities_basic_details  = DB::table('trading_listed_securities_basic_details')
                                                        ->where('id','=','1')
                                                        ->first();

        $list_trading_listed_securities_services    = DB::table('trading_listed_securities_services')
                                                    ->where('status','=','1')
                                                    ->get();
        
        return view('tradinglistedsecurities-show', compact('fetch_trading_listed_securities_basic_details', 'list_trading_listed_securities_services'));
    }

public function faq_demo_show()
{
    return view('faq-new'); 
}
     
public function expression_interest_show()
    {
        return view('expression-of-interest');
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
public function india_market_show()
{
return view('india-market');
}

public function service_provider_service_agreement_show(Request $request)
{
    $status = $request->query('status'); // or $request->get('status')
    
    $sp_email_address = Crypt::decrypt($status);
    
   // $sp_email_address = 'suneet.luthra@facilonservices.com';

    $fetch_scheduling_details = DB::table('service_providers_scheduling')
                            ->where('compliance_email',$sp_email_address)
                            ->first();
    return view('scheduling-service-agreement',compact('fetch_scheduling_details'));
}

public function service_provider_online_sow_service_agreement_show($service_provider_email)
{
    return view('online-sow-for-service-provider',compact('service_provider_email'));
}

public function serivice_provider_online_sow_service_agreement_submit($service_provider_email)
{
    
    $sp_email_address = Crypt::decrypt($service_provider_email);
    $fetch_scheduling_details = DB::table('service_providers_scheduling')
                            ->where('compliance_email',$sp_email_address)
                            ->first();
                            
    $values = array('agreement_status'=>'Approved');
    
    $fetch_scheduling_details1 = DB::table('service_providers_scheduling')
                            ->where('compliance_email',$sp_email_address)
                            ->limit(1)
                            ->update($values);
    
    
                
    $client = new Client();
                $responseemail = $client->post("https://login.microsoftonline.com/82bfe941-8424-460e-b024-540394d1a92e/oauth2/v2.0/token", [
                    'form_params' => [
                        'client_id' => '3eb83171-58a2-4841-a565-b9f8d4a280e8',
                        'client_secret' => 'SOW8Q~q~EN83ohcPnXVfdHnc12UuWkMu2JkCBcAK',
                        'scope' => 'https://graph.microsoft.com/.default',
                        'grant_type' => 'client_credentials',
                    ]
                ]);


        $accessToken = json_decode($responseemail->getBody()->getContents())->access_token;

//echo $accessToken;exit;

        //$accessToken = json_decode($response->getBody()->getContents())->access_token;
        
       
        $key_person_name = $fetch_scheduling_details->compliance_name;
        $key_person_email = $fetch_scheduling_details->compliance_email;
        
        $data1 = array('key_person_name'=>$key_person_name,'key_person_email'=>$key_person_email);
        $emailContent2 = View::make('mails.service-provider-online-sow-mail', $data1)->render();
        
        $response1 = $client->post('https://graph.microsoft.com/v1.0/users/no-reply@facilonservices.com/sendMail', [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $accessToken,
                            'Content-Type' => 'application/json',
                        ],
                        'json' => [
                            'message' => [
                                'subject' => 'Service Agreement with Facilon Services',
                                'body' => [
                                    'contentType' => 'HTML', 
                                    'content' => $emailContent2, 
                                ],
                                'toRecipients' => [
                                    ['emailAddress' => ['address' => $key_person_email]],
                                ],
                            ],
                        ],
                    ]);
                    
        if ($response1->getStatusCode() == 202) {
    // Email successfully sent
    Log::info('Email sent successfully to: ' . $key_person_email);
} else {
    Log::error('Failed to send email. Status: ' . $response1->getStatusCode());
}

return redirect()->route('service_provider_register_thank_you_show');
                    
//                     $full_name = 'Demo Suneet';
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

public function test_api_cp_check()
{
    $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://login.microsoftonline.com/82bfe941-8424-460e-b024-540394d1a92e/oauth2/v2.0/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',  // Change to POST
    CURLOPT_POSTFIELDS => 'grant_type=client_credentials&client_secret=IwW8Q~wokTzK.SUThhEBp6t7Wj1iFAnNfgC9obv8&client_id=a684dded-7896-4f95-8628-813f1a2e2f6c&scope=https%3A%2F%2Ffpiadmin.crm8.dynamics.com%2F.default',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
    ),
));

$response = curl_exec($curl);
curl_close($curl);

// Check if the response contains the access token
$data = json_decode($response, true);
if (isset($data['access_token'])) {
    $accessToken = $data['access_token'];
} else {
    die('Error: Unable to retrieve access token');
}
        
    // Create a Contact in Dynamics CRM
$curl1 = curl_init();

curl_setopt_array($curl1, array(
  CURLOPT_URL => 'https://fpiadmin.crm8.dynamics.com/api/data/v9.2/contacts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>json_encode(array(
    'firstname' => 'Broker',
    'lastname' => 'Test 3',
    'emailaddress1' => 'suneet.luthra@facilonservices.com',
    'mobilephone' => '1234567890'
  )),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$accessToken,
    'Content-Type: application/json',
    'OData-Version: 4.0',
    'OData-MaxVersion: 4.0',
    'Accept: application/json',
    'Prefer: return=representation',
    'Cookie: ARRAffinity=9e9a16df6ef41a9536c363db431201f71c7a46908dd6fa4952d119020dc7178415134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD6B5F7A8622700000002027080967; ReqClientId=015b7421-082e-4763-994e-da52f4886d42; last_commit_time=2025-03-25 11:17:26Z; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
  ),
));

$response1 = curl_exec($curl1);

curl_close($curl1);

$data = json_decode($response1, true);
$contact_id = $data['contactid'];

$values1 = array('contact_id'=>$contact_id);
// $update_value = DB::table('service_provider_details')
//                         ->where('unique_id','=',$unique_id)
//                         ->limit(1)
//                         ->update($values1);
// echo $contact_id; echo '<br><br><br>';
// echo $response1; echo '<br><br><br>';

//Account entry
$curl2 = curl_init();

curl_setopt_array($curl2, array(
  CURLOPT_URL => 'https://fpiadmin.crm8.dynamics.com/api/data/v9.2/accounts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>json_encode(array(
    'name' => 'Broker Test 3',
    'telephone1' => '1234567890',
    'emailaddress1' => 'suneet.luthra@facilonservices.com',
    'ss_nsesebiregnno' =>'NSE/ CASH/2',
    'ss_nsefosebiregnno'=>'NSE/F&0/2',
    'fax'=>'4567890393',
    'websiteurl'=>'www.brokertest3.com',
    'ss_cinnumber'=>'CIN987654321010',
    'ss_panno'=>'AMGPS5345C',
    'ss_bsesebiregnno'=>'BSE/CASH/2',
    'ss_bsefosebiregnno'=>'BSE/F&O/2',
    'customertypecode'=>4,
    
    
    
  )),

  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$accessToken,
    'Content-Type: application/json',
    'OData-Version: 4.0',
    'OData-MaxVersion: 4.0',
    'Accept: application/json',
    'Prefer: return=representation',
    'Cookie: ARRAffinity=9e9a16df6ef41a9536c363db431201f71c7a46908dd6fa4952d119020dc7178415134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD6B5F7A8622700000002027080967; ReqClientId=015b7421-082e-4763-994e-da52f4886d42; last_commit_time=2025-03-25 11:17:26Z; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
  ),
));

$response2 = curl_exec($curl2);

curl_close($curl2);

$data2 = json_decode($response2, true);
$account_id = $data2['accountid'];

// $values2 = array('account_id'=>$account_id);
// $update_value1 = DB::table('service_provider_details')
//                         ->where('unique_id','=',$unique_id)
//                         ->limit(1)
//                         ->update($values2);
// echo $broker_id; echo '<br><br><br>';
// echo $response2;
// echo '<br><br><br>';
$curl3 = curl_init();

curl_setopt_array($curl3, array(
  CURLOPT_URL => 'https://fpiadmin.crm8.dynamics.com/api/data/v9.2/contacts('.$contact_id.')',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PATCH',
  CURLOPT_POSTFIELDS =>'{
    "ss_EntityName@odata.bind": "https://fpiadmin.crm8.dynamics.com/api/data/v9.2/accounts('.$account_id.')"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$accessToken,
    'Cookie: ARRAffinity=9e9a16df6ef41a9536c363db431201f71c7a46908dd6fa4952d119020dc7178415134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD6DEE381426A30000000089039848; ReqClientId=015b7421-082e-4763-994e-da52f4886d42; last_commit_time=2025-03-28 11:20:36Z; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
  ),
));

$response3 = curl_exec($curl3);

curl_close($curl3);
//echo $response;

//Broker Entry
$curl4 = curl_init();

curl_setopt_array($curl4, array(
  CURLOPT_URL => 'https://fpiadmin.crm8.dynamics.com/api/data/v9.2/ss_brokers',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "ss_name":"FSP202507253527",
    "ss_registeredwithfacilon":1,
    "ss_NameoftheFirm@odata.bind": "https://fpiadmin.crm8.dynamics.com/api/data/v9.2/accounts('.$account_id.')"
}',


  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$accessToken,
    'Content-Type: application/json',
    'OData-Version: 4.0',
    'OData-MaxVersion: 4.0',
    'Accept: application/json',
    'Prefer: return=representation',
    'Cookie: ReqClientId=015b7421-082e-4763-994e-da52f4886d42; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
  ),
));


$response4 = curl_exec($curl4);

curl_close($curl4);
$data3 = json_decode($response4, true);
$broker_id = $data3['ss_brokerid'];
}

}
