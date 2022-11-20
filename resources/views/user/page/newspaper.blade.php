@extends('user.layout.main')

@section('title')
<title>Báo chí nói về Megadom</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/user/page/newspaper.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
@endsection

@section('content')
<div class="screen">
    <div class="banner">
        <div class="text-banner">
            <p class="text-small">TRANG CHỦ. TIN TỨC</p>
            <p class="text-bold">Báo chí nói về<br>Megadom</p>
        </div>
    </div>
    <div class="content">
        @foreach($newspapers as $newspaper)
            <div class="body-content">
                <img src="{{ asset('storage/images/newspaper/'.$newspaper->id.'/image.png') }}" style="margin-bottom: 150px" alt="home-penile" class="col-xl-7 col-lg-7 col-sm-12 col-12">
                <div class="col-xl-5 col-lg-5 col-sm-12 col-12" style="margin-bottom: 150px">
                    <h3 class="title-body-content-1">{{ $newspaper->title }}</h3>
                    <hr class="line-header-content" style="margin-left:0">
                    <div style="margin-top:50px; text-align: justify;">
                        <span class="text-body-content-1">{{ $newspaper->short_content }}</span>
                    </div>
                    <button href="#" class="button-QA">
                        <span>TÌM HIỂU THÊM</span>
                    </button>
                </div>
            </div>
        @endforeach
        <div class="col-xl-12 col-lg-12 col-sm-12 col-12">{{ $newspapers->links('pagination.default') }}</div>
    </div>
</div>
@endsection