<!DOCTYPE html>
<html>
    <head>

      <title>Customer Registration</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" >
    <script>
      function generateQR() {
  var nic = document.getElementById('NIC').value;
  var qrCodeUrl = "generate_qr.php?nic=" + nic;
  var qrCodeImage = document.getElementById('qrCodeImage');
  qrCodeImage.src = qrCodeUrl;
  document.getElementById('qrCodeContainer').style.display = 'block';

  var qrCodeFilePath = "QR_Images/customers_qr" + nic + ".jpg";
  document.getElementById('qrCodeFilePath').value = qrCodeFilePath;
}

    </script>

    </head>
    <body>

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#720F11;">

     <div class="container">
        <a href="" class="navbar-brand main-logo-container">
            <img src="img/CebLogo.png" class="main-logo"> </a>
     </div>
    </nav>

<section class="h-100 gradient-form" style="background-color: #ffffff;">
  <div class="container  py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
     <div class="col-xl-auto">
     <div class="card rounded-2 shadow-lg text-white" style="background-color: #720F11;">
     <div class="row g-0">
 
      <div class="container d-flex justify-content-center align-items-center h-100">
        <div class="login--form-left" style="padding: 20px; margin: 30px;">
        <div class="card-body p-md-5 mx-md-4" style="border: 2px solid yellow; border-radius: 15px; margin: auto;">

        <h1 class="mt-1 mb-1 pb-1" style="text-align: center;">Customer Registration</h1><br>
        <p class="deatail" style="text-align: left;">~Customer deatail~</p>
        
        <form id="registration-Form-ID" action="register new.php" method="post" name="Registration-Form" onsubmit="return validateLogin()" enctype="multipart/form-data">

        <//form id="registration-Form-ID" action="CRegistration.php" method="post" name="Registration-Form" onsubmit="return validateLogin()"> 
        <div class="form-group">
          <label for="NIC" style="color: white;">NIC No:</label>
          <input type="text" id="NIC" name="nic" required class="Registorlogininput" placeholder="NIC Number">
        </div>
        <div class="form-group">
          <label for="Name" style="color: white;">Name:</label>
          <input type="text" id="Name" name="name" required class="Registorlogininput" placeholder="Name">
        </div>

        <div class="form-group">
          <label for="email" style="color: white;">Email:</label>
          <input type="email" id="e-mail" name="email" required class="Registorlogininput" placeholder="email">
        </div>

        <div class="form-group">
          <label for="Address" style="color: white;">Address:</label>
          <input type="text" id="Address" name="customer-address" required class="Registorlogininput" placeholder="Address">
        </div>

        <div class="form-group">
          <label for="phone_no" style="color: white;">Phone No:</label>
          <input type="text" id="phone_no" name="phone-no" required class="Registorlogininput" placeholder="phone No">
        </div>
        <br>
        <p class="deatail" style="text-align: left;">~Account deatail~</p>
    

        <div class="form-group mb-4">
          <label for="user-type" style="color: white;">Area:</label>
          <select id="user-type" name="area-type" class="Registorlogininput">
            <option value="A" style="color: white; background-color: #720F11;">A</option>
            <option value="B" style="color: white; background-color: #720F11;">B</option>
            <option value="C" style="color: white; background-color: #720F11;">C</option>
            <option value="D" style="color: white; background-color: #720F11;">D</option>
            <option value="E" style="color: white; background-color: #720F11;">E</option>
            <option value="F" style="color: white; background-color: #720F11;">F</option>
          </select> 
        </div>

        <div class="form-group">
          <label for="phone_no" style="color: white;">Address:</label>
          <input type="text" id="phone_no" name="acount-addres" required class="Registorlogininput" placeholder="Address">
        </div>

        <div class="form-group mb-4">
          <label for="user-type" style="color: white;">Account Type:</label>
          <select id="user-type" name="account-type" class="Registorlogininput">
            <option value="Home" style="color: white; background-color: #720F11;">Home</option>
            <option value="Business" style="color: white; background-color: #720F11;">Business</option>
            <option value="Religion" style="color: white; background-color: #720F11;">Religion</option>
          </select>
        </div>
         
        
        

     
     <button class="submit-button" type="button" id="GenerateQR" onclick="generateQR()">Generate QR Code</button>
    <div id="qrCodeContainer" style="display: none;">
        <img id="qrCodeImage" src="QR_Images/customers_qr" alt="QR Code">
    </div>
    <input type="hidden" id="qrCodeFilePath" name="qrCodeFilePath">


        <div class="text-center pt-1 mb-1 pb-1">
          <button class="submit-button" type="submit" id="Submit" onclick="">Submit</button>
        </div>
      </>
        </div>
        </div>
        </div>


            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

            
    </body>
</html>