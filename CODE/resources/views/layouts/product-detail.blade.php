@extends('layouts.menu')
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:120px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-left">
        <a href="/" class="header">
            <h3 class="w3-wide w3-myfont">Về Trang Chủ</h3>
        </a>



    </div>
    <div class="w3-container w3-padding-32 w3-center">
        <h3 class="w3-wide w3-myfont">Chi Tiết Sản Phẩm</h3><br>


    </div>
<footer class="w3-row-padding w3-padding-32">
    {{--đổ dữ liệu chi tiết sản phẩm--}}
    @if(!empty($valueProductsDetail))
        @foreach($valueProductsDetail as $detail)
    <div class="w3-third">

            <a href="#">
                <img src="{{URL::asset($detail->hinh)}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>



    </div>

    <div class="w3-third">


            <h3><p class="w3-myfont">Tên : </p>{{$detail->tensp}}</h3>
            <h3><p class="w3-myfont">Giá : </p>{{$detail->giasp}}.000 VND</h3>
            <h3><p class="w3-myfont">Số Lượng : </p>
                <select>
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                </select>
            </h3>
            <h3>
                <a href="{!! url('mua-hang',[$detail->code]) !!}" class="add-to-cart" >

                    <i class="icon-shopping-cart"><p style="display:none">Cach</p>
                    </i>Thêm Vào Giỏ</a>
            </h3>

    </div>

    <div class="w3-third w3-serif">


        <h3 class="w3-wide w3-myfont">Mô Tả Sản Phẩm</h3>
        <h4 style="padding-left: 15px">{{$detail->mota}} </h4>

    </div>
        @endforeach
    @endif
{{--end đổ dữ liệu--}}
</footer>
    <hr id="about">
</div>
@extends('layouts.footer')


</body>
</html>