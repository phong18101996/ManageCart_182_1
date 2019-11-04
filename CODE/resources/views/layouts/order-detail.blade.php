@extends('layouts.menu')
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:120px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-left">
        <a href="/" class="header">
            <h3 class="w3-wide w3-myfont">Về Trang Chủ</h3>
        </a>
    </div>
    <div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-left">
        @if(!empty($valueUserAndOrders))
        @if(!empty($valueOrderAndProducts))
        @foreach($valueUserAndOrders as $userAndOrder)
            <h2 class="">Chi tiết đơn hàng #MDHCB{{$userAndOrder->id_Order}} - <strong>{{$userAndOrder->status}}</strong>
            </h2>
            <!-- <a href="/sales/order/history" class="btn-simple">&lt;&lt; Quay lại đơn hàng của tôi</a> -->
            <h2 class="w3-left">Ngày đặt hàng: {{date('d-m-Y H:i:s',strtotime($userAndOrder->date))}}</h2>

            <div class="container w3-left">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class=""> Địa chỉ người nhận </h3>
                        <div class="w3-left">
                            <p class="name" style="font-size:15px">{{$userAndOrder->name}}</p>

                            <p style="font-size:15px">
                                <span>Địa chỉ: </span>{{$userAndOrder->address}} </p>

                            <p style="font-size:15px"><span>Điện thoại:</span> 0{{$userAndOrder->mobile}}</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Hình thức giao hàng</h3>
                        <div class="">
                            <!-- <p>Giao vào Thứ hai, 23/09</p> -->
                            <p class="name" style="text-align:center;font-size:15px">{{$userAndOrder->method}}</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Hình thức thanh toán</h3>
                        <div>
                            <p class="name" style="font-size:15px"> {{$userAndOrder->type}} </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <table class="table-responsive-2 list" id="" style="width:100%;margin-left:66px">
        <thead>
            <tr>
                <th>Mã Sản Phẩm</th>
                <th style="">
                    <span class="hidden-xs hidden-sm hidden-md"> Tên Sản Phẩm</span>
                </th>

                <th style="">Số Lượng </th>
                <th style="">Giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach($valueOrderAndProducts as $_v)
            <tr>
                <td><a>MSP{{$_v->code}}</a></td>
                <td>{{$_v->tensp}}</td>
                <td>{{$_v->qty}}</td>
                <td>{{$_v->giasp}}.000 VND</td>
                <!-- <td style="padding: 10px">
                    <span class="order-status">
                        84.000 VND </span>
                </td> -->
            </tr>
            
            @endforeach
           
            
           
        </tbody>
    </table>
    
    
    <div class="show-total" style="margin:auto">
<h3 style="float:right;margin-right:117px">Tổng Tiền: {{$_v->total}}.000 VND</h3>
    </div>
    
    
    
    

            
            
    @endforeach
            @endif
            @endif
</div>
<hr id="about">
</div>

</div>

@extends('layouts.footer')