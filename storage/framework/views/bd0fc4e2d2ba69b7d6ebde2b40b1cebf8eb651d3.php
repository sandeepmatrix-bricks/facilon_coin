<style>
    .valid {
      color: green;
    }
    .invalid {
      color: red;
    }
  </style>
<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">New Scheduling</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="<?php echo e(route('admin.new_service_provider_scheduling_add')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Service Provider Type<span class="text-danger"> *</span></label>
                                                    <select name="type_of_entity" class="form-control">
                                                        <option value="1">Broker</option>
                                                        <option value="3">Portfolio Manager</option>
                                                        <option value="2">Custodian</option>
                                                        <!--<option value="4">Bank</option>-->
                                                        
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
                                                    <input type="date" class="form-control" name="date_of_agreement" value="<?php echo e(old('date_of_agreement')); ?>">
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
                                                    <input type="text" class="form-control" name="place_of_execution" value="<?php echo e(old('place_of_execution')); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Name of Service Provider</label>
                                                    <input type="text" class="form-control" name="name_of_client" value="<?php echo e(old('name_of_client')); ?>">
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
                                                    <input type="text" class="form-control" name="client_registered_office_address" value="<?php echo e(old('client_registered_office_address')); ?>">
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
                                                    <input type="text" class="form-control" name="pan_no" id="pan_no">
                                                    <div id="pan-message"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>TAN No</label>
                                                    <input type="text" class="form-control" name="tan_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>GST No</label>
                                                    <input type="text" class="form-control" name="gst_no" id="gst_no">
                                                    <div id="gst-message"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>CIN No</label>
                                                    <input type="text" class="form-control" name="cin_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>NSE SEBI Register No</label>
                                                    <input type="text" class="form-control" name="nse_sebi_reg_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>NSE F&O SEBI Register No</label>
                                                    <input type="text" class="form-control" name="nse_f_and_o_sebi_reg_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>BSE SEBI Reg No</label>
                                                    <input type="text" class="form-control" name="bse_sebi_reg_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>BSE F&O SEBI Reg No</label>
                                                    <input type="text" class="form-control" name="bse_f_and_o_sebi_reg_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Name of RBI Regulation</label>
                                                    <input type="text" class="form-control" name="rbi_regulation_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>RBI Registration No</label>
                                                    <input type="text" class="form-control" name="rbi_registration_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Name of SEBI Regulation</label>
                                                    <input type="text" class="form-control" name="name_of_sebi_regulation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>SEBI Registration No</label>
                                                    <input type="text" class="form-control" name="sebi_registration_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Exchange Name(s)</label>
                                                    <input type="text" class="form-control" name="exchange_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Segment Name(s)</label>
                                                    <input type="text" class="form-control" name="segment_name">
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
                                                    <input type="text" class="form-control" name="compliance_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Authorized Person Middle  Name</label>
                                                    <input type="text" class="form-control" name="compliance_middle_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Authorized Person Last Name</label>
                                                    <input type="text" class="form-control" name="compliance_last_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control" name="contact_person_designation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" name="compliance_phone_no" id="compliance_phone_no">
                                                    <div id="compliance-phone-message"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Email Address</label>
                                                    <input type="email" class="form-control" name="compliance_email" id="compliance_email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 1</label>
                                                    <input type="text" class="form-control" name="compliance_office_address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 2</label>
                                                    <input type="text" class="form-control" name="compliance_office_address2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 3</label>
                                                    <input type="text" class="form-control" name="compliance_office_address3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="com_city">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="com_state">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" name="com_country">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Pincode/Zipcode</label>
                                                    <input type="text" class="form-control" name="com_zip_code">
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
                                                    <input type="text" class="form-control" name="compliance_name1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Compliance officer Middle  Name</label>
                                                    <input type="text" class="form-control" name="compliance_middle_name1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Compliance officer Last Name</label>
                                                    <input type="text" class="form-control" name="compliance_last_name1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control" name="contact_person_designation1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" name="compliance_phone_no1" id="compliance_phone_no1">
                                                    <div id="compliance-phone-message1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Email Address</label>
                                                    <input type="email" class="form-control" name="compliance_email1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 1</label>
                                                    <input type="text" class="form-control" name="compliance_office_address1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 2</label>
                                                    <input type="text" class="form-control" name="compliance_office_address21">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Office Address Line 3</label>
                                                    <input type="text" class="form-control" name="compliance_office_address31">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="com_city1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="com_state1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" name="com_country1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Pincode/Zipcode</label>
                                                    <input type="text" class="form-control" name="com_zip_code1">
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
                                                    <input type="text" class="form-control" name="address_of_branch">
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
                                                    <label>Primary Contact Name</label>
                                                    <input type="text" class="form-control" name="primary_contact_name1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Primary Contact Designation</label>
                                                    <input type="text" class="form-control" name="primary_contact_designation1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Primary Contact Phone</label>
                                                    <input type="text" class="form-control" name="primary_contact_phone1" id="primary_contact_phone1">
                                                    <div id="primary-phone-message1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Primary Contact Email ID</label>
                                                    <input type="email" class="form-control" name="primary_contact_email1">
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
                                                    <input type="text" class="form-control" name="escalation_contact_name1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Escalation Contact1 Designation</label>
                                                    <input type="text" class="form-control" name="escalation_contact_designation1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Escalation Contact1 Phone</label>
                                                    <input type="text" class="form-control" name="escalation_contact_phone1" id="escalation_contact_phone1">
                                                    <div id="escalation-phone-message1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Escalation Contact1 Email ID</label>
                                                    <input type="email" class="form-control" name="escalation_contact_email1">
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
                                                    <input type="email" class="form-control" name="group_email_address">
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
    <script>
    const panInput = document.getElementById('pan_no');
    const message = document.getElementById('pan-message');

    panInput.addEventListener('keyup', function () {
      const pan = panInput.value.toUpperCase();
      panInput.value = pan; // Force uppercase
      const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]$/;

      if (panRegex.test(pan)) {
        message.textContent = "Valid PAN Number";
        message.className = "valid";
      } else {
        message.textContent = "Invalid PAN Number";
        message.className = "invalid";
      }
    });
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const panInput = document.getElementById('pan_no');
    const gstInput = document.getElementById('gst_no');
    const gstMessage = document.getElementById('gst-message');

    gstInput.addEventListener('keyup', function () {
        const pan = panInput.value.toUpperCase();
        const gst = gstInput.value.toUpperCase();

        panInput.value = pan;
        gstInput.value = gst;

        const gstRegex = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z][1-9A-Z]Z[0-9A-Z]$/;

        if (!gstRegex.test(gst)) {
            gstMessage.textContent = "Invalid GST format";
            gstMessage.className = "invalid";
            return;
        }

        const panInGST = gst.substring(2, 12);

        if (panInGST === pan) {
            gstMessage.textContent = "Valid GST Number and PAN matches";
            gstMessage.className = "valid";
        } else {
            gstMessage.textContent = "PAN does not match GST";
            gstMessage.className = "invalid";
        }
    });
  });
</script>

<script>
    const mobileInput = document.getElementById('compliance_phone_no');
    const mobileMessage = document.getElementById('compliance-phone-message');

    mobileInput.addEventListener('keyup', function () {
      const mobile = mobileInput.value;

      const mobileRegex = /^[6-9][0-9]{9}$/;

      if (mobileRegex.test(mobile)) {
        mobileMessage.textContent = "Valid Mobile Number";
        mobileMessage.className = "valid";
      } else {
        mobileMessage.textContent = "Invalid Mobile Number";
        mobileMessage.className = "invalid";
      }
    });
  </script>
  <script>
    const mobileInput = document.getElementById('compliance_phone_no1');
    const mobileMessage = document.getElementById('compliance-phone-message1');

    mobileInput.addEventListener('keyup', function () {
      const mobile = mobileInput.value;

      const mobileRegex = /^[6-9][0-9]{9}$/;

      if (mobileRegex.test(mobile)) {
        mobileMessage.textContent = "Valid Mobile Number";
        mobileMessage.className = "valid";
      } else {
        mobileMessage.textContent = "Invalid Mobile Number";
        mobileMessage.className = "invalid";
      }
    });
  </script>
  <script>
    const mobileInput = document.getElementById('primary_contact_phone1');
    const mobileMessage = document.getElementById('primary-phone-message1');

    mobileInput.addEventListener('keyup', function () {
      const mobile = mobileInput.value;

      const mobileRegex = /^[6-9][0-9]{9}$/;

      if (mobileRegex.test(mobile)) {
        mobileMessage.textContent = "Valid Mobile Number";
        mobileMessage.className = "valid";
      } else {
        mobileMessage.textContent = "Invalid Mobile Number";
        mobileMessage.className = "invalid";
      }
    });
  </script>
  <script>
    const mobileInput = document.getElementById('escalation_contact_phone1');
    const mobileMessage = document.getElementById('escalation-phone-message1');

    mobileInput.addEventListener('keyup', function () {
      const mobile = mobileInput.value;

      const mobileRegex = /^[6-9][0-9]{9}$/;

      if (mobileRegex.test(mobile)) {
        mobileMessage.textContent = "Valid Mobile Number";
        mobileMessage.className = "valid";
      } else {
        mobileMessage.textContent = "Invalid Mobile Number";
        mobileMessage.className = "invalid";
      }
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\facilon_coin\resources\views/admin/service-providers/new-scheduling.blade.php ENDPATH**/ ?>