@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">Update Scheduling</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="{{route('admin.new_service_provider_scheduling_add')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Service Provider Type<span class="text-danger"> *</span></label>
                                                    <select name="type_of_entity" class="form-control">
                                                        <option value="1">Broker</option>
                                                        <option value="3">Portfolio Manager</option>
                                                        <option value="2">Custodian</option>
                                                        <option value="4">Bank</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Date of Agreement<span class="text-danger"> *</span></label>
                                                    <input type="date" class="form-control" name="date_of_agreement" value="{{$fetch_all_scheduling->date_of_agreement}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Upload Agreement<span class="text-danger"> *</span></label>
                                                    <input type="file" class="form-control" name="agreement_upload">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Place of Execution</label>
                                                    <input type="text" class="form-control" name="place_of_execution" value="{{$fetch_all_scheduling->place_of_execution}}">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Name of Service Provider</label>
                                                    <input type="text" class="form-control" name="name_of_client" value="{{$fetch_all_scheduling->name_of_client}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Type of Entity</label>
                                                    
                                                    <select name="business_type" class="form-control">
                                                        <option value="Public Limited Company">Public Limited Company</option>
                                                        <option value="Private Limited Company">Private Limited Company</option>
                                                        <option value="Partnership Firm">Partnership Firm</option>
                                                        <option value="Limited Partnership Firm">Limited Partnership Firm</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Address of Registered office of the Client</label>
                                                    <input type="text" class="form-control" name="client_registered_office_address" value="{{$fetch_all_scheduling->client_registered_office_address}}">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        <div>
                                            <h5 style="margin-top:1% !important;">Other Details of Client</h5>
                                        </div>
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Authorized Person Designation</label>-->
                                        <!--            <input type="text" class="form-control" name="company_director_name">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Authorized Person First Name</label>-->
                                        <!--            <input type="text" class="form-control" name="company_director_name">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Authorized Person Middle Name</label>-->
                                        <!--            <input type="text" class="form-control" name="company_director_name">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Authorized Person Last Name</label>-->
                                        <!--            <input type="text" class="form-control" name="company_director_name">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Authorized Person Email ID</label>-->
                                        <!--            <input type="text" class="form-control" name="company_director_name">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Authorized Person Contact No</label>-->
                                        <!--            <input type="text" class="form-control" name="company_director_name">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Company Director DIN</label>-->
                                        <!--            <input type="text" class="form-control" name="company_director_din">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Partner Name</label>-->
                                        <!--            <input type="text" class="form-control" name="partner_name">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Partner DPIN</label>-->
                                        <!--            <input type="text" class="form-control" name="partner_dpin">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>PAN No</label>
                                                    <input type="text" class="form-control" name="pan_no" value="{{$fetch_all_scheduling->pan_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>TAN No</label>
                                                    <input type="text" class="form-control" name="tan_no" value="{{$fetch_all_scheduling->tan_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>GST No</label>
                                                    <input type="text" class="form-control" name="gst_no" value="{{$fetch_all_scheduling->gst_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>CIN No</label>
                                                    <input type="text" class="form-control" name="cin_no" value="{{$fetch_all_scheduling->cin_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>NSE SEBI Register No</label>
                                                    <input type="text" class="form-control" name="nse_sebi_reg_no" value="{{$fetch_all_scheduling->nse_sebi_reg_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>NSE F&O SEBI Register No</label>
                                                    <input type="text" class="form-control" name="nse_f_and_o_sebi_reg_no" value="{{$fetch_all_scheduling->nse_f_and_o_sebi_reg_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>BSE SEBI Reg No</label>
                                                    <input type="text" class="form-control" name="bse_sebi_reg_no" value="{{$fetch_all_scheduling->bse_sebi_reg_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>BSE F&O SEBI Reg No</label>
                                                    <input type="text" class="form-control" name="bse_f_and_o_sebi_reg_no" value="{{$fetch_all_scheduling->bse_f_and_o_sebi_reg_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Name of RBI Regulation</label>
                                                    <input type="text" class="form-control" name="rbi_regulation_name" value="{{$fetch_all_scheduling->rbi_regulation_name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>RBI Registration No</label>
                                                    <input type="text" class="form-control" name="rbi_registration_no" value="{{$fetch_all_scheduling->rbi_registration_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Name of SEBI Regulation</label>
                                                    <input type="text" class="form-control" name="name_of_sebi_regulation" value="{{$fetch_all_scheduling->name_of_sebi_regulation}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>SEBI Registration No</label>
                                                    <input type="text" class="form-control" name="sebi_registration_no" value="{{$fetch_all_scheduling->sebi_registration_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Exchange Name(s)</label>
                                                    <input type="text" class="form-control" name="exchange_name" value="{{$fetch_all_scheduling->exchange_name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Segment Name(s)</label>
                                                    <input type="text" class="form-control" name="segment_name" value="{{$fetch_all_scheduling->segment_name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <h5 style="margin-top:1% !important;">Authorized Person Details</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Authorized Person First Name</label>
                                                    <input type="text" class="form-control" name="compliance_name" value="{{$fetch_all_scheduling->compliance_name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Authorized Person Middle  Name</label>
                                                    <input type="text" class="form-control" name="compliance_middle_name" value="{{$fetch_all_scheduling->compliance_middle_name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Authorized Person Last Name</label>
                                                    <input type="text" class="form-control" name="compliance_last_name" value="{{$fetch_all_scheduling->compliance_last_name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control" name="contact_person_designation" value="{{$fetch_all_scheduling->contact_person_designation}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" name="compliance_phone_no" value="{{$fetch_all_scheduling->compliance_phone_no}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" name="compliance_email" value="{{$fetch_all_scheduling->compliance_email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 1</label>
                                                    <input type="text" class="form-control" name="compliance_office_address" value="{{$fetch_all_scheduling->compliance_office_address}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 2</label>
                                                    <input type="text" class="form-control" name="compliance_office_address2" value="{{$fetch_all_scheduling->compliance_office_address2}}">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="com_city" value="{{$fetch_all_scheduling->com_city}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="com_state" value="{{$fetch_all_scheduling->com_state}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" name="com_country" value="{{$fetch_all_scheduling->com_country}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Pincode/Zipcode</label>
                                                    <input type="text" class="form-control" name="com_zip_code" value="{{$fetch_all_scheduling->com_zip_code}}">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div>
                                            <h5 style="margin-top:1% !important;">Compliance Office Details</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Compliance officer First Name</label>
                                                    <input type="text" class="form-control" name="compliance_name1" value="{{$fetch_all_scheduling->compliance_name1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Compliance officer Middle  Name</label>
                                                    <input type="text" class="form-control" name="compliance_middle_name1" value="{{$fetch_all_scheduling->compliance_middle_name1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Compliance officer Last Name</label>
                                                    <input type="text" class="form-control" name="compliance_last_name1" value="{{$fetch_all_scheduling->compliance_last_name1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control" name="contact_person_designation1" value="{{$fetch_all_scheduling->contact_person_designation1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" name="compliance_phone_no1" value="{{$fetch_all_scheduling->compliance_phone_no1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" name="compliance_email1" value="{{$fetch_all_scheduling->compliance_email1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 1</label>
                                                    <input type="text" class="form-control" name="compliance_office_address1" value="{{$fetch_all_scheduling->compliance_office_address1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 2</label>
                                                    <input type="text" class="form-control" name="compliance_office_address21" value="{{$fetch_all_scheduling->compliance_office_address21}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 3</label>
                                                    <input type="text" class="form-control" name="compliance_office_address31" value="{{$fetch_all_scheduling->compliance_office_address31}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="com_city1" value="{{$fetch_all_scheduling->com_city1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="com_state1" value="{{$fetch_all_scheduling->com_state1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" name="com_country1" value="{{$fetch_all_scheduling->com_country1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Pincode/Zipcode</label>
                                                    <input type="text" class="form-control" name="com_zip_code1" value="{{$fetch_all_scheduling->com_zip_code1}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <h5 style="margin-top:1% !important;">Details of Branch / Corporate Office</h5>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Address of Branch / Corporate Office</label>
                                                    <input type="text" class="form-control" name="address_of_branch" value="{{$fetch_all_scheduling->address_of_branch}}">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div>
                                            <h5 style="margin-top:1% !important;">List of Personnel (Contact Details)</h5>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Primary Contact1 Name</label>
                                                    <input type="text" class="form-control" name="primary_contact_name1" value="{{$fetch_all_scheduling->primary_contact_name1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Primary Contact1 Designation</label>
                                                    <input type="text" class="form-control" name="primary_contact_designation1" value="{{$fetch_all_scheduling->primary_contact_designation1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Primary Contact1 Phone</label>
                                                    <input type="text" class="form-control" name="primary_contact_phone1" value="{{$fetch_all_scheduling->primary_contact_phone1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Primary Contact1 Email ID</label>
                                                    <input type="text" class="form-control" name="primary_contact_email1" value="{{$fetch_all_scheduling->primary_contact_email1}}">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!--<div class="row">-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Primary Contact2 Name</label>-->
                                        <!--            <input type="text" class="form-control" name="primary_contact_name2">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Primary Contact2 Designation</label>-->
                                        <!--            <input type="text" class="form-control" name="primary_contact_designation2">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Primary Contact2 Phone</label>-->
                                        <!--            <input type="text" class="form-control" name="primary_contact_phone2">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Primary Contact2 Email ID</label>-->
                                        <!--            <input type="text" class="form-control" name="primary_contact_email2">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="row">-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Secondary Contact1 Name</label>-->
                                        <!--            <input type="text" class="form-control" name="secondary_contact_name1">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Secondary Contact1 Designation</label>-->
                                        <!--            <input type="text" class="form-control" name="secondary_contact_designation1">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Secondary Contact1 Phone</label>-->
                                        <!--            <input type="text" class="form-control" name="secondary_contact_phone1">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Secondary Contact1 Email ID</label>-->
                                        <!--            <input type="text" class="form-control" name="secondary_contact_email1">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="row">-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Secondary Contact2 Name</label>-->
                                        <!--            <input type="text" class="form-control" name="secondary_contact_name2">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Secondary Contact2 Designation</label>-->
                                        <!--            <input type="text" class="form-control" name="secondary_contact_designation2">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Secondary Contact2 Phone</label>-->
                                        <!--            <input type="text" class="form-control" name="secondary_contact_phone2">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group row mt-3">-->
                                        <!--        <div class="col-md-12">-->
                                        <!--            <label>Secondary Contact2 Email ID</label>-->
                                        <!--            <input type="text" class="form-control" name="seconday_contact_email2">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Escalation Contact1 Name</label>
                                                    <input type="text" class="form-control" name="escalation_contact_name1" value="{{$fetch_all_scheduling->escalation_contact_name1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Escalation Contact1 Designation</label>
                                                    <input type="text" class="form-control" name="escalation_contact_designation1" value="{{$fetch_all_scheduling->escalation_contact_designation1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Escalation Contact1 Phone</label>
                                                    <input type="text" class="form-control" name="escalation_contact_phone1" value="{{$fetch_all_scheduling->escalation_contact_phone1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Escalation Contact1 Email ID</label>
                                                    <input type="text" class="form-control" name="escalation_contact_email1" value="{{$fetch_all_scheduling->escalation_contact_email1}}">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    <!--    <div class="row">-->
                                    <!--    <div class="col-md-4">-->
                                    <!--        <div class="form-group row mt-3">-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <label>Escalation Contact2 Name</label>-->
                                    <!--                <input type="text" class="form-control" name="escalation_contact_name2">-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-4">-->
                                    <!--        <div class="form-group row mt-3">-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <label>Escalation Contact2 Designation</label>-->
                                    <!--                <input type="text" class="form-control" name="escalation_contact_designation2">-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-4">-->
                                    <!--        <div class="form-group row mt-3">-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <label>Escalation Contact2 Phone</label>-->
                                    <!--                <input type="text" class="form-control" name="escalation_contact_phone2">-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-4">-->
                                    <!--        <div class="form-group row mt-3">-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <label>Escalation Contact2 Email ID</label>-->
                                    <!--                <input type="text" class="form-control" name="escalation_contact_email2">-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Group Email Address (Required for Email Notification)</label>
                                                    <input type="email" class="form-control" name="group_email_address" value="{{$fetch_all_scheduling->group_email_id}}">
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
    
@endsection
