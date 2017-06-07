<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer class="font-white padding-md footer">
        <div class="flex fl-space-between">
          <section>
            <h5>CONTACT INFO</h5>
              <div class="flex wrap">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <p>info@cohabitant.com</p>
              </div>
              <div class="flex wrap">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>778-456-7891</p>
              </div>
              <div class="flex wrap">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                <i class="fa fa-google-plus-square" aria-hidden="true"></i>
              </div>     
          </section>
          <section>
            <h5>BUSINESS HOURS</h5>
            <p><b>Monday-Friday:</b>9am to 5pm</p>
            <p><b>Saturday:</b>10am to 2pm</p>
            <p><b>Sunday:</b> Closed</p>
          </section>
          <section class="text-end">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logos/inhabitent-logo-text.svg" class="width-half"></section>
        </div>
        <p class="text-center padding-sm">COPYRIGHT 2016 COHABITANT</p>
      </footer>

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
