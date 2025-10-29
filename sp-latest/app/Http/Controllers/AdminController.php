<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    //todo: admin login form
    public function login_form()
    {
        if(!Auth::guard('admin')->check()){
        return view('admin.login-form');
        }else{
            return redirect()->route('dashboard_show');
        }
    }

    //todo: admin login functionality
    public function login_functionality(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->route('dashboard_show');
        }else{
            Session::flash('error-message','Invalid Email or Password');
            return back();
        }
    }

    public function dashboard_show()
    {
      
        return view('admin.dashboard');
    }


    //todo: admin logout functionality
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login.form');
    }


    //  Custody - Basic Details
    public function view_custody_basic_details()
    {
        $fetch_custody_basic_details    = DB::table('custody_basic_details')
									    ->where('id','=', 1)
									    ->first();

        return view('admin.custody.custody-basic-details', compact('fetch_custody_basic_details'));
    }

    public function update_custody_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/custody'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('custody_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_custody_basic_details');
    }


    //  Custody - Services
    public function list_custody_services()
    {
        $list_custody_services  = DB::table('custody_services')
							    ->get();

        return view('admin.custody.list-custody-services', compact('list_custody_services'));
    }

    public function view_add_custody_service()
    {
        return view('admin.custody.add-custody-service');
    }

    public function add_custody_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/custody/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('custody_services')
                        ->insert($values);

        return redirect()->route('admin.list_custody_services');
    }

    public function view_custody_service_details($id)
    {
        $service_id = $id;
		
		$fetch_custody_service_details  = DB::table('custody_services')
                                        ->where('id','=',$service_id)
                                        ->first();

        return view('admin.custody.edit-custody-service', compact('fetch_custody_service_details'));
    }

    public function edit_custody_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/custody/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('custody_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_custody_services');
    }

    public function delete_custody_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('custody_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_custody_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('custody_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_custody_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('custody_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Derivatives Trading - Basic Details
    public function view_derivatives_trading_basic_details()
    {
        $fetch_derivatives_trading_basic_details    = DB::table('derivatives_trading_basic_details')
                                                    ->where('id','=', 1)
                                                    ->first();

        return view('admin.derivatives-trading.derivatives-trading-basic-details', compact('fetch_derivatives_trading_basic_details'));
    }

    public function update_derivatives_trading_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/derivatives-trading'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('derivatives_trading_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_derivatives_trading_basic_details');
    }


    //  Derivatives Trading - Services
    public function list_derivatives_trading_services()
    {
        $list_derivatives_trading_services  = DB::table('derivatives_trading_services')
							                ->get();

        return view('admin.derivatives-trading.list-derivatives-trading-services', compact('list_derivatives_trading_services'));
    }

    public function view_add_derivatives_trading_service()
    {
        return view('admin.derivatives-trading.add-derivatives-trading-service');
    }

    public function add_derivatives_trading_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/derivatives-trading/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('derivatives_trading_services')
                        ->insert($values);

        return redirect()->route('admin.list_derivatives_trading_services');
    }

    public function view_derivatives_trading_service_details($id)
    {
        $service_id = $id;
		
		$fetch_derivatives_trading_service_details  = DB::table('derivatives_trading_services')
                                                    ->where('id','=',$service_id)
                                                    ->first();

        return view('admin.derivatives-trading.edit-derivatives-trading-service', compact('fetch_derivatives_trading_service_details'));
    }

    public function edit_derivatives_trading_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/derivatives-trading/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('derivatives_trading_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_derivatives_trading_services');
    }

    public function delete_derivatives_trading_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('derivatives_trading_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_derivatives_trading_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('derivatives_trading_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_derivatives_trading_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('derivatives_trading_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Derivatives Trading - Types Of Derivatives
    public function list_types_of_derivatives()
    {
        $list_types_of_derivatives  = DB::table('types_of_derivatives')
							        ->get();

        return view('admin.derivatives-trading.list-types-of-derivatives', compact('list_types_of_derivatives'));
    }

    public function view_add_type_of_derivative()
    {
        return view('admin.derivatives-trading.add-type-of-derivatives');
    }

    public function add_type_of_derivative(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        $values=array('title'=>$title, 'description'=>$description);
		
		$inser_query 	= DB::table('types_of_derivatives')
                        ->insert($values);

        return redirect()->route('admin.list_types_of_derivatives');
    }

    public function view_type_of_derivative_details($id)
    {
        $derivative_id = $id;
		
		$fetch_derivatives_trading_service_details  = DB::table('types_of_derivatives')
                                                    ->where('id','=',$derivative_id)
                                                    ->first();

        return view('admin.derivatives-trading.edit-type-of-derivatives', compact('fetch_derivatives_trading_service_details'));
    }

    public function edit_type_of_derivative(Request $request)
    {
        $derivative_id = $request->input('derivative_id');
        $title = $request->input('title');
		$description = $request->input('description');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        $values=array('title'=>$title, 'description'=>$description);
		
		$update_query 	= DB::table('types_of_derivatives')
                        ->where('id','=', $derivative_id)
						->update($values);

        return redirect()->route('admin.list_types_of_derivatives');
    }

    public function delete_type_of_derivative($id)
    {
        $derivative_id = $id;
		
		$delete_query   = DB::table('types_of_derivatives')
                        ->where('id','=',$derivative_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_type_of_derivative($id)
    {
        $derivative_id = $id;
		
		$update_query   = DB::table('types_of_derivatives')
                        ->where('id','=',$derivative_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_type_of_derivative($id)
    {
        $derivative_id = $id;
		
		$update_query   = DB::table('types_of_derivatives')
                        ->where('id','=',$derivative_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Portfolio Investment Scheme - Basic Details
    public function view_portfolio_investment_scheme_basic_details()
    {
        $fetch_portfolio_investment_scheme_basic_details    = DB::table('portfolio_investment_scheme_basic_details')
                                                            ->where('id','=', 1)
                                                            ->first();

        return view('admin.portfolio-investment-scheme.portfolio-investment-scheme-basic-details', compact('fetch_portfolio_investment_scheme_basic_details'));
    }

    public function update_portfolio_investment_scheme_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/portfolio-investment-scheme'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('portfolio_investment_scheme_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_portfolio_investment_scheme_basic_details');
    }


    //  Portfolio Investment Scheme - Services
    public function list_portfolio_investment_scheme_services()
    {
        $list_portfolio_investment_scheme_services  = DB::table('portfolio_investment_scheme_services')
							                        ->get();

        return view('admin.portfolio-investment-scheme.list-portfolio-investment-scheme-services', compact('list_portfolio_investment_scheme_services'));
    }

    public function view_add_portfolio_investment_scheme_service()
    {
        return view('admin.portfolio-investment-scheme.add-portfolio-investment-scheme-service');
    }

    public function add_portfolio_investment_scheme_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/portfolio-investment-scheme/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('portfolio_investment_scheme_services')
                        ->insert($values);

        return redirect()->route('admin.list_portfolio_investment_scheme_services');
    }

    public function view_portfolio_investment_scheme_service_details($id)
    {
        $service_id = $id;
		
		$fetch_portfolio_investment_scheme_service_details  = DB::table('portfolio_investment_scheme_services')
                                                            ->where('id','=',$service_id)
                                                            ->first();

        return view('admin.portfolio-investment-scheme.edit-portfolio-investment-scheme-service', compact('fetch_portfolio_investment_scheme_service_details'));
    }

    public function edit_portfolio_investment_scheme_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/portfolio-investment-scheme/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('portfolio_investment_scheme_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_portfolio_investment_scheme_services');
    }

    public function delete_portfolio_investment_scheme_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('portfolio_investment_scheme_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_portfolio_investment_scheme_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('portfolio_investment_scheme_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_portfolio_investment_scheme_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('portfolio_investment_scheme_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Portfolio Management Services - Basic Details
    public function view_portfolio_management_services_basic_details()
    {
        $fetch_portfolio_management_services_basic_details  = DB::table('portfolio_management_services_basic_details')
                                                            ->where('id','=', 1)
                                                            ->first();

        return view('admin.portfolio-management-services.portfolio-management-services-basic-details', compact('fetch_portfolio_management_services_basic_details'));
    }

    public function update_portfolio_management_services_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/portfolio-management-services'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('portfolio_management_services_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_portfolio_management_services_basic_details');
    }


    //  Portfolio Management Services - Services
    public function list_portfolio_management_services()
    {
        $list_portfolio_management_services = DB::table('portfolio_management_services')
							                ->get();

        return view('admin.portfolio-management-services.list-portfolio-management-services', compact('list_portfolio_management_services'));
    }

    public function view_add_portfolio_management_service()
    {
        return view('admin.portfolio-management-services.add-portfolio-management-service');
    }

    public function add_portfolio_management_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/portfolio-management-services/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('portfolio_management_services')
                        ->insert($values);

        return redirect()->route('admin.list_portfolio_management_services');
    }

    public function view_portfolio_management_service_details($id)
    {
        $service_id = $id;
		
		$fetch_portfolio_management_service_details = DB::table('portfolio_management_services')
                                                    ->where('id','=',$service_id)
                                                    ->first();

        return view('admin.portfolio-management-services.edit-portfolio-management-service', compact('fetch_portfolio_management_service_details'));
    }

    public function edit_portfolio_management_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/portfolio-management-services/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('portfolio_management_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_portfolio_management_services');
    }

    public function delete_portfolio_management_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('portfolio_management_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_portfolio_management_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('portfolio_management_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_portfolio_management_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('portfolio_management_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Trading In Listed Securities - Basic Details
    public function view_trading_listed_securities_basic_details()
    {
        $fetch_trading_listed_securities_basic_details  = DB::table('trading_listed_securities_basic_details')
                                                        ->where('id','=', 1)
                                                        ->first();

        return view('admin.trading-listed-securities.trading-listed-securities-basic-details', compact('fetch_trading_listed_securities_basic_details'));
    }

    public function update_trading_listed_securities_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/trading-listed-securities'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('trading_listed_securities_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_trading_listed_securities_basic_details');
    }


    //  Trading In Listed Securities - Services
    public function list_trading_listed_securities_services()
    {
        $list_trading_listed_securities_services    = DB::table('trading_listed_securities_services')
							                        ->get();

        return view('admin.trading-listed-securities.list-trading-listed-securities-services', compact('list_trading_listed_securities_services'));
    }

    public function view_add_trading_listed_securities_service()
    {
        return view('admin.trading-listed-securities.add-trading-listed-securities-service');
    }

    public function add_trading_listed_securities_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/trading-listed-securities/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('trading_listed_securities_services')
                        ->insert($values);

        return redirect()->route('admin.list_trading_listed_securities_services');
    }

    public function view_trading_listed_securities_service_details($id)
    {
        $service_id = $id;
		
		$fetch_trading_listed_securities_service_details = DB::table('trading_listed_securities_services')
                                                        ->where('id','=',$service_id)
                                                        ->first();

        return view('admin.trading-listed-securities.edit-trading-listed-securities-service', compact('fetch_trading_listed_securities_service_details'));
    }

    public function edit_trading_listed_securities_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/trading-listed-securities/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('trading_listed_securities_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_trading_listed_securities_services');
    }

    public function delete_trading_listed_securities_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('trading_listed_securities_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_trading_listed_securities_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('trading_listed_securities_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_trading_listed_securities_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('trading_listed_securities_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Service Providers
    public function list_service_providers()
    {
        $list_service_providers = DB::table('service_providers')
							    ->get();

        return view('admin.service-providers.list-service-providers', compact('list_service_providers'));
    }

    public function view_add_service_provider()
    {
        return view('admin.service-providers.add-service-provider');
    }

    public function add_service_provider(Request $request)
    {
        $title = $request->input('title');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/service-providers'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('service_providers')
                        ->insert($values);

        return redirect()->route('admin.list_service_providers');
    }

    public function view_service_provider_details($id)
    {
        $service_provider_id = $id;
		
		$fetch_service_provider_details = DB::table('service_providers')
                                        ->where('id','=',$service_provider_id)
                                        ->first();

        return view('admin.service-providers.edit-service-provider', compact('fetch_service_provider_details'));
    }

    public function edit_service_provider(Request $request)
    {
        $service_provider_id = $request->input('service_provider_id');
        $title = $request->input('title');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
		],
		[
			'title.required' => 'Please enter title'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/service-providers'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('service_providers')
                        ->where('id','=', $service_provider_id)
						->update($values);

        return redirect()->route('admin.list_service_providers');
    }

    public function delete_service_provider($id)
    {
        $service_provider_id = $id;
		
		$delete_query   = DB::table('service_providers')
                        ->where('id','=',$service_provider_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_service_provider($id)
    {
        $service_provider_id = $id;
		
		$update_query   = DB::table('service_providers')
                        ->where('id','=',$service_provider_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_service_provider($id)
    {
        $service_provider_id = $id;
		
		$update_query   = DB::table('service_providers')
                        ->where('id','=',$service_provider_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }
    
    public function assign_and_approve_service_provider($id)
    {
        $scheduling_id = $id;
        $fetch_all_env = DB::table('all_enviorments')
                        ->get();
       return view('admin.service-providers.assign-enviorment',compact('fetch_all_env','scheduling_id'));
    }
    
    public function assign_and_approve_service_provider_submit(Request $request)
    {
        $scheduling_id = $request->input('scheduling_id');
        $env_id = $request->input('env_id');
        $sp_status = $request->input('sp_status');
        
        
        $values = array('env_id'=>$env_id,'sp_status'=>$sp_status);
        
        $update_env = DB::table('service_providers_scheduling')
                    ->where('id','=',$scheduling_id)
                    ->limit(1)
                    ->update($values);
                    
        $fetch_env_name = DB::table('all_enviorments')
                        ->where('id','=',$env_id)
                        ->first();
        $env_name = $fetch_env_name->env_name;
                    
        $fetch_provider_details = DB::table('service_providers_scheduling')
                                ->where('id','=',$scheduling_id)
                                ->first();
       
          $contact_firstname = $fetch_provider_details->primary_contact_name1;  
          $contact_phone = $fetch_provider_details->primary_contact_phone1;
          $contact_email = $fetch_provider_details->primary_contact_email1;
           
          $service_provider_name = $fetch_provider_details->name_of_client;
          $service_provider_phone = $fetch_provider_details->compliance_phone_no;
          $service_provider_email = $fetch_provider_details->compliance_email;
          $service_provider_nse_sebi_reg = $fetch_provider_details->nse_sebi_reg_no;
          $service_provider_nse_f_o_sebi_reg = $fetch_provider_details->nse_f_and_o_sebi_reg_no;
          
          
          $service_provider_cin_no = $fetch_provider_details->cin_no;
           
          $service_provider_unique_id = $fetch_provider_details->unique_code;
          
          $sp_enviorment =$env_name;
          
          $scope = "https://" . $sp_enviorment . ".crm8.dynamics.com/.default";
          
          $postFields = http_build_query([
    'grant_type' => 'client_credentials',
    'client_secret' => 'IwW8Q~wokTzK.SUThhEBp6t7Wj1iFAnNfgC9obv8',
    'client_id' => 'a684dded-7896-4f95-8628-813f1a2e2f6c',
    'scope' => $scope
]);
          
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
            CURLOPT_POSTFIELDS => $postFields,
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
        
        //echo $accessToken;exit;
        
        // $dynamicsApiUrl = "https://{$sp_enviorment}.crm8.dynamics.com/api/data/v9.2/contacts";
        
        // $curl1 = curl_init();

        // curl_setopt_array($curl1, array(
        //   CURLOPT_URL => $dynamicsApiUrl,
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
        //     'mobilephone' => $service_provider_phone,
        //     'ss_contacttype' => 100000001
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
        
        // //print_r($values1);exit;
        // $update_value = DB::table('service_provider_details')
        //                         ->where('unique_id','=',$service_provider_unique_id)
        //                         ->limit(1)
        //                         ->update($values1);
                                
        $dynamicsApiUrl2 = "https://{$sp_enviorment}.crm8.dynamics.com/api/data/v9.2/accounts";
                                
        $curl2 = curl_init();

        curl_setopt_array($curl2, array(
          CURLOPT_URL => $dynamicsApiUrl2,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>json_encode(array(
            'name' => $service_provider_name,
            'telephone1' => $service_provider_phone,
            'emailaddress1' => $service_provider_email,
            'ss_nsesebiregnno' =>$service_provider_nse_sebi_reg,
            'ss_nsefosebiregnno'=>$service_provider_nse_f_o_sebi_reg,
            
            'ss_cinnumber'=>$service_provider_cin_no,
            'customertypecode'=>4
            
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
        
        $values2 = array('account_id'=>$account_id);
        //print_r($values2);exit;
        $update_value1 = DB::table('service_provider_details')
                                ->where('unique_id','=',$service_provider_unique_id)
                                ->limit(1)
                                ->update($values2);
        // $dynamicsApiUrl3 = "https://{$sp_enviorment}.crm8.dynamics.com/api/data/v9.2/contacts({$contact_id})";
        
        // $payload = [
        //     "ss_EntityName@odata.bind" => "https://{$sp_enviorment}.crm8.dynamics.com/api/data/v9.2/accounts({$account_id})"
        // ];
                                
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
        //   CURLOPT_POSTFIELDS =>json_encode($payload),
        //   CURLOPT_HTTPHEADER => array(
        //     'Content-Type: application/json',
        //     'Authorization: Bearer '.$accessToken,
        //     'Cookie: ARRAffinity=9e9a16df6ef41a9536c363db431201f71c7a46908dd6fa4952d119020dc7178415134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD6DEE381426A30000000089039848; ReqClientId=015b7421-082e-4763-994e-da52f4886d42; last_commit_time=2025-03-28 11:20:36Z; orgId=bf9ea245-fc1b-ef11-9f86-002248d5c5d1'
        //   ),
        // ));
        
        // $response3 = curl_exec($curl3);
        
        // curl_close($curl3);
        //echo $response3;exit;
        
        $dynamicsApiUrl4 = "https://{$sp_enviorment}.crm8.dynamics.com/api/data/v9.2/ss_brokers";
        
        //Broker Entry
        
        $payload2 = [
    "ss_name" => $service_provider_unique_id,
    "ss_registeredwithfacilon" => 1,
    "ss_NameoftheFirm@odata.bind" => "https://{$sp_enviorment}.crm8.dynamics.com/api/data/v9.2/accounts({$account_id})"
];
        $curl4 = curl_init();
        
        curl_setopt_array($curl4, array(
          CURLOPT_URL => $dynamicsApiUrl4,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>json_encode($payload2),
        
        
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
        $values3 = array('broker_id'=>$broker_id);
        
        //print_r($values3);exit;
        $update_value1 = DB::table('service_provider_details')
                                ->where('unique_id','=',$service_provider_unique_id)
                                ->limit(1)
                                ->update($values3);
        
        $full_name = $service_provider_name;
        $investor_password_main = 'Provider@123';
        $email_id = $service_provider_email;
        $full_name = $email_id;
        $response11 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->getAzureAccessToken(),
        ])->post('https://graph.microsoft.com/v1.0/invitations', [
    'invitedUserEmailAddress' => $email_id,
    'inviteRedirectUrl' => 'https://fportalvapt.powerappsportals.com/signin-openid_1',  // must be valid
    'sendInvitationMessage' => true,
    'invitedUserDisplayName' => $full_name,
]);

          dd($response11->json());
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
    
    public function get_service_provider_registration_list($provider_id)
    {
        $get_all_list = DB::table('service_provider_details')
                        ->where('provider_id','=',$provider_id)
                        ->get();
        return view('admin.service-providers.all-register-list',compact('get_all_list'));
    }
    
    
    //  Home - Banner Details
    public function view_banner_details()
    {
        $fetch_banner_details   = DB::table('banner')
							    ->where('id','=', 1)
							    ->first();

        return view('admin.home.banner.update-banner-details', compact('fetch_banner_details'));
    }

    public function update_banner_details(Request $request)
    {
        $title = $request->input('title');
		$sub_title_one = $request->input('sub_title_one');
		$sub_title_two = $request->input('sub_title_two');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'sub_title_one' => 'required',
			'sub_title_two' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'sub_title_one.required' => 'Please enter sub-title one',
			'sub_title_two.required' => 'Please enter sub-title two',
			'img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/banner'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'sub_title_one'=>$sub_title_one, 'sub_title_two'=>$sub_title_two, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('banner')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_banner_details');
    }


    //  Home - Journey With Facilon
    public function list_key_points()
    {
        $list_key_points    = DB::table('key_points')
							->get();

        return view('admin.home.key-points.list-key-points', compact('list_key_points'));
    }

    public function view_add_key_point()
    {
        return view('admin.home.key-points.add-key-point');
    }

    public function add_key_point(Request $request)
    {
        $title = $request->input('title');
		$url = $request->input('url');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'url' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'url.required' => 'Please enter URL',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/key-points'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'url'=>$url, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('key_points')
                        ->insert($values);

        return redirect()->route('admin.list_key_points');
    }

    public function view_key_point_details($id)
    {
        $key_point_id = $id;
		
		$fetch_key_point_details    = DB::table('key_points')
                                    ->where('id','=',$key_point_id)
                                    ->first();

        return view('admin.home.key-points.edit-key-point', compact('fetch_key_point_details'));
    }

    public function edit_key_point(Request $request)
    {
        $key_point_id = $request->input('key_point_id');
        $title = $request->input('title');
		$url = $request->input('url');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'url' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'url.required' => 'Please enter URL'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/key-points'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'url'=>$url, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('key_points')
                        ->where('id','=', $key_point_id)
						->update($values);

        return redirect()->route('admin.list_key_points');
    }

    public function delete_key_point($id)
    {
        $key_point_id = $id;
		
		$delete_query   = DB::table('key_points')
                        ->where('id','=',$key_point_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_key_point($id)
    {
        $key_point_id = $id;
		
		$update_query   = DB::table('key_points')
                        ->where('id','=',$key_point_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_key_point($id)
    {
        $key_point_id = $id;
		
		$update_query   = DB::table('key_points')
                        ->where('id','=',$key_point_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }
    
    public function fetch_cities_from_dv()
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
            CURLOPT_POSTFIELDS => 'grant_type=client_credentials&client_secret=IwW8Q~wokTzK.SUThhEBp6t7Wj1iFAnNfgC9obv8&client_id=a684dded-7896-4f95-8628-813f1a2e2f6c&scope=https%3A%2F%2Ffportalvapt.crm8.dynamics.com%2F.default',
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
        
        
        $curl1 = curl_init();

        curl_setopt_array($curl1, array(
          CURLOPT_URL => 'https://fportalvapt.crm8.dynamics.com/api/data/v9.2/ss_cities',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$accessToken,
            'Cookie: ARRAffinity=5230b2973292d874dbd60cb18b78265e56d04676774b56bbd5ba0733528e55cb15134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD75CF234CC2190000001501038443; ReqClientId=188686af-4586-4c9f-a53c-13cbdf72ee35; orgId=e4045f65-e6f7-ee11-904b-6045bde84adc'
          ),
        ));
        
        $response1 = curl_exec($curl1);
        
        curl_close($curl1);
        //echo $response1;
        $data11 = json_decode($response1, true);

        // Check if the 'value' key exists and contains data
        if (isset($data11['value']) && is_array($data11['value'])) {
            // Loop through each nationality item
            foreach ($data11['value'] as $item) {
                // Extract the ss_name and ss_nationalityid
                $ss_name = $item['ss_name'];
                $ss_cityid = $item['ss_cityid'];
                $importsequencenumber = $item['importsequencenumber'];
                $ss_city = $item['ss_city'];
                $_ss_country_value = $item['_ss_country_value'];
                $_ss_state_value = $item['_ss_state_value'];
                
                $values = array('ss_name'=>$ss_name,'ss_cityid'=>$ss_cityid,'importsequencenumber'=>$importsequencenumber,'ss_city'=>$ss_city,'_ss_country_value'=>$_ss_country_value,
                '_ss_state_value'=>$_ss_state_value);
                
                $insert = DB::table('master_cities')
                        ->insert($values);
            }
        } else {
            echo "No data found.\n";
        }
        
        
    }
    
    public function fetch_countries_from_dv()
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
            CURLOPT_POSTFIELDS => 'grant_type=client_credentials&client_secret=IwW8Q~wokTzK.SUThhEBp6t7Wj1iFAnNfgC9obv8&client_id=a684dded-7896-4f95-8628-813f1a2e2f6c&scope=https%3A%2F%2Ffportalvapt.crm8.dynamics.com%2F.default',
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
        
        
        $curl1 = curl_init();

        curl_setopt_array($curl1, array(
          CURLOPT_URL => 'https://fportalvapt.crm8.dynamics.com/api/data/v9.2/ss_countries',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$accessToken,
            'Cookie: ARRAffinity=5230b2973292d874dbd60cb18b78265e56d04676774b56bbd5ba0733528e55cb15134d20c556b0b34b9b6ae43ec3f5dcdad61788de889ffc592af7aca85fc1c508DD75CF234CC2190000001501038443; ReqClientId=188686af-4586-4c9f-a53c-13cbdf72ee35; orgId=e4045f65-e6f7-ee11-904b-6045bde84adc'
          ),
        ));
        
        $response1 = curl_exec($curl1);
        
        curl_close($curl1);
        //echo $response1;
        $data11 = json_decode($response1, true);

        // Check if the 'value' key exists and contains data
        if (isset($data11['value']) && is_array($data11['value'])) {
            // Loop through each nationality item
            foreach ($data11['value'] as $item) {
                // Extract the ss_name and ss_nationalityid
                $ss_name = $item['ss_name'];
                $ss_country = $item['ss_country'];
                $ss_countryid = $item['ss_countryid'];
                $ss_isdcode = $item['ss_isdcode'];
                
                
                $values = array('ss_name'=>$ss_name,'ss_country'=>$ss_country,'ss_countryid'=>$ss_countryid,'ss_isdcode'=>$ss_isdcode);
                
                $insert = DB::table('master_countries')
                        ->insert($values);
            }
        } else {
            echo "No data found.\n";
        }
         
    }

}
