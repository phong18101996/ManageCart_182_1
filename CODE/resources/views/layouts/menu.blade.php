<!DOCTYPE html>
<html>
<title>Shop Áo Thun</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">



<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
    .w3-myfont {
        font-family: "Comic Sans MS", cursive, sans-serif;
    }
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
       class="w3-bar-item w3-button">Đóng</a>
    <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Hỗ Trợ </a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Liên Hệ</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
    <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
        <div class="w3-left w3-padding-16 w3-wide">
            <a href="/" class="header w3-wide" >Trang Chủ</a>
        </div>
        <div class="w3-right w3-padding-16">

            {{--<a href="" class="header w3-wide" >Giỏ Hàng</a>--}}
            <div class="w3-dropdown-hover">
                <a href="/gio-hang" class="header w3-wide" >
                    <i class="icon-shopping-cart"></i>
                    Giỏ Hàng





                    {{--<span class="badge">--}}
                        {{--@if(!empty($content))--}}
                            {{--@foreach($content as $qty)--}}
                            {{--{{$qty->qty}}--}}
                            {{--@endforeach--}}
                            {{--@endif--}}
                    {{--</span>--}}
                </a>




                {{--<div class="w3-dropdown-content w3-bar-block w3-border">--}}
                    {{--<div class="w3-bar-item w3-button dropdown-iterms">--}}
                    {{--<table class="w3-table w3-bordered">--}}
                        {{--<tr>--}}
                       {{--<th>Tên</th>--}}
                       {{--<th>Giá</th>--}}
                       {{--<th>Số Lượng</th>--}}
                        {{--</tr>--}}
                        {{--@foreach($content as $item)--}}
                        {{--<tr>--}}
                            {{--<td>{{$item->name}}</td>--}}
                            {{--<td>{{$item->price}}</td>--}}
                            {{--<td>{{$item->qty}}</td>--}}
                        {{--</tr>--}}


                            {{--@endforeach--}}
                    {{--</table>--}}
                        {{----}}
                    {{--</div>--}}
                    {{--<a href="#" class="w3-bar-item w3-button dropdown-iterms"></a>--}}
                    {{--<a href="#" class="w3-bar-item w3-button dropdown-iterms">Link 2</a>--}}
                    {{--<a href="#" class="w3-bar-item w3-button dropdown-iterms">Link 3</a>--}}
                {{--</div>--}}

                {{--@else--}}
                {{--<div class="w3-dropdown-content w3-bar-block w3-border">--}}
                    {{--<p>Giỏ hàng bạn đang trống</p>--}}
                {{--</div>--}}
                    {{--@endif--}}
            </div>

        </div>

        @if(Auth::check())
        <div class="w3-right w3-padding-16 w3-wide">

                <div class="w3-dropdown-hover">
                    <a href="" class="header" ><i class="icon-user"></i>{{Auth::user()->name}}</a>
                    <div class="w3-dropdown-content w3-bar-block w3-border bannel-dropdown">
                        <a href="logout" class="w3-bar-item w3-button dropdown-iterms">Quản Lý Tài Khoản</a>
                        <a href="logout" class="w3-bar-item w3-button dropdown-iterms">Đăng Xuất</a>

                    </div>
                </div>
        </div>

            @else

            <div class="w3-right w3-padding-16 w3-wide">
                <a href="/registers" class="header"><i class="icon-expand-alt"></i>  Đăng Kí</a>
            </div>

            <div class="w3-right w3-padding-16 w3-wide">
                <a href="/login-user" class="header" ><i class="icon-user"></i>  Đăng Nhập</a>
            </div>
            <div class="w3-right w3-padding-16 w3-wide">

            </div>




            @endif


        <div class="w3-center w3-padding-16 w3-wide w3-myfont  w3-lobster w3-xxlarge">
           Shopaothun.com.vn
        </div>



    </div>
    @if(Session::has('flag-cart'))
        <div class="w3-right  w3-wide w3-myfont  w3-lobster " style="margin: auto;margin-right: 93px">


        <div class="alert alert-{{Session::get('flag-cart')}} alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{Session::get('alert-cart')}}
        </div>
        </div>

        @elseif(Session::has('flag'))
        <div class="w3-right  w3-wide w3-myfont  w3-lobster " style="margin: auto;margin-right: 93px">


            <div class="alert alert-{{Session::get('flag')}} alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{Session::get('message')}}
            </div>
        </div>
    @endif

</div>







