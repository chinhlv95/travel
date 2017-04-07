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
});

$("body").on("change", "#cusQuantity", function (event) {
  var price    = $(this).attr("data-price");
  var quantity = $(this).val();
  var max      = $(this).attr("max");
  $(".tbody").html('');
  for(var i = 0; i< quantity; i++) {
    $(".tbody").append('<tr><td><input type="text" name="tourerName[]" class="form-control "></td><td><input type="text" name="tourerPhone[]" class="form-control "></td><td><input type="date" name="tourerBirthday[]" class="form-control "></td><td><select class="form-control" name="tourerGender[]"><option value="0">Nam</option><option value="1">Nữ</option></select></td><td><input type="text" name="tourerAddress" class="form-control "></td><td>'+formatNumber(price)+' VNĐ</td></tr>');
  }
  $("#total_price").html(formatNumber(quantity*price)+"VNĐ");
  $("input[name='quantity_tourer']").val(quantity);
  $("input[name='price']").val(quantity*price);

});

function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
}