@extends('admin.layouts.app')

@section('title')
<title>Quản lý bài báo</title>
@endsection

@section('style')
<style>
    .form-control {
        padding: 5px;
        border: 1px solid #ccc;
    }

    .form-control:focus {
        padding: 5px;
        border: 1px solid #000;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white ps-3" style="display: inline-block;">Thêm mới</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="card-body" style="width: 50%">
                        <form method="POST" action="{{ route('admin.newspaper.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Tiêu đề</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề">
                                @error('title')
                                <span class="mt-4 text-sm" style="color:red">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="short_content">Nội dung ngắn</label>
                                <textarea name="short_content" id="short_content" class="form-control" style="height: 150px;" placeholder="Nội dung ngắn"></textarea>
                                @error('short_content')
                                    <span class="mt-4 text-sm" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="content">Nội dung</label>
                                <textarea name="content" id="content" class="form-control" style="height: 150px;" placeholder="Nội dung"></textarea>
                                @error('content')
                                    <span class="mt-4 text-sm" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="image">Nội dung</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @error('image')
                                    <span class="mt-4 text-sm" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                                <img src="" id="previewHolder" class="form-control" style="display: none;">
                            </div><br>
                            <a href="{{ route('admin.newspaper') }}" class="btn btn-primary">Quay lại</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#previewHolder").css("display", "block");
                $('#previewHolder').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            $("#previewHolder").css("display", "none");
            $('#previewHolder').attr('src', '');
        }
    }

    $("#image").change(function() {
        readURL(this);
    });
</script>
@endsection