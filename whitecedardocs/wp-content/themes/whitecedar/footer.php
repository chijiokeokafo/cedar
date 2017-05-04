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
        <a href="mailto:info@cannabisdocs.ca">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/envelope.png" alt="" class="email">
          <p class="address">
            info@cannabisdocs.ca
          </p>
        </a>

        <a href="http://cannabisdocs.ca">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social.png" alt="" class="social">
          <p class="social-handle">
            @whitecedarclinic
          </p>
        </a>
      </div>
      
      <div id="left-column">
        <a href="tel:1-844-974-1150">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png" alt="" class="phone">
          <p class="phone-number">
            844-974-1150<br />
            <span style="opacity: 0;">spacer</span>
          </p>
        </a>
        <a href="tel:1-888-974-1149"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fax.png" alt="" class="fax">
          <p class="fax-number">
            888-974-1149<br />
            <span style="opacity: 0;">spacer</span>
          </p>
        </a> 
        </div>
      </div>
      <div class="footer-copy">
        <p>Please note that White Cedar Medical Cannabis Doctors is not a marijuana dispensary.</p>
      </div>
    </div>
  </footer>


<?php wp_footer(); ?>
