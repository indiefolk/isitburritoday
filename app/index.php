<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Is it burrito day?</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="styles/main.css">
    </head>
    <body>
    <div class="container" style="margin-top:50px">
        <div class="hero-unit">
            <?php

                date_default_timezone_set('UTC');

                $today = date("l");
                $image = '';

                if ($today == 'Thursday') {
                    $message = 'yes!';
                    $image = '<img src="images/mission-burrito-gif.gif" alt="Burrito from http://joanstown.tumblr.com/post/20365629844" width="360" height="576" />';
                }
                else {
                    if ($today == 'Wednesday') {
                        $message = 'nearly...';
                    }
                    else {
                        $message = 'no';
                    }
                }

                echo '<h1>' . $message . '</h1>';

                echo $image;

            ?>
        </div>
    </div>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Google Analytics -->
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36991548-1']);
            _gaq.push(['_setDomainName', 'indiefolk.co.uk']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </body>
</html>
