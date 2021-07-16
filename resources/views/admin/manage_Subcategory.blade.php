@extends('admin/layout')
@section('page_title','Manage Category')
@section('category_select','active')
@section('container')
    <h1 class="mb10">Manage subcategory</h1>
    <a href="{{url('admin/subcategory')}}">
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
                                        <form action="{{route('subcategory.manage_subcategory_process')}}" method="post">
                                            @csrf

                                            <div class="form-group">
                                                     <label for="category_id" class="control-label mb-1"> Category</label>
                                                        <select id="category_id" name="category_id" class="form-control" required>
                                                             <option value="">Select Categories</option>
                                                                @foreach($category as $list)
                                                                    @if($category_id==$list->id)
                                                                        <option selected value="{{$list->id}}">
                                                                    @else
                                                                         <option value="{{$list->id}}">
                                                                   @endif
                                                                     {{$list->category_name}}</option>
                                                                @endforeach
                                                        </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Subcategory_name" class="control-label mb-1">Subcategory Name</label>
                                                <input id="Subcategory_name" value="{{$Subcategory_name}}" name="Subcategory_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('Subcategory_name')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Submit
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
