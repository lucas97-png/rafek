<?php 

$errors = '';
$myemail = 'rafalbasinski@siatmycat.pl';

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['surname'])|| empty($_POST['message'])) {
    $errors .= "\n Error: all fields are required"; 
}

foreach($_POST as $p) {
    if($p == "") {
        die('Uzupełnij to pole');
    }
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$email_address = $_POST['email'];
$message = $_POST['message'];

if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address)) {
        $errors .= "\n Error: Invalid email address";
    }

if(empty($errors)) {
    $to = $myemail;
    $email_subject = "Contact from: $name . $surname";
    $email_body = "You have recieved a new message." . 
    "Here are the details:\n Name: $name \n " . 
    "Email: $email_address\n Message: \n $message";

    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";

    if(mail($to, $email_subject, $email_body, $headers)) {
        die('<script type="text/javascript">alert("Wiadomość została wysłana");location.replace("index.php")</script>');
    }   
    } else {
        die('<script type="text/javascript">alert("Wiadomość nie została wysłana");location.replace("index.php")</script>');
    };



// 



