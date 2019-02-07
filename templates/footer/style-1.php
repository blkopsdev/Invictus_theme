<?php
$columns_count = 0;
for($i = 1; $i < 5; $i++) {
	(is_active_sidebar('sidebar-footer-col'.$i)) ? $columns_count++ : 0;
}

if ( $columns_count > 0 ) : ?>
<div class="inv-footer-wrapper">
	<div class="row">
	<div class="col-md-12">
		<?php
		$counter = 0;
		for ($i = 1; $i < $columns_count + 1; $i++) {
			$counter++;
			?>
			<div class="column-<?php echo esc_attr($columns_count); ?>">
				<?php dynamic_sidebar('sidebar-footer-col' . $i); ?>
			</div>
		<?php
		}
	?>
	</div>
	</div>
	</div>
<?php endif; ?>