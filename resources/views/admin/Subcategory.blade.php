@extends('admin/layout')
@section('page_title','Admin Sub-Category')
@section('container')
    <h1 class="mb10">Add SubCategory</h1>
    <a href="subcategory/manage_subcategory">
        <button type="button" class="btn btn-success">
            Add SubCategory
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>subcategory name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->Subcategory_name}}</td> 
                            <td>
                            <a href="{{url('admin/subcategory/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete </button></a>

                            <a href="{{url('admin/subcategory/manage_subcategory/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit </button></a>

                            </td>
                            
                        
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
                        
@endsection