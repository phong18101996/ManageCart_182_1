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
                <a href="" class="header w3-wide" >Giỏ Hàng</a>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                    <a href="#" class="w3-bar-item w3-button">Link 1</a>
                    <a href="#" class="w3-bar-item w3-button">Link 2</a>
                    <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>
            </div>

        </div>
        <div class="w3-right w3-padding-16 w3-wide">
            <a href="/register" class="header">Đăng Kí</a>
        </div>
        <div class="w3-right w3-padding-16 w3-wide">

            <a href="/login" class="header" >Đăng Nhập</a>

        </div>

        <div class="w3-center w3-padding-16 w3-wide w3-myfont  w3-lobster w3-xxlarge">
           Shopaothun.com.vn
        </div>


    </div>
</div>







