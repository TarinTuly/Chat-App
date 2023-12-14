<?php
  $conn=mysqli_connect("localhost","root","","chatapp");
  if(!$conn){
    echo "suuu".mysqli_connect_error();
  }
?>