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

<div style="display: flex;
    justify-content: center;">
    <div>
        <div class="acf-label">
            <label>Wordpress Site <span class="acf-required">*</span>
            </label>
        </div>
        <div class="acf-input">
            <div class="acf-input-wrap acf-url">
                <i class="acf-icon -globe -small"></i>
                <input type="url" value="<?php echo esc_attr($url); ?>" Placeholder="Enter Wordpress Url..." required="required">
            </div>
        </div>
        <div>
            <label>OAuth2 API credentials</label>
        </div>

        <div>
            <div>
                <div>
                    <div>
                        <label>Client ID <span class="acf-required">*</span></label>
                    </div>
                    <div>
                        <div>
                            <input type="text" Placeholder="Enter Client ID..." value="<?php echo esc_attr($clientid); ?>" required="required">
                        </div>
                    </div>
                </div>
            <div>
                <div>
                    <label >Client Secret <span class="acf-required">*</span></label>
                </div>
            <div>
                <div>
                    <input type="password" Placeholder="Enter Client Password..." value="<?php echo esc_attr($clientsecret); ?>" required="required">
                </div>
            </div>
        </div>
    </div>
</div>