@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">Assign Enviorment & Approve</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="{{route('admin.assign_and_approve_service_provider_submit')}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="scheduling_id" value="{{$scheduling_id}}">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Select Enviroment <span class="text-danger"> *</span></label>
                                                    <select class="form-control" name="env_id">
                                                        <option value="">Select</option>
                                                        @foreach($fetch_all_env as $all_env)
                                                            <option value="{{$all_env->id}}">{{$all_env->env_name}}</option>
                                                        @endforeach
                                                    </select>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Status <span class="text-danger"> *</span></label>
                                                    <select class="form-control" name="sp_status">
                                                        <option value="">Select</option>
                                                        
                                                            <option value="Approved">Approved</option>
                                                            <option value="Not Approved">Not Approved</option>
                                                        
                                                    </select>

                                                    
                                                </div>
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
