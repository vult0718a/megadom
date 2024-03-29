@extends('admin.layouts.app')

@section('title')
<title>Quản lý bài viết</title>
@endsection

@section('style')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white ps-3" style="display: inline-block;">Danh sách bài viết</h6>
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">thể loại</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Ngày tạo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($posts as $post)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ $i }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ $post->title }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">
                                            @if ($post->type == 1)
                                            Hỏi đáp chuyên gia
                                            @elseif ($post->type == 2)
                                            Thông tin sức khỏe
                                            @elseif ($post->type == 3)
                                            Câu chuyện khách hàng
                                            @endif
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary font-weight-bold text-xs">{{ date('Y-m-d H:i:s', strtotime($post->created_at)) }}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.post.show', $post->id) }}" class="btn btn-info">Sửa</a>
                                        <a onclick="return confirm('Are you sure?')" href="{{ route('admin.post.delete', $post->id) }}" class="btn btn-danger">Xóa</a>
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