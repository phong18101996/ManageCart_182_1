<!-- Footer -->
<div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
<footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
        <h3 class="w3-wide w3-myfont">Về Chúng Tôi</h3>
        <p  class="w3-large">Cửa Hàng của chúng tôi chuyên cung cấp sĩ lẻ áo thun nam và nữ , hàng chính hãng và cam kết độ tin cậy .</p>
        <p  class="w3-large">Thiết Kế Bởi <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">ntp18.com.vn</a></p>
    </div>

    <div class="w3-third">
        <h3 class="w3-wide w3-myfont">Địa Chỉ</h3>
        <ul class="w3-ul w3-hoverable">
            <li class="w3-padding-16">

                <span class="w3-large">234 Quang Trung , Phường 8 , Quận Gò Vấp , TPHCM</span><br>
                <span  class="w3-large" > Hoạt Động : 8AM-10PM</span>
            </li>
            <li class="w3-padding-16">

                <span class="w3-large">141 Trần Hưng Đạo , Phường 1 , Quận 5 , TPHCM </span><br>
                <span  class="w3-large"> Hoạt Động : 8AM-10PM</span>
            </li>
            <li class="w3-padding-16">

                <span class="w3-large">33/1 Thảo Điền , Phường 5 ,  Quận 2 , TPHCM </span><br>
                <span  class="w3-large"> Hoạt Động : 8AM-10PM</span>
            </li>
            <li class="w3-padding-16">

                <span class="w3-large">322/10 Cộng Hòa , Phường 3 , Quận Tân Bình , TPHCM </span><br>
                <span  class="w3-large"> Hoạt Động : 8AM-10PM</span>
            </li>
        </ul>
    </div>

    <div class="w3-third w3-serif">


        <div class="w3-container w3-white">

            <h3 class="w3-wide w3-myfont">Kết Nối Với Chúng Tôi</h3>
            <p  class="w3-large">Bạn có thể theo dõi hoạt động của chúng tôi bằng cách đăng kí email cho chúng tôi.</p>
            <p><input class="w3-input w3-border " type="text" placeholder="Nhập Email"></p>
            <button type="button" class="w3-button w3-block w3-padding-large w3-black w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Theo Dõi </button>
        </div>

    </div>

</footer>
</div>
<!-- End page content -->


<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

</script>

<script type="text/javascript" src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/index.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
<script>
    $('#slick_slider1').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: $("#slick-btn-prev1"),
        nextArrow: $("#slick-btn-next1")
    });
    $('#slick_slider2').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: $("#slick-btn-prev2"),
        nextArrow: $("#slick-btn-next2")
    });
</script>