@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="custom-align">
                                <h5 class="mb-1">All Available Enviroments</h5>
                                <button class="btn btn-xs btn-primary ml-auto" onclick="window.location.href = '{{route('admin.view_add_service_provider')}}'">Add</button>
                            </div>
                            <div class="table-responsive mt-4">
                                <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Enviorment Name</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sr_no = 1;    
                                        @endphp
                                        
                                        @if(count($fetch_all_enviorments) > 0)
                                            @foreach ($fetch_all_enviorments as $all_enviorments)
                                                <tr>
                                                    <td>{{ $sr_no++ }}</td>
                                                    
                                                    <td>{{ $all_enviorments->env_name }}</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-xs btn-warning" title="Edit"><i class="bx bx-pencil" aria-hidden="true"></i></a>

                                                        
                                                    </td>
                                                </tr>  
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-danger text-center">List Is Empty!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-align 
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-align h5 
        {
            margin: 0;
        }

        .custom-align button 
        {
            margin-left: auto;
        }
    </style>
@endsection
				
