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

<div>
    <div>
        <div class="acf-label">
            <label>Wordpress Site <span class="acf-required">*</span>
            </label>
        </div>
        <div class="acf-input">
            <div class="acf-input-wrap acf-url">
                <i class="acf-icon -globe -small"></i>
                <input type="url" id="acf-block_625e5c56e3cf8-field_625e58459c5f5" name="acf-block_625e5c56e3cf8[field_625e58459c5f5]" value="dsfdsfds" required="required">
            </div>
        </div>
    </div>
        
    <div>
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
                            <input type="text" value="<?php echo esc_attr($clientid); ?>" required="required">
                        </div>
                    </div>
                </div>
            <div>
                <div>
                    <label >Client Secret <span class="acf-required">*</span></label>
                </div>
            <div>
                <div>
                    <input type="text" value="<?php echo esc_attr($clientsecret); ?>" required="required">
                </div>
            </div>
        </div>
    </div>
</div>