var host= window.location.href;
host    = host.split('/');
var URL = host[0]+"//"+host[2]+"/";
$("div .alert-show").hide();

//  Delete

$('body').on('click', '.del', function() {

	var notification=confirm("Are you sure you want to delete ?");
	if(notification) {
		var id = $(this).attr("data-id");
		var name = $(this).attr("data-name");
		$(this).parent().parent().remove();
		$.ajax({
			type: "GET",
			url : URL +"admin/"+name+"/delete/"+id,
			success: function(data)
			{
				$(".alert").html(data.message);
				$("div .alert-show").slideDown("slow");
            	$("div .alert-show").delay(3000).slideUp();
			}
		});
	}
});

//  Edit

$('body').on('click', '.edit', function(e) {

	e.preventDefault();
	var name = $(this).attr("data-name");
	var id = $(this).attr("data-id");
	$('.modal-dialog').html('');
	$('.modal-dialog').load( URL +"admin/"+name+"/edit/"+id+" .modal-content");
});

//  Add

$('body').on('click', '.add', function(e) {

	e.preventDefault();
	var name = $(this).attr("data-name");
	$('.modal-dialog').html('');
	$('.modal-dialog').load( URL +"admin/"+name+"/add .modal-content");
});

// Submit Form

$('body').on('submit', '#form', function(event) {
	event.preventDefault();
   $.ajax({
            type:$("#form").attr('method'),
            url: $("#form").attr('action'),
            data: $("#form").serialize(), // serializes the form's elements.
            success: function(data)
            {
            	$('.dataTables').load(' #dataTables-detail');
            	$("#myModal").modal("hide");
            	$(".alert").html(data["message"]);
            	$("div .alert-show").show();
            	$("div .alert-show").delay(3000).slideUp();
            },
            error: function(data){
		        var errors = data.responseJSON;
		        var keys = Object.keys(errors);
		        var values = Object.values(errors);
		        for(var i = 0; i<keys.length; i++ ) {
		        	var key = keys[i];
		        	var value = values[i][0];
		        	$("#error-"+key).html(value);
		        }
		    }
        });

});