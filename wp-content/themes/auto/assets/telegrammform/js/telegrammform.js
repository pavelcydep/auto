(function ($) {
    $(".contacts__btn").on("click",function(event){
        event.preventDefault();
        var name=$("#text-name").val();
        var phone=$("#phone").val();
      
      
        
      
    if(name == ""){
        $("#error").text("Введите имя");
        return false;
    }
    else if(phone == ""){
        $("#error").text("Введите телефон");
        return false;
    }
   
        
      $.ajax({
        url: "http://wptest/wordpress/wp-content/themes/auto/assets/telegrammform/php/send-message-to-telegramm.php",
        type: "POST",
        dataType:"html",
        data: {'name':name,'phone':phone},
       
       
        success:function(data){
            if(data){
               
                $( ".wpcf7-response-output" ).text( "Сообщение отправлено" );  
                setTimeout(function() { $(".wpcf7-response-output").hide(); }, 2000);
            }
             else{
                $( ".wpcf7-response-output" ).text( "Сообщение не отправлено" );  
                setTimeout(function() { $(".wpcf7-response-output").hide(); }, 2000);
             }
            }
            
      });
    });
  })(jQuery);