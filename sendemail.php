<?php
require 'vendor/autoload.php';

$email = new \SendGrid\Mail\Mail();
$email->setFrom("aashik.k@albersons.in", "Aashik");
$email->setSubject($_POST['subject']);
$email->addTo($_POST['to']);
$email->addContent("text/plain", $_POST['message']);

$sendgrid = new \SendGrid('Your_API_Key-Here'); //Add your API Key Here

try {
    $response = $sendgrid->send($email);
    if ($response->statusCode() == 202) {
        echo "success";
    } else {
        echo "error";
    }
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
?>
