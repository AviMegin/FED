<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" charset="utf-8"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
   <div class="wrapper">
     <div class="title">
       Online chatbot
     </div>
          <div class="form">
             <div class="bot-inbox inbox">
               <div class="icon"><i class="fas fa-user"></i></div>
              <div class="msg-header"><p>hello bitches</p></div>
             </div>
             <div class="user-inbox inbox">
              <div class="msg-header"><p>im me</p></div>
             </div>

         </div>
         <div class="typing-field">
           <div class="input-data">
             <input id="data" type="text" placeholder="Type something pls...." required>
             <button id="send-button">Send</button>
           </div>
           </div>
     </div>
     <?php
       $(document).ready(function(){
         $("#sent-button").on("click", function(){
           $value = $("#data").val();
           $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+$value +'</p></div></div>';
           $(".form").append($msg);
           $("#data").val('');
           //start ajax code
           $.ajax({
             url: 'message.php',
             type: 'POST',
             data: 'text='+$value
             success: function(result){
               $replay = '<div class="bot-inbox inbox"<div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
               $(".form").append($replay);
               //when chat goes down, scroll goes with it automaticly
               $(".form").scrollTop($(".form")[0].scrollHeight);
             }
           });
         });
       });
     ?>
  </body>
</html>
