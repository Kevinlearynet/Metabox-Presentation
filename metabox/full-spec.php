<?php global $full_media_access; ?>

<div class="metabox-class-container">
	<table class="form-table custom-meta">
		<thead>
			<tr>
				<th colspan="2">Use the fields below to manage biographies that appear on this page.</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">Input</th>
				<td>
					<input type="text" name="<?php $metabox->the_name('name'); ?>" value="<?php $metabox->the_value('name'); ?>"/>
				</td>
			</tr>
			<tr>
				<th scope="row">Textarea</th>
				<td>
					<?php $metabox->the_field('description'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
				</td>
			</tr>
			<tr>
				<th scope="row">Single Checkbox</th>
				<td>
					<?php 
					$mb->the_field("basic_text");
					$options = array(1, 2, 3);
					foreach ( $options as $option ):
					?>
					<p>
						<input type="checkbox" name="<?php $mb->the_name(); ?>" value="<?php echo $option; ?>"<?php $mb->the_radio_state( $option ); ?> />
						Option #<?php echo $option; ?>
					</p>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<th scope="row">Media Library File</th>
				<td class="media">
					<?php 
					$mb->the_field("image");
					$full_media_access->setGroupName( "image-n" . $mb->get_the_index() )->setInsertButtonLabel('Add Image')->setTab('type');
					echo $full_media_access->getField( array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value() ) );
					echo $full_media_access->getButton(); 
					?>
				</td>
			</tr>
			<tr>
				<th scope="row">Visual editor</th>
				<td>
					<?php 
					$mb->the_field("visual_editor");
					$settings = array(
						'textarea_name' => $mb->get_the_name(),
						'textarea_rows' => 4,
						'tinymce' => array(
							'theme_advanced_buttons1' => 'bold, italic, strikethrough, link, unlink, separator, spellchecker, charmap, removeformat, undo, redo',
							'theme_advanced_buttons2' => '',
							'theme_advanced_buttons3' => '',
							'theme_advanced_buttons4' => ''
						),
					);
					$val =  html_entity_decode( $mb->get_the_value() ); 
					$id = $mb->get_the_name();
					wp_editor( $val, $id, $settings );
					?>
				</td>
			</tr>
		</tbody>
	</table>
</div><!--// end .metabox-class-container -->