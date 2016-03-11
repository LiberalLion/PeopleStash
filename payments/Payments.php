<script src="https://checkout.stripe.com/checkout.js"></script>

<script>
    var handler = StripeCheckout.configure({
        key: 'XXXXX',
        image: 'lib/img/icons/logo.png',
        locale: 'auto',
        token: function(token) {
            $.ajax({
                url: 'payments/PaymentsProcess.php',
                type: 'post',
                data: {tokenID: token.id, email: token.email},
                success: function(data) {
                    console.log(data);
                    if (data == 'success') { // echoing 'success' in PaymentsProcess.php

                       $.ajax({
                            type: "POST",
                            url: "lib/libraries/mailchimp/MailchimpUtils.php" ,
                            data: { email: token.email }
                        });
                   
                        window.open(
                            'https://joeytawadrous.typeform.com/to/WFlB8O',
                            '_blank'
                        );
                    }
                    else {
                        console.log("Card unsuccessfully charged in Payments.php");
                    }
                },
                error: function(data) {
                    console.log("Ajax Error in Payments.php");
                    console.log(data);
                }
            });
        }
    });

    $('#payJoeyMoney').on('click', function(e) {
        handler.open({
            name: 'PeopleStash',
            description: 'One time payment, access Typeform',
            currency: "usd",
            amount: 1000
        });
        e.preventDefault();
    });

    // Close Checkout on page navigation
    $(window).on('popstate', function() {
        handler.close();
    });
</script>