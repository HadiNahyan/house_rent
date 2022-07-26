<?php
include "conn.php";
$id=$_GET['id'];
$mob=$_GET['cid'];
$ml=$_GET['ml'];
$nam=$_GET['name'];
$phone=$_GET['pn'];
$fm=$_GET['fm'];
$si=$_GET['soi'];
$res=mysqli_query($link,"select Email from users where Contact='$mob'");
$result = mysqli_fetch_assoc($res);
$to_email = $result['Email'];
$subject = "Booking Request for House no '$id' ";
$body = "Hi, My Name is $nam \nI Want to take Rent of your house.\nI Have $fm family members \nMy Source of income is $si. 
IF your house is still available please let me know. \nhere is my email id- $ml \nThis is my phone Number- '$mob'. \nThank You.";
$headers = "From: renthousinsyl@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
  echo '<script>alert("Request Sent Succesfully, Call directly for urgent booking")</script>';
    ?>
      <script type="text/javascript">
       window.location="showw.php";
     </script>
     <?php
}
else {
    echo "Email sending failed...";
}
?>
