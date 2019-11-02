@extends('layouts.menu')
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:120px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-left">
        <a href="/" class="header">
            <h3 class="w3-wide w3-myfont">Về Trang Chủ</h3>
        </a>



    </div>
    <div class="w3-row-padding w3-padding-16 w3-center">

        <div class="container ">
            <h1>Đơn hàng của tôi</h1>
            <table class="table-responsive-2 list" id="order">
                <thead>
                    <tr>
                        <th style="padding: 15px">
                            <span class="hidden-xs hidden-sm hidden-md">Mã đơn hàng</span>
                            <span class="hidden-lg">Code</span>
                        </th>
                        <th style="padding: 15px">Ngày mua</th>
                        <th style="padding: 15px">Sản phẩm</th>
                        <th style="padding: 15px">Tổng tiền</th>
                        <th style="padding: 15px">
                            <span class="hidden-xs hidden-sm hidden-md">Trạng thái <br> đơn hàng</span>
                            <span class="hidden-lg">Trạng thái</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td ><a href="https://tiki.vn/sales/order/view?code=451088731&amp;_lc=Vk4wMzkwMTMwMDI%3D">451088731</a></td>
                        <td >17/09/2019</td>
                        <td >Hạnh Phúc Không Do Trời Định - Bản thông thường</td>
                        <td >42.000đ</td>
                        <td style="padding: 10px">
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=406919649&amp;_lc=Vk4wMzkwMTMwMDI%3D">406919649</a></td>
                        <td>17/09/2019</td>
                        <td>Tại Sao Thầy Bói Nói Đúng...và 02 sản phẩm khác</td>
                        <td>142.500đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=807584817&amp;_lc=Vk4wMzkwMTMwMDI%3D">807584817</a></td>
                        <td>17/09/2019</td>
                        <td>Đời Bạn, Bạn Không Sống, Ai Sống Hộ</td>
                        <td>43.000đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=434114118&amp;_lc=Vk4wMzkwMTMwMDI%3D">434114118</a></td>
                        <td>21/08/2019</td>
                        <td>Đừng Lựa Chọn An Nhàn Khi Còn Trẻ</td>
                        <td>50.778đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=517138835&amp;_lc=Vk4wMzkwMTMwMDI%3D">517138835</a></td>
                        <td>21/08/2019</td>
                        <td>Bạn Không Thông Minh Lắm Đâu</td>
                        <td>64.453đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=344272722&amp;_lc=Vk4wMzkwMTMwMDI%3D">344272722</a></td>
                        <td>30/07/2019</td>
                        <td>Kệ Sách 4 Tầng - Kệ Để Đồ Trang Trí Thông Minh - KS4T</td>
                        <td>105.900đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=580337376&amp;_lc=Vk4wMzkwMTMwMDI%3D">580337376</a></td>
                        <td>29/07/2019</td>
                        <td>Hộp túi chống sốc đa năng đựng phụ kiện công nghệ cáp sạc, tai nghe, sạc dự phòng, mỹ phẩm - Xanh Đen</td>
                        <td>71.000đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=819315963&amp;_lc=Vk4wMzkwMTMwMDI%3D">819315963</a></td>
                        <td>29/07/2019</td>
                        <td>Túi Tiện ích Đa Năng Đựng Phụ Kiện Công Nghệ - Đen</td>
                        <td>92.000đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Đã hủy </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=717893441&amp;_lc=Vk4wMzkwMTMwMDI%3D">717893441</a></td>
                        <td>26/06/2019</td>
                        <td>Nhà Giả Kim</td>
                        <td>48.000đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://tiki.vn/sales/order/view?code=204302135&amp;_lc=Vk4wMzkwMTMwMDI%3D">204302135</a></td>
                        <td>26/06/2019</td>
                        <td>Trí Tuệ Do Thái (Tái Bản 2017)</td>
                        <td>149.000đ</td>
                        <!--                                <td><span class="color--->
                        <!--">-->
                        <!--</span></td>-->
                        <td>
                            <span class="order-status">
                                Giao hàng thành công </span>
                        </td>
                    </tr>
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