
@extends('layouts.menu')

<!-- !PAGE CONTENT! -->


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-center w3-wide">

        <h2 class="w3-myfont">Sản Phẩm Nam</h2><br>
        <div class="w3-right w3-padding-16 w3-wide">

            <i class="fa fa-arrow-left" id="slick-btn-prev"></i>
            <i class="fa fa-arrow-right" id="slick-btn-next"></i>

        </div>
        <div class="w3-left w3-padding-16 w3-wide">
            <a href="/san-pham" class="header">
                <p class="w3-myfont">Xem Chi Tiết</p><br>
            </a>


        </div>


    </div>



    {{--phần slick slider ở đây--}}
    <div class="w3-row-padding w3-padding-16 w3-center" id="slick_slider">
    <div class="w3-quarter">
    <a href="#">
    <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam1.png')}}" alt="Sandwich" style="width:210px;height: 250px">
    </a>
    <h3 class="padding-slider">Áo Thun Nam</h3>
    <h3 class="padding-slider">150.000 VND</h3>
    <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
    </div>

        <div class="w3-quarter">
            <a href="#">
                <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam2.png')}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>
            <h3 class="padding-slider">Áo Thun Nam</h3>
            <h3 class="padding-slider">150.000 VND</h3>
            <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
        </div>
        <div class="w3-quarter">
            <a href="#">
                <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam3.png')}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>
            <h3 class="padding-slider">Áo Thun Nam</h3>
            <h3 class="padding-slider">150.000 VND</h3>
            <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
        </div>
        <div class="w3-quarter">
            <a href="#">
                <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam4.png')}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>
            <h3 class="padding-slider">Áo Thun Nam</h3>
            <h3 class="padding-slider">150.000 VND</h3>
            <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
        </div>
        <div class="w3-quarter">
            <a href="#">
                <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam5.png')}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>
            <h3 class="padding-slider">Áo Thun Nam</h3>
            <h3 class="padding-slider">150.000 VND</h3>
            <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
        </div>
        <div class="w3-quarter">
            <a href="#">
                <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam6.png')}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>
            <h3 class="padding-slider">Áo Thun Nam</h3>
            <h3 class="padding-slider">150.000 VND</h3>
            <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
        </div>
        <div class="w3-quarter">
            <a href="#">
                <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam7.png')}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>
            <h3 class="padding-slider">Áo Thun Nam</h3>
            <h3 class="padding-slider">150.000 VND</h3>
            <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
        </div>
        <div class="w3-quarter">
            <a href="#">
                <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam8.png')}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>
            <h3 class="padding-slider">Áo Thun Nam</h3>
            <h3 class="padding-slider">150.000 VND</h3>
            <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
        </div>


    </div>
{{--end slick slider--}}

    <hr id="about">
{{--end content--}}
    <!-- About Section -->
    <div class="w3-container w3-padding-32 w3-center w3-wide">

            <h2 class="w3-myfont">Sản Phẩm Nữ</h2><br>
        <div class="w3-right w3-padding-16 w3-wide">

            <i class="fa fa-arrow-left" id="slick-btn-prev2"></i>
            <i class="fa fa-arrow-right" id="slick-btn-next2"></i>

        </div>
        <div class="w3-left w3-padding-16 w3-wide">
            <a href="/san-pham" class="header">
                <p class="w3-myfont">Xem Chi Tiết</p><br>
            </a>


        </div>

        </div>

        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="slick_slider2">

            {{--<div class="w3-quarter">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu1.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
                {{--</a>--}}
                {{--<h3>Áo Thun Nữ</h3>--}}
                {{--<h3>150.000 VND</h3>--}}
                {{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
            {{--</div>--}}
            {{--<div class="w3-quarter">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu2.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
                {{--</a>--}}
                {{--<h3>Áo Thun Nữ</h3>--}}
                {{--<h3>150.000 VND</h3>--}}
                {{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
            {{--</div>--}}
            {{--<div class="w3-quarter">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu3.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
                {{--</a>--}}
                {{--<h3>Áo Thun Nữ</h3>--}}
                {{--<h3>150.000 VND</h3>--}}
                {{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
            {{--</div>--}}
            {{--<div class="w3-quarter">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu4.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
                {{--</a>--}}
                {{--<h3>Áo Thun Nữ</h3>--}}
                {{--<h3>150.000 VND</h3>--}}
                {{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Second Photo Grid-->--}}
        {{--<div class="w3-row-padding w3-padding-16 w3-center">--}}
            {{--<div class="w3-quarter">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu5.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
                {{--</a>--}}
                {{--<h3>Áo Thun Nữ</h3>--}}
                {{--<h3>150.000 VND</h3>--}}
                {{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
            {{--</div>--}}
            {{--<div class="w3-quarter">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu6.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
                {{--</a>--}}
                {{--<h3>Áo Thun Nữ</h3>--}}
                {{--<h3>150.000 VND</h3>--}}
                {{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
            {{--</div>--}}
            {{--<div class="w3-quarter">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu7.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
                {{--</a>--}}
                {{--<h3>Áo Thun Nữ</h3>--}}
                {{--<h3>150.000 VND</h3>--}}
                {{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
            {{--</div>--}}
            {{--<div class="w3-quarter">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu8.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
                {{--</a>--}}
                {{--<h3>Áo Thun Nữ</h3>--}}
                {{--<h3>150.000 VND</h3>--}}
                {{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Pagination -->--}}
        {{--<div class="w3-center w3-padding-32">--}}
            {{--<div class="w3-bar">--}}
                {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>--}}
                {{--<a href="#" class="w3-bar-item w3-black w3-button">1</a>--}}
                {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>--}}
                {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>--}}
                {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>--}}
                {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>--}}
            {{--</div>--}}
            <div class="w3-quarter">
                <a href="#">
                    <img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu1.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                </a>
                <h3 class="padding-slider">Áo Thun Nam</h3>
                <h3 class="padding-slider">150.000 VND</h3>
                <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
            </div>
            <div class="w3-quarter">
                <a href="#">
                    <img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu2.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                </a>
                <h3 class="padding-slider">Áo Thun Nam</h3>
                <h3 class="padding-slider">150.000 VND</h3>
                <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
            </div>
            <div class="w3-quarter">
                <a href="#">
                    <img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu3.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                </a>
                <h3 class="padding-slider">Áo Thun Nam</h3>
                <h3 class="padding-slider">150.000 VND</h3>
                <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
            </div>
            <div class="w3-quarter">
                <a href="#">
                    <img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu4.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                </a>
                <h3 class="padding-slider">Áo Thun Nam</h3>
                <h3 class="padding-slider">150.000 VND</h3>
                <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
            </div>
            <div class="w3-quarter">
                <a href="#">
                    <img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu5.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                </a>
                <h3 class="padding-slider">Áo Thun Nam</h3>
                <h3 class="padding-slider">150.000 VND</h3>
                <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
            </div>
            <div class="w3-quarter">
                <a href="#">
                    <img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu6.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                </a>
                <h3 class="padding-slider">Áo Thun Nam</h3>
                <h3 class="padding-slider">150.000 VND</h3>
                <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
            </div>
            <div class="w3-quarter">
                <a href="#">
                    <img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu7.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                </a>
                <h3 class="padding-slider">Áo Thun Nam</h3>
                <h3 class="padding-slider">150.000 VND</h3>
                <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
            </div>
            <div class="w3-quarter">
                <a href="#">
                    <img src="{{URL::asset('image/ao-thun-nu/ao-thun-nu8.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                </a>
                <h3 class="padding-slider">Áo Thun Nam</h3>
                <h3 class="padding-slider">150.000 VND</h3>
                <h4 class="padding-slider"><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
            </div>




        </div>

        <hr id="about">

    @extends('layouts.footer')
</div>
</body>
</html>



