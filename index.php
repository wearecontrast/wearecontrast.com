<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>We Are CONTRAST</title>

    <link href="css/app.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:900,300,300italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144"  href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="p:domain_verify" content="ebca3e22b99bba1cf14889cc51a2b10d"/>
  </head>

  <body>
    <div class="u_hidden">
      <?php require("partials/svg-defs.php"); ?>
    </div>


    <div class="c_header-thing text-center">
      <div class="row">
        <div class="small-12 columns">
          <h1 class="o_block o_block--pt-0 c_logo">
            <span class="c_logo__preface">We Are</span>
            <svg viewBox="0 0 342.125 48" x="0px" y="0px" width="342.125px" height="48px" class="c_logo__mark c_main-nav__logo">
              <title>
                Contrast
              </title>
              <use xlink:href="#logo"></use>
            </svg>
          </h1>

          Hey there. We're <a href="https://twitter.com/mikeaag" target="_blank" class="o_cta">Mike</a> &amp; <a href="https://twitter.com/fredrivett" target="_blank" class="o_cta">Fred</a>, and we are Contrast. We <a href="https://blog.wearecontrast.com/" class="o_cta">write</a> &amp; <a href="#things-weve-made" class="o_cta">make stuff</a>.
        </div>
      </div>
    </div>

    <div class="o_overlap">
      <div class="row">
        <div class="small-12 columns text-center">
          <ul class="o_horizontal-list c_social-list o_horizontal-list--centred">
            <li>
              <a href="https://twitter.com/wecontrast" target="_blank">
                <svg viewBox="0 0 200 162.5" x="0px" y="0px" width="200px" height="162.5px" class="c_social-list__image c_social-list__image--twitter">
                  <title>
                    Twitter
                  </title>
                  <use xlink:href="#twitter"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="https://blog.wearecontrast.com/" target="_blank">
                <div class="c_social-list__image c_social-list__image--medium" aria-label="Medium"></div>
              </a>
            </li>
            <li>
              <a href="https://www.producthunt.com/@mikeaag/collections/i-made-that" target="_blank">
                <svg viewBox="0 0 240 240" x="0px" y="0px" width="240px" height="240px" class="c_social-list__image c_social-list__image--ph">
                  <title>
                    Product Hunt
                  </title>
                  <use xlink:href="#ph"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="o_block o_block--large" id="things-weve-made">
      <div class="row">
        <div class="small-12 small-centered columns">
          <h2 class="text-center">Things we've made</h2>

          <ul class="o_undercover-list c_project-list js_project-list">
            <li>
              <a href="#" class="js_project-link">Learning To Launch</a>
              <?php require("partials/project/details/ltl.php") ?>
            </li>
            <li>
              <a href="#" class="js_project-link">MyYear</a>
              <?php require("partials/project/details/my.php") ?>
            </li>
            <li>
              <a href="#" class="js_project-link">FoundersKit</a>
              <?php require("partials/project/details/fk.php") ?>
            </li>
            <li>
              <a href="#" class="js_project-link">FlashTabs</a>
              <?php require("partials/project/details/ft.php") ?>
            </li>
            <li>
              <a href="#" class="js_project-link">FormFillerJS</a>
              <?php require("partials/project/details/ff.php") ?>
            </li>
            <li>
              <a href="#" class="js_project-link">Outstanding Bar</a>
              <?php require("partials/project/details/ob.php") ?>
            </li>
            <li>
              <a href="#" class="js_project-link">HowsItGoin</a>
              <?php require("partials/project/details/hig.php") ?>
            </li>
            <li>
              <a href="#" class="js_project-link">TheWorkingLunch</a>
              <?php require("partials/project/details/twl.php") ?>
            </li>
            <li>
              <a href="#" class="js_project-link">AreTheNsaWatchingMe</a>
              <?php require("partials/project/details/nsa.php") ?>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="small-12 small-centered columns text-center">
        <footer class="o_block o_block--pt-0 c_main-footer">
          <a href="https://blog.wearecontrast.com/we-are-contrast-e0c511883c1f#.f13nzkqg6" target="_blank" class="c_main-footer__link">Since 2014</a>
        </footer>
      </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
