@extends('layouts.menu')
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:120px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-left">
        <a href="/" class="header">
            <h3 class="w3-wide w3-myfont">Về Trang Chủ</h3>
        </a>



    </div>
    <div class="w3-row-padding w3-padding-16 w3-center" >

          <div class="container main-div-login">
              <div class=" login-div-parent">

                  <div class=" form-login ">
                      <form class="" action="{{ URL('login-user') }}" method="post">
                          {{ csrf_field() }}
                          <label class="w3-text-black "><b>Email</b></label>
                          <input class="w3-input w3-border" type="text" name="email">

                          <label class="w3-text-black "><b>Mật Khẩu</b></label>
                          <input class="w3-input w3-border" type="password" name="password">


                          <button class="w3-btn w3-black" type="submit">Đăng Nhập</button>

                      </form>
                  </div>

              </div>
          </div>
        {{----}}


        @if(count($errors)>0)
            <div class="w3-container  w3-center">
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
    <hr id="about">
</div>
@extends('layouts.footer')


</body>
</html>