
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
            <div class="w3-container w3-padding-32 w3-center w3-wide">
                <form action="" method="get">

                    <input type="text" name="keysearch" class="" placeholder="Nhập Tên hoặc Mã" style="margin: 5px 5px">
                    <button type="submit" class="btn btn-danger">Tìm Kiếm</button>
                </form>

            </div>

            <div class="w3-container w3-padding-32 w3-left">
                <h4>Bộ Lọc Nâng Cao</h4>
                <form action="" method="post">
                    <div style="padding: 0 10px" class="filter">
                        <div class="price" style="margin: 15px 10px">
                        <span>Giá:</span>
                            @if(!empty($getMinPrice))

                            <select>
                                <option>{{$getMinPrice}} .000 VND</option>
                            </select>

                            @endif
                        <span>Đến</span>
                            @if(!empty($getMaxPrice))
                            <select>
                                <option>{{$getMaxPrice}} .000 VND</option>
                            </select>
                                @endif
                        </div>
                        <div class="type-product" style="margin: 15px 10px">
                        <span>Thể Loại :</span>
                            <select>
                             @if(!empty($typeInProductPage))
                                 @foreach($typeInProductPage as $typePage)
                             <option>{{$typePage->tenTL}}</option>
                                 @endforeach
                                 @endif

                            </select>
                        </div>
                        <div class="sort-product" style="margin: 15px 10px" >
                            <span>Sắp xếp theo giá :</span>
                                <select>
                                    <option>Tăng Dần</option>
                                    <option>Giảm Dần</option>
                                </select>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn btn-danger" style="margin: 0px 20px">Lọc</button>
                </form>
            </div>

    <!-- First Photo Grid-->
{{--test slick slider--}}
<div class="w3-row-padding w3-padding-16 w3-center" id="">
    @if($valueProducts)
        @foreach($valueProducts as $products)
            dữ liệu
<div class="w3-quarter">
<a href="/id={{$products->code}}">
<img src="{{URL::asset($products->hinh)}}" alt="Sandwich" style="width:210px;height: 250px">
</a>
<h4><a href="" class="header">{{$products->tensp}}</a> </h4>
<h3>{{$products->giasp}}.000 VND</h3>
<h4>
    <a href="{!! url('mua-hang',[$products->code]) !!}" class="add-to-cart" >
        <i class="icon-shopping-cart"><p style="display:none">Cach</p> </i>Thêm Vào Giỏ</a>
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






</div>
        {{--content search--}}
        @if(!empty($getValue))

            @foreach($getValue as $val)
                    <div class="w3-row-padding w3-padding-16 w3-center" id="">

                                {{--dữ liệu--}}
                                <div class="w3-quarter">
                                    <a href="/id={{$val->code}}">
                                        <img src="{{URL::asset($val->hinh)}}" alt="Sandwich" style="width:210px;height: 250px">
                                    </a>
                                    <h4><a href="" class="header">{{$val->tensp}}</a> </h4>
                                    <h3>{{$val->giasp}}.000 VND</h3>
                                    <h4>
                                        {{--<a href="{!! url('mua-hang',[$products->code]) !!}" class="add-to-cart" >--}}
                                        {{--<i class="icon-shopping-cart"><p style="display:none">Cach</p> </i>Thêm Vào Giỏ</a> --}}
                                        <form action="/mua-hang/{{$val->code}}" method="post">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="icon-shopping-cart" style="padding: 5px"></i>
                                                Thêm Vào Giỏ
                                            </button>
                                        </form>
                                    </h4>
                                </div>



                        {{--end--}}



                    </div>
                @endforeach
            @endif
        {{--end content search--}}

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



