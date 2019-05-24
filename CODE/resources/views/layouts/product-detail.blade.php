@extends('layouts.menu')
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <hr id="about">
    <div class="w3-container w3-padding-32 w3-center">
        <h3 class="w3-wide w3-myfont">Chi Tiết Sản Phẩm</h3><br>


    </div>
<footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">

            <a href="#">
                <img src="{{URL::asset('image/ao-thun-nam/ao-thun-nam1.png')}}" alt="Sandwich" style="width:210px;height: 250px">
            </a>



    </div>

    <div class="w3-third">


            <h3><p class="w3-myfont">Tên : </p> Áo Thun Nam</h3>
            <h3><p class="w3-myfont">Giá : </p>150.000 VND</h3>
            <h3><p class="w3-myfont">Số Lượng : </p>
                <select>
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                </select>
            </h3>
            <h3><a href="" class="add-cart">Thêm Vào Giỏ</a> </h3>

    </div>

    <div class="w3-third w3-serif">


        <h3 class="w3-wide w3-myfont">Mô Tả Sản Phẩm</h3>
        <h4 style="padding-left: 15px">Sản phẩm có xuất sứ từ mỹ </h4>
        <h4 style="padding-left: 15px">Áo Có Cổ </h4>
    </div>

</footer>
    <hr id="about">
</div>
@extends('layouts.footer')


</body>
</html>