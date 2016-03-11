<?php
    // error_reporting(~0);
    //ini_set('display_errors', 1);

    function getMailchimp() {
    ?>
        <script type="text/javascript">
            var html =  
            '<!-- Begin MailChimp Signup Form -->' +
            '<div id="mc_embed_signup">' +
            '    <form action="XXXXX" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>' +
            '        <div id="mc_embed_signup_scroll">' +
            '            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>' +
            '            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->' +
            '            <div style="position: absolute; left: -5000px;"><input type="text" name="XXXXX" tabindex="-1" value=""></div>' +
            '            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button white-button">Subscribe</button>' +
            '        </div>' +
            '    </form>' +
            '</div>' +
            ' <!--End mc_embed_signup-->';

            document.write(html);
        </script>
    <?php
    }

    function getSumoMeCode() {
    ?>
        <script src="//load.sumome.com/" data-sumo-site-id="XXXXX" async="async"></script>
    <?php
    }

    function writeToLogs($fileToWrite, $textToWrite) {
        $updatedFile = file_get_contents($fileToWrite);
        $updatedFile .= $textToWrite;
        file_put_contents($fileToWrite, $updatedFile);
    }
?>