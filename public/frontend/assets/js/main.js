 var host = window.location.href;
 host = host.split('/');
 var url = host[0] + "//" + host[2] + "/";
$(document).ready(function() {
   $(".main-slideshow").owlCarousel({ 
     autoPlay:true,
      items:1,
      loop:true,
      slideSpeed: 300,
     navigation : true
    });
    $('body').on('click', '#check-tour', function(event) {
       event.preventDefault();
       $("#modalTour").modal();
   });
     $(".tour-detail-img").owlCarousel({ 
     autoPlay:true,
      items:4,
      loop:true,
      slideSpeed: 300,
     // navigation : true
    });
    $("body").on('click', '.img-slide-detail', function(event) {
      event.preventDefault();
      var src=$(this).attr('src');
     $("#img-first-detail").attr({
       src: src
     });
    });

     //select categories
     $('body').on('change', '#cat-tour', function(event) {
       event.preventDefault();
       var id=$('#cat-tour').val();
       var _token = $("#_token").val();
       $.ajax({
       url: url + 'show-destination',
       type: 'post',
       data: {
           id: id,
           _token: _token
       },
       success: function(data) {
        console.log(data);
        var arr=$.parseJSON(data);
        var out='';
      for (var i = 0; i < arr.length; i++) {
        out+='<option value="'+arr[i]["id"]+'">'+arr[i]["name"]+'</option>';
      }
      $("#destination-tour").html(out);
         
       },
       error: function() {}
   });
     });
});


$("body").on("change", "#cusQuantity", function (event) {
  var price    = $(this).attr("data-price");
  var quantity = parseInt($(this).val());
  var max      = parseInt($(this).attr("max"));
  $(".cusQuantity").html("");
  if(quantity > max) {
    $(".cusQuantity").html(" Số chỗ tối đa cho chọn: " + max);
    quantity = max;
    $(this).val(max);
  }
  $(".tbody").html('');
  for(var i = 0; i< quantity; i++) {
    $(".tbody").append('<tr><td><input type="text" name="tourer[name][]" class="form-control "></td><td><input type="text" name="tourer[phone][]" class="form-control "></td><td><input type="date" name="tourer[birthday][]" class="form-control "></td><td><select class="form-control" name="tourer[gender][]"><option value="0">Nam</option><option value="1">Nữ</option></select></td><td><input type="text" name="tourer[address][]" class="form-control "></td><td>'+formatNumber(price)+' VNĐ</td></tr>');
  }
  $("#total_price").html(formatNumber(quantity*price)+"VNĐ");
  $("input[name='quantity_tourer']").val(quantity);
  $("input[name='price']").val(quantity*price);

});

function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
}
