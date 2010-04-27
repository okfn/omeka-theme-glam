<div id="footer">
    
	<?php echo get_theme_option('Footer Text'); ?>
    <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = settings('copyright')): ?>
        <p><?php echo $copyright; ?></p>
    <?php endif; ?>
	<ul class="navigation">	    
	    <?php echo public_nav_main(array('Home' => uri(''), 'Browse Items' => uri('items'), 'Browse Collections'=>uri('collections')));
	?>
	</ul>
	<p>Powered by <a href="http://omeka.org">Omeka</a>.</p>
	
	<?php echo plugin_footer(); ?>
	
</div><!-- end footer -->

</div><!-- end content -->

</div><!--end wrap-->

</body>

</html>