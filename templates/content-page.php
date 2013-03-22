<?php while (have_posts()) : the_post(); ?>
	
<div class="entry-content">
	<?php the_content(); ?>
</div><!--// end .entry-content -->

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

<?php endwhile; // The loop ?>

<?php 
// Get our meta box data
global $simple_metabox;
$simple_metabox->the_meta();
?>

<?php if ( !empty($simple_metabox->meta) ): ?>
<h3>Simple Meta Box</h3>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Field</th>
			<th>Value</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ( $simple_metabox->meta as $field => $value ): ?>
		<tr>
			<th><?php echo $field; ?></th>
			<td><?php echo $value; ?></td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>

<?php 
// Get our meta box data
global $full_metabox;
$full_metabox->the_meta();
?>

<?php if ( !empty($full_metabox->meta) ): ?>
<h3>Full Spec Meta Box</h3>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Field</th>
			<th>Value</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ( $full_metabox->meta as $field => $value ): ?>
		<tr>
			<th><?php echo $field; ?></th>
			<td><?php echo $value; ?></td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>