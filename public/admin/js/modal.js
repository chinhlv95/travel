$(document).ready(function() {
   var host=window.location.href;
	host=host.split('/');
	var url=host[0]+"//"+host[2]+"/";
    // user
	$("body").on('click', '#add-user', function(event) {
		var level=$(this).attr("data-check");
		if(level!=1){
         alert("không có quyền thêm user");
		}
		else{
		$("#modal-user").modal().find('#modal-content-user').load(url+"admin/user/add #add-user-form");
	     }
	});

	// add submit user
	$('body').on('submit', '#user-form', function(event) {
		 $.ajax({
           type:$("#user-form").attr('method'),
           url :$("#user-form").attr('action'),
           data:$("#user-form").serialize(), // serializes the form's elements.
           success: function(data)
           {
           	$("#content-table-user").load(" #content-table-user");
           	 $("#modal-users").modal('hide');
            $(".alert-user").html(data.message);
          
           },
             error: function(data){
        // Error...
        var errors = data.responseJSON;

        console.log(errors);
        $("#error-name").html(errors['name']);
        $("#error-email").html(errors['email']);
         }
         });
        event.preventDefault();

	});
	//update submmit user

	$('body').on('submit', '#user-form-update', function(event) {
		 $.ajax({
           type:$("#user-form-update").attr('method'),
           url :$("#user-form-update").attr('action'),
           data:$("#user-form-update").serialize(), // serializes the form's elements.
           success: function(data)
           {
           	console.log(data.message);
           	$('#modal-users').modal('hide')
            alert(data.message);
            
           	 $("#content-table-user").load(" #content-table-user");
            
           },
             error: function(data){
		        var errors = data.responseJSON;
		        console.log(errors);
		        $("#error-name").html(errors['name']);
		        $("#error-email").html(errors['email']);
		         }
		         });
        event.preventDefault();

	});
	// pagination user

	 $('body').on('click', '.pagination a', function(event) {
     	event.preventDefault();
     	var page=$(this).attr('href').split('page=')[1]; 
     	var name = getParameterByName('name'); 
         history.pushState({}, "","admin/user/list?name="+name+"&page="+page);
         $('#content-table-user').load(' #content-table-user');
         
     });
     // delete user
     $('body').on('click', '.delete-user', function(event) {
     	event.preventDefault();
     	var id= this.id;
        var _token=$("#_token").val();
        var notification=confirm("are you delete item");
        if(notification){
     	$.ajax({
     		url: url+'admin/user/delete',
     		type: 'post',
     		data: {id: id,_token:_token},
     		success:function (data) {
     		alert(data.message);
     	    $("#content-table-user").load(" #content-table-user");
     		},
     		error:function() {
     			
     		}
     	});
     }
     });
     // filter
     $('body').on('keyup', '#search', function(event) {
     	event.preventDefault();
     	 var _token=$("#_token").val();
     	var name=$("#search").val();

     	history.pushState({},"name","admin/user/list?name="+name);
        $("#content-table-user").load(" #content-table-user");
       });
     // modal edit
   $('body').on('click', '.update-user', function(event) {
   	event.preventDefault();
   	/* Act on the event */
   	 var id=this.id;
      var _token=$("#_token").val();
     	$.ajax({
     		url: url+'admin/user/edit/'+id,
     		type: 'get',
     		data: {_token:_token},
     		success:function (data) {
     	      if(data==0)
     	      {
     	      	alert("bạn không có quyền sửa");
     	      }
     	      else
     	      {
          	   $("#modal-user").modal().find('#modal-content-user').load(url+"admin/user/edit/"+id+" #edit-user-form");
     	      }
     		
     		},
     		error:function() {
     			
     		}
     	});
   });

});
// getquery param url
 function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return '';
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}