SKETCHBOOK

<?php foreach($sketchbook->data as $sketch) { ?>

	<div class="sketch">
		<img src="<?php echo $sketch->images->thumbnail->url; ?>"
			alt="<?php echo $sketch->caption->text; ?>">
	</div>

<?php } ?>