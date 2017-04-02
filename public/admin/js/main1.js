var host= window.location.href;
host    = host.split('/');
var URL = host[0]+"//"+host[2]+"/";

//  Delete

$('body').on('click', '.del', function() {

	var id = $(this).attr("data-id");
	var name = $(this).attr("data-name");
	$(this).parent().parent().remove();
	$.ajax({
		type: "GET",
		url : URL +"admin/"+name+"/delete/"+id,
		success: function()
		{
		}
	});
});

//  Edit

$('body').on('click', '.edit', function(e) {

	e.preventDefault();
	var name = $(this).attr("data-name");
	var id = $(this).attr("data-id");
	$('.modal-dialog').html('');
	$('.modal-dialog').load( URL +"admin/"+name+"/edit/"+id+" .modal-content");
});

//  Add Category

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
           }
         });

});