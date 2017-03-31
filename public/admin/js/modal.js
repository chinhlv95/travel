$(document).ready(function() {
	$("body").on('click', '#add-user', function(event) {
		var level=$(this).attr("data-check");
		if(level!=1){
         alert("không có quyền thêm user");
		}
		else{
		$("#modal-user").modal();
	     }
		event.preventDefault();
		
	});
});