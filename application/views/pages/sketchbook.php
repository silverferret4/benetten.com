<h2>SKETCHBOOK</h2>
	<div class="container clearfix">
		<?php foreach($sketchbook->data as $sketch) { ?>

			<div class="sketch col-md-2 col-sm-3 col-xs-4">
				<img src="<?php echo $sketch->images->thumbnail->url; ?>"
					alt="<?php echo $sketch->caption->text; ?>">
			</div>

		<?php } ?>
	</div>
