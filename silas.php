<?php
     

    if(isset($_POST['submit'])){
         $connect = mysqli_connect('localhost','root','','hngintern');
          if(mysqli_connect_errno()){
              echo'connection failed '. mysqli_connect_error();
              exit();
         } 
     $sql = 'SELECT * FROM password';
     $query = mysqli_query($connect,$sql);
     $row = mysqli_fetch_array($query);
     $password = $row['password'];
     $to = $_POST['to'];
     $full_name = $_POST['full_name'];
     $body = $_POST['body'];
     header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$full_name."&body=".$body."&to=".$to);
    }       
?>

