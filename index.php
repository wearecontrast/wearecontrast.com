<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
?>

<?php include $root . '/partials/head.php' ?>

<body class="t_homepage">

  <?php require $root . '/partials/svg-defs.php' ?>

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

        Hey there. We're <a href="https://twitter.com/mikeaag" target="_blank" class="o_cta" rel="nofollow">Mike</a> &amp; <a href="https://twitter.com/fredrivett" target="_blank" class="o_cta" rel="nofollow">Fred</a>, and we are Contrast. We <a href="https://blog.wearecontrast.com/" class="o_cta">write</a> &amp; <a href="#things-weve-made" class="o_cta">make stuff</a>.
      </div>
    </div>
  </div>

  <div class="o_overlap">
    <div class="row">
      <div class="small-12 columns text-center">
        <ul class="o_horizontal-list c_social-list o_horizontal-list--centred">
          <li>
            <a href="https://twitter.com/wecontrast" target="_blank" rel="nofollow">
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
            <a href="https://www.producthunt.com/@mikeaag/collections/i-made-that" target="_blank" rel="nofollow">
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
            <a href="#" class="js_project-link">UserCompass</a>
            <?php require("partials/project/details/uc.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">Stories as a Service</a>
            <?php require("partials/project/details/saas.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">Hit Reply</a>
            <?php require("partials/project/details/hr.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">Real Time Users</a>
            <?php require("partials/project/details/rtu.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">Learning To Launch</a>
            <?php require("partials/project/details/ltl.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">MyYear</a>
            <?php require("partials/project/details/my.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">TheWorkingLunch</a>
            <?php require("partials/project/details/twl.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">FormFillerJS</a>
            <?php require("partials/project/details/ff.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">FoundersKit</a>
            <?php require("partials/project/details/fk.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">Outstanding Bar</a>
            <?php require("partials/project/details/ob.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">FlashTabs</a>
            <?php require("partials/project/details/ft.php") ?>
          </li>
          <li>
            <a href="#" class="js_project-link">HowsItGoin</a>
            <?php require("partials/project/details/hig.php") ?>
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

  <div class="row">
    <div class="small-12 small-centered columns text-center">
      <footer class="o_block o_block--pt-0 c_main-footer">
        <div class="realtimeuserscounter realtimeuserscounter--styled"></div>
        <script src="https://realtimeusers.bycontrast.co/realtimeusers.js"></script>
      </footer>
    </div>
  </div>

<?php include('partials/foot.php') ?>
