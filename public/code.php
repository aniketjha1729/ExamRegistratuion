<?php
    require '../includes/header.php';

    use Twilio\Rest\Client;
?>

<?php
    $_SESSION['code']=$code=uniqid();

    $client=new Client($config['account_sid'],$config['auth_token']);

            $client->account->messages->create('+917542958690', ['from'=>$config['phone_number'],'body'=>$code]); 

            echo "message has been sent";

?>
















<?php
    require '../includes/footer.php';
?>