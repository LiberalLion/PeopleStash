<?php
    include_once "../../../utils/CommonUtils.php";
    require('Mailchimp.php');

    if(isset($_POST["email"])) {
        $email = $_POST["email"];
        
    	$apiKey = "XXXXX-us3";
        $paidListID = "XXXXX";


        $api = new Mailchimp($apiKey);
        writeToLogs("../../../logs/Mailchimp.txt", "\n\n\n New Mailchimp Interaction! [" . date("Y-m-d h:i:sa", time()) . "]");
        writeToLogs("../../../logs/Mailchimp.txt", "\n ----------------------------------------");


        // add user to list
        try {
            $api->lists->subscribe($paidListID, array('email' => $email, '', '', 'double_optin' => false));
            writeToLogs("../../../logs/Mailchimp.txt", "\n Email successfully added: " . $email);
        }
        catch(Mailchimp_Error $e){
            writeToLogs("../../../logs/Mailchimp.txt", "\n Email unsuccessfully added: " . $e->getMessage());
        }
    }
?>