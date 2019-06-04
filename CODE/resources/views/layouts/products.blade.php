
@extends('layouts.menu')

<!-- !PAGE CONTENT! -->


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:120px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-left">
        <a href="/" class="header">
            <h3 class="w3-wide w3-myfont">Về Trang Chủ</h3>
        </a>



    </div>
    @if(!empty($valueType))
        @foreach($valueType as $type)
    <div class="w3-container w3-padding-32 w3-center w3-wide">

        <h2 class="w3-myfont">{{$type->tenTL}}</h2><br>




    </div>

    <!-- First Photo Grid-->
{{--test slick slider--}}
<div class="w3-row-padding w3-padding-16 w3-center" id="">
    @if($valueProducts)
        @foreach($valueProducts as $products)
            {{--dữ liệu--}}
<div class="w3-quarter">
<a href="/id={{$products->code}}">
<img src="{{URL::asset($products->hinh)}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h4><a href="/chi-tiet" class="header">{{$products->tensp}}</a> </h4>
<h3>{{$products->giasp}}</h3>
<h4><a href="{!! url('mua-hang',[$products->code]) !!}" class="add-to-cart" >
        <i class="icon-shopping-cart"><p style="display:none">Cach</p> </i>Thêm Vào Giỏ</a> </h4>
</div>
        @endforeach
        @endif


        {{--end--}}



</div>

{{--close file--}}

<!-- Second Photo Grid-->
{{--<div class="w3-row-padding w3-padding-16 w3-center">--}}
{{--<div class="w3-quarter">--}}
{{--<a href="#">--}}
{{--<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam5.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
{{--</a>--}}
{{--<h3>Áo Thun Nam</h3>--}}
{{--<h3>150.000 VND</h3>--}}
{{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
{{--</div>--}}
{{--<div class="w3-quarter">--}}
{{--<a href="#">--}}
{{--<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam6.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
{{--</a>--}}
{{--<h3>Áo Thun Nam</h3>--}}
{{--<h3>150.000 VND</h3>--}}
{{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
{{--</div>--}}
{{--<div class="w3-quarter">--}}
{{--<a href="#">--}}
{{--<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam7.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
{{--</a>--}}
{{--<h3>Áo Thun Nam</h3>--}}
{{--<h3>150.000 VND</h3>--}}
{{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
{{--</div>--}}
{{--<div class="w3-quarter">--}}
{{--<a href="#">--}}
{{--<img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam8.png')}}" alt="Sandwich" style="width:210px;height: 250px">--}}
{{--</a>--}}
{{--<h3>Áo Thun Nam</h3>--}}
{{--<h3>150.000 VND</h3>--}}
{{--<h4><a href="" class="add-cart">Thêm Vào Giỏ</a> </h4>--}}
{{--</div>--}}
{{--</div>--}}
        {{--end--}}

<!-- Pagination -->
    {{--<div class="w3-center w3-padding-32">--}}
    {{--<div class="w3-bar">--}}
    {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>--}}
    {{--<a href="#" class="w3-bar-item w3-black w3-button">1</a>--}}
    {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>--}}
    {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>--}}
    {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>--}}
    {{--<a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>--}}
    {{--</div>--}}
    {{--</div>--}}
            <div class="w3-center w3-padding-32">
            {{$valueProducts->links()}}
            </div>

        @endforeach
    @endif


    </div>


    <hr id="about">
    {{--end content--}}
<!-- About Section -->





    </div>



    @extends('layouts.footer')
</div>
</body>
</html>



