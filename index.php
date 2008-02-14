<?php head(); ?>	

	<div id="primary">
		
		<div id="featured-item">
			<?php $randomItem = random_featured_item();  ?>
			<h2>Featured Item</h2>
			<?php if(!empty($randomItem)):?>
			
			    <h3><?php echo link_to_item($randomItem); ?></h3>
    			<?php if(has_thumbnail($randomItem)): ?>
    			    <?php echo link_to_square_thumbnail($randomItem, array('class'=>'image')); ?>
    			<?php endif; ?>
    			<p class="item-description"><?php echo h(snippet($randomItem->description, 0, 150)); ?></p>	
    			<?php else: ?>
    				<h3>No Featured Items</h3>
    				<p>You have no featured items. Please make some featured.</p>	
    		<?php endif; ?>	
		</div><!--end featured-item-->	
			
		<div id="recent-items">
		<h2>Recently Added</h2>
			<?php $recent = recent_items(8); 
			if(!empty($recent)): ?>
			<ul>
				<?php foreach( $recent as $item ): ?>
				<li><?php echo link_to_item($item); ?></li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
					<h3>No Recent Items</h3>
					<p>No recent items available.</p>	
				<?php endif; ?>
		</div><!--end recent-items -->
		
	</div><!-- end primary -->
	
	<div id="secondary">
			<h2>Tags</h2>
			<?php echo tag_cloud(recent_tags(), uri('items')); ?>
	</div><!-- end secondary -->
	
<?php foot(); ?>