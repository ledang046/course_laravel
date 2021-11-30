@extends("layouts.layout")

@section("do-du-lieu")
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/category.css') }}">
<script type="text/javascript" src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>

<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Courses</h1>
        </div>
        <div class="panel-body">
        <form method="post" action="{{ $action }}" enctype="multipart/form-data">
            @csrf
            @if(isset($record))
                @method('PUT')
            @endif
            <!-- Name -->
            <div class="row mt-3">
                <div class="col-md-1">Name</div>
                <div class="col-md-8">
                    <input type="text" 
                        value="{{ isset($record->name) ? $record->name:'' }}" 
                        name="name" 
                        class="form-control" 
                        required
                    >
                </div>
            </div>
            <!-- Name end -->

            <!-- Display & price-->
            <div class="row mt-3">
                <div class="col-md-1">Price</div>
                <div class="col-md-3">
                    <input type="text" 
                        value="{{ isset($record->price) ? $record->price:'' }}" 
                        name="price" 
                        class="form-control" 
                        required
                    >
                </div>
                <div class="col-md-1">Display</div>
                <div class="col-md-1">
                    <input type="checkbox" 
                        class="form-check-input" 
                        name="display"
                        @if(isset($record->display))
                            @if($record->display == 1)
                                checked
                            @endif
                        @endif
                    >
                </div>
                <div class="col-md-1">Hot</div>
                <div class="col-md-1">
                    <input type="checkbox" 
                        class="form-check-input" 
                        name="hot"
                        @if(isset($record->hot))
                            @if($record->hot == 1)
                                checked
                            @endif
                        @endif
                    >
                </div>
            </div>

            <!-- Discount -->
            <div class="row mt-3">
                <div class="col-md-1">Discount</div>
                <div class="col-md-8">
                    <input type="text" 
                        value="{{ isset($record->discount) ? $record->discount:'' }}" 
                        name="discount" 
                        class="form-control" 
                        required
                    >
                </div>
            </div>
            <!-- End discount -->
            <!-- Display & price end-->

            <!-- Parent_id-->
            <div class="row mt-3">
                <div class="col-md-1">Project</div>
                <div class="col-md-4">
                    <select class="form-select" aria-label=".form-select-lg example" name="parent_id">
                      @foreach($category as $rows)
                          <option value="{{ $rows->id }}" 
                              {{ isset($record->parent_id) && ($rows->id==$record->parent_id) ? 'selected' : '' }}
                           >
                            {{ $rows->name }}
                           </option>
                      @endforeach
                    </select>
                </div>
            </div>
            <!-- Parend_id end -->
    
            <!-- Description -->
            <div class="row mt-3">
                <div class="col-md-1">Descript</div>
                <div class="col-md-10">
                    <textarea class="form-control" name ="description" rows="4">
                    {{ isset($record->description) ? trim($record->description) : '' }}
                    </textarea>
                </div>
            </div>
            <!-- Description end -->

            <!-- Content -->
            <div class="row mt-3">
                <div class="col-md-1">Content</div>
                <div class="col-md-10">
                    <textarea name="content">
                       <?php echo isset($record->content)?$record->content:''; ?>
                    </textarea>
                </div>
                <script type="text/javascript">CKEDITOR.replace("content");</script>
            </div>
            <!-- Content end -->
            <div class="row mt-3">
                <div class="col-md-1">Upload</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
             </div>
            <!-- Created & updated -->
            @if(isset($record))
            <div class="row mt-3">
                <div class="col-md-1">Created</div>
                <div class="col-md-4">
                    <input type="datetime-local" 
                        value="{{ isset($record->created_at) ? date('Y-m-d\TH:i:s', strtotime($record->created_at)) : '' }}" 
                        name="created_at" 
                        class="form-control" 
                        required
                    >
                </div>
                <div class="col-md-1 ml-2">Updated</div>
                <div class="col-md-4">
                    <input type="datetime-local" value="{{ isset($record->updated_at) ? date('Y-m-d\TH:i:s', strtotime($record->updated_at)) : '' }}" name="updated_at" class="form-control" disabled>
                </div>
            </div>
            @endif
            <!-- Created & updated end -->
              
            <!-- Button -->
            <div class="row mt-3">
                <div class="col-md-9"></div>
                <div class="col-md-1">
                    <a 
                        type="button" 
                        href="{{ route('categories.index') }}" 
                        class="btn ml-3 btn_create_update"
                    >
                        Cancel
                    </a>
                </div>
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
