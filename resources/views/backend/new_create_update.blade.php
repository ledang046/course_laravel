@extends("layouts.layout")

@section("do-du-lieu")
<script type="text/javascript" src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading"><h4>Edit create news</h4></div>
        <div class="panel-body">
            @if(!isset($record))
            <form method="post" enctype="multipart/form-data" action="{{ $action }}">
                    @else
            <form method="post" enctype="multipart/form-data" action="{{ url('admin/news/'.$record->id) }}">
                @method('PUT')
                    @endif
                <!-- laravel chỉ lấy được dư liệu nếu đã khai báo thẻ token -->
                @csrf
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="{{ isset($record->name)?$record->name:'' }}" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Description</div>
                <div class="col-md-10">
                    <input type="text" value="{{ isset($record->description)?$record->description:'' }}" name="description" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Content</div>
                <div class="col-md-10">
                    <textarea name="content"><?php echo isset($record->content)?$record->content:''; ?></textarea>
                </div>
                <script type="text/javascript">CKEDITOR.replace("content");</script>
            </div>

             <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Display</div>
                <div class="col-md-10">
                <input type="checkbox" @if(isset($record->display)&&$record->display==1) checked @endif name="display" id="display"> <label for="display">Display news</label>
                </div>
            </div>
              <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Upload image</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
             </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>
@endsection("do-du-lieu")