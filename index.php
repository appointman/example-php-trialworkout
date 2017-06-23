<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Probetraining online buchen">
    <meta name="author" content="appointman.net">

    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Kostenloses Probetraining - Jetzt online buchen</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-TODO_YOUR_ANALYTICS_ID', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', 'TODO_YOUR_FBPIXEL');
        fbq('track', 'PageView');</script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=TODO_YOUR_FBPIXEL&ev=CompleteRegistration&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>

<div class="container section section-form">
    <div class="row">
        <div class="col-sm-8">
            <h1>Sichern Sie sich jetzt Ihr kostenloses Probetraining</h1>
        </div>
    </div>
        <form action="" method="get" id="contactForm" name="contactForm" role="form" lang="de">
            <div class="row row-location">
                <div class="col-sm-6  col-sm-offset-1">
                    <label for="eventSelection">Bitte wählen Sie einen Termin aus</label>
                <select id="eventSelection" name="eventSelection" class="form-control" disabled>
                </select>
                </div>
            </div>
            <div class="row row-gender">
                <div class="col-sm-6  col-sm-offset-1">
                    <div class="form-group">
                        <label>Geschlecht *</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="Frau" id="male" tabindex="1" required>
                                Weiblich
                            </label>
                            <label>
                                <input type="radio" name="gender" value="Herr" id="female" tabindex="2" required>
                                Männlich
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="form-group">
                        <label class="label-inline" for="firstname">Vorname *</label>
                        <input type="text" class="form-control input-lg" id="firstname" name="firstname" tabindex="3" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="label-inline" for="lastname">Nachname *</label>
                        <input type="text" class="form-control input-lg" id="lastname" name="lastname" tabindex="4" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="form-group">
                        <label class="label-inline" for="email">E-Mail *</label>
                        <input type="email" class="form-control input-lg" id="email" name="email" tabindex="5" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="label-inline" for="phone">Telefon *</label>
                        <input type="text" class="form-control input-lg" id="phone" name="phone" tabindex="6" required>
                    </div>
                </div>
            </div>
            <div class="row row-submit">
                <div class="col-sm-6 col-sm-offset-1">
                    <button type="submit" class="btn btn-default" id="submit" tabindex="7">Jetzt Probetraining reservieren!</button>
                </div>
            </div>
        </form>
    <div class="row">
        <div id="success" class="col-sm-6">
            <span>
            <p>Ihre Buchung war erfolgreich. Sie erhalten die Buchungsbestätigung per E-Mail.</p>
            </span>
        </div>

        <div id="error" class="col-sm-12">
            <span>
            <p>Bei der Übermittlung ist leider ein unerwarteter Fehler aufgetreten.</p>
            </span>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-queryParser.min.js"></script>
<script src="js/retina.min.js"></script>
<script>
    $(function() {
        $('#contactForm').validate({
            rules: {},
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"GET",
                    data: $(form).serialize(),
                    url:"process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 0.15, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#contactForm').hide();
                            $('#success').fadeIn();
                        });
                        fbq('track', 'CompleteRegistration');
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 0.15, function() {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });
</script>
</body>
</html>

