@extends('admin.layouts.app')

@section('title')
<title>Chi tiết bài viết</title>
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
                    <h6 class="text-white ps-3" style="display: inline-block;">Chi tiết bài viết</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="card-body" style="width: 50%">
                        <form method="POST" action="{{ route('admin.post.update', $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tiêu đề</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề" value="{{ old('title', $post->title) }}">
                            </div><br>
                            <div class="form-group">
                                <label for="short_content">Nội dung ngắn</label>
                                <input type="text" class="form-control" id="short_content" name="short_content" placeholder="Nội dung ngắn" value="{{ old('short_content', $post->short_content) }}">
                            </div><br>
                            <div class="form-group">
                                <label for="content">Nội dung</label>
                                <textarea name="content" id="content" class="form-control" style="height: 150px;" placeholder="Nội dung">{{ old('content', $post->content) }}</textarea>
                            </div><br>
                            <div class="form-group">
                                <label for="image">Hình ảnh</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <img src="{{ asset('storage/images/post/'.$post->id.'/image.png') }}" id="previewHolder" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <label for="category_id">Danh mục</label>
                                <select name="category_id" class="form-control" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if($post->category_id == $category->id) selected @endif>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div><br>
                            @error('name')
                                <p class="mt-4 text-sm text-center" style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                            @error('password')
                                <p class="mt-4 text-sm text-center" style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                            @error('password_confirmation')
                                <p class="mt-4 text-sm text-center" style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                            @error('content')
                                <p class="mt-4 text-sm text-center" style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                            @error('category_id')
                                <p class="mt-4 text-sm text-center" style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                            <a href="{{ route('admin.post') }}" class="btn btn-primary">Quay lại</a>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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
                $('#previewHolder').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            $('#previewHolder').attr('src', '');
        }
    }

    $("#image").change(function() {
        readURL(this);
    });
</script>
@endsection