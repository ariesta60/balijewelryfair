<?php 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if (isset($_POST['niteoCS_subscribe_type']) && is_numeric($_POST['niteoCS_subscribe_type'])) {
	update_option('niteoCS_subscribe_type', sanitize_text_field($_POST['niteoCS_subscribe_type']));
}

if (isset($_POST['niteoCS_subscribe_label']))  {
	update_option('niteoCS_subscribe_label', sanitize_text_field($_POST['niteoCS_subscribe_label']));
}

if ( isset($_POST['niteoCS_subscribe_code']) ) {
	$shortcode = str_replace('"', '\'', $_POST['niteoCS_subscribe_code']);
	update_option('niteoCS_subscribe_code', sanitize_text_field($shortcode));
} 

// get subscribe settings
$niteoCS_subscribe_type 	= get_option('niteoCS_subscribe_type', '2');
$niteoCS_subscribe_code 	= get_option('niteoCS_subscribe_code');
$niteoCS_subscribe_label	= stripslashes(get_option('niteoCS_subscribe_label', 'Subscribe for awesome news!'));
$niteoCS_subscribers_list 	= get_option('niteoCS_subscribers_list');


?>

<div class="table-wrapper content" id="subscribe-section">
	<h3><?php _e('Subscribe Form', 'cmp-coming-soon-maintenance');?></h3>
	<table class="content">
	<tbody>
	<tr>
		<th>
			<fieldset>
				<legend class="screen-reader-text">
					<span><?php _e('Subscribe Form Options', 'cmp-coming-soon-maintenance');?></span>
				</legend>

				<p>
					<label title="Niteo Subscribe">
					 	<input type="radio" class="subscribe" name="niteoCS_subscribe_type" value="2"<?php if ( $niteoCS_subscribe_type == 2) { echo ' checked="checked"'; } ?>>&nbsp;<?php _e('Niteo Subscribe', 'cmp-coming-soon-maintenance');?>
					</label>
				</p>

				<p>
					<label title="3rd Party Plugin">
					 	<input type="radio" class="subscribe" name="niteoCS_subscribe_type" value="1"<?php if ( $niteoCS_subscribe_type == 1) { echo ' checked="checked"'; } ?>>&nbsp;<?php _e('3rd Party Plugin', 'cmp-coming-soon-maintenance');?>
					</label>
				</p>

				<p>
					<label title="Disabled">
					 	<input type="radio" class="subscribe" name="niteoCS_subscribe_type" value="0"<?php if ( $niteoCS_subscribe_type == 0) { echo ' checked="checked"'; } ?>>&nbsp;<?php _e('Disabled', 'cmp-coming-soon-maintenance');?>
					</label>
				</p>

			</fieldset>
		</th>

		<td id="subscribe-disabled" class="subscribe-switch x0">
			<p><?php _e('Subscribe Form is disabled.', 'cmp-coming-soon-maintenance');?></p>
		</td>

		<td id="subscribe-3rdparty" class="subscribe-switch x1">
			<fieldset>
				<label class="subscribe" for="niteoCS_subscribe_code">3rd Party Plugin Shortcode
					<input type="text" name="niteoCS_subscribe_code" id="niteoCS_subscribe_code" value="<?php echo stripslashes( esc_attr($niteoCS_subscribe_code ));?>" class="regular-text code">
				</label>

				<p><?php _e('You can find Shortode in your Contact Form Plugin settings. Should be something similar to code below: ', 'cmp-coming-soon-maintenance');?><br><code>[contact-form-7 id="8" title='Contact form 1']</code> or <code>[mc4wp_form id='7']</code></p>

				<p><?php _e('Your Subscribe Form should have only one input (type=email) and submit (input=submit). If you have more than one input field, our design will not work and you need to use custom CSS to style your Subscribe form.', 'cmp-coming-soon-maintenance');?></p>
				<p><?php _e('Example of Subscribe Form code for ', 'cmp-coming-soon-maintenance');?><a href="https://wordpress.org/plugins/mailchimp-for-wp/">MailChimp</a> plugin:</p>
				<code>
					&lt;p&gt
					&lt;input type="email" name="EMAIL" placeholder="Your email address" required />
					&lt;input type="submit" value="Sign up" />
					&lt;/p&gt
				</code>
			</fieldset>
		</td>

		<td id="subscribe-niteo" class="subscribe-switch x2">
			<fieldset>
				<p><?php _e('Default subscribe form will be displayed to visitors. Only export of email addresses to .csv file is supported. Mailing List will be deleted after deletion of CMP plugin.', 'cmp-coming-soon-maintenance');?></p>
				
				<label class="subscribe" for="niteoCS_subscribe_label">Subscribe form Label
					<input type="text" name="niteoCS_subscribe_label" id="niteoCS_subscribe_label" value="<?php echo esc_attr($niteoCS_subscribe_label );?>" class="regular-text code" placeholder="<?php _e('Leave empty to disable', 'cmp-coming-soon-maintenance');?>">
				</label>

				<p><?php _e('Total Subscribers: ', 'cmp-coming-soon-maintenance');?><a href="<?php echo admin_url(); ?>admin.php?page=cmp-subscribers""><?php echo $niteoCS_subscribers_list ? count( $niteoCS_subscribers_list ) : '0';?></a> </p>

			</fieldset>
		</td>

	</tr>

	<?php echo $this->render_settings->submit(); ?>
	
	</tbody>
	</table>
</div>