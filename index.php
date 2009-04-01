<?php head(); ?>	

	<div id="primary">
		
		<div id="featured-item">
            <?php echo display_random_featured_item(); ?>
		</div><!--end featured-item-->	
			
		<div id="recent-items">
		<h2>Recently Added</h2>
    		<?php set_items_for_loop(recent_items(10)); ?>
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