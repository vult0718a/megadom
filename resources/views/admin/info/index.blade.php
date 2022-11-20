@extends('admin.layouts.app')

@section('title')
<title>Quản lý thông tin</title>
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
                    <h6 class="text-white ps-3" style="display: inline-block;">Thông tin</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="card-body" style="width: 50%">
                        <form method="POST" action="{{ route('admin.info.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoai" value="{{ old('phone', $info['phone']) }}">
                                @error('phone')
                                    <span class="mt-4 text-sm text-center" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ" value="{{ old('address', $info['address']) }}">
                                @error('address')
                                    <span class="mt-4 text-sm text-center" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                            </div><br>
                            <a href="{{ route('admin') }}" class="btn btn-primary">Quay lại</a>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection