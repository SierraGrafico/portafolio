<?php 
if(isset($_POST['submit'])){
    $to = "sierragrafico@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $telefono = $_POST['telefono'];
    $subject = "Correo de sierragrafico.com";
    $subject2 = "Copia del coreo enviado sierragrafico.com";
    $message = $first_name . " " . $last_name .  "con número telefónico " . $telefono . " escribe lo siguiente:" . "\n\n" . $_POST['message'];
    $message2 = "Esta es una copia del mensaje enviado a Sierra Gráfico " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: gracias.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


