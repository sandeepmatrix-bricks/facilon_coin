<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function index()
    {
        $service_providers = DB::table('service_provider_details')
                            ->get();
        return response()->json($service_providers);
    }
    public function all_show(Request $request)
    {
        
        $providerId = $request->query('id');

        $service_providers = DB::table('service_provider_details')
                            ->where('provider_id','=',$providerId)
                            ->get();
        return response()->json($service_providers);
    }
    public function broker_show(Request $request)
    {
        $unique_id = $request->query('unique_id');
        $service_providers = DB::table('service_provider_details')
                            ->where('unique_id','=',$unique_id)
                            ->where('provider_id','=',1)
                            ->first();
        return response()->json($service_providers);
    }
    public function custodian_show(Request $request)
    {
        $unique_id = $request->query('unique_id');
        $service_providers = DB::table('service_provider_details')
                            ->where('unique_id','=',$unique_id)
                            ->where('provider_id','=',2)
                            ->first();
        return response()->json($service_providers);
    }
    public function portfolio_manager_show(Request $request)
    {
        $unique_id = $request->query('unique_id');
        $service_providers = DB::table('service_provider_details')
                            ->where('unique_id','=',$unique_id)
                            ->where('provider_id','=',3)
                            ->first();
        return response()->json($service_providers);
    }
    public function bank_show(Request $request)
    {
        $unique_id = $request->query('unique_id');
        $service_providers = DB::table('service_provider_details')
                            ->where('unique_id','=',$unique_id)
                            ->where('provider_id','=',4)
                            ->first();
        return response()->json($service_providers);
    }
    public function investment_advisors_show(Request $request)
    {
       $unique_id = $request->query('unique_id');
        $service_providers = DB::table('service_provider_details')
                            ->where('unique_id','=',$unique_id)
                            ->where('provider_id','=',5)
                            ->first();
        return response()->json($service_providers); 
    }
}
