@extends('layouts.menu')
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:120px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-left">
        <a href="/" class="header">
            <h3 class="w3-wide w3-myfont">Về Trang Chủ</h3>
        </a>



    </div>
    <div class="w3-row-padding w3-padding-16 w3-center">
@if(!empty($valueOrder))
        <div class="container" >
            <h1 style="margin-bottom:30px">Đơn hàng của tôi</h1>
            <table class="table-responsive-2 list" id="order" style="width:100%;margin:0 100px;background-color:#fff;">
                <thead>
                    <tr>
                        <th style="">
                            <span class="hidden-xs hidden-sm hidden-md">Mã đơn hàng</span>
                            <span class="hidden-lg">Code</span>
                        </th>
                        <th style="">Ngày mua</th>
                        
                        <th style="">Tổng tiền</th>
                        <th style="">
                           Trạng thái đơn hàng
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($valueOrder->sortByDesc('date') as $value)
                    <tr>
                        <td><a href="/order-detail/{{$value->id_order}}">MDHHCM{{$value->id_order}}</a></td>
                        <td>{{date('d-m-Y',strtotime($value->date))}}</td>
                        <td >{{$value->total}}.000 VND</td>
                        <td style="">
                            
                                {{$value->status}} 
                        </td>
                    </tr>  
                    @endforeach    
                    @endif         
                </tbody>
            </table>
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