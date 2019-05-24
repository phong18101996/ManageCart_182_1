@extends('layouts.menu')
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <hr id="about">
    <div class="w3-row-padding w3-padding-16 w3-center" id="">
        <div class="container main-div-register">
            <div class=" login-div-parent">

                <div class=" form-login ">
                    <form class="">

                        <label class="w3-text-black "><b>Họ Và Tên</b></label>
                        <input class="w3-input w3-border" type="text">

                        <label class="w3-text-black "><b>Tên Người Dùng</b></label>
                        <input class="w3-input w3-border" type="text">



                        <label class="w3-text-black "><b>Email</b></label>
                        <input class="w3-input w3-border" type="text">

                        <label class="w3-text-black "><b>Mật Khẩu</b></label>
                        <input class="w3-input w3-border" type="text">

                        <label class="w3-text-black "><b>Địa Chỉ</b></label>
                        <textarea class="w3-input w3-border" type="text"></textarea>



                        <button class="w3-btn w3-black">Đăng Kí</button>

                    </form>
                </div>

            </div>
        </div>


    </div>
    <hr id="about">
</div>
@extends('layouts.footer')


</body>
</html>