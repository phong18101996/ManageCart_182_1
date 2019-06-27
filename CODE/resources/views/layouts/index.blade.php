
@extends('layouts.menu')

<!-- !PAGE CONTENT! -->


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:120px">
    <hr id="about">
    {{--phần đầu--}}
    @if(!empty($valueType))
        @foreach($valueType as $type)
    <div class="w3-container w3-padding-32 w3-center w3-wide">

        <h2 class="w3-myfont">{{$type->tenTL}}</h2><br>
        <div class="w3-right w3-padding-16 w3-wide">

            <i class="fa fa-arrow-left" id="slick-btn-prev{{$type->id}}"></i>
            <i class="fa fa-arrow-right" id="slick-btn-next{{$type->id}}"></i>

        </div>
        <div class="w3-left w3-padding-16 w3-wide">
            <a href="/loai={{$type->id}}" class="header">
                <p class="w3-myfont">Xem Chi Tiết</p><br>
            </a>


        </div>


    </div>
    {{--end phần đầu--}}



    {{--phần slick slider ở đây--}}
        {{--đổ dữ liệu sản phẩm--}}

    <div class="w3-row-padding w3-padding-16 w3-center" id="slick_slider{{$type->id}}">
        @if(!empty($valueProduct))

            @foreach($valueProduct as $product)
                @if($type->id==$product->idTL)
    <div class="w3-quarter">
    <a href="/id={{$product->code}}">
    <img src="{{URL::asset($product->hinh)}}" alt="Sandwich" style="width:210px;height: 250px">
    </a>
    <h3 class="padding-slider">{{$product->tensp}}</h3>
    <h3 class="padding-slider">{{$product->giasp}}.000 VND</h3>
    <h4 class="padding-slider">

        <form action="/mua-hang/{{$product->code}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" value="{{$product->code}}">

            <button type="submit" class="btn btn-danger">
                <i class="icon-shopping-cart" style="padding: 5px"></i>
                Thêm Vào Giỏ
            </button>
        </form>
    </h4>
    </div>
                @endif
            @endforeach






    </div>
                        <hr id="about">

            @endif
            {{--end đổ dữ liệu sản phẩm--}}
        @endforeach
    @endif
{{--end slick slider--}}




    @extends('layouts.footer')
</div>
</body>
</html>



