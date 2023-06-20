<?php
    
     include_once 'server connection.php';
     
    $NIC = $_POST['nic'];
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $CAddress=$_POST['customer-address'];
    $PhoneNo=$_POST['phone-no'];

    $AccountNo=$_POST['account-no'];
    $Area=$_POST['area-type'];
    $SAddress=$_POST['acount-addres'];
    $AccountType=$_POST['account-type'];
    $QR=$_POST['Qr'];
    

   $sql ="INSERT INTO customer(nic,name,email,address,phone_no)VALUES
   ('$NIC','$Name','$Email','$CAddress','$PhoneNo');";

   $sql1 ="INSERT INTO account(acc_no,area,address,acc_type,qr)VALUES
   ('$AccountNo','$Area','$SAddress','$AccountType','$QR');";
   
   $result = mysqli_query($connect,$sql);
   $result = mysqli_query($connect,$sql1);

   header("Location:customer registration.php?Registration=success");


?>