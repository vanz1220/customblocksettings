<?php

/**
 * Testimonial block
 */

$id = 'customblock-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "ClassName" and "align" values.
$className = 'customblock';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults

$url			    = get_field('wordpress_site');
$clientid			= get_field('client_id');
$clientsecret		= get_field('client_secret');

?>

<div class="<?php echo esc_attr($className); ?>" id="<?php echo esc_attr($id); ?>">
    <input type="text" value="<?php echo $url; ?>"></br>
    <input type="text" value="<?php echo $clientid; ?>"></br>
    <input type="text" value="<?php echo $clientsecret; ?>">
</div>