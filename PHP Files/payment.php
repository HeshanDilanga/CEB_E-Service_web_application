<?php
    
     include_once 'server connection.php';

    $Name = $_POST['full_name'];
    $Email=$_POST['E-mail'];
    $Address=$_POST['Address'];
    $City=$_POST['city'];
    $Card_no=$_POST['card_no'];
    $expiremonth=$_POST['exp_month'];
    $expireyear=$_POST['exp_year'];
    $cvv=$_POST['cvv'];


   $sql ="INSERT INTO payment(name,email,address,city,card_number,exp_month,exp_year,cvv)VALUES
   ('$Name','$Email','$Address','$City','$Card_no','$expiremonth','$expireyear','$cvv');";

   $result = mysqli_query($connect,$sql);

   header("Location:home.php?payment=success");


?>