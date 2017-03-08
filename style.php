<?php
	$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
	$wp_load = $absolute_path[0] . 'wp-load.php';
	require_once($wp_load);
	
	$custom_fonts = get_field('fonts', 'option');
	
	header('Content-type: text/css');
	header('Cache-control: must-revalidate');
?>
<?php foreach($custom_fonts as $key1 => $value1): ?>
	<?php foreach($value1['files'] as $key2 => $value2): ?>
		@font-face {
			font-family: '<?php echo $value1['name']; ?>';
			src: url('<?php echo $value2['eot_file_path']; ?>');
			src: url('<?php echo $value2['eot_file_path']; ?>?#iefix') format('embedded-opentype'),
				url('<?php echo $value2['woff2_file_path']; ?>') format('woff2'),
				url('<?php echo $value2['woff_file_path']; ?>') format('woff'),
				url('<?php echo $value2['ttf_file_path']; ?>') format('truetype');
			font-weight: <?php echo $value2['weight']; ?>;
			font-style: <?php echo $value2['style']; ?>;
		}
	<?php endforeach; ?>
<?php endforeach; ?>