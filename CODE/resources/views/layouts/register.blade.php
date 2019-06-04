@extends('layouts.menu')
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-left">
        <a href="/" class="header">
            <h3 class="w3-wide w3-myfont">Về Trang Chủ</h3>
        </a>



    </div>
    <div class="w3-row-padding w3-padding-16 w3-center" id="">
        @if(Session::has('thanhcong'))
            <div class="w3-container w3-padding-32 w3-center">
                <div class="alert alert-success">
                    {{Session::get('thanhcong')}}
                </div>
            </div>
        @endif
        <div class="container main-div-register">
            <div class=" login-div-parent">

                <div class=" form-login ">
                    <form class="" action="{{ URL('registers') }}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        {{--<label class="w3-text-black "><b>Họ Và Tên</b></label>--}}
                        {{--<input class="w3-input w3-border" type="text">--}}

                        <label class="w3-text-black "><b>Tên Người Dùng</b></label>
                        <input class="w3-input w3-border" type="text" name="name">



                        <label class="w3-text-black "><b>Email</b></label>
                        <input class="w3-input w3-border" type="text" name="email">

                        <label class="w3-text-black "><b>Số Điện Thoại</b></label>
                        <input class="w3-input w3-border" type="text" name="mobile">

                        <label class="w3-text-black "><b>Giới Tính</b></label>
                        <input class="w3-input w3-border" type="text" name="gender">

                        <label class="w3-text-black "><b>Mật Khẩu</b></label>
                        <input class="w3-input w3-border" type="password" name="password">

                        <label class="w3-text-black "><b>Nhập Lại Mật Khẩu</b></label>
                        <input class="w3-input w3-border" type="password" name="re_password">

                        <label class="w3-text-black "><b>Địa Chỉ</b></label>
                        <textarea class="w3-input w3-border" type="text" name="address"></textarea>



                        <button class="w3-btn w3-black" type="submit">Đăng Kí</button>

                    </form>
                </div>

            </div>
            @if(count($errors)>0)
            <div class="w3-container w3-padding-32 w3-right">
                <div class="form-row">
                    @foreach($errors->all() as $err)
                    <div class="alert alert-danger">

                            {{$err}}

                    </div>
                    @endforeach
                </div>




            </div>
            @endif



        </div>


    </div>
    <hr id="about">
</div>
@extends('layouts.footer')


</body>
</html>