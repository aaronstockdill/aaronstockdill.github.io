<?php
if(isset($_COOKIE["style"])) {
    $theme = $_COOKIE["style"];
} else {
    $theme = "white";
    setcookie("style", "white", time() + 365);
}
if(isset($_COOKIE["language"])) {
    $lang = $_COOKIE["language"];
    $notlang = ($lang == "EN") ? "FR" : "EN";
} else {
    $lang = "EN";
    $notlang = "FR";
    setcookie("language", "EN", time() + 365);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>404 | Aaron Stockdill</title>
        <style>
            @font-face{font-family:Rasa;font-style:normal;font-weight:300;src:local('Rasa Light'),local('Rasa-Light'),url(https://fonts.gstatic.com/s/rasa/v2/ZrQeEdSq8vNb2Ga0bUy5HALUuEpTyoUstqEm5AMlJo4.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:Roboto;font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(https://fonts.gstatic.com/s/roboto/v16/Hgo13k-tfSpn0qi1SFdUfZBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:Roboto;font-style:normal;font-weight:500;src:local('Roboto Medium'),local('Roboto-Medium'),url(https://fonts.gstatic.com/s/roboto/v16/RxZJdnzeo3R5zSexge8UUZBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:Roboto;font-style:normal;font-weight:700;src:local('Roboto Bold'),local('Roboto-Bold'),url(https://fonts.gstatic.com/s/roboto/v16/d-6IYplOFocCacKzxwXSOJBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}
        </style>
        <?php
            echo '<link rel="stylesheet" href="/css/'.$theme.'.css" media="screen" id="theme">';
            echo '<style>*:not(.show)[lang="'.$notlang.'"] { display: none; }</style>';
        ?>
        <style>
            *{box-sizing:border-box}.hide{display:none!important}body,html{font-family:Rasa,Georgia,"Times New Roman",serif;min-height:100%;height:100%;font-weight:300;font-size:14pt;margin:0;padding:0;transition:background .2s ease,color .2s ease}h1,h2,h3,h4,h5,h6{font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:500}.borked-email{direction:rtl;unicode-bidi:bidi-override;text-align:left}.welcome{padding:2rem}.welcome h1{font-size:4rem;margin:0;margin-top:25vh;line-height:4rem;font-weight:700;text-align:center}.welcome p{margin:0;padding-bottom:0}.welcome .trailing{text-align:center;margin-top:3rem}.welcome .email{padding:0 .25rem;width:12rem;text-decoration:none;transition:color .2s ease}nav{height:1.3rem;overflow:hidden;font-size:.85rem;text-align:center;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300;line-height:1.5rem}nav:hover{width:100%;transition:all 0s ease .75s}nav a{text-decoration:none;padding-right:1rem;transition:color .2s ease}.container{max-width:600px;width:100%;margin:0 auto;padding:2rem;line-height:1.5em}.container .anchor{width:0;height:0;display:block;position:relative;top:1rem}.container .anchor:first-of-type{top:0}.container h1{font-size:2.2rem;line-height:.85em;margin-top:4rem;margin-bottom:1rem;font-weight:700;-webkit-hyphens:manual;-ms-hyphens:manual;hyphens:manual}.container hr{border:none;height:1px;margin:2rem auto 1rem auto;background:silver;width:20%}.container h2{margin-top:1.5rem;margin-bottom:.2rem;line-height:1em;font-size:1.4rem}.container h2.award-year{margin-bottom:-1.1em}.container h3,.container h4{margin-top:.5rem;margin-bottom:.2rem}.container p{margin-top:.5rem}.container img{display:block;margin:auto;max-width:100%}.container .tutoring-list{margin:0;font-size:.9rem;line-height:1.4rem}.container .award{padding-left:5rem}.container .award h3{margin-top:0;margin-bottom:.3rem;font-weight:400}.container .award p{margin-top:0;margin-bottom:1.5rem}.container .contact-table{margin-bottom:2rem}.container .contact-table .label,.container .contact-table .value{display:inline-block;padding:.2rem}.container .contact-table .label{width:5rem;text-align:right;padding-right:1rem;font-weight:400}.container .back-to-works{display:block;padding-top:1rem;text-decoration:none;text-align:center;font-size:.85rem}.container .submenu{height:1.3rem;list-style:none;margin:.1rem 0 0 0;padding:0;text-align:center;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300}.container .submenu li{display:inline-block}.container .submenu a{text-decoration:none;padding-right:1rem;transition:color .2s ease;font-size:.75rem}.container .dynamic-link{margin:.3rem auto 1rem auto;line-height:1.2em}.container .dynamic-link:first-of-type{margin-top:1rem}.container .dynamic-link a{text-decoration:none;display:inline-block;margin-right:1rem}.container .dynamic-link a:hover{text-decoration:underline}.container .dynamic-link .bibtex,.container .dynamic-link .date{font-size:.7rem;font-style:italic;line-height:.7rem}.container .dynamic-link .journal,.container .dynamic-link .orig{font-size:.7rem;line-height:.7rem}img+em{text-align:right;width:100%;display:inline-block}footer{font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300;font-size:.8rem;opacity:.8;position:fixed;bottom:0;left:0;right:0;padding:5px;text-align:right;transition:background .2s ease,color .2s ease}footer .details{float:left}footer .separator{display:inline-block;width:1rem}footer .selector{display:inline-block;height:1.2rem;overflow-y:hidden;width:2.5rem;position:relative;text-align:center;transition:height .2s ease}footer .selector a{display:block;position:absolute;top:1.2rem;text-align:center;opacity:.5;text-decoration:none;cursor:pointer;transition:top .2s ease}footer .selector a.active{top:0;opacity:1}footer .selector:hover{height:2.4rem}.error{max-width:800px;width:100%}.error h1{margin-bottom:0}.error h2{margin-top:.5rem}.error a{display:block;margin-top:2rem}.help{overflow-y:auto;display:block;z-index:1000;position:fixed;top:0;left:0;right:0;bottom:0}.help .help-box{padding:3rem;padding-bottom:4rem;margin:5%;position:relative;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300}.help .help-box h1{text-align:center}.help .help-box dl{display:inline-block;width:33%;vertical-align:top;text-align:center}.help .help-box dl dt{font-weight:400;padding-top:.8rem;padding-bottom:.2rem}.help .help-box dl dd{margin-left:0}.help .help-box .close-help{cursor:pointer;position:absolute;bottom:3rem;right:3rem;border-bottom:1px solid transparent}.help .help-box .close-help:hover{border-bottom-width:1px;border-bottom-style:solid}
        </style>
        <style media="screen and (max-width: 600px)">
            body,html{padding-bottom:2rem}.welcome{padding-bottom:2rem}.welcome .email,.welcome .phone,.welcome nav a,.welcome p{margin:0 auto}.container{padding-left:.5rem;padding-right:.5rem}.container h1{font-size:2rem}.container .submenu,.container nav{overflow-x:auto;white-space:nowrap}footer .selector.help-button{display:none}@media screen and (max-width:350px){.welcome h1{font-size:3rem;margin-top:15vh}.container h2.award-year{width:1em;-webkit-transform:rotate(-90deg) translateX(-1.4em);transform:rotate(-90deg) translateX(-1.4em)}.container .award{padding-left:2rem}}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Something has gone horribly wrong!
"/>

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>

<div class="error container">
    <h1>404</h1>
    <h2 lang="EN">Oops.</h2>
    <h2 lang="FR">Oups.</h2>
    <a href="/" lang="EN">Take me home.</a>
    <a href="/" lang="FR">Emmène moi à accueil.</a>
</div>
        <footer>
            <span class='selector help-button'>
                <a onclick="show_help()" class='active'>
                    <span>&nbsp;&nbsp;&nbsp;?</span>
                </a>
                <a onclick="show_help()">
                    <span>Help</span>
                </a>
            </span>
            <span class='separator'></span>
            <span class='selector'>
                <a id="white-button" class='theme-button<? if ($theme == "white") { echo " active";} ?>' onclick='switch_theme("white")'>
                    <span lang='EN'>light</span>
                    <span lang='FR'>blanc</span>
                </a>
                <a id="black-button" class='theme-button<? if ($theme == "black") { echo " active";} ?>' onclick='switch_theme("black")'>
                    <span lang='EN'>dark</span>
                    <span lang='FR'>noir</span>
                </a>
            </span>
            <span class='separator'></span>
            <span class='selector'>
                <a id="EN-button" class='lang-button<? if ($lang == "EN") { echo " active";} ?>' onclick='switch_language("EN")'>
                    EN
                </a>
                <a id="FR-button" class='lang-button<? if ($lang == "FR") { echo " active";} ?>' onclick='switch_language("FR")'>
                    FR
                </a>
            </span>
        </footer>
        <link rel="stylesheet" href="/css/print.css" media="print">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script src="/js/combined.js" charset="utf-8" defer></script>
        <?php
            if (strpos($_SERVER['SERVER_NAME'],
                       'aaron.stockdill.nz') !== false) {
        ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-79422930-1', 'auto');
            ga('send', 'pageview');
        </script>
        <?php
        }
        ?>
    </body>
</html>

