<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  $title = "Monthly Email";
?>

<?php include $root . '/partials/head.php' ?>

<body>

  <?php require $root . '/partials/svg-defs.php' ?>

  <div class="c_header-thing c_header-thing--full text-center">
    <div class="row">
      <div class="small-12 columns">
        <h2 class="o_block o_block--pt-0 c_logo c_logo--small">
          <a href="/">
            <span class="c_logo__preface">We Are</span>
            <svg viewBox="0 0 342.125 48" x="0px" y="0px" width="342.125px" height="48px" class="c_logo__mark c_main-nav__logo">
              <title>
                Contrast
              </title>
              <use xlink:href="#logo"></use>
            </svg>
          </a>
        </h2>

        <div class="o_block o_block--large o_brackets">
          <h1>Free monthly emails</h1>
          <p class="u_mb-l">Join the hundreds of makers and founders who receive a few little words from us in their inbox once a month.</p>

          <ul class="c_tick-list u_mb-l">
            <li>Latest blog posts</li>
            <li>Exclusive updates on projects we're working on</li>
            <li>Personal book &amp; article recommendations</li>
            <li>More for makers and founders</li>
          </ul>

          <form action="https://www.getdrip.com/forms/7565551/submissions" method="post" data-drip-embedded-form="7565551">
            <div class="o_h-form-flex c_signup-form c_signup-form--large">
              <div class="o_h-form-flex__input c_signup-form__input">
                <input type="email" name="fields[email]" placeholder="Your email address" />
              </div>
              <div class="o_h-form-flex__btn">
                <input type="submit" name="submit" value="Sign me up" class="c_button c_signup-form__button" data-drip-attribute="sign-up-button" />
              </div>
            </div>
          </form>

          <p><small><em>No spam, ever.</em></small></p>
        </div>

      </div>
    </div>
  </div>

<?php include $root . '/partials/foot.php' ?>
