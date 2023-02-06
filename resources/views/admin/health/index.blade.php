@extends('admin.layouts.app')

@section('title')
<title>Quản lý bài viết thông tin sức khỏe</title>
@endsection

@section('style')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white ps-3" style="display: inline-block;">Danh sách bài viết thông tin sức khỏe</h6>
                    <a href="{{ route('admin.post.create') }}" style="margin-left: 20px;"><span class="badge badge-sm bg-gradient-success">Thêm mới</span></a>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Số thứ tự</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Tiêu đề</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Ngày tạo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($healths as $health)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ $i }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ $health->title }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ date('Y-m-d H:i:s', strtotime($health->created_at)) }}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.health.show', $health->id) }}" class="btn btn-info">Sửa</a>
                                        <a onclick="return confirm('Are you sure?')" href="{{ route('admin.health.delete', $health->id) }}" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection