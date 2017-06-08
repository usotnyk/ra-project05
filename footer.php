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
        <?php 
        dynamic_sidebar('footer-sidebar');

        ?>
        </div>
        <p class="text-center padding-sm">COPYRIGHT &#169 <?php echo date('Y'); ?> COHABITANT</p>
      <?php

      //include("searchform.php");

      ?>
      </footer>
        

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
