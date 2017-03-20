<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

  <footer class="footer-holder">
    <h1>CONNECT WITH US</h1>
    <div class="connect">
      <div id="right-column">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/house.png" alt="" class="address">
        <p class="address">
          1366 Yonge St. Suite 208<br />
          (Yonge and St. Clair)
        </p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email.png" alt="" class="email">
        <p class="email-address">
          cannabisdocs.ca<br />
          @whitecedarclinic
        </p>
      </div>
      
      <div id="left-column">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png" alt="" class="phone">
          <p class="phone-number">
            844-974-1150<br />
            <span style="opacity: 0;">gfgfgg</span>
          </p>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fax.png" alt="" class="fax">
          <p class="fax-number">
            888-974-1149<br />
          </p>
        </div>
      </div>
      <div class="footer-copy">
        <p>All physician assessments are covered<br />
        by OHIP and are free of charge to the<br />
        patient. White Cedar Cannabis Doctors<br />
        is not a marijuana dispensary.</p>
      </div>
      
  </footer>


<?php wp_footer(); ?>
