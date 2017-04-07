 var host = window.location.href;
 host = host.split('/');
 var url = host[0] + "//" + host[2] + "/";
 $(document).ready(function() {
     // user
     $("body").on('click', '#add-user', function(event) {
         var level = $(this).attr("data-check");
         if (level != 1) {
             alert("không có quyền thêm user");
         } else {
             $("#modal-user").modal().find('#modal-content-user').load(url + "admin/user/add #add-user-form");
         }
     });
     // add submit user
     createUpdateForm('#user-form', "#content-table-user", "#modal-users");
     //update submmit user
     createUpdateForm('#user-form-update', "#content-table-user", "#modal-user");
     // pagination user
     $('body').on('click', '.pagination-user a', function(event) {
         event.preventDefault();
         var page = $(this).attr('href').split('page=')[1];
         var name = getParameterByName('name');
         history.pushState({}, "", "admin/user/list?name=" + name + "&page=" + page);
         $('#content-table-user').load(' #content-table-user');
     });
     // delete user
     $('body').on('click', '.delete-user', function(event) {
         event.preventDefault();
         var id = this.id;
         var _token = $("#_token").val();
         var notification = confirm("are you delete item");
         if (notification) {
             $.ajax({
                 url: url + 'admin/user/delete',
                 type: 'post',
                 data: {
                     id: id,
                     _token: _token
                 },
                 success: function(data) {
                     alert(data.message);
                     $("#content-table-user").load(" #content-table-user");
                 },
                 error: function() {}
             });
         }
     });
     // filter
     $('body').on('keyup', '#search', function(event) {
         event.preventDefault();
         var _token = $("#_token").val();
         var name = $("#search").val();

         history.pushState({}, "name", "admin/user/list?name=" + name);
         $("#content-table-user").load(" #content-table-user");
     });
     // modal edit
     $('body').on('click', '.update-user', function(event) {
         event.preventDefault();
         /* Act on the event */
         var id = this.id;
         var _token = $("#_token").val();
         $.ajax({
             url: url + 'admin/user/edit/' + id,
             type: 'get',
             data: {
                 _token: _token
             },
             success: function(data) {
                 if (data == 0) {
                     alert("bạn không có quyền sửa");
                 } else {
                     $("#modal-user").modal().find('#modal-content-user').load(url + "admin/user/edit/" + id + " #edit-user-form");
                 }

             },
             error: function() {}
         });
     });

     //===================================Contact=========================================
     // modal contact add
     getModal("#add-contact", "#modal-contact", "#modal-content-contact", "admin/contact/add #add-contact-form");
     // add contact
     createUpdateForm('#contact-form', "#content-table-contact", "#modal-contact");
     // get modal contact update
     getModalPost(".update-contact", "#modal-contact", "#modal-content-contact", "#edit-contact-form", "admin/contact/edit/");
     //update contact
     createUpdateForm('#contact-form-edit', "#content-table-contact", "#modal-contact");
     // delete contact
     deleteForm(".delete-contact", "admin/contact/delete", "#content-table-contact");
     // paginationcontact
     pagination("#pagination-contact", "#content-table-contact", "admin/contact/list");


     //===================================Price Range ===============================
     //-modal add price prang
     getModal("#add-price-range", "#modal-price-range", "#modal-content-price-range", "admin/price-range/add #add-price-range-form");
     //-add price range
     createUpdateForm('#price-range-form', "#content-table-price-range", "#modal-price-range");
     //pagination price range
     pagination("#pagination-price-range", "#content-table-price-range", "admin/price-range/list");
     //-update modal
     getModalPost(".update-price-range", "#modal-price-range", "#modal-content-price-range", "#edit-price-range-form", "admin/price-range/edit/");
     //-update price range
     createUpdateForm('#price-range-form-edit', "#content-table-price-range", "#modal-price-range");

     // -delete price range
     deleteForm(".delete-price-range", "admin/price-range/delete", "#content-table-price-range")
         //-====================================Pay==========================================
         //modal add
     getModal("#add-pay", "#modal-pay", "#modal-content-pay", "admin/pay/add #add-pay-form");
     //create pay
     createUpdateForm('#pay-form', "#content-table-pay", "#modal-pay");
     //pagination
     pagination("#pagination-pay", "#content-table-pay", "admin/pay/list");
     //modal edit
     getModalPost(".update-pay", "#modal-pay", "#modal-content-pay", "#edit-pay-form", "admin/pay/edit/");
     //edit pay
     createUpdateForm('#pay-form-edit', "#content-table-pay", "#modal-pay");
     // delete pay
     deleteForm(".delete-pay", "admin/pay/delete", "#content-table-pay")
         // ===========================================Traffic==============================
         //modal add
     getModal("#add-traffic", "#modal-traffic", "#modal-content-traffic", "admin/traffic/add #add-traffic-form");
     //create traffic
     createUpdateForm("#traffic-form", "#content-table-traffic", "#modal-traffic");
     //pagination
     pagination("#pagination-traffic", "#content-table-traffic", "admin/traffic/list");
     //modal edit
     getModalPost(".update-traffic", "#modal-traffic", "#modal-content-traffic", "#edit-traffic-form", "admin/traffic/edit/");
     // delete traffic
     deleteForm(".delete-traffic", "admin/traffic/delete", "#content-table-traffic")
         //update traffic
     createUpdateForm('#traffic-form-edit', "#content-table-traffic", "#modal-traffic");

     // ===================================function dùng chung============================
     //get modal add
     function getModal(button, modal, content, urlname) {
             $("body").on('click', button, function(event) {
                 $(modal).modal().find(content).load(url + urlname);
             });
         }
         // get modal update
     function getModalPost(button, modal, contentModal, contentForm, urlName) {
             $('body').on('click', button, function(event) {
                 event.preventDefault();
                 /* Act on the event */
                 var id = this.id;
                 $(modal).modal().find(contentModal).load(url + urlName + id + " " + contentForm);
             });
         }
         // pagination
     function pagination(pagination, contentTable, urlName) {
             $('body').on('click', pagination + " a", function(event) {
                 event.preventDefault();
                 var page = $(this).attr('href').split('page=')[1];
                 history.pushState({}, "", urlName + "?page=" + page);
                 $(contentTable).load(" " + contentTable);
             });
         }
         // create-update
     function createUpdateForm(form, contenttable, modal) {
             $('body').on('submit', form, function(event) {
                 $.ajax({
                     type: $(form).attr('method'),
                     url: $(form).attr('action'),
                     data: $(form).serialize(), // serializes the form's elements.
                     success: function(data) {
                         $(contenttable).load(" " + contenttable);
                         $(modal).modal('hide');
                         alert(data.message);

                     },
                     error: function(data) {
                         var errors = data.responseJSON;
                         var keys = Object.keys(errors);
                         var values = Object.values(errors);
                         console.log(errors);
                         for (var i = 0; i < keys.length; i++) {
                             var key = keys[i];
                             var value = values[i][0];
                             $("#error-" + key).html(value);
                         };
                     }
                 });
                 event.preventDefault();
             });
         }
         // delete
     function deleteForm(btnDelete, urlName, contentTable) {
         $('body').on('click', btnDelete, function(event) {
             event.preventDefault();
             var id = this.id;
             var _token = $("#_token").val();
             var notification = confirm("are you delete item");
             if (notification) {
                 $.ajax({
                     url: url + urlName,
                     type: 'post',
                     data: {
                         id: id,
                         _token: _token
                     },
                     success: function(data) {
                         alert(data.message);
                         $(contentTable).load(" " + contentTable);
                     },
                     error: function() {}
                 });
             }
         });
     }
//


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
 // other
$(document).ready(function() {
    $(".order-tr").click(function(){
     $('.order-show').hide();
        if($(this).next().is(":visible")){
            $(this).next().hide();    
        }else{
            $(this).next().show();
        }
  });

});