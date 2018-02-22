<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "El Nombre es obligatorio ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "El Email es obligatorio ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "El asunto es obligatorio ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Campo oligatorio ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "adosveinteok@gmail.com";
$Subject = "Nuevo mensaje recibido";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Ha ocurrido un error. Vuelva a intentar más tarde. :(";
    } else {
        echo $errorMSG;
    }
}

?>