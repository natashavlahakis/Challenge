<?php
//register settings
function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}

//add settings page to menu
function add_settings_page() {
add_menu_page( __( 'Theme Settings' ), __( 'Theme Settings' ), 'manage_options', 'settings', 'theme_settings_page');
}

//add actions
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );

//define your variables
$color_scheme = array('default','blue','green',);

//start settings page
function theme_settings_page() {

if ( ! isset( $_REQUEST['updated'] ) )
$_REQUEST['updated'] = false;

//get variables outside scope
global $color_scheme;
?>

<div class="wrap">

<div id="icon-options-general"></div>
<h2><?php _e( 'Theme Settings' ) //your admin panel title ?></h2>

<?php
//show saved options message
if ( false !== $_REQUEST['updated'] ) : ?>
<div><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
<?php endif; ?>

<form method="post" action="options.php">

<?php settings_fields( 'theme_settings' ); ?>
<?php $options = get_option( 'theme_settings' ); ?>

<table>

<tr valign="top">
<th><h3>Lead Section</h3></th>
</tr>

<!-- Option 1: Lead Title -->
<tr valign="top">
<th scope="row"><?php _e( 'Lead Title' ); ?></th>
<td><input id="theme_settings[lead_title]" type="text" size="36" name="theme_settings[lead_title]" value="<?php esc_attr_e( $options['lead_title'] ); ?>" />
<label for="theme_settings[lead_title]"><?php _e( 'Enter the Lead section title.' ); ?></label></td>
</tr>
    
<!-- Option 2: Lead Body -->
<tr valign="top">
<th scope="row"><?php _e( 'Lead Body' ); ?></th>
<td><label for="theme_settings[lead_body]"><?php _e( 'Enter the lead section body.' ); ?></label>
<br />
<textarea id="theme_settings[lead_body]" name="theme_settings[lead_body]" rows="5" cols="36"><?php esc_attr_e( $options['lead_body'] ); ?></textarea></td>
</tr>

<!-- Option 3: Media Source -->
<tr valign="top">
<th scope="row"><?php _e( 'Media Source' ); ?></th>
<td><input id="theme_settings[media_source]" type="text" size="36" name="theme_settings[media_source]" value="<?php esc_attr_e( $options['media_source'] ); ?>" />
<label for="theme_settings[media_source]"><?php _e( 'Enter the URL to media source' ); ?></label></td>
</tr>

<!-- Option 4: Student Reource 1 -->
<tr valign="top">
<th scope="row"><?php _e( 'Student Guidelines' ); ?></th>
<td><input id="theme_settings[student_resource_1]" type="text" size="36" name="theme_settings[student_resource_1]" value="<?php esc_attr_e( $options['student_resource_1'] ); ?>" />
<label for="theme_settings[student_resource_1]"><?php _e( 'Enter the URL to student resource 1' ); ?></label></td>
</tr>

<!-- Option 5: Student Reource 1 -->
<tr valign="top">
<th scope="row"><?php _e( '$20 Challenge Training' ); ?></th>
<td><input id="theme_settings[student_resource_2]" type="text" size="36" name="theme_settings[student_resource_2]" value="<?php esc_attr_e( $options['student_resource_2'] ); ?>" />
<label for="theme_settings[student_resource_2]"><?php _e( 'Enter the URL to student resource 2' ); ?></label></td>
</tr>

<!-- Option 6: Media Source -->
<tr valign="top">
<th scope="row"><?php _e( 'Student Declaration Form 2013' ); ?></th>
<td><input id="theme_settings[student_resource_3]" type="text" size="36" name="theme_settings[student_resource_3]" value="<?php esc_attr_e( $options['student_resource_3'] ); ?>" />
<label for="theme_settings[student_resource_3]"><?php _e( 'Enter the URL to student resource 3' ); ?></label></td>
</tr>

<tr valign="top">
<th><h3>Feature Section</h3></th>
</tr>

<!-- Option 7: Features Title -->
<tr valign="top">
<th scope="row"><?php _e( 'Feature Title' ); ?></th>
<td><input id="theme_settings[feature_title]" type="text" size="36" name="theme_settings[feature_title]" value="<?php esc_attr_e( $options['feature_title'] ); ?>" />
<label for="theme_settings[feature_title]"><?php _e( 'Enter the feature section title.' ); ?></label></td>
</tr>
    
<!-- Option 8: Feature Body Left -->
<tr valign="top">
<th scope="row"><?php _e( 'Feature Body Left' ); ?></th>
<td><label for="theme_settings[feature_body_left]"><?php _e( 'Enter the left feature section body.' ); ?></label>
<br />
<textarea id="theme_settings[feature_body_left]" name="theme_settings[feature_body_left]" rows="5" cols="36"><?php esc_attr_e( $options['feature_body_left'] ); ?></textarea></td>
</tr>

<!-- Option 9: Feature Body Right -->
<tr valign="top">
<th scope="row"><?php _e( 'Feature Body Right' ); ?></th>
<td><label for="theme_settings[feature_body_right]"><?php _e( 'Enter the right feature section body.' ); ?></label>
<br />
<textarea id="theme_settings[feature_body_right]" name="theme_settings[feature_body_right]" rows="5" cols="36"><?php esc_attr_e( $options['feature_body_right'] ); ?></textarea></td>
</tr>

<!-- Option 10: Features Button URL -->
<tr valign="top">
<th scope="row"><?php _e( 'Feature Button URL' ); ?></th>
<td><input id="theme_settings[feature_button_url]" type="text" size="36" name="theme_settings[feature_button_url]" value="<?php esc_attr_e( $options['feature_button_url'] ); ?>" />
<label for="theme_settings[feature_button_url]"><?php _e( 'Enter the button URL.' ); ?></label></td>
</tr>

<tr valign="top">
<th><h3>Quote Section</h3></th>
</tr>

<!-- Option 11: Quote Title -->
<tr valign="top">
<th scope="row"><?php _e( 'Quote Title' ); ?></th>
<td><input id="theme_settings[quote_title]" type="text" size="36" name="theme_settings[quote_title]" value="<?php esc_attr_e( $options['quote_title'] ); ?>" />
<label for="theme_settings[quote_title]"><?php _e( 'Enter the quote section title.' ); ?></label></td>
</tr>
    
<!-- Option 12: Quote Body -->
<tr valign="top">
<th scope="row"><?php _e( 'Quote Body' ); ?></th>
<td><label for="theme_settings[quote_body]"><?php _e( 'Enter the left quote section body.' ); ?></label>
<br />
<textarea id="theme_settings[quote_body]" name="theme_settings[quote_body]" rows="5" cols="36"><?php esc_attr_e( $options['quote_body'] ); ?></textarea></td>
</tr>

<!-- Option 13: Ambassador Resource 1 -->
<tr valign="top">
<th scope="row"><?php _e( '$20 Challenge Ambassador Presentation' ); ?></th>
<td><input id="theme_settings[ambassador_resource_1]" type="text" size="36" name="theme_settings[ambassador_resource_1]" value="<?php esc_attr_e( $options['ambassador_resource_1'] ); ?>" />
<label for="theme_settings[ambassador_resource_1]"><?php _e( 'Enter the URL to ambassador resource 1.' ); ?></label></td>
</tr>

<!-- Option 14: Ambassador Resource 2 -->
<tr valign="top">
<th scope="row"><?php _e( '$20 Challenge Introductory Presentation' ); ?></th>
<td><input id="theme_settings[ambassador_resource_2]" type="text" size="36" name="theme_settings[ambassador_resource_2]" value="<?php esc_attr_e( $options['ambassador_resource_2'] ); ?>" />
<label for="theme_settings[ambassador_resource_2]"><?php _e( 'Enter the URL to ambassador resource 2.' ); ?></label></td>
</tr>

<!-- Option 13: Ambassador Resource 3 -->
<tr valign="top">
<th scope="row"><?php _e( '$20 Challenge Training' ); ?></th>
<td><input id="theme_settings[ambassador_resource_3]" type="text" size="36" name="theme_settings[ambassador_resource_3]" value="<?php esc_attr_e( $options['ambassador_resource_3'] ); ?>" />
<label for="theme_settings[ambassador_resource_3]"><?php _e( 'Enter the URL to student resource 2' ); ?></label></td>
</tr>

<tr valign="top">
<th><h3>Tour Section</h3></th>
</tr>

<!-- Option 14: Step 1 Title -->
<tr valign="top">
<th scope="row"><?php _e( 'Step 1 Title' ); ?></th>
<td><input id="theme_settings[step_1_title]" type="text" size="36" name="theme_settings[step_1_title]" value="<?php esc_attr_e( $options['step_1_title'] ); ?>" />
<label for="theme_settings[step_1_title]"><?php _e( 'Enter the step 1 section title.' ); ?></label></td>
</tr>
    
<!-- Option 12: Step 1 Body -->
<tr valign="top">
<th scope="row"><?php _e( 'Step 1 Body' ); ?></th>
<td><label for="theme_settings[step_1_body]"><?php _e( 'Enter the step 1 body.' ); ?></label>
<br />
<textarea id="theme_settings[step_1_body]" name="theme_settings[step_1_body]" rows="5" cols="36"><?php esc_attr_e( $options['step_1_body'] ); ?></textarea></td>
</tr>

<!-- Option 13: Step 2 Title -->
<tr valign="top">
<th scope="row"><?php _e( 'Step 2 Title' ); ?></th>
<td><input id="theme_settings[step_2_title]" type="text" size="36" name="theme_settings[step_2_title]" value="<?php esc_attr_e( $options['step_2_title'] ); ?>" />
<label for="theme_settings[step_2_title]"><?php _e( 'Enter the step 2 section title.' ); ?></label></td>
</tr>
    
<!-- Option 14: Step 2 Body -->
<tr valign="top">
<th scope="row"><?php _e( 'Step 2 Body' ); ?></th>
<td><label for="theme_settings[step_2_body]"><?php _e( 'Enter the step 2 body.' ); ?></label>
<br />
<textarea id="theme_settings[step_2_body]" name="theme_settings[step_2_body]" rows="5" cols="36"><?php esc_attr_e( $options['step_2_body'] ); ?></textarea></td>
</tr>

<!-- Option 15: Step 3 Title -->
<tr valign="top">
<th scope="row"><?php _e( 'Step 3 Title' ); ?></th>
<td><input id="theme_settings[step_3_title]" type="text" size="36" name="theme_settings[step_3_title]" value="<?php esc_attr_e( $options['step_3_title'] ); ?>" />
<label for="theme_settings[step_3_title]"><?php _e( 'Enter the step 3 section title.' ); ?></label></td>
</tr>
    
<!-- Option 16: Step 3 Body -->
<tr valign="top">
<th scope="row"><?php _e( 'Step 3 Body' ); ?></th>
<td><label for="theme_settings[step_3_body]"><?php _e( 'Enter the step 3 body.' ); ?></label>
<br />
<textarea id="theme_settings[step_3_body]" name="theme_settings[step_3_body]" rows="5" cols="36"><?php esc_attr_e( $options['step_3_body'] ); ?></textarea></td>
</tr>

<!-- Option 17: End Tour -->
<tr valign="top">
<th scope="row"><?php _e( 'End Tour' ); ?></th>
<td><input id="theme_settings[end_tour]" type="text" size="36" name="theme_settings[end_tour]" value="<?php esc_attr_e( $options['end_tour'] ); ?>" />
<label for="theme_settings[end_tour]"><?php _e( 'Enter the end tour title.' ); ?></label></td>
</tr>

<tr valign="top">
<th><h3>Contact</h3></th>
</tr>

<!-- Option 18: Contact Information -->
<tr valign="top">
<th scope="row"><?php _e( 'Contact Info' ); ?></th>
<td><label for="theme_settings[contact_info]"><?php _e( 'Enter the contact info.' ); ?></label>
<br />
<textarea id="theme_settings[contact_info]" name="theme_settings[contact_info]" rows="5" cols="36"><?php esc_attr_e( $options['contact_info'] ); ?></textarea></td>
</tr>

<!-- Option 19: Facebook URL -->
<tr valign="top">
<th scope="row"><?php _e( 'Facebook URL' ); ?></th>
<td><input id="theme_settings[facebook_url]" type="text" size="36" name="theme_settings[facebook_url]" value="<?php esc_attr_e( $options['facebook_url'] ); ?>" />
<label for="theme_settings[facebook_url]"><?php _e( 'Enter your Facebook URL.' ); ?></label></td>
</tr>

<!-- Option 20: End Tour -->
<tr valign="top">
<th scope="row"><?php _e( 'YouTube URL' ); ?></th>
<td><input id="theme_settings[youtube_url]" type="text" size="36" name="theme_settings[youtube_url]" value="<?php esc_attr_e( $options['youtube_url'] ); ?>" />
<label for="theme_settings[youtube_url]"><?php _e( 'Enter your YouTube URL.' ); ?></label></td>
</tr>

</table>

<?php submit_button(); ?>
</form>

</div><!-- END wrap -->

<?php
}
//sanitize and validate
function options_validate( $input ) {
    global $select_options, $radio_options;
    if ( ! isset( $input['option1'] ) )
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );
    if ( ! isset( $input['radioinput'] ) )
        $input['radioinput'] = null;
    if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
        $input['radioinput'] = null;
    $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );
    return $input;
}
?>