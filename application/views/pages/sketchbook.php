<h2>SKETCHBOOK</h2>
	<div class="wrapper clearfix">
		<?php foreach($sketchbook->data as $sketch) { ?>

			<div class="sketch col-lg-2 col-md-3 col-sm-6">
				<img src="<?php echo $sketch->images->thumbnail->url; ?>"
					alt="<?php echo $sketch->caption->text; ?>">
			</div>

		<?php } ?>
	</div>
