
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
<h3>{{$products->giasp}}.000 VND</h3>
<h4>
    {{--<a href="{!! url('mua-hang',[$products->code]) !!}" class="add-to-cart" >--}}
        {{--<i class="icon-shopping-cart"><p style="display:none">Cach</p> </i>Thêm Vào Giỏ</a> --}}
    <form action="/mua-hang/{{$products->code}}" method="post">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">
            <i class="icon-shopping-cart" style="padding: 5px"></i>
            Thêm Vào Giỏ
        </button>
    </form>
</h4>
</div>
        @endforeach
        @endif


        {{--end--}}



</div>

{{--close file--}}

<
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



