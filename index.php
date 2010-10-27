<?php head(); ?>	

	<div id="primary">
		
	    <p><?php echo get_theme_option('Homepage Text'); ?></p>
        <?php echo minimalist_display_random_featured_item(); ?>
        <?php echo minimalist_display_random_featured_collection(); ?>
    	<?php echo minimalist_display_random_featured_exhibit(); ?>
		
		<div id="recent-items">
		<h2>Recently Added</h2>
    		<?php 
    		$homepageRecentItems = (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : '10';
    		set_items_for_loop(recent_items($homepageRecentItems)); ?>
    		<?php if (has_items_for_loop()): ?>
    		<ul class="items-list">
    			<?php while (loop_items()): ?>
    			<li class="item">
    				<h3><?php echo link_to_item(); ?></h3>
    			<?php if($desc = item('Dublin Core', 'Description', array('snippet'=>150))): ?>
    				<div class="item-description"><?php echo $desc; ?></div>
    			<?php endif; ?>			
    			</li>
    			<?php endwhile; ?>
    		</ul>
    		<?php else: ?>
    			<p>No recent items available.</p>	
    		<?php endif; ?>
		</div><!--end recent-items -->
		
	</div><!-- end primary -->
	
	<div id="secondary">
			<h2>Tags</h2>
            <?php 
                if ($tags = get_tags(array('type' => 'Item', 'sort' => array('most', 'recent')))): 
                    echo tag_cloud($tags, uri('items/browse'));
                else: 
            ?>
            <p>No tags available.</p>                    
            <?php endif; ?>        
	</div><!-- end secondary -->
	
<?php foot(); ?>