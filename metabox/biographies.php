<?php global $biographies_media_access; ?>

<div class="metabox-class-container">
	
	<table class="form-table custom-meta">
		<thead>
			<tr>
				<th colspan="2">Use the fields below to manage biographies that appear on this page.</th>
			</tr>
		</thead>
	</table>
	
	<?php while ( $mb->have_fields_and_multi("biographies") ): $mb->the_group_open(); ?>
	
	<table class="form-table custom-meta group-entry">
		<tr>
			<th scope="row">Name</th>
			<td>
				<?php $mb->the_field("name"); ?>
				<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
			</td>
		</tr>
		<tr>
			<th scope="row">Position</th>
			<td>
				<?php $mb->the_field("position"); ?>
				<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
			</td>
		</tr>
		<tr>
			<th scope="row">Image</th>
			<td class="media">
				<?php 
				$mb->the_field("image");
				$biographies_media_access->setGroupName( "image-n" . $mb->get_the_index() )->setInsertButtonLabel('Add Biography Image')->setTab('type');
				echo $biographies_media_access->getField( array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value() ) );
				echo $biographies_media_access->getButton(); 
				?>
			</td>
		</tr>
		<tr>
			<th scope="row">Description</th>
			<td>
				<?php $mb->the_field("content"); ?>
				<textarea name="<?php $mb->the_name(); ?>" rows="5"><?php $mb->the_value(); ?></textarea>
			</td>
		</tr>
		<tr>
			<th scope="row"></th>
			<td>
				<a href="#" class="dodelete button-secondary">Remove Biography</a>
			</td>
		</tr>
	</table>
	
	<?php $mb->the_group_close(); endwhile; ?>
	
	<p class="add-field"><a href="#" class="docopy-biographies button-primary">Add Biography</a></p>

</div><!--// end .metabox-class-container -->