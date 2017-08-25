<?php
$host = "localhost";
$username = "intern";
$password = "@hng.intern1";
$db = "hng";
// Create connection
$connection = mysql_connect($host, $username, $password);
$db =  mysql_select_db($db);
// Check connection
if (!$connection) {
    die("Connection failed");
}

     $query = "SELECT * FROM password";
     mysql_query($query) or die('Error querying database.');
     $result = mysql_query($query);
     $row = mysql_fetch_array($result);
     $password = $row['1'];
     if (isset($_POST['submit'])){
        $nfrm_name = $_POST['name'];
        $nfrm_email = $_POST['email'];
        $nfrm_message = $_POST['message'];
        
        $sql = "INSERT INTO password (name, email, message) 
                VALUES ('$nfrm_name', '$nfrm_email', '$nfrm_message')";
        if (!mysql_query($sql,$connection)){
            die('Error: ' . mysql_error());
        }
     } else {
        echo("Kindly use the form to drop your message!");
     };
     $emailID = "williamadetunji@yahoo.com";
     $subject = "from. $nfrm_name . hng/fun";
     $body = <<<EOD
    
       <table cellspacing="0" cellpadding="1" border="1">
          <tbody>
            <tr>
                <td style="padding: 5px 10px;" width="150">Name: </td>
                <td style="padding: 5px 10px;">$nfrm_name</td>
            </tr>
            <tr>
                <td style="padding: 5px 10px;" width="150">Email: </td>
                <td style="padding: 5px 10px;">$nfrm_email</td>
            </tr>
            <tr>
                <t<?php
$host = "localhost";
$username = "intern";
$password = "@hng.intern1";
$db = "hng";
// Create connection
$connection = mysql_connect($host, $username, $password);
$db =  mysql_select_db($db);
// Check connection
if (!$connection) {
    die("Connection failed");
}
$query = "SELECT * FROM password";
mysql_query($query) or die('Error querying database.');
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$password = $row['1'];
if (isset($_POST['submit'])){
    $nfrm_name = $_POST['name'];
    $nfrm_email = $_POST['email'];
    $nfrm_message = $_POST['message'];
    
    $sql = "INSERT INTO password (name, email, message) 
            VALUES ('$nfrm_name', '$nfrm_email', '$nfrm_message')";
    if (!mysql_query($sql,$connection)){
        die('Error: ' . mysql_error());
    }
} else {
    echo("Kindly use the form to drop your message!");
};
$emailID = "williamadetunji@yahoo.com";
$subject = "from. $nfrm_name . hng/fun";
$body = <<<EOD

   <table cellspacing="0" cellpadding="1" border="1">
      <tbody>
        <tr>
            <td style="padding: 5px 10px;" width="150">Name: </td>
            <td style="padding: 5px 10px;">$nfrm_name</td>
        </tr>
        <tr>
            <td style="padding: 5px 10px;" width="150">Email: </td>
            <td style="padding: 5px 10px;">$nfrm_email</td>
        </tr>
        <tr>
            <td style="padding: 5px 10px;" width="150">Message: </td>
            <td style="padding: 5px 10px;">$nfrm_message</td>
        </tr>
      </tbody>
   </table>

EOD;

  header("location: ../sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=williamadetunji@yahoo.com");

  mail($emailID, $subject, $body, header );
  echo "<h4>Thank you, Got your message.</h4>";
?>