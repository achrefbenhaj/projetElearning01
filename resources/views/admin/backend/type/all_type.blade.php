@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"> 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                  <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">All type</li>
               </ol>
             </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
           <a href="{{ route('add.type') }}" class="btn btn-primary px-5" class="btn btn-primary px-5">Add type </a>  
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
  
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                              <th>Sl</th>
                              <th>Type Image </th>
                              <th>type Name</th> 
                               <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($type as $key=> $item) 
                        <tr>
                 <td>{{ $key+1 }}</td>
                 <td> <img src="{{ asset($item->image) }}" alt="" style="width: 70px; height:40px;"> </td>
                 <td>{{ $item->type_name }}</td>  
                 <td>
       <a href="{{ route('edit.type',$item->id) }}" class="btn btn-info px-5">Edit </a>   
       <a href="{{ route('delete.type',$item->id) }}" class="btn btn-danger px-5">Delete </a>                    
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>




</div>