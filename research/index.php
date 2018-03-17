<?php
if(isset($_COOKIE["style"])) {
    $theme = $_COOKIE["style"];
} else {
    $theme = "white";
    setcookie("style", "white", time() + 365);
}
if(!isset($_COOKIE["cookiesOK"])) {
    setcookie("cookiesOK", "no", time() + 365);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Research by Aaron Stockdill</title>
        <style>
            @font-face{font-family:'Nunito Sans';font-style:normal;font-weight:400;src:local('Nunito Sans Regular'),local('NunitoSans-Regular'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8ccezI9tAcVwob5A.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:400;src:local('Nunito Sans Regular'),local('NunitoSans-Regular'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8cce9I9tAcVwo.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:600;src:local('Nunito Sans SemiBold'),local('NunitoSans-SemiBold'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB85jU1ECVZl_86Y.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:600;src:local('Nunito Sans SemiBold'),local('NunitoSans-SemiBold'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB85tU1ECVZl_.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:700;src:local('Nunito Sans Bold'),local('NunitoSans-Bold'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBs5jU1ECVZl_86Y.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:700;src:local('Nunito Sans Bold'),local('NunitoSans-Bold'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBs5tU1ECVZl_.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:800;src:local('Nunito Sans ExtraBold'),local('NunitoSans-ExtraBold'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8aBc5jU1ECVZl_86Y.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:800;src:local('Nunito Sans ExtraBold'),local('NunitoSans-ExtraBold'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8aBc5tU1ECVZl_.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:900;src:local('Nunito Sans Black'),local('NunitoSans-Black'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8-BM5jU1ECVZl_86Y.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Nunito Sans';font-style:normal;font-weight:900;src:local('Nunito Sans Black'),local('NunitoSans-Black'),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8-BM5tU1ECVZl_.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSans-LightItalic'),url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hlIqOxjaPXZSk.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSans-LightItalic'),url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hrIqOxjaPX.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Xdc1GAK6bt6o.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Zdc1GAK6b.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'),local('OpenSans-SemiBoldItalic'),url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhlIqOxjaPXZSk.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'),local('OpenSans-SemiBoldItalic'),url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhrIqOxjaPX.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXOhpKKSTj5PW.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUuhpKKSTjw.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFW50bf8pkAp6a.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0bf8pkAg.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'),local('OpenSans-SemiBold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXOhpKKSTj5PW.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'),local('OpenSans-SemiBold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOUuhpKKSTjw.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
        </style>
        <?php
            echo '<link rel="stylesheet" href="/css/'.$theme.'.css" media="screen" id="theme">';
        ?>
        <style>
            *{-webkit-box-sizing:border-box;box-sizing:border-box}.hide{display:none!important}:root,body,html{font-family:"Open Sans",Helvetica,Arial,sans-serif;min-height:100%;height:100%;font-weight:300;font-size:20px;margin:0;padding:0;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}@media (min-width:1920px){:root,body,html{font-size:25px}}h1,h2,h3,h4,h5,h6{font-family:"Nunito Sans",Futura,Arial,sans-serif;font-weight:500}.borked-email{direction:rtl;unicode-bidi:bidi-override;text-align:left}.menu-hamburger,.menu-header{display:none;font-family:"Nunito Sans",Futura,Arial,sans-serif}nav{height:1.3rem;overflow:hidden;font-size:.85rem;font-family:"Open Sans",Helvetica,Arial,sans-serif;font-weight:300;line-height:1.5rem;text-align:center}nav a{text-decoration:none;padding:0 .5rem;-webkit-transition:color .2s ease;transition:color .2s ease}.container{max-width:35rem;width:100%;margin:0 auto;padding:2rem;line-height:1.5;-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto}.container .anchor{width:0;height:0;display:block;position:relative;top:-1.25rem}.container .anchor:first-of-type{top:3rem}.container h1{font-size:2rem;line-height:1em;margin-top:3rem;margin-bottom:1rem;font-weight:700;-webkit-hyphens:manual;-ms-hyphens:manual;hyphens:manual}.container hr{border:none;height:1px;margin:1rem auto 2rem auto;width:20%}.container h2{margin-top:1.5rem;margin-bottom:.75rem;line-height:1em;font-size:1.4rem}.container h2.award-year{margin-bottom:-1.1em}.container h3,.container h4{margin-top:1rem;margin-bottom:.5rem}.container p{margin-top:.5rem;margin-bottom:.5rem}.container li{padding-top:.25rem;padding-bottom:.25rem;list-style-type:circle}.container img{display:block;margin:auto;max-width:100%}.container blockquote{border-left:5px solid silver;padding:.5rem 1rem;background:#eee}.container .pad-after{padding-right:1rem}.container p.tight{margin-bottom:.25rem}.container .precontent{display:block;text-align:center;padding:.1rem 0;font-size:.8rem}.container .precontent.first{margin-top:2rem}.container .tutoring-list{margin:0;font-size:.9rem;line-height:1.4rem}.container .award{padding-left:5rem}.container .award h3{margin-top:0;margin-bottom:.3rem;font-weight:300}.container .award p{margin-top:0;margin-bottom:1.5rem}.container .contact-table{margin-bottom:2rem}.container .contact-table .label,.container .contact-table .value{display:inline-block;padding:.2rem;max-width:50%;vertical-align:top}.container .contact-table .label{width:8rem;text-align:right;padding-right:1rem;font-weight:300}.container pre{width:100%;overflow-x:auto}.container .back-to-works{display:block;padding-top:1rem;text-decoration:none;text-align:center;font-size:.85rem;font-family:"Open Sans",Helvetica,Arial,sans-serif;font-weight:300}.container .submenu{height:1.6rem;list-style:none;margin:.1rem 0;padding:0;font-family:"Open Sans",Helvetica,Arial,sans-serif;font-weight:300;text-align:center}.container .submenu li{display:inline-block}.container .submenu a{text-decoration:none;padding:0 .5rem;-webkit-transition:color .2s ease;transition:color .2s ease;font-size:.75rem}.container .dynamic-link{margin:.3rem auto 1rem auto;line-height:1.2em}.container .dynamic-link:first-of-type{margin-top:1rem}.container .dynamic-link h2{margin-top:.5rem}.container .dynamic-link a{text-decoration:none;display:inline-block;margin-right:1rem}.container .dynamic-link a:hover{text-decoration:underline}.container .dynamic-link .bibtex,.container .dynamic-link .date{font-size:.7rem;font-style:italic;line-height:.7rem}.container .dynamic-link .journal,.container .dynamic-link .orig{font-size:.7rem;line-height:.7rem}.welcome{padding:2rem;-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto;max-width:35rem;margin:0 auto;text-align:center}.welcome h1{font-size:4rem;margin:0;margin-top:17vh;line-height:3.6rem;font-weight:900}.welcome p{margin:0;padding-bottom:0}.welcome .trailing{margin-top:3rem;line-height:1.4rem}.welcome .trailing div{margin-top:1rem}.welcome .email{padding:0 .25rem;width:12rem;text-decoration:none;-webkit-transition:color .2s ease;transition:color .2s ease}img+em{text-align:right;width:100%;display:inline-block}footer{max-width:35rem;margin:0 auto;text-align:center;font-family:"Open Sans",Helvetica,Arial,sans-serif;font-weight:300;font-size:.8rem;opacity:.8;position:relative;bottom:0;left:0;right:0;padding:5px 2rem;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease;height:1.8rem}footer .details{float:left}footer .separator{display:inline-block;width:1rem}footer .selector{display:inline-block;height:1.2rem;overflow-y:hidden;width:2.5rem;position:relative;text-align:center;-webkit-transition:height .2s ease;transition:height .2s ease}footer .selector a{display:block;position:absolute;top:1.2rem;text-align:center;text-decoration:none;cursor:pointer;-webkit-transition:top .2s ease;transition:top .2s ease}footer .selector a.active{top:0;opacity:.5}footer .selector:hover a{top:0}footer .selector:hover a.active{top:-1.2rem}.cookies{max-width:35rem;margin:0 auto;text-align:center;font-family:"Open Sans",Helvetica,Arial,sans-serif;font-weight:300;font-size:.7rem;opacity:.95;position:fixed;bottom:0;left:0;right:0;padding:5px 0;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease;background:inherit}.cookies .cookie-buttons{margin:.5rem 0 .2rem 0}.cookies .cookie-buttons button{margin-right:1rem;background:inherit;border:1px solid;color:inherit;font:inherit;line-height:normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border-radius:3px;padding:.2rem 1rem;cursor:pointer}.cookies .cookie-buttons a{color:inherit}.error{max-width:800px;width:100%}.error h1{margin-bottom:0}.error h2{margin-top:.5rem}.error a{display:block;margin-top:2rem}.help{overflow-y:auto;display:block;z-index:1000;position:fixed;top:0;left:0;right:0;bottom:0}.help .help-box{padding:3rem;padding-bottom:4rem;margin:5%;position:relative;font-family:"Open Sans",Helvetica,Arial,sans-serif;font-weight:300}.help .help-box h1{text-align:center}.help .help-box dl{display:inline-block;width:50%;vertical-align:top;text-align:center}.help .help-box dl dt{font-weight:400;padding-top:.8rem;padding-bottom:.2rem}.help .help-box dl dd{margin-left:0}.help .help-box .close-help{cursor:pointer;position:absolute;bottom:3rem;right:3rem;border-bottom:1px solid transparent}.help .help-box .close-help:hover{border-bottom-width:1px;border-bottom-style:solid}
        </style>
        <style media="screen and (max-width: 600px)">
            body,html{font-size:18px}.container.welcome{padding:.5rem 0 2rem 0}.container.welcome h1{margin-top:20vh;font-size:3.25rem;line-height:3rem}.container.welcome .email,.container.welcome .phone,.container.welcome nav a,.container.welcome p{margin:0 auto}.container.welcome .email span,.container.welcome .phone span,.container.welcome nav a span,.container.welcome p span{display:inline-block}.container.welcome .nav-holder{margin:0 -1rem}@media screen and (max-width:400px){.container.welcome .conditional-break{display:block}}.submenu{display:none}nav{height:100%;padding-top:3rem}nav a{margin:0!important;display:block;position:relative;padding-top:.5rem;text-align:right;padding-right:1rem;font-size:1rem}.nav-holder{position:fixed;margin:0;width:100%;height:3rem;top:0;left:0;-webkit-transition:height .5s ease;transition:height .5s ease;z-index:1000}.nav-holder.showing{height:100%}.nav-holder .menu-header{display:block;position:absolute;margin:.7rem 15%;font-weight:800;text-align:center;width:70%;text-decoration:none;font-size:1.2rem}.welcome .nav-holder .menu-header{display:none}.menu-hamburger{display:block;position:fixed;right:.5rem;top:.7rem;width:1.5rem;height:1.5rem;z-index:1001}.menu-hamburger .bar{stroke:#000;stroke-width:0;opacity:1}.menu-hamburger .bar-bottom,.menu-hamburger .bar-top{-webkit-transform:rotate(0) translateY(0);transform:rotate(0) translateY(0);-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.menu-hamburger.showing .bar-top{-webkit-transform:rotate(-135deg) translateY(20%);transform:rotate(-135deg) translateY(20%)}.menu-hamburger.showing .bar-bottom{-webkit-transform:rotate(135deg) translateY(-20%);transform:rotate(135deg) translateY(-20%)}.container{padding:2.5rem 1rem 2rem 1rem}.container h1{font-size:2rem}.container blockquote{margin-left:0;margin-right:0}footer .selector.help-button{display:none}footer .separator{width:0}@media screen and (max-width:350px){.welcome h1{font-size:3rem;margin-top:15vh}.container h2.award-year{width:1em;-webkit-transform:rotate(-90deg) translateX(-1.4em);transform:rotate(-90deg) translateX(-1.4em)}.container .award{padding-left:2rem}}
        </style>
        <style media="print">
            nav,ul.submenu{display:none}footer{display:none}a{text-decoration:none;color:#000}a[href^="http://"]:after,a[href^="https://"]:after{content:" [" attr(href) "]";color:#333}.container hr{margin:1rem auto}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A summary of my research."/>

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
    <div class="container ">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-20 -20 420 420" class="menu-hamburger" id="menu-hamburger">
        <rect x="0" y="80" rx="40" ry="40" width="400" height="80" transform-origin="200 200" class="bar-top bar"></rect>
        <rect x="0" y="260" rx="40" ry="40" width="400" height="80" transform-origin="200 200" class="bar-bottom bar"></rect>
    </svg>
    <div class="nav-holder">
    <a class="menu-header" href="/">Aaron Stockdill</a>
    <nav>

        <a href="/" class="">
            <span>Home</span>
        </a>

        <a href="/cv/" class="">
            <span>CV</span>
        </a>

        <a href="/research/" class="active">
            <span>Research</span>
        </a>

        <a href="/teaching/" class="">
            <span>Teaching</span>
        </a>

        <a href="/contact/" class="">
            <span>Contact</span>
        </a>

        <a href="/blog/" class="">
            <span>Blog</span>
        </a>
    </nav>


<?php
date_default_timezone_set('Pacific/Auckland');
$rootdir = realpath(dirname(__FILE__));
$filedir = $rootdir."/../../dynamic/";
define('FILE_DIR', $filedir);

function list_files($type, $display, $sort) {
    $files = scandir(FILE_DIR);
    $count = 0;
    $filtered_files = array();
    foreach ($files as $f) {
        if ($f[0] == ".") {
            // pass
        } else {
            $parts = explode(".", $f);
            $title = $parts[0];
            $date = $parts[1];
            $extension = pathinfo($f, PATHINFO_EXTENSION);
            if ($extension == $type) {
                $count += 1;
                array_push($filtered_files, $f);
            }
        }
    }
    uasort($filtered_files, $sort);
    foreach ($filtered_files as $f) {
        echo $display($f);
    }
    if ($count == 0) {
        echo "<p>There is no content yet.</p>";
    }
}

function parsebib($filename) {
    $bibtex = file_get_contents(FILE_DIR."/".$filename);
    $bibjson = preg_replace("/^%(.*)$/m", "", $bibtex);
    $bibjson = preg_replace("/((\w|-)+)\s*=\s*\{/", "\"$1\": \"", $bibjson);
    $bibjson = preg_replace("/\}(?=\s*[,\}])/", "\"", $bibjson);
    $bibjson = preg_replace("/@(\w+)\s*\{([^,]*)/", "{\"$1\": \"$2\"", $bibjson, 1);
    $bibjson = preg_replace("/,\}/", "}", $bibjson, 1);
    $bibobj = json_decode($bibjson);
    $found = preg_match("/^%copyright (.*)$/m", $bibtex, $matches);
    if ($found === 1) {
        $bibobj->{"Copyright"} = $matches[1];
    }
    return $bibobj;
}
?>
<ul class="submenu">
   <li><a href="#Publications">Publications</a></li>
   <li><a href="#Talks">Talks</a></li>
   <li><a href="https://github.com/aaronstockdill">GitHub</a></li>
</ul>
</div>

<span class="anchor" id="Publications"></span>
<h1>Publications</h1>
<?php
list_files("bib", function ($f) {
    $fname = basename($f, ".bib");
    $details = parsebib($fname.".bib");
    $result = "<div class='dynamic-link'>";
    $result .= "<a href='/work/dynamic.php?id=$fname&amp;type=pdf'>";
    $result .= "<h2 class='title'>".$details->{"Title"}.".</h2>";
    $result .= "<span class='authors'>".$details->{"Author"}."</span>";
    $result .= "</a><br />";
    if ($details->{"Journal"}) {
        $result .= "<span class='journal'>".$details->{"Journal"}.".</span> ";
    } else if ($details->{"Booktitle"}) {
        $result .= "<span class='journal'>".$details->{"Booktitle"}.".</span> ";
    }
    $result .= "<span class='date'>".$details->{"Month"}." ".$details->{"Year"}.".</span><br />";
    if ($details->{"Copyright"}) {
        $result .= "<span class='orig'>".$details->{"Copyright"}."</span><br />";
    }
    $result .= "<a class='bibtex' href='/work/dynamic.php?id=$fname&amp;type=bib'>Download BibTeX</a>";
    $result .="</div>";
    return $result;
}, function ($f, $g) {
    $fname = basename($f, ".bib");
    $gname = basename($g, ".bib");
    $details1 = parsebib($fname.".bib");
    $details2 = parsebib($gname.".bib");
    $month_num = array(
        "January" => "01",
        "February" => "02",
        "March" => "03",
        "April" => "04",
        "May" => "05",
        "June" => "06",
        "July" => "07",
        "August" => "08",
        "September" => "09",
        "October" => "10",
        "November" => "11",
        "December" => "12",
    );
    $d1 = $details1->{"Year"}."-".$month_num[$details1->{"Month"}];
    $d2 = $details2->{"Year"}."-".$month_num[$details2->{"Month"}];
    if ($d1 == $d2) {
        return 0;
    }
    return ($d1 < $d2) ? 1 : -1;
});
?>


    <hr />


    <h1 id="Talks">Talks</h1>
<?php
list_files("talk", function ($f) {
    $parts = explode(".", $f);
    $result = "<div class='dynamic-link'>";
    $result .= "<a href='/work/talk/".str_replace('-', '/', $parts[1])."/$parts[0]/'>".$parts[0]."</a>";
    $result .= "<span class='date'>".$parts[1]."</span></div>";
    return $result;
}, function ($f, $g) {
    $parts1 = explode(".", $f);
    $parts2 = explode(".", $g);
    if ($parts1[1] == $parts2[1]) {
        return 0;
    }
    return ($parts1[1] < $parts2[1]) ? 1 : -1;
});
?>


    <hr />


    <h1 id="GitHub">GitHub</h1>
    <p>I infrequently put projects on GitHub, but you are welcome to view what is available there: <a href="https://github.com/aaronstockdill"> Aaron Stockdill on GitHub</a>.</p>

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
                <a id="white-button" class='theme-button<?php if ($theme == "white") { echo " active";} ?>' onclick='switch_theme("white")'>
                    <span>light</span>
                </a>
                <a id="black-button" class='theme-button<?php if ($theme == "black") { echo " active";} ?>' onclick='switch_theme("black")'>
                    <span>dark</span>
                </a>
            </span>
          </footer>
        <div id="cookies" class="cookies">
            FYI, I use cookies to improve this site.
            <div class="cookie-buttons">
                <button onclick="clear_cookie_message()">I'm OK with that.</button>
                <a href="http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm" target="_blank">Wait&mdash;what?</a>
            </div>
        </div>
        <!-- <script src="/js/script.js" charset="utf-8" defer></script> -->
        <script>"use strict";!function(e,t,n){function r(e,t,n){if(e.addEventListener)return void e.addEventListener(t,n,!1);e.attachEvent("on"+t,n)}function o(e){if("keypress"==e.type){var t=String.fromCharCode(e.which);return e.shiftKey||(t=t.toLowerCase()),t}return g[e.which]?g[e.which]:v[e.which]?v[e.which]:String.fromCharCode(e.which).toLowerCase()}function i(e,t){return e.sort().join(",")===t.sort().join(",")}function c(e){var t=[];return e.shiftKey&&t.push("shift"),e.altKey&&t.push("alt"),e.ctrlKey&&t.push("ctrl"),e.metaKey&&t.push("meta"),t}function a(e){if(e.preventDefault)return void e.preventDefault();e.returnValue=!1}function l(e){if(e.stopPropagation)return void e.stopPropagation();e.cancelBubble=!0}function s(e){return"shift"==e||"ctrl"==e||"alt"==e||"meta"==e}function u(){if(!k){k={};for(var e in g)e>95&&e<112||g.hasOwnProperty(e)&&(k[g[e]]=e)}return k}function d(e,t,n){return n||(n=u()[e]?"keydown":"keypress"),"keypress"==n&&t.length&&(n="keydown"),n}function h(e){return"+"===e?["+"]:(e=e.replace(/\+{2}/g,"+plus"),e.split("+"))}function f(e,t){var n,r,o,i=[];for(n=h(e),o=0;o<n.length;++o)r=n[o],b[r]&&(r=b[r]),t&&"keypress"!=t&&y[r]&&(r=y[r],i.push("shift")),s(r)&&i.push(r);return t=d(r,i,t),{key:r,modifiers:i,action:t}}function m(e,n){return null!==e&&e!==t&&(e===n||m(e.parentNode,n))}function p(e){function n(e){e=e||{};var t=!1,n;for(n in b)e[n]?t=!0:b[n]=0;t||(E=!1)}function u(e,t,n,r,o,c){var a,l,u=[],d=n.type;if(!y._callbacks[e])return[];for("keyup"==d&&s(e)&&(t=[e]),a=0;a<y._callbacks[e].length;++a)if(l=y._callbacks[e][a],(r||!l.seq||b[l.seq]==l.level)&&d==l.action&&("keypress"==d&&!n.metaKey&&!n.ctrlKey||i(t,l.modifiers))){var h=!r&&l.combo==o,f=r&&l.seq==r&&l.level==c;(h||f)&&y._callbacks[e].splice(a,1),u.push(l)}return u}function d(e,t,n,r){y.stopCallback(t,t.target||t.srcElement,n,r)||!1===e(t,n)&&(a(t),l(t))}function h(e){"number"!=typeof e.which&&(e.which=e.keyCode);var t=o(e);if(t)return"keyup"==e.type&&w===t?void(w=!1):void y.handleKey(t,c(e),e)}function m(){clearTimeout(k),k=setTimeout(n,1e3)}function g(e,t,r,i){function c(t){return function(){E=t,++b[e],m()}}function a(t){d(r,t,e),"keyup"!==i&&(w=o(t)),setTimeout(n,10)}b[e]=0;for(var l=0;l<t.length;++l){var s=l+1===t.length,u=s?a:c(i||f(t[l+1]).action);v(t[l],u,i,e,l)}}function v(e,t,n,r,o){y._directMap[e+":"+n]=t,e=e.replace(/\s+/g," ");var i=e.split(" "),c;if(i.length>1)return void g(e,i,t,n);c=f(e,n),y._callbacks[c.key]=y._callbacks[c.key]||[],u(c.key,c.modifiers,{type:c.action},r,e,o),y._callbacks[c.key][r?"unshift":"push"]({callback:t,modifiers:c.modifiers,action:c.action,seq:r,level:o,combo:e})}var y=this;if(e=e||t,!(y instanceof p))return new p(e);y.target=e,y._callbacks={},y._directMap={};var b={},k,w=!1,_=!1,E=!1;y._handleKey=function(e,t,r){var o=u(e,t,r),i,c={},a=0,l=!1;for(i=0;i<o.length;++i)o[i].seq&&(a=Math.max(a,o[i].level));for(i=0;i<o.length;++i)if(o[i].seq){if(o[i].level!=a)continue;l=!0,c[o[i].seq]=1,d(o[i].callback,r,o[i].combo,o[i].seq)}else l||d(o[i].callback,r,o[i].combo);var h="keypress"==r.type&&_;r.type!=E||s(e)||h||n(c),_=l&&"keydown"==r.type},y._bindMultiple=function(e,t,n){for(var r=0;r<e.length;++r)v(e[r],t,n)},r(e,"keypress",h),r(e,"keydown",h),r(e,"keyup",h)}if(e){for(var g={8:"backspace",9:"tab",13:"enter",16:"shift",17:"ctrl",18:"alt",20:"capslock",27:"esc",32:"space",33:"pageup",34:"pagedown",35:"end",36:"home",37:"left",38:"up",39:"right",40:"down",45:"ins",46:"del",91:"meta",93:"meta",224:"meta"},v={106:"*",107:"+",109:"-",110:".",111:"/",186:";",187:"=",188:",",189:"-",190:".",191:"/",192:"`",219:"[",220:"\\",221:"]",222:"'"},y={"~":"`","!":"1","@":"2","#":"3",$:"4","%":"5","^":"6","&":"7","*":"8","(":"9",")":"0",_:"-","+":"=",":":";",'"':"'","<":",",">":".","?":"/","|":"\\"},b={option:"alt",command:"meta",return:"enter",escape:"esc",plus:"+",mod:/Mac|iPod|iPhone|iPad/.test(navigator.platform)?"meta":"ctrl"},k,w=1;w<20;++w)g[111+w]="f"+w;for(w=0;w<=9;++w)g[w+96]=w.toString();p.prototype.bind=function(e,t,n){var r=this;return e=e instanceof Array?e:[e],r._bindMultiple.call(r,e,t,n),r},p.prototype.unbind=function(e,t){var n=this;return n.bind.call(n,e,function(){},t)},p.prototype.trigger=function(e,t){var n=this;return n._directMap[e+":"+t]&&n._directMap[e+":"+t]({},e),n},p.prototype.reset=function(){var e=this;return e._callbacks={},e._directMap={},e},p.prototype.stopCallback=function(e,t){var n=this;return!((" "+t.className+" ").indexOf(" mousetrap ")>-1)&&(!m(t,n.target)&&("INPUT"==t.tagName||"SELECT"==t.tagName||"TEXTAREA"==t.tagName||t.isContentEditable))},p.prototype.handleKey=function(){var e=this;return e._handleKey.apply(e,arguments)},p.addKeycodes=function(e){for(var t in e)e.hasOwnProperty(t)&&(g[t]=e[t]);k=null},p.init=function(){var e=p(t);for(var n in e)"_"!==n.charAt(0)&&(p[n]=function(t){return function(){return e[t].apply(e,arguments)}}(n))},p.init(),e.Mousetrap=p,"undefined"!=typeof module&&module.exports&&(module.exports=p),"function"==typeof define&&define.amd&&define(function(){return p})}}("undefined"!=typeof window?window:null,"undefined"!=typeof window?document:null);var bind_nav,clear_cookie_message,deleteCookie,formatEmailLink,getCookie,getEmail,hamburger,navbox,setCookie,setupEmail,show_help,switchEmail,switch_language,switch_theme,indexOf=[].indexOf;setCookie=function e(t,n,r){var o,i;return r?(o=new Date,o.setTime(o.getTime()+24*r*60*60*1e3),i="; expires="+o.toGMTString()):i="",document.cookie=t+"="+n+i+"; path=/"},getCookie=function e(t){var n,r,o,i;for(i=t+"=",r=document.cookie.split(";"),o=0;o<r.length;){for(n=r[o];" "===n.charAt(0);)n=n.substring(1,n.length);if(0===n.indexOf(i))return n.substring(i.length,n.length);o++}return null},deleteCookie=function e(t){return setCookie(t,"",-1)},switch_theme=function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"white";return document.querySelector("#theme").setAttribute("href","/css/"+t+".css"),document.querySelectorAll(".theme-button").forEach(function(e){return e.classList.remove("active")}),document.querySelector("#"+t+"-button").classList.add("active"),deleteCookie("style"),setCookie("style",t,365),!1},switch_language=function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"EN",n,r,o,i,c;for(o=["EN","FR"],n=0,i=o.length;n<i;n++)r=o[n],c=document.querySelectorAll(":lang('"+r+"')"),r!==t?(c.forEach(function(e){return e.classList.add("hide")}),c.forEach(function(e){return e.classList.remove("show")})):(c.forEach(function(e){return e.classList.remove("hide")}),c.forEach(function(e){return e.classList.add("show")}));return document.querySelectorAll(".lang-button").forEach(function(e){return e.classList.remove("active")}),document.querySelector("#"+t+"-button").classList.add("active"),deleteCookie("language"),setCookie("language",t,365),!1},clear_cookie_message=function e(){return setCookie("cookiesOK","yes",365),document.querySelector("#cookies").style.display="none",document.querySelector("footer").style.paddingBottom="0px"},"yes"!==getCookie("cookiesOK")?(document.querySelector("#cookies").style.display="block",document.querySelector("footer").style.paddingBottom="120px"):document.querySelector("#cookies").style.display="none",String.prototype.rotate=function(e){var t,n,r,o,i,c;for(i="",this.toLowerCase(),o=this,n=0,r=o.length;n<r;n++)t=o[n],t.match(/[a-z]/)?(c=(t.charCodeAt(0)-97+e)%26+97,i+=String.fromCharCode(c)):i+=t;return i},String.prototype.reverse=function(){return this.split("").reverse().join("")},switchEmail=function e(t){return"mailto:"+t.replace("mailto:","").reverse()},getEmail=function e(t,n){return t.rotate(13)+"@"+n},formatEmailLink=function e(t){return'<a href="mailto:'+t+' " class="borked-email email">'+t+"</a>"},setupEmail=function e(){var t,n,r,o,i,c,a,l,s,u,d;for(i=document.querySelectorAll(".email-holder"),a=0,s=i.length;a<s;a++)o=i[a],c=o.dataset.beforeAt,t=o.dataset.afterAt,o.innerHTML=formatEmailLink(getEmail(c,t).reverse());for(r=document.querySelectorAll(".borked-email"),d=[],l=0,u=r.length;l<u;l++)n=r[l],n.addEventListener("mouseover",function(e){return e.target.href=switchEmail(e.target.href)}),d.push(n.addEventListener("mouseout",function(e){return e.target.href=switchEmail(e.target.href)}));return d},setupEmail(),show_help=function e(){var t;return document.querySelector(".help")?(t=document.querySelector(".help"),t.parentNode.removeChild(t)):document.body.innerHTML+="<div class='help'><div class='help-box'>\n    <h1>Keyboard Shortcuts</h1>\n    <dl>\n        <dt>Go to the Home page</dt>\n            <dd>ctrl-x ctrl-x <br /> ctrl-x ctrl-h</dd>\n        <dt>Go to the CV page</dt>\n            <dd>ctrl-x ctrl-a</dd>\n            <dd>ctrl-x ctrl-v</dd>\n        <dt>Go to the Research page</dt>\n            <dd>ctrl-x ctrl-r</dd>\n        <dt>Go to the Contact page</dt>\n            <dd>ctrl-x ctrl-c</dd>\n        <dt>Go to my Blog</dt>\n            <dd>ctrl-x ctrl-b</dd>\n        <dt>Send me an email</dt>\n            <dd>ctrl-x ctrl-e</dd>\n    </dl><dl>\n        <dt>Toggle the theme</dt>\n            <dd>ctrl-t ctrl-t</dd>\n        <dt>Switch to dark/black theme</dt>\n            <dd>ctrl-t ctrl-d <br /> ctrl-t ctrl-b</dd>\n        <dt>Switch to light/white theme</dt>\n            <dd>ctrl-t ctrl-l <br /> ctrl-t ctrl-w</dd>\n        <br />\n        <dt>Show/hide this help</dt>\n            <dd>?</dd>\n    </dl>\n    <a class='close-help' onClick='show_help();'>\n        Close\n    </a>\n</div></div>"},bind_nav=function e(t,n){return Mousetrap.bind(t,function(){return window.location.href=n})},bind_nav(["ctrl+x ctrl+h","ctrl+x ctrl+x"],"/"),bind_nav(["ctrl+x ctrl+a","ctrl+x ctrl+v"],"/cv/"),bind_nav("ctrl+x ctrl+w","/work/"),bind_nav("ctrl+x ctrl+c","/contact/"),bind_nav("ctrl+x ctrl+b","/blog/"),bind_nav("ctrl+x ctrl+e","mailto:"+getEmail("nneba.fgbpxqvyy",["cl","cam","ac","uk"])),Mousetrap.bind(["ctrl+t ctrl+d","ctrl+t ctrl+b"],function(){return switch_theme("black")}),Mousetrap.bind(["ctrl+t ctrl+l","ctrl+t ctrl+w"],function(){return switch_theme("white")}),Mousetrap.bind("ctrl+t ctrl+t",function(){return switch_theme("black"===getCookie("style")?"white":"black")}),Mousetrap.bind("?",show_help),hamburger=document.getElementById("menu-hamburger"),navbox=document.getElementsByClassName("nav-holder")[0],hamburger.addEventListener("click",function(e){return indexOf.call(hamburger.classList,"showing")>=0?(hamburger.classList.remove("showing"),navbox.classList.remove("showing")):(hamburger.classList.add("showing"),navbox.classList.add("showing"))});</script>
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

