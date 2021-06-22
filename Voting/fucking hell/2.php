
<!doctype html>
<html>
    <head>
        <title>Online Poll and Voting System with jQuery AJAX</title>
        <script src='jquery-3.2.1.min.js' type='text/javascript'></script>
        <link href='style.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <div class='container'>

            <!-- Poll -->
            <div id='poll'></div>

        </div>

        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){
            // Check user vote
            checkPoll();
        });

        // Check user vote
        function checkPoll(){

            $.ajax({
                url: 'vote2.php',
                type: 'post',
                data: {request: 1},
                success: function(response){
                    $('#poll').html(response);
                }
            });

        }

        // Save user poll
        function saveVote(){
            var checkedPoll = $("#poll input[name='poll']:checked").val();

            if(checkedPoll != undefined){
                $.ajax({
                    url: 'vote2.php',
                    type: 'post',
                    data: {request: 2,poll: checkedPoll},
                    success: function(response){

                        if(response == 1){
                            checkPoll();
                        }
                    }
                });
            }
        }
        </script>
    </body>
</html>
