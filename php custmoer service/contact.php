<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Art">

    <title>So Annoying</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="bot.css">
    <link rel="stylesheet" href="chatbutton.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


      </head>
      <body>
        <div class="header">
    <h1 class="animate__slideInUp animate__animated">Test Page</h1>
    <p></p>

  <div class="parallax">

  </div>

  <div class="chatbot">
    <div class="chat" id="chat">
      <div class="background"></div>
      <svg class="chat-bubble" width="100" height="100" viewBox="0 0 100 100">
        <g class="bubble">
          <path class="line line1" d="M 30.7873,85.113394 30.7873,46.556405 C 30.7873,41.101961
          36.826342,35.342 40.898074,35.342 H 59.113981 C 63.73287,35.342
          69.29995,40.103201 69.29995,46.784744" />
          <path class="line line2" d="M 13.461999,65.039335 H 58.028684 C
            63.483128,65.039335
            69.243089,59.000293 69.243089,54.928561 V 45.605853 C
            69.243089,40.986964 65.02087,35.419884 58.339327,35.419884" />
        </g>
        <circle class="circle circle1" r="1.9" cy="50.7" cx="42.5" />
        <circle class="circle circle2" cx="49.9" cy="50.7" r="1.9" />
        <circle class="circle circle3" r="1.9" cy="50.7" cx="57.3" />
      </svg>
    </div>
  <div class="wrapper" id="bot">
        <div class="title">Customer service bot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hi! how can I help?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    </div>
  <script src="cursor.js"></script>
  <script src="home.js"></script>
  <script src="Chat.js"></script>
</div>
<script>
      $(document).ready(function(){
          $("#send-btn").on("click", function(){
              $value = $("#data").val();
              $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
              $(".form").append($msg);
              $("#data").val('');

              // start ajax code
              $.ajax({
                  url: 'message.php',
                  type: 'POST',
                  data: 'text='+$value,
                  success: function(result){
                      $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                      $(".form").append($replay);
                      // when chat goes down the scroll bar automatically comes to the bottom
                      $(".form").scrollTop($(".form")[0].scrollHeight);
                  }
              });
          });
      });
  </script>
      </body>
      <footer >
        <div class="footer">
          <p>This is a test website page.<br> Where I (Megin) test out certain features for other websites before applying them</p>
  </div>
      </footer>

      </html>
