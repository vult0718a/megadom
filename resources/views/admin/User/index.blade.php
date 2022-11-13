@extends('admin.layouts.app')

@section('title')
<title>Quản lý admin</title>
@endsection

@section('style')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white ps-3" style="display: inline-block;">Danh sách admin</h6>
                    <a href="{{ route('admin.create') }}" style="margin-left: 20px;"><span class="badge badge-sm bg-gradient-success">Thêm mới</span></a>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Số thứ tự</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Họ tên</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Email</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Quyền</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Trạng thái</th>
                                @if(Auth::user()->is_super_admin == 1)
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Thao tác</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($admins as $admin)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ $i }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ $admin->name }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ $admin->email }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">
                                            @if($admin->is_super_admin == 1)
                                                Super Admin
                                            @else
                                                Admin
                                            @endif
                                        </span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if($admin->status == 1)
                                            <span class="badge badge-sm bg-gradient-success">Mở</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-secondary">Khóa</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if(Auth::user()->is_super_admin == 1)
                                            <a href="{{ route('admin.show', $admin->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        @endif
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