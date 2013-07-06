<div class="wrap">
<h2>WP Bullhorn</h2>
<form method="post" action="options.php"> 
<?php @settings_fields(WP_Bullhorn::OPTIONS_GROUP); ?>
<?php @do_settings_fields(WP_Bullhorn::OPTIONS_GROUP); ?>

<table class="form-table">  
  <tr valign="top">
  	<th scope="row"><label for="bh_username">Bullhorn Username</label></th>
  	<td>
			<input type="text" name="bh_username" id="bh_username" value="<?php echo get_option('bh_username'); ?>" />
		</td>
  </tr>
  <tr valign="top">
  	<th scope="row"><label for="bh_password">Bullhorn Password</label></th>
  	<td>
			<input type="text" name="bh_password" id="bh_password" value="<?php echo get_option('bh_password'); ?>" />
		</td>
  </tr>
  <tr valign="top">
  	<th scope="row"><label for="bh_api_key">Bullhorn API Key</label></th>
  	<td>
			<input type="text" name="bh_api_key" id="bh_api_key" value="<?php echo get_option('bh_api_key'); ?>" />
		</td>
  </tr>
</table>
    
<?php @submit_button(); ?>
</form>
</div>

<?php
    global $post_data;
    // Create post object
    $my_post = array(
        'post_title' => 'My Post Title',
        'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean metus mauris, consectetur eget pharetra eu, varius et enim. Donec non feugiat sapien.',
        'post_status' => 'publish',
        'post_type' => 'job_order'
    );
    
    $post_data = array(
        'post_type' => 'job_order',
        'jobOrderID' => 'meta_value',
        'address_address1' => 'meta_value'
    );

    // Insert the post into the database
    wp_insert_post($my_post);
?>