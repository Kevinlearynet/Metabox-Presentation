<?php 
// Get metabox data from globals
global $biographies_metabox; 

// Start the loop
while (have_posts()) : the_post(); ?>

<div class="entry-content">
	<?php the_content(); ?>
</div>

<div class="row-fluid biographies">
	<ul class="thumbnails">
		<?php 
		// Get our repeating field groups
		while( $biographies_metabox->have_fields("biographies") ):
			
		// Santize content for display
		$name = ( $biographies_metabox->get_the_value("name") ) ? esc_attr( $biographies_metabox->get_the_value("name") ) : '';
		$photo = ( $biographies_metabox->get_the_value("image") ) ? esc_url( $biographies_metabox->get_the_value("image") ) : '';
		$position = ( $biographies_metabox->get_the_value("position") ) ? esc_attr( $biographies_metabox->get_the_value("position") ) : '';
		$content = ( $biographies_metabox->get_the_value("content") ) ? $biographies_metabox->get_the_value("content") : '';
		$content = wptexturize( wpautop( $content ) );
		?>
		<li class="span3 biography">
			<div class="thumbnail">
				<img alt="<?php echo $name; ?>" src="<?php echo $photo; ?>" class="avatar">
				<div class="caption">
					<h3><?php echo $name; ?></h3>
					<h4><?php echo $position; ?></h4>
					<hr>
					<div class="biography-content"><?php echo $content; ?></div>
				</div>
			</div>
		</li><!--// end .biography -->
		<?php endwhile; ?>
	</ul><!--// end .thumbnails -->
</div><!--// end .biographies -->

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

<?php endwhile; ?>