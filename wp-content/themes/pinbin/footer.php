<?php
/**
 * The template for displaying the footer.
 */

?>

<?php if ( is_active_sidebar( 'pinbin_footer')) { ?>     
   <div id="footer-area">
			<?php dynamic_sidebar( 'pinbin_footer' ); ?>
        </div><!-- // footer area with widgets -->   
<?php }  ?>           
<footer class="site-footer">
	 <div id="copyright">
	 	<?php _e( '', '' ); ?> <a href="<?php echo esc_url( 'http://ajepa.net/' ); ?>" title="" target="_blank"><?php _e( '', '' ); ?></a>  
		<?php _e( 'Copyright', 'pinbin' ) ?> <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> |
		<?php _e( 'Created by' , 'ajepa.net' ); ?> <a href="http://ajepa.net/" target="_blank" title="<?php _e( 'Created by aepa.net' , '' ); ?>">ajepa.net</a>
	 </div><!-- // copyright -->   
</footer>     
</div><!-- // close wrap div -->   

<?php wp_footer(); ?>
	
</body>
</html>

