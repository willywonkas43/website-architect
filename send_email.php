<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $surname = $_POST['surname'];
    $number = $_POST['number'];
    $services = $_POST['services'];
    
    // Let's prepare the message for the e-mail
    $message = "Selam!

    Yeni Bir Müşterin Var:

    İsim: $name
    Soyisim: $surname
    E-mail: $email
    Numara: $number


    Requested services: 
    ";

    foreach($services as $service) {
        $message .= $service . "\n";
    }

    // Send the email to yourself
    mail('mimar_kadir@hotmail.com', 'New Contact Form Message', $message);

    // Redirect to the thank you page upon success
    header('Location: thanks.html');
    exit();
}
?>
