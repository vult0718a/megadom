@extends('admin.layouts.app')

@section('title')
<title>Chi tiết ảnh lời chứng thực</title>
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
                    <h6 class="text-white ps-3" style="display: inline-block;">Chi tiết ảnh</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.testimonial.update', $testimonial->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Hình ảnh</label>
                                <input type="file" id="new_image" class="form-control" name="new_image"><br>
                                @if ($testimonial->image)
                                    <img src="{{asset($testimonial->image)}}" width="200">
                                @endif`
                            </div><br>
                            <a href="{{ route('admin.testimonial') }}" class="btn btn-primary">Quay lại</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('/public/ckeditor/ckeditor.js') }}"></script>
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
<script>CKEDITOR.replace('editor1');</script>
@endsection