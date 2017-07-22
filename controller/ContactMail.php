<?php
require_once 'dashboard.php';

class ContactUs extends DashBoard {

    public function contactus($receiver,$subject,$body,$sender,$name){

        try {
            $to = $receiver;
            $subject = $subject;
            $message = $body;
            $headers = $sender. "\r\n" .
                'Reply-To:'.$sender. "\r\n" .
                'Sender Name-' .$name;
            mail($to, $subject, $message, $headers);

            return "succeed";
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }

}
?>