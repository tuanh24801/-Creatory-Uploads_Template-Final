/* Script */
$(document).ready(function(){
    // đăng kí
    $('#btnsignup').click(function(){
        $ho_ten = $('#username').val();
        $gmail = $('#gmail').val();
        $password = $('#password').val();
        $.post(
            '../Process/dangki.php',
            {
                ho_ten: $ho_ten,
                gmail: $gmail,
                password: $password,
            },function(data){
                $('#note-if-signup').html(data);
            }
        );
    });

    // đăng nhập
    $('#btnsignin').click(function(){
        $gmail = $('#emaillogin').val();
        $password = $('#passlogin').val();
        $.post(
            '../Process/dangnhap.php',
            {
                gmail: $gmail,
                password: $password,
            },function(data){
                if(data == 'đăng nhập thành công'){
                    location.reload();
                }else{
                    $('#note-if-login').html(data);
                }
                
            }
        );
    });

    // xem them trang chu
    $('#xemthem-homepage').click(function(){
        $('#anbot-homepage').removeClass('anbot-homepage');
        $('#xemthem-homepage').addClass('xemthem-homepage');
        $.post(
            '../Process/hienthithem.php',
            {
               
            },function(data){
               $('.mauphobienhienthithem').html(data);
                
            }
        );
    });

    // an bot trang chu
    $('#anbot-homepage').click(function(){
        $('#anbot-homepage').addClass('anbot-homepage');
        $('#xemthem-homepage').removeClass('xemthem-homepage');
        $.post(
            '../Process/anbot.php',
            {
               
            },function(data){
               $('.mauphobienhienthithem').html(data);
                
            }
        );
    });

})