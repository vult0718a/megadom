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
                    <h6 class="text-white ps-3" style="display: inline-block;">Chính sửa thông tin admin</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="card-body" style="width: 50%">
                        <form method="POST" action="{{ route('admin.update', $admin->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên đầy đủ" value="{{ old('name', $admin->name) }}">
                                @error('name')
                                    <span class="mt-4 text-sm text-center" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $admin->email) }}">
                                @error('email')
                                    <span class="mt-4 text-sm text-center" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="1" @if($admin->status == 1) selected @endif>Mở</option>
                                    <option value="2" @if($admin->status == 2) selected @endif>Khóa</option>
                                </select>
                                @error('status')
                                    <span class="mt-4 text-sm text-center" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="is_super_admin">Quyền</label>
                                <select name="is_super_admin" class="form-control" id="is_super_admin">
                                    <option value="2" @if($admin->is_super_admin == 2) selected @endif>Admin</option>
                                    <option value="1" @if($admin->is_super_admin == 1) selected @endif>Super Admin</option>
                                </select>
                                @error('is_super_admin')
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