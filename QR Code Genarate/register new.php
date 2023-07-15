<?php
require_once 'phpqrcode/qrlib.php';

// Database connection details
$host = "localhost";
$dbname = "ceb_e_bill_db";
$username = "root";
$password = "";

// Retrieve customer information from the form
$nic = $_POST['nic'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['customer-address'];
$phone = $_POST['phone-no'];
$area = $_POST['area-type'];
$accountType = $_POST['account-type'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Insert customer information into the database
    $stmt = $conn->prepare("INSERT INTO customer (nic, name, email, address, phone_no) VALUES (:nic, :name, :email, :address, :phone)");
    $stmt->bindParam(':nic', $nic);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();

    // Generate QR code
    $qrCodeFilePath = "QR_Images/customers_qr" . $nic . ".jpg";


    QRcode::png($nic, $qrCodeFilePath, QR_ECLEVEL_H, 10);

    // Insert account information into the database
    $stmt1 = $conn->prepare("INSERT INTO account (area, acc_type, qr) VALUES (:area, :accountType, :qr)");
    $stmt1->bindParam(':area', $area);
    $stmt1->bindParam(':accountType', $accountType);
    $stmt1->bindParam(':qr', $qrCodeFilePath);
    $stmt1->execute();

    echo "QR code generated as $qrCodeFilePath";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
