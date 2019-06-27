@extends('layouts.menu')


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:120px">
    <hr id="about">




    @if(count($content)>0)

    <div class="w3-container">
        <h3>Giỏ Hàng</h3>
        <p>Chi Tiết Giỏ Hàng:</p>

         {{--content data cart--}}
        <table class="w3-table w3-bordered">
            <tr>
                <th>Sản Phẩm</th>

                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Tổng Giá</th>
                <th></th>

            </tr>
                <form method="post" action="">
                    {{ csrf_field() }}
                    {{--<input name="_token" type="hidden" value="{{ csrf_token()  }}">--}}
                    <?php $count=1;  ?>
                @foreach($content as $vl)

            <tr>
                {{--<td><a href="/id={{$vl->id}}"><img src="{{URL::asset($vl->img)}}"> </a></td>--}}
                {{--<td><a href="/id={{$vl->id}}"><img src="{URL::asset($vl['options']['img'])}"> </a></td>--}}
                <td>{{$vl->name}}</td>
                <td>{{$vl->price}}.000 VND</td>
                <td>
                    <input type="hidden" id="rowId<?php echo $count; ?>" value="{{$vl->rowId}}">
                    <input type="hidden" id="proId<?php echo $count; ?>" value="{{$vl->id}}">

                    <input type="number" id="upCart<?php echo $count; ?>" value="{{$vl->qty}}" style="width: 50px">
                    <a href="/gio-hang" class="update-cart" >Cập Nhật</a>
                </td>

                <td>{{$vl->price*$vl->qty}}.000 VND</td>

                <td><a href="/xoa-san-pham/{{$vl->rowId}}">Xóa</a> </td>
                <td></td>
            </tr>
                    <?php  $count++;  ?>
                @endforeach

                </form>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><h4 style="color:black">Thành Tiền :<p style="color:red">{{$total}} 000 VND </p> </h4></td>
                <td> <a href="/xoa-het">Xóa Tất Cả</a> </td>

                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn btn-danger">Tiến Hành Đặt Hàng</button></td>
                <td> </td>

                <td></td>
            </tr>



        </table>
    </div>

    @endif
       @if(count($content)==0)
            <div class="w3-container">
                <div class="w3-row-padding w3-padding-16 w3-center">
                    <img src="{{URL::asset('image/cart-empty.png')}}" alt="Sandwich" style="width:210px;height: 250px">
                <h2>Giỏ hàng trống</h2>
                    <h4><a href="/">Tiếp Tục Mua Sắm</a> </h4>
                </div>
            </div>
        @endif



        {{--end content data cart--}}





    <hr id="about">
        </div>


@extends('layouts.footer')

</body>
</html>