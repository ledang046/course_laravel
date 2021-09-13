@extends("layouts.layout")

@section("do-du-lieu")
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/product.css') }}">
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Products</h1>
        </div>
        <div class="panel-body">
        <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div class="row mt-3">
                <div class="col-md-1">Name</div>
                <div class="col-md-8">
                    <input type="text" value="{{ isset($record->name)?$record->name:'' }}" name="name" class="form-control" required>
                </div>
            </div>
            <!-- Name end -->

            <!-- Parent_id -->
            <div class="row mt-3">
                <div class="col-md-1">Course</div>
                <div class="col-md-3">
                    <select class="custom-select" name="parent_id">
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <!-- Parent_id end -->

            <!-- Price & display -->
            <div class="row mt-3">
                <div class="col-md-1">Price</div>
                <div class="col-md-3">
                    <input class="form-control" type="text" name="price" placeholder="VND" required>
                </div>
                <div class="col-md-1">Display</div>
                <div class="col-md-3">
                    <input type="checkbox" class="form-check-input" name="display">
                </div>
            </div>
            <!-- Price & display end-->
            
            <!-- Description -->
            <div class="row mt-3">
                <div class="col-md-1">Descript</div>
                <div class="col-md-6">
                    <textarea class="form-control" name ="description" rows="4"></textarea>
                </div>
            </div>
            <!-- Description end -->
            
            <!-- Created & updated -->
            <div class="row mt-3">
                <div class="col-md-1">Created</div>
                <div class="col-md-3">
                    <input type="datetime-local" value="" name="created_at" class="form-control" required>
                </div>
                <div class="col-md-1 ml-2">Updated</div>
                <div class="col-md-3">
                    <input type="datetime-local" value="" name="updated_at" class="form-control" required>
                </div>
            </div>
            <!-- Created & updated end -->
              
            <!-- Button -->
            <div class="row mt-3">
                <div class="col-md-10"></div>
                <div class="col-md-1">
                    <button type="submit" class="btn ml-3 btn_create_update">Save</button>
                </div>
            </div>
            <!-- Button end -->
        </form>
        </div>
    </div>
</div>
@endsection("do-du-lieu")
