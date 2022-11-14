@extends('admin.layouts.app')

@section('title')
<title>Chi tiết tư vấn</title>
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
                    <h6 class="text-white ps-3" style="display: inline-block;">Chi tiết thông tin tư vấn</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="card-body" style="width: 50%">
                            <div class="form-group">
                              <label for="name">Họ tên</label>
                              <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" disabled>
                            </div><br>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" disabled>
                            </div><br>
                            <div class="form-group">
                              <label for="phone">Điện thoại</label>
                              <input type="phone" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" disabled>
                            </div><br>
                            <div class="form-group">
                              <label for="address">Địa chỉ</label>
                              <input type="address" class="form-control" id="address" name="address" value="{{ $contact->address }}" disabled>
                            </div><br>
                            <div class="form-group">
                              <label for="content">Vấn đề quan tâm</label>
                              <input type="content" class="form-control" id="content" name="content" value="{{ $contact->content }}" disabled>
                            </div><br>
                            <div class="form-group">
                              <label for="know">Biết qua</label>
                              <input type="know" class="form-control" id="know" name="know" value="{{ $contact->know }}" disabled>
                            </div><br>
                            <a href="{{ route('admin.contact') }}"><button class="btn btn-primary">Quay lại</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection