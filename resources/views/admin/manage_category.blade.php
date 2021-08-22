@extends('admin/layout')
@section('page_title','Manage Category')
@section('category_select','active')
@section('container')
    <h1 class="mb10">Manage Category</h1>
    <a href="{{url('admin/category')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('category.manage_category_process')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="category_name" class="control-label mb-1">Category Name</label>
                                            <input id="category_name" value="{{$category_name}}" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" maxlength="50" pattern="^[a-zA-Z0-9_ ]*$" required>
                                        </div>

                                        
                                        <div class="col-md-4">
                                            <label for="category_slug" class="control-label mb-1">Category Slug</label>
                                            <input id="category_slug" value="{{$category_slug}}" name="category_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" maxlength="1999" pattern="^[a-zA-Z0-9_ ]+$" required >
                                            @error('category_slug')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1"> Image</label>
                                    <input id="category_image" name="category_image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                    @error('category_image')
                                    <div class="alert alert-danger" role="alert">
                                    {{$message}}		
                                    </div>
                                    @enderror

                                    @if($category_image!='')
                                            <a href="{{asset('storage/media/category/'.$category_image)}}" target="_blank"><img width="100px" src="{{asset('storage/media/category/'.$category_image)}}"/></a>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1"> Show in Home Page</label>
                                    <input id="is_home" name="is_home" type="checkbox" {{$is_home_selected}}>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Submit
                                    </button>

                                    <button id="payment-button" type="reset" class="btn btn-lg btn-info btn-block"  value="Reset">
                                        Cancel
                                    </button>
                                </div>
                                <input type="hidden" name="id" value="{{$id}}"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
                        
@endsection
