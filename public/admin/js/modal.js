 var host=window.location.href;
  host=host.split('/');
  var url=host[0]+"//"+host[2]+"/";
$(document).ready(function() {

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
           success: function(data){
             $("#content-table-user").load(" #content-table-user");
             $("#modal-users").modal('hide');
             $(".alert-user").html(data.message);

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
	//update submmit user
	$('body').on('submit', '#user-form-update', function(event) {
   $.ajax({
     type:$("#user-form-update").attr('method'),
     url :$("#user-form-update").attr('action'),
           data:$("#user-form-update").serialize(), // serializes the form's elements.
           success: function(data)
           {
           	alert(data.message);
           $("#modal-user").modal('hide');
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

//===================================Contact=========================================
   // modal contact add
   getModal("#add-contact","#modal-contact","#modal-content-contact","admin/contact/add #add-contact-form");

   // add contact
   $('body').on('submit', '#contact-form', function(event) {
     $.ajax({
       type:$("#contact-form").attr('method'),
       url :$("#contact-form").attr('action'),
           data:$("#contact-form").serialize(), // serializes the form's elements.
           success: function(data){
             $("#content-table-contact").load(" #content-table-contact");
             $("#modal-contact").modal('hide');
             alert(data.message);
           },
           error: function(data){
            var errors = data.responseJSON;
            console.log(errors);
            $("#error-name").html(errors['name']);
            $("#error-phone").html(errors['phone']);
            $("#error-address").html(errors['address']);
          }
        });
     event.preventDefault();
   });
   // get modal contact update
   getModalPost(".update-contact","#modal-contact","#modal-content-contact","#edit-contact-form","admin/contact/edit/");
  //update contact
   $('body').on('submit', '#contact-form-edit', function(event) {
     $.ajax({
       type:$("#contact-form-edit").attr('method'),
       url :$("#contact-form-edit").attr('action'),
           data:$("#contact-form-edit").serialize(), // serializes the form's elements.
           success: function(data){
             $("#content-table-contact").load(" #content-table-contact");
             $("#modal-contact").modal('hide');
             alert(data.message);
           },
           error: function(data){
            var errors = data.responseJSON;
            console.log(errors);
            $("#error-name").html(errors['name']);
            $("#error-phone").html(errors['phone']);
            $("#error-address").html(errors['address']);
          }
        });
     event.preventDefault();
   });
    // delete contact
   deleteForm(".delete-contact","admin/contact/delete","#content-table-contact");
    // paginationcontact
   pagination("#content-table-contact","admin/contact/list");


//===================================Price Range ===============================
   //-modal add price prang
   getModal("#add-price-range","#modal-price-range","#modal-content-price-range","admin/price-range/add #add-price-range-form");
   //-add price range
   $('body').on('submit', '#price-range-form', function(event) {
     $.ajax({
       type:$("#price-range-form").attr('method'),
       url :$("#price-range-form").attr('action'),
           data:$("#price-range-form").serialize(), // serializes the form's elements.
           success: function(data){
             $("#content-table-price-range").load(" #content-table-price-range");
             $("#modal-price-range").modal('hide');
             alert(data.message);
           },
           error: function(data){
            var errors = data.responseJSON;
            console.log(errors);
            $("#error-from-price").html(errors['from_price']);
            $("#error-to-price").html(errors['from_price']);
          }
        });
     event.preventDefault();
   });
    //pagination price range
     pagination("#content-table-price-range","admin/price-range/list");
   //-update modal
       getModalPost(".update-price-range","#modal-price-range","#modal-content-price-range","#edit-price-range-form","admin/price-range/edit/");
   
   //-update price range
    $('body').on('submit', '#price-range-form-edit', function(event) {

     $.ajax({
       type:$("#price-range-form-edit").attr('method'),
       url :$("#price-range-form-edit").attr('action'),
           data:$("#price-range-form-edit").serialize(), // serializes the form's elements.
           success: function(data){
             $("#content-table-price-range").load(" #content-table-price-range");
             $("#modal-price-range").modal('hide');
             alert(data.message);
           },
           error: function(data){
            var errors = data.responseJSON;
            console.log(errors);
            $("#error-from-price").html(errors['from_price']);
            $("#error-to-price").html(errors['from_price']);
          }
        });
     event.preventDefault();
   });

   // -delete price range
    deleteForm(".delete-price-range","admin/price-range/delete","#content-table-price-range")
//-====================================Pay==========================================
    //modal add
    getModal("#add-pay","#modal-pay","#modal-content-pay","admin/pay/add #add-pay-form");
    //create pay
    $('body').on('submit', '#pay-form', function(event) {
     $.ajax({
       type:$("#pay-form").attr('method'),
       url :$("#pay-form").attr('action'),
           data:$("#pay-form").serialize(), // serializes the form's elements.
           success: function(data){
             $("#content-table-pay").load(" #content-table-pay");
             $("#modal-pay").modal('hide');
             alert(data.message);
           },
           error: function(data){
            var errors = data.responseJSON;
            console.log(errors);
            $("#error-pay").html(errors['name']);
            
          }
        });
     event.preventDefault();
   });
    //pagination
       pagination("#content-table-pay","admin/pay/list");

  //modal edit
  getModalPost(".update-pay","#modal-pay","#modal-content-pay","#edit-pay-form","admin/pay/edit/");
  //edit pay

  // delete pay
  deleteForm(".delete-pay","admin/pay/delete","#content-table-pay")
 
 //update pay
 $('body').on('submit', '#pay-form-edit', function(event) {

     $.ajax({
       type:$("#pay-form-edit").attr('method'),
       url :$("#pay-form-edit").attr('action'),
           data:$("#pay-form-edit").serialize(), // serializes the form's elements.
           success: function(data){
             $("#content-table-pay").load(" #content-table-pay");
             $("#modal-pay").modal('hide');
             alert(data.message);
           },
           error: function(data){
            var errors = data.responseJSON;
            console.log(errors);
            $("#error-pay").html(errors['name']);
         
          }
        });
     event.preventDefault();
   });
 // ===========================================Traffic==============================
 //modal add
    getModal("#add-traffic","#modal-traffic","#modal-content-traffic","admin/traffic/add #add-traffic-form");
    //create traffic
    $('body').on('submit', '#traffic-form', function(event) {
     $.ajax({
       type:$("#traffic-form").attr('method'),
       url :$("#traffic-form").attr('action'),
           data:$("#traffic-form").serialize(), // serializes the form's elements.
           success: function(data){
             $("#content-table-traffic").load(" #content-table-traffic");
             $("#modal-traffic").modal('hide');
             alert(data.message);
           },
           error: function(data){
            var errors = data.responseJSON;
            console.log(errors);
            $("#error-traffic").html(errors['name']);
            
          }
        });
     event.preventDefault();
   });
    //pagination
    pagination("#content-table-traffic","admin/traffic/list");

  //modal edit
  getModalPost(".update-traffic","#modal-traffic","#modal-content-traffic","#edit-traffic-form","admin/traffic/edit/");
  //edit traffic

  // delete traffic
  deleteForm(".delete-traffic","admin/traffic/delete","#content-table-traffic")
 
 //update traffic
 $('body').on('submit', '#traffic-form-edit', function(event) {

     $.ajax({
       type:$("#traffic-form-edit").attr('method'),
       url :$("#traffic-form-edit").attr('action'),
           data:$("#traffic-form-edit").serialize(), // serializes the form's elements.
           success: function(data){
             $("#content-table-traffic").load(" #content-table-traffic");
             $("#modal-traffic").modal('hide');
             alert(data.message);
           },
           error: function(data){
            var errors = data.responseJSON;
            console.log(errors);
            $("#error-traffic").html(errors['name']);
         
          }
        });
     event.preventDefault();
   });















 // ===================================function dùng chung============================
    //get modal add
    function getModal(button,modal,content,urlname)
    {
     $("body").on('click', button, function(event) {
     $(modal).modal().find(content).load(url+urlname);
     });
    }
    // get modal update
     function getModalPost(button,modal,contentModal,contentForm,urlName)
    {
   $('body').on('click', button, function(event) {
      event.preventDefault();
      /* Act on the event */
      var id=this.id;
        $(modal).modal().find(contentModal).load(url+urlName+id+" "+contentForm);
      });
    }
    // pagination
    function pagination(contentTable,urlName)
    {
     $('body').on('click', '.pagination a', function(event) {
    event.preventDefault();
    var page=$(this).attr('href').split('page=')[1]; 
    history.pushState({}, "",urlName+"?page="+page);
    $(contentTable).load(' '+contentTable); 
    });
    }
    // delete
    function deleteForm(btnDelete,urlName,contentTable)
    {
      $('body').on('click',btnDelete, function(event) {
        event.preventDefault();
        var id= this.id;
        var _token=$("#_token").val();
        var notification=confirm("are you delete item");
        if(notification){
          $.ajax({
            url: url+urlName,
            type: 'post',
            data: {id: id,_token:_token},
            success:function (data) {
              alert(data.message);
              $(contentTable).load(" "+contentTable);
            },
            error:function() {

            }
          });
        }
      });
    }
    
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