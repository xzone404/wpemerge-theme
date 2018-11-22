<?php
/**
 * Theme footer partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPEmergeTheme
 */

?>
		<?php wp_footer(); ?>

		<svg>
			<use xlink:href="#twitter" href="#twitter"></use>
		</svg>
		<?php echo file_get_contents(APP_DIR . '/dist/images/svg-sprite.8205d85d1f.svg'); ?>
	</body>
</html>
