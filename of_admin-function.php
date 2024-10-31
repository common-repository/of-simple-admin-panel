<?php
/*
* Plugin Name: OF Simple Admin Panel
* Author: Omar Faruque
* Author URL: aboutdhaka.com
* Description: This plugin for symple admin panel like logo, social links, custom css, custom js etc.
* Version: 1.0
* Licence: OF
*/

// Admin Theme Function  
function sap_add_theme_menu_item()
{
	//add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
	add_submenu_page( 'themes.php', "Theme Option", "Theme Option", "manage_options", "theme-panel", "sap_theme_settings_page", null, 99 );
}
// Logo Uplode

function sap_gear_manager_admin_scripts() { // function for upload script
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('jquery');
}

function sap_gear_manager_admin_styles() { //  function for upload style
	wp_enqueue_style('thickbox');
	if(isset($_GET['page'])){
		if($_GET['page'] == 'theme-panel'){
			wp_enqueue_style('customThemeStyle',  plugin_dir_url( __FILE__ ) . 'of_admin-function.css');
		}
	}

}

add_action('admin_print_scripts', 'sap_gear_manager_admin_scripts');
add_action('admin_print_styles', 'sap_gear_manager_admin_styles');


add_action("admin_menu", "sap_add_theme_menu_item");

function sap_theme_settings_page(){
	?>
	<div class="wrap">
	    <h1>Theme Options</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
<?php
}

// Facebook Fucntion 
function sap_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" /> <span class="id">ID: facebook_url</span>
    <?php
}


// Facebook Fucntion 
function sap_home_product_amount()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" /> <span class="id">ID: facebook_url</span>
    <?php
}


// Twitter Function 
function sap_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" /><span class="id">ID: twitter_url</span>
    <?php
}

// Google Plus
function sap_google_element()
{
	?>
    	<input type="text" name="google_url" id="google_url" value="<?php echo get_option('google_url'); ?>" /><span class="id">ID: google_url</span>
    <?php
}

// Youtube Url
function sap_youtube_element()
{
	?>
    	<input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" /><span class="id">ID: youtube_url</span>
    <?php
}

// Instagram Url
function sap_instagram_element()
{
	?>
    	<input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" /><span class="id">ID: instagram_url</span>
    <?php
}


// Copy Rights Information
function sap_copyright()
{
	?>
    	<input type="text" name="copyright" id="copyright" value="<?php echo get_option('copyright'); ?>" /><span class="id">ID: copyright</span>
    <?php
}



// Logo Default
function sap_logo_display()
{
	?>
<div class="uploader">
	<input id="theme_logo" name="theme_logo" type="text" value="<?= get_option('theme_logo'); ?>" />
	<input id="_one_hotel_logo_upload" class="button" name="_one_hotel_logo_upload" type="button" value="Upload" /><span class="id">ID: theme_logo</span>
	<div class="previewThemeOption"><img src="<?= get_option('theme_logo'); ?>" /></div>
</div>
	<script language="JavaScript">
		jQuery(document).ready(function() {
		jQuery('#_one_hotel_logo_upload').click(function() {
		formfield = jQuery('#theme_logo').attr('name');
		tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		return false;
		});

		window.send_to_editor = function(html) {
		imgurl_logo = jQuery('img',html).attr('src');
		jQuery('#theme_logo').val(imgurl_logo);
		jQuery('.previewThemeOption img').attr('src', imgurl_logo);
		tb_remove();
		}

		});
	</script>
   <?php
}


// Logo Ratina
function sap_logo_ratina()
{
	?>
<div class="uploader">
	<input id="theme_logo_ratina" name="theme_logo_ratina" type="text" value="<?= get_option('theme_logo_ratina'); ?>" />
	<input id="_one_hotel_logo_upload_ratina" class="button" name="_one_hotel_logo_upload_ratina" type="button" value="Upload" /><span class="id">ID: theme_logo_ratina</span>
	<div class="previewThemeOption_ratina"><img src="<?= get_option('theme_logo_ratina'); ?>" /></div>
</div>
	<script language="JavaScript">
		jQuery(document).ready(function() {
		jQuery('#_one_hotel_logo_upload_ratina').click(function() {
		formfield = jQuery('#theme_logo_ratina').attr('name');
		tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		return false;
		});

		window.send_to_editor = function(html) {
		imgurl_ratina = jQuery('img',html).attr('src');
		jQuery('#theme_logo_ratina').val(imgurl_ratina);
		jQuery('.previewThemeOption_ratina img').attr('src', imgurl_ratina);
		tb_remove();
		}

		});
	</script>
   <?php
}

// Logo Ratina
function sap_favicon()
{
	?>
<div class="uploader">
	<input id="favicon" name="favicon" type="text" value="<?= get_option('favicon'); ?>" />
	<input id="_favicon_buton" class="button" name="_favicon_buton" type="button" value="Upload" /><span class="id">ID: favicon</span>
	<div class="favicon"><img src="<?= get_option('favicon'); ?>" /></div>
</div>
	<script language="JavaScript">
		jQuery(document).ready(function() {
		jQuery('#_favicon_buton').click(function() {
		formfield = jQuery('#favicon').attr('name');
		tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		return false;
		});

		window.send_to_editor = function(html) {
		imgurl = jQuery('img',html).attr('src');
		jQuery('#favicon').val(imgurl);
		jQuery('.favicon img').attr('src', imgurl);
		tb_remove();
		}

		});
	</script>
   <?php
}

// Email Field
function sap_email_element()
{
	?>
    	<input type="text" name="email_info" id="email_info" value="<?php echo get_option('email_info'); ?>" /><span class="id">ID: email_info</span>
    <?php
}

// Mobile Number
function sap_tell_element()
{
	?>
    	<input type="text" name="tell_number" id="tell_number" value="<?php echo get_option('tell_number'); ?>" /><span class="id">ID: tell_number</span>
    <?php
}





function sap_theme_panel_fields()
{
	ob_start();
	$instruction = '<?php echo get_option("id"); ?>';

	add_settings_section("section", "Theme Settings<br/><span>Use ID for get value. example: <code>".htmlspecialchars($instruction)."</code> </span>", null, "theme-options");

	add_settings_field("theme_logo", "Default Logo", "sap_logo_display", "theme-options", "section");  
 	add_settings_field("theme_logo_ratina", "Ratina Logo", "sap_logo_ratina", "theme-options", "section");  
 	add_settings_field("favicon", "Favicon (Shortcut Icon)", "sap_favicon", "theme-options", "section");  
	add_settings_field("facebook_url", "Facebook Profile Url", "sap_facebook_element", "theme-options", "section");	
	add_settings_field("twitter_url", "Twitter Profile Url", "sap_twitter_element", "theme-options", "section");  //twitter_url
	add_settings_field("google_url", "Google Plus Url", "sap_google_element", "theme-options", "section");  //google_url
	add_settings_field("youtube_url", "Youtube Profile Url", "sap_youtube_element", "theme-options", "section");  //youtube_url
	add_settings_field("instagram_url", "Instagram Profile Url", "sap_instagram_element", "theme-options", "section");  //instagram_url
	add_settings_field("email_info", "Email Address", "sap_email_element", "theme-options", "section");  //Email Information
	add_settings_field("tell_number", "Mobile / Telephone Number", "sap_tell_element", "theme-options", "section");  //Telephone Number
	add_settings_field("copyright", "Copyright Info:", "sap_copyright", "theme-options", "section");  //Copyright


    register_setting("section", "facebook_url");
    register_setting("section", "twitter_url");
    register_setting("section", "google_url");
    register_setting("section", "youtube_url");
    register_setting("section", "instagram_url");
    register_setting("section", "copyright");
    register_setting("section", "email_info");
    register_setting("section", "tell_number");
  	register_setting("section", "theme_logo");
  	register_setting("section", "theme_logo_ratina");
  	register_setting("section", "favicon");
  	ob_end_clean();
}
add_action("admin_init", "sap_theme_panel_fields");

?>