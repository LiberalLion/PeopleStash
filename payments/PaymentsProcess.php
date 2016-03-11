<?php
    include_once "../utils/CommonUtils.php";


	require_once('../lib/libraries/stripe-php/init.php');
	\Stripe\Stripe::setApiKey('XXXXX');


	if(isset($_POST['tokenID'])) {
		$tokenID = $_POST['tokenID'];
		$email = $_POST['email'];

		try {
            $charge = \Stripe\Charge::create(array(
                'amount' => 1000,
                'currency' => 'usd',
                'card' => $tokenID,
                'description' => 'PeopleStash - One time payment, access Typeform'
            ));


			writeToLogs("../logs/StripePayments.txt", "\n\n\n New Payment! [" . date("Y-m-d h:i:sa", time()) . "]");
    		writeToLogs("../logs/StripePayments.txt", "\n ----------------------------------------");
    		writeToLogs("../logs/StripePayments.txt", "\n Payment: " . $charge);


			echo "success";
            
		} catch(Stripe_CardError $e) { // The card has been declined
            writeToLogs("../logs/StripePayments.txt", "\n Card Error: " . $e);
            writeToLogs("../logs/StripePayments.txt", "\n Card Error(tokenID): " . $tokenID);
		}
	}
?>