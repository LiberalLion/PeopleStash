<?php
    include_once "utils/CommonUtils.php";
    include_once "utils/ContentUtils.php";
?>

<!doctype html>
<html lang="en" class="no-js">
    <head>
    	<?php
            require "lib/libraries/less/lessc.inc.php";
            $less = new lessc;
            $less->checkedCompile("lib/less/Site.less", "lib/less/css/Site.css");
        ?>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="description" content="PeopleStash - A curated list of cool people doing cool things">
        <meta name="keywords" content="curated, website, design, success, inspiration, author, blogger, CEO, designer, entrepreneur, founder, growth hacker, investor, marketer, podcaster, product hunter, product maker">
        <meta name="author" content="Joey Tawadrous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="lib/img/icons/logo.png">
  

        <title>PeopleStash - A curated list of cool people doing cool things</title>


    	<link rel="stylesheet" href="lib/libraries/content-filter/css/reset.css">
    	<link rel="stylesheet" href="lib/libraries/content-filter/css/style.css">
        <link rel="stylesheet" href="lib/less/css/Site.css">
    	<script src="lib/libraries/content-filter/js/modernizr.js"></script>
    </head>


    <body>
    	<header class="cd-header">
            <div class="logo-and-text-container">
                <div class="logo-container">
                    <img src="lib/img/icons/logo.png" alt="people stash logo" />
                </div>
                
                <div class="text-container">
            		<h1>PEOPLE<strong>STASH</strong></h1>
                    <h2>A curated list of cool people doing cool things</h2>
                </div>
            </div>
            
            <div class="payment-container">
                <button class="button white-button" id="payJoeyMoney">Add Person To List</button>
            </div>

            <div id="like-bar">
                <!--<script type="text/javascript" id="embedhunt-53192" class="embedhunt-async-script-loader">
                  (function() {
                    function async_load(){
                      var s = document.createElement('script');
                      s.type = 'text/javascript';
                      s.async = true;
                      var theUrl = '//embedhunt.com/products/53192/widget';
                      s.src = theUrl; 
                      var embedder = document.getElementById('embedhunt-53192');
                      embedder.parentNode.insertBefore(s, embedder);
                    }
                    if (window.attachEvent)
                      window.attachEvent('onload', async_load);
                    else
                      window.addEventListener('load', async_load, false);
                  })();
                </script>-->
            </div>
    	</header>


    	<main class="cd-main-content">
    		<div class="cd-tab-filter-wrapper">
    			<div class="cd-tab-filter">
    				<ul class="cd-filters">
    					<li class="placeholder"> 
    						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
    					</li> 
    					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>

                        <?php
                            $options = array("Author", "Designer", "Investor", "Marketer", "Product Maker");
                            createFilters($options);
                        ?>
    				</ul>
    			</div>
    		</div>


    		<section class="cd-gallery">
    			<ul>
                    <?php getPeople() ?>
 
    				<li class="gap"></li>
    				<li class="gap"></li>
    				<li class="gap"></li>
    			</ul>

    			<div class="cd-fail-message">No results found</div>
    		</section>


    		<div class="cd-filter">
    			<form>
    				<div class="cd-filter-block">
    					<h4>Select Categories</h4>

    					<ul class="cd-filter-content cd-filters list">
                            <?php
                                $options = array("Author", "Blogger", "CEO", "Designer", "Developer", "Entrepreneur", "Founder", "Growth Hacker", "Investor", "Marketer", "Podcaster", "Product Hunter", "Product Maker");
                                createFilterOptions($options);
                            ?>
    					</ul>
    				</div>
    			</form>

    			<a href="#0" class="cd-close">Close</a>
    		</div>

    		<a href="#0" class="cd-filter-trigger">Filter</a>
    	</main>
        

        <script src="lib/libraries/jquery-2.1.1.js"></script>
        <script src="lib/libraries/content-filter/js/jquery.mixitup.min.js"></script>
        <script src="lib/libraries/content-filter/js/main.js"></script>
        <?php include_once "payments/Payments.php"; ?>


        <div class="footer">
            <h1>Subscribe Now For A Free Goody ;)</h1>
            <?php getMailchimp() ?>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-container">
                <p class="copyright">
                    © 2016 - People Stash - Made in Ireland
                </p>
                
                <p class="twitter-button">
                    <a href="https://twitter.com/joeytawadrous" class="twitter-follow-button" data-show-count="true">
                        Follow @joeytawadrous
                    </a>
                    <script>
                        !function(d,s,id){
                            var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}
                        }(document, 'script', 'twitter-wjs');
                    </script>
                </p>
            </div>
        </div>
    </body>
</html>

<?php
    getSumoMeCode();
?>
