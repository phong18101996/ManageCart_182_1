
@extends('layouts.menu')

<!-- !PAGE CONTENT! -->


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-center w3-wide">

        <h2 class="w3-myfont">Sản Phẩm Nam</h2><br>




    </div>

    <!-- First Photo Grid-->
{{--test slick slider--}}
<div class="w3-row-padding w3-padding-16 w3-center" id="">
<div class="w3-quarter">
<a href="/chi-tiet">
<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam1.png')}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h4><a href="/chi-tiet" class="header">Áo Thun Nam</a> </h4>
<h3>150.000 VND</h3>
<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
</div>
<div class="w3-quarter">
<a href="#">
<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam2.png')}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h3>Áo Thun Nam</h3>
<h3>150.000 VND</h3>
<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
</div>
<div class="w3-quarter">
<a href="#">
<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam3.png')}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h3>Áo Thun Nam</h3>
<h3>150.000 VND</h3>
<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
</div>
<div class="w3-quarter">
<a href="#">
<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam4.png')}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h3>Áo Thun Nam</h3>
<h3>150.000 VND</h3>
<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
</div>
</div>
{{--close file--}}

<!-- Second Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center">
<div class="w3-quarter">
<a href="#">
<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam5.png')}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h3>Áo Thun Nam</h3>
<h3>150.000 VND</h3>
<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
</div>
<div class="w3-quarter">
<a href="#">
<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam6.png')}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h3>Áo Thun Nam</h3>
<h3>150.000 VND</h3>
<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
</div>
<div class="w3-quarter">
<a href="#">
<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam7.png')}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h3>Áo Thun Nam</h3>
<h3>150.000 VND</h3>
<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
</div>
<div class="w3-quarter">
<a href="#">
<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam8.png')}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h3>Áo Thun Nam</h3>
<h3>150.000 VND</h3>
<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>
</div>
</div>

<!-- Pagination -->
    <div class="w3-center w3-padding-32">
    <div class="w3-bar">
    <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
    <a href="#" class="w3-bar-item w3-black w3-button">1</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
    </div>




    </div>


    <hr id="about">
    {{--end content--}}
<!-- About Section -->





    </div>



    @extends('layouts.footer')
</div>
</body>
</html>



