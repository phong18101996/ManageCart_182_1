// $(document).ready(function () {
//     $(".update-cart").click(function () {
//         var rowid = $(this).attr('id');
//         var qty = $(this).parent().parent().find(".qty").val();
//         var token = $("[name='_token']").val();
//         $.ajax({
//             url:'cap-nhat/'+rowid+'/'+ qty,
//             type:'GET',
//             cache:false,
//             data:{"_token":token,"id":rowid,"qty":qty}
//
//
//
//
//         });
//
//
//
//     })
// })

//update cart from product detail
// $(document).ready(function(){
// <?php for($i=1;$i<20;$i++) { ?>
//         $('#upCart<?php echo $i; ?>').on('change keyup',function(){
//             var qty=$('#upCart<?php echo $i; ?>').val();
//             var rowid=$('#rowId<?php echo $i; ?>').val();
//             var proid = $('#proId<?php echo $i; ?>').val();
//             var token = $("[name='_token']").val();
//             if(qty<=0) {
//                 alert('nhỏ hơn số lượng hiện tại');
//             } else {
//                 $.ajax({
//                     type:'GET',
//                     dataType:'html',
//                     url:'cap-nhat/'+rowid+'/'+ qty,
//                     // data:"_token"+ token + "qty=" + newqty + '&rowid=' + rowid + '&proid' + proid ,
//                     data:{"_token":token,"id":rowid,"qty":qty},
//                     success:function (response) {
//                         console.log(response);
//                     }
//                 })
//             }
//         });
//     <?php } ?>
// })



