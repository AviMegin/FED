<?php
//connecting to Database
$conn = mysqli_connect("epiz_28383775_bot", "root","", "chatbot") or die("you fucked it");

//getting user message through ajax
$getmesg = msqli_real_escape_string($conn, $_POST['text']);

//check user query to database HttpQueryString
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getmesg%'";
$run_query = mysqli_query($conn, $check_data) or die("error in run query");

//if user query matched to databse query we'll show the reply otherwise it go to else
if(mysqli_num_rows($run_query) > 0){
  //fetching replay from the databse according to the user query
  $fetch_data = mysqli_fetch_assoc($run_query);
  //storing replies to a varible which is send to ajax
  $replay = $fetch_data['replies']
  echo $replay;
}else{
  echo "what the hell is that suppose to mean";
}
 ?>
