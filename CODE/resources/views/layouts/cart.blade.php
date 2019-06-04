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
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Tổng</th>
                <th></th>

            </tr>
                <form method="post" action="">
                    <input name="_token" type="hidden" value="{{ csrf_token()  }}">

                @foreach($content as $vl)
            <tr>
                {{--<td><a href="/id={{$vl->id}}"><img src="{{URL::asset($vl['option']['img'])}}"> </a></td>--}}
                {{--<td><a href="/id={{$vl->id}}"><img src="{URL::asset($vl['options']['img'])}"> </a></td>--}}
                <td>{{$vl->name}}</td>
                <td>{{number_format($vl->price,0,",",".")}}</td>
                <td>
                    <input class="qty" type="text"  value="{{$vl->qty}}"  size="2">

                    <a href="" class="update-cart" id="{{$vl->rowId}}">Thay đổi</a>
                <td>{{number_format($vl->price*$vl->qty,0,",",".")}}</td>

                <td><a href="/xoa-san-pham/{{$vl->rowId}}">Xóa</a> </td>
            </tr>
                @endforeach
                </form>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Tổng : {{$total}} </td>

                <td></td>
            </tr>



        </table>
    </div>

    @endif
       @if(count($content)==0)
            <div class="w3-container">
                <h2>Giỏ hàng trống</h2>
            </div>
        @endif


        {{--end content data cart--}}





    <hr id="about">
        </div>


@extends('layouts.footer')
</body>
</html>