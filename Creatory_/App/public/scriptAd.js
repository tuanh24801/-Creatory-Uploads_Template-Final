
 $(document).ready(function(){
   // admin delete account
  $('.deleteaccount').click(function(){
      var id_acccount = $(this).closest("tr").find("#xoa_id").val();
      swal({
          title: "Xóa tài khoản này?",
          text: "Tài khoản đã xóa không thể khôi phục được!!",
          icon: "warning",
          // buttons: true,
          dangerMode: true,
          buttons: {
              cancel: "Hủy",
              catch: {
                text: "Xác nhận",
                value: "catch",
              },
              
          },
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.post(
                '../Process/Admin/xoataikhoan.php', 
              {
                  id_acccount: id_acccount,
                  delete_btn_set: 1
              },function(data){
                  swal("Đã xóa tài khoản",{
                      icon:"success",
                  }).then((result) =>{
                      location.reload();
                  })
              });
          }
        
        });
    });
    // admin delete temp
  $('.deletetemp').click(function(){
    var id_temp = $(this).closest("tr").find("#xoa_id_temp").val();
    swal({
        title: "Xóa tài khoản này?",
        text: "Tài khoản đã xóa không thể khôi phục được!!",
        icon: "warning",
        // buttons: true,
        dangerMode: true,
        buttons: {
            cancel: "Hủy",
            catch: {
              text: "Xác nhận",
              value: "catch",
            },
            
        },
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.post(
              '../Process/Admin/xoatemp.php', 
            {
                id_temp: id_temp,
                delete_btn_set: 1
            },function(data){
                swal("Đã xóa tài khoản",{
                    icon:"success",
                }).then((result) =>{
                    location.reload();
                })
            });
        }
      
      });
  });
  // Admin them tai khoan
    $('#taotaikhoan').click(function(){
      $hoten = $('.nameinput').val();
      $gmail = $('.gmailinput').val();
      $matkhau = $('.passinput').val();
      $.post(
        '../Process/Admin/themtaikhoan.php',
        {
          hoten: $hoten,
          gmail: $gmail,
          matkhau: $matkhau
        },function(result) {
          $('.inf').html(result);
        }
      );
    });
    



})