@extends('admin.layouts.app')

@section('title')
<title>Quản lý admin</title>
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên đầy đủ">
                            </div><br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div><br>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                            </div><br>
                            <div class="form-group">
                                <label for="password_confirmation">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Mật khẩu">
                            </div><br>
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="1">Mở</option>
                                    <option value="0">Khóa</option>
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
                            @error('email')
                                <p class="mt-4 text-sm text-center" style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                            @error('status')
                                <p class="mt-4 text-sm text-center" style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection