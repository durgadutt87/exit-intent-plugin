<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"><!--<![endif]--><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/exitPlugin.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function() {
                 $('#popUpOverlay').exit_intent("init",{
                    'location'         : 'center',
                    'animation-in'     : 'show',
                    'animation-out'    : 'hide',
                    'speed'            : 'normal',
                    'overlayColor'     : '#000000',
                    'overlayOpacity'   : '0.5'
                 });

                  $('#popUpOverlay').exit_intent("show");
                  $('#popUpOverlay').exit_intent("hide");
            });
        </script>

        <div id="popUpOverlay" style="font-size: 100px;">
           <div id="overlay"></div>
            <div class="overlayContent" style="color:white;">
            I'M QUITTING
            <input type="button" id="closeExitIntentOverlay" value="close overlay" script="">
            </div>
        </div>
    </body>
</html>