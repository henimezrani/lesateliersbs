<?php
if(isset($_POST['submit'])){
    $to = "hk@bsconfection.com";
    $email = $_POST['email'];
    $from = "infos@bsconfection.com";
    $first_name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $first_name . " (" . $email . ") vous a envoyé le message suivant:" . "\n\n" . $_POST['body'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message,$headers);
    header('Location: https://www.lesateliersbs.com/');
    }
?>