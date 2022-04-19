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

<div class="acf-block-fields acf-fields">
    <div class="acf-field acf-field-url acf-field-625e58459c5f5 is-required" data-name="wordpress_site" data-type="url" data-key="field_625e58459c5f5" data-required="1">
        <div class="acf-label">
            <label for="acf-block_625e5c56e3cf8-field_625e58459c5f5">Wordpress Site <span class="acf-required">*</span>
            </label>
        </div>
        <div class="acf-input">
            <div class="acf-input-wrap acf-url -valid">
                <i class="acf-icon -globe -small"></i>
                <input type="url" id="acf-block_625e5c56e3cf8-field_625e58459c5f5" name="acf-block_625e5c56e3cf8[field_625e58459c5f5]" value="<?php echo esc_attr($url); ?>" required="required">
            </div>
        </div>
    </div>
        
    <div class="acf-field acf-field-group acf-field-625e58579c5f6" data-name="oauth2_api_credentials" data-type="group" data-key="field_625e58579c5f6">
        <div class="acf-label">
            <label for="acf-block_625e5c56e3cf8-field_625e58579c5f6">OAuth2 API credentials</label>
        </div>

        <div class="acf-input">
            <div class="acf-fields -top -border">
                <div class="acf-field acf-field-email acf-field-625e58839c5f7 is-required" data-name="client_id" data-type="email" data-key="field_625e58839c5f7" data-required="1">
                    <div class="acf-label">
                        <label for="acf-block_625e5c56e3cf8-field_625e58579c5f6-field_625e58839c5f7">Client ID <span class="acf-required">*</span></label>
                    </div>
                    <div class="acf-input">
                    <div class="acf-input-wrap">
                        <input type="email" id="acf-block_625e5c56e3cf8-field_625e58579c5f6-field_625e58839c5f7" name="acf-block_625e5c56e3cf8[field_625e58579c5f6][field_625e58839c5f7]" value="<?php echo esc_attr($clientid); ?>" required="required">
                    </div>
                </div>
            </div>
            <div class="acf-field acf-field-password acf-field-625e589d9c5f8 is-required" data-name="client_secret" data-type="password" data-key="field_625e589d9c5f8" data-required="1">
                <div class="acf-label">
                    <label for="acf-block_625e5c56e3cf8-field_625e58579c5f6-field_625e589d9c5f8">Client Secret <span class="acf-required">*</span></label>
                </div>
            <div class="acf-input">
                <div class="acf-input-wrap">
                    <input type="password" id="acf-block_625e5c56e3cf8-field_625e58579c5f6-field_625e589d9c5f8" name="acf-block_625e5c56e3cf8[field_625e58579c5f6][field_625e589d9c5f8]" value="<?php echo esc_attr($clientsecret); ?>" required="required">
                </div>
            </div>
        </div>
    </div>
</div>