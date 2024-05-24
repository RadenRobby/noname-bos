<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<title>403 Forbidden</title>";
echo "<h1>Forbidden</h1>";
echo "<p>You don't have permission to access this resource.</p>";
}

if (isset($_GET['web'])) {
    $filename = "brandlist.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['web']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtolower($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*

*GANTI NAMA BRAND DENGAN INI
<?php echo $BRANDS ?>

* GANTI URL PATH DENGAN INI
<?php echo $urlPath ?>

* SAMA GANTI REDIRECT LOGIN/REGISTER

*/

?>



<!DOCTYPE html>
<html ⚡ lang="id" itemscope="itemscope" itemtype="https://schema.org/WebPage">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <meta title="<?php echo $BRANDS ?> Slot Gacor deposit 10k Dengan Berkah Dan Selalu Amanah"/>
    <title><?php echo $BRANDS ?> Slot Gacor deposit 10k Dengan Berkah Dan Selalu Amanah</title>
    <meta name="description" content="<?php echo $BRANDS ?> situs memukau dengan slot gacor, deposit 10k yang membawa berkah serta amanah. Rasakan sensasi bermain yang istimewa dengan keamanan terjamin."/>
    <meta name="keywords" content="<?php echo $BRANDS ?>, slot, slot88, slot gacor, slot online, slot 2024, link slot, daftar slot, slot 10k, slot 10 ribu, slot 10rb, slot 10000, slot gacor maxwin, slot gacor 2024, link slot gacor, daftar slot gacor, slot gampang jp, judi slot online, slot depo 10k, slot deposit 10 ribu, slot deposit 10rb, slot deposit 10000, slot gacor hari ini, slot gacor gampang menang"/>
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="webcrawlers" content="all"/>
    <meta name="spiders" content="all"/>
    <meta property="og:title" content="<?php echo $BRANDS ?> Slot Gacor deposit 10k Dengan Berkah Dan Selalu Amanah"/>
    <meta property="og:description" content="<?php echo $BRANDS ?> situs memukau dengan slot gacor, deposit 10k yang membawa berkah serta amanah. Rasakan sensasi bermain yang istimewa dengan keamanan terjamin."/>
    <meta property="og:url" content="https://lsp.smkn2kotajambi.sch.id/index.php?web=<?php echo $BRANDS ?>"/>
    <meta property="og:site_name" content="Slot Depo 10k"/>
    <meta property="og:author" content="Slot Depo 10k"/>
    <meta property="og:image" content="https://lsp.smkn2kotajambi.sch.id/images.png"/>
    <meta property="og:type" content="website"/>
    <meta name="geo.region" content="ID-JKT"/>
    <meta name="language" content="Indonesia">
    <meta name="theme-color" content="BLACK">
    <link rel="canonical" href="https://lsp.smkn2kotajambi.sch.id/index.php?web=<?php echo $BRANDS ?>"/>
    <link rel="alternate" hreflang="id" href="https://lsp.smkn2kotajambi.sch.id/index.php?web=<?php echo $BRANDS ?>"/>
    <link rel="apple-touch-icon-precomposed" href="https://lsp.smkn2kotajambi.sch.id/icon.png">
    <link rel="icon" href="https://lsp.smkn2kotajambi.sch.id/icon.png" type="image/x-icon">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start {
        from {
          visibility: hidden
        }

        to {
          visibility: visible
        }
      }@-moz-keyframes -amp-start {
        from {
          visibility: hidden
        }

        to {
          visibility: visible
        }
      }@-ms-keyframes -amp-start {
        from {
          visibility: hidden
        }

        to {
          visibility: visible
        }
      }@-o-keyframes -amp-start {
        from {
          visibility: hidden
        }

        to {
          visibility: visible
        }
      }@keyframes -amp-start {
        from {
          visibility: hidden
        }

        to {
          visibility: visible
        }
      }</style>
    <noscript>
      <style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style>
    </noscript>
    <style amp-custom="">
      *,
      .product-features__heading p,
      body,
      html {
        margin: 0;
        padding: 0;
        font-family: 'Trebuchet MS', sans-serif;
      }

     * {
        box-sizing: border-box;
        font-family: 'Trebuchet MS', sans-serif;
        transition: .2s linear;
        font-size: 16px;
        line-height: 150%
      }

      h1,
      h2 {
        line-height: 100%;
        margin-bottom: 1.5rem
      }

      body {
        background: -moz-linear-gradient(left, #000000 0, #000000 35%, #000000 65%, #000000 100%);
        background: -webkit-linear-gradient(left, #000000 0, #000000 35%, #000000 65%, #000000 100%);
        background: linear-gradient(to right, #000000 0, #000000 35%, #000000 65%, #000000 100%);
        color: #fff
      }

      .gradient-bg {
        background: #232526;
        background: -webkit-linear-gradient(to top, #414345, #232526);
        background: linear-gradient(to top, #414345, #232526)
      }

      .content-width {
        width: 70%;
        margin: 0 auto
      }

      .content {
        margin: 0 auto;
        padding: 4em 0;
        line-height: 160%
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        color: #778bc5
      }

      h1 {
        font-size: 2.8em;
        color: #fff
      }

      h2 {
        font-size: 2em
      }

      h3 {
        font-size: 1.5em;
        margin-bottom: 1em
      }

      .clearfix {
        clear: both
      }

      .green-text {
        color: #3ebf43
      }

      .flex {
        display: flex;
        flex-direction:column;
        align-items:center;
      }

      .flex-wrap {
        flex-wrap: wrap
      }

      .flex-center {
        justify-content: center;
        align-items: center
      }

      .flex-space-around {
        justify-content: space-around
      }

      .flex-space-between {
        justify-content: space-between
      }

      .flex-column {
        flex-direction: column
      }

      .flex-half {
        width: 48%
      }

      .text--capitalize {
        text-transform: capitalize
      }

      .text--secondary {
        color: #566584
      }

      .btn {
        padding: 12px 40px;
        margin: 0 10px;
        color: #fff;
        display: flex;
        border-radius: 4px;
        border: 2px solid transparent;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 0 1px 5px rgba(0, 0, 0, .75)
      }

      .btn--primary {
        background-color: #f1983b;
        border-color: transparent;
        color: #fff;
        border-radius: 10px
      }

      .btn--secondary {
        background: 0 0;
        border: 2px solid #fff;
        border-radius: 10px
      }

      .btn--primary:hover,
      .btn--secondary:hover {
        background-color: #22d62e;
        border-color: #FFD700;
        color: #fff
      }

      .sidebar__nav-link:hover,
      a:hover,
      footer .meta-content a {
        color: cyan
      }

      a,
      footer a {
        color: cyan;
        text-decoration: none
      }

      .border-round {
        border-radius: 5px
      }

      .box-shadow {
        box-shadow: 0 1px 3px rgba(0, 0, 0, .12), 0 1px 2px rgba(0, 0, 0, .24)
      }

      .animate {
        transition: .2s ease-in-out
      }


      #hero {
        width: 100%
      }

      header.hero__header {
        height: 80px;
        background-color: #000000
      }
      .logo_header {
        display: flex;
        justify-content: space-between;
      }
      
      .logo {
        width: 224px;
        margin-right: 0
      }

      .hero__menu nav a {
        margin-left: 10px;
        margin-right: 10px;
        padding-bottom: 5px;
        border-bottom: 1px
      }

      .hero__body {
        margin: 0 auto;
        height: 70%
      }

      .hero__content {
        padding: 40px 0 0px;
        color: #fff
      }

      .hero__content amp-img {
        max-width: 100%
      }

      .hero__content>div,
      .product-features__content,
      .product-features__graphic {
        width: 80%
      }

      .hero__content>div:nth-of-type(2) .btn {
        margin: 25px 0
      }

      .hero__content__cta {
        font-size: 140%;
      }

      .hero__content__cta.btn--primary {
        background: repeating-linear-gradient(-45deg, #ff8e00 0%, yellow 7.14%, rgb(0, 255, 0) 14.28%, rgb(0, 255, 255) 21.42%, cyan 28.56%, blue 35.7%, magenta 42.84%, black 50%);
        background-size: 600vw 600vw;
        animation: slide 10s infinite linear forwards;
      }

      @keyframes slide {
        0% {
          background-position: 600vw
        }

        100% {
          background-position: 0%
        }
      }

      footer {
        background-color: #000000;
        color: #fff;
        display: flex;
        justify-content: center;
        padding: 35px 0 35px
      }


      @media only screen and (max-width:1450px) {
        #hero {
          min-height: 865px;
        }

        .hero__body {
          height: 75%
        }

        h1 {
          font-size: 2.8em
        }


      @media only screen and (max-width:1030px) {
        .content-width {
          width: 85%
        }

        h1 {
          font-size: 2em
        }

        h2 {
          font-size: 1.8em
        }

        h3 {
          font-size: 1.2em
        }

        nav.hide-mobile {
          display: none
        }

        .features__highlight {
          padding: 50px 30px
        }
     
      @media only screen and (max-width:600px) {

        .logo,
        .product-feature .product-feature__graphic {
          width: 200px
        }

        * {
          font-size: 14px;
          line-height: 160%
        }

        .logo {
          margin-left: 0;
          margin-right: 0
        }

        .content-width {
          width: 100%
        }

        #hero {
          min-height: 720px;
        }

        #hero .hero__header .content-width {
          margin: 0
        }

        #logo {
          width: 50%
        }

        #hero header nav,
        .hero__header__cta {
          display: none
        }

        .hero__body {
          flex: 1;
          padding: 40px 20px
        }

        .hero__body .hero__content {
          flex-direction: column;
          justify-content: center;
          align-items: center;
          margin: 0;
          padding-top: 0px
        }

        .hero__body .hero__content>div {
          width: 100%;
          text-align: center;
          margin-top: 20px
        }

       

        h1 {
          font-size: 1.7em;
          margin-top: 1em
        }

        h2 {
          font-size: 1.5em;
          margin-bottom: 1em
        }

        h3 {
          font-size: 1.2em
        }

        .features__highlight {
          padding: 50px 10px
        }

        #footer-content {
          width: 90%;
          text-align: center
        }

        #footer-content p {
          margin-bottom: .5em
        }

        .copyright {
          display: flex;
          justify-content: center;
          color: #ffffff;
          text-align: center
        }

        .copyright div {
          padding-bottom: 10px
        }
      }
    </style>
  </head>
  <body> 
    <section id="hero" class="hero-bg">
      <header class="hero__header flex flex-center">
        <div class="logo_header">
          <div class="hero__menu flex">
            <div class="logo">
              <a href="https://permalinkshortener.com/74Y44">
                <amp-img class="hero__logo" src="https://lsp.smkn2kotajambi.sch.id/logo.png" width="365" height="50" layout="responsive" alt="Slot Gacor Depo 10k"></amp-img>
              </a>
            </div>
          </div>
        </div>
      </header>
      <div class="hero__body content-width flex flex-center">
        <div class="hero__content flex flex-space-between">
          <div>
            <amp-img src="https://lsp.smkn2kotajambi.sch.id/images.png" width="350" height="350" layout="responsive" alt="Slot Gacor Depo 10k"></amp-img>
          </div>
          <div>
                      <a href="https://permalinkshortener.com/74Y44" class="hero__content__cta btn btn--primary">Daftar</a>
            <a href="https://permalinkshortener.com/74Y44" class="hero__content__cta btn btn--secondary">Masuk</a>
            <h1 style="text-align: justify;"><?php echo $BRANDS ?> Slot Gacor deposit 10k Dengan Berkah Dan Selalu Amanah </h1>
			</div>
          </div>
        </div>
      </div>
    </section>
    <footer>
<div class="copyright"><?php echo $BRANDS ?> Copyright 2024 | Slot Gacor Deposit 10k All Rights Reserved.</div>
</footer>
  </body>
</html>
