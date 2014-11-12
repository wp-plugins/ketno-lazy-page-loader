<?php

	if(empty($_POST['kento_lazy_loader_hidden']))
		{
			$display_lazy_load = get_option( 'display_lazy_load' );					
			$lazy_loader_top_color = get_option( 'lazy_loader_top_color' );
			$lazy_loader_bottom_color = get_option( 'lazy_loader_bottom_color' );
			$lazy_loader_left_color = get_option( 'lazy_loader_left_color' );
			$lazy_loader_right_color = get_option( 'lazy_loader_right_color' );
			$lazy_loader_timeout = get_option( 'lazy_loader_timeout' );
			$lazy_loader_border_radius = get_option( 'lazy_loader_border_radius' );
			$lazy_loader_width = get_option( 'lazy_loader_width' );			
			$lazy_loader_height = get_option( 'lazy_loader_height' );		
		}

	else
		{
		
		if($_POST['kento_lazy_loader_hidden'] == 'Y')
			{
								
			$lazy_loader_top_color = $_POST['lazy_loader_top_color'];
			update_option('lazy_loader_top_color', $lazy_loader_top_color);
			
			$lazy_loader_bottom_color = $_POST['lazy_loader_bottom_color'];
			update_option('lazy_loader_bottom_color', $lazy_loader_bottom_color);			
			
			$lazy_loader_left_color = $_POST['lazy_loader_left_color'];
			update_option('lazy_loader_left_color', $lazy_loader_left_color);
			
			$lazy_loader_right_color = $_POST['lazy_loader_right_color'];
			update_option('lazy_loader_right_color', $lazy_loader_right_color);			
			
			$lazy_loader_timeout = $_POST['lazy_loader_timeout'];
			update_option('lazy_loader_timeout', $lazy_loader_timeout);
			
			$lazy_loader_border_radius = $_POST['lazy_loader_border_radius'];
			update_option('lazy_loader_border_radius', $lazy_loader_border_radius);
			
			$lazy_loader_width = $_POST['lazy_loader_width'];
			update_option('lazy_loader_width', $lazy_loader_width);

			$lazy_loader_height = $_POST['lazy_loader_height'];
			update_option('lazy_loader_height', $lazy_loader_height);
			
			$display_lazy_load = $_POST['display_lazy_load'];
			update_option('display_lazy_load', $display_lazy_load);					
			?>
			<div class="updated"><p><strong><?php _e('Changes Saved.' ); ?></strong></p>
            </div>
            
            
            
            
			<?php
		} 
	}
?>


<div class="wrap skill-bars">
	<div id="icon-tools" class="icon32"><br></div><?php echo "<h2>".__('Kento Lazy Page Load Settings')."</h2>";?>
		<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="kento_lazy_loader_hidden" value="Y">
        <?php settings_fields( 'kento_lazyloader_plugin_options' );
				do_settings_sections( 'kento_lazyloader_plugin_options' );
			
		?>

<table class="form-table">

  				<tr valign="top">
					<th scope="row"><label for="lazy_loader_width">Kento Lazy Load Width</label></th>
					<td style="vertical-align:middle;">
<input  size='10' name='lazy_loader_width' class='lazy-loader-width' type='text' id="lazy_loader-width" value='<?php if ( !empty( $lazy_loader_width ) ) echo $lazy_loader_width; else echo 5; ?>' />em<br />
<span style="font-size:12px;color:#22aa5d">select kento lazy loader size. default size:5 em.</span>
					</td>
				</tr>

  				<tr valign="top">
					<th scope="row"><label for="lazy_loader_height">Kento Lazy Load Height</label></th>
					<td style="vertical-align:middle;">
<input  size='10' name='lazy_loader_height' class='lazy-loader-height' type='text' id="lazy_loader-height" value='<?php if ( !empty( $lazy_loader_height ) ) echo $lazy_loader_height; else echo 5; ?>' />em<br />
<span style="font-size:12px;color:#22aa5d">select kento lazy load height. default height:5 em.</span>
					</td>
				</tr>
                
                
  				<tr valign="top">
					<th scope="row"><label for="lazy_loader_border_radius">Kento Lazy Load Border Radius</label></th>
					<td style="vertical-align:middle;">
<input  size='10' name='lazy_loader_border_radius' class='lazy-loader-border-radius' type='text' id="lazy-loader-border_radius" value='<?php if ( !empty( $lazy_loader_border_radius ) ) echo $lazy_loader_border_radius; else echo 50; ?>' />%<br />
<span style="font-size:12px;color:#22aa5d">select kento lazy load border radius. default border radius:50%.</span>
					</td>
				</tr>


  				<tr valign="top">
					<th scope="row"><label for="lazy_loader_top_color">Kento Lazy Load Top Color</label></th>
					<td style="vertical-align:middle;">
<input  size='10' name='lazy_loader_top_color' class='lazy-loader-top-color' type='text' id="loader-top-color" value='<?php echo $lazy_loader_top_color; ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select kento lazy loader top color. default top color: #3498DB.</span>
					</td>
				</tr>
                
                
  				<tr valign="top">
					<th scope="row"><label for="lazy_loader_right_color">Kento Lazy Load Right Color</label></th>
					<td style="vertical-align:middle;">
<input  size='10' name='lazy_loader_right_color' class='lazy-loader-right-color' type='text' id="loader-right-color" value='<?php echo $lazy_loader_right_color; ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select kento lazy loader right color. default right color: #3498DB.</span>
					</td>
				</tr>                   
                

  				<tr valign="top">
					<th scope="row"><label for="lazy_loader_bottom_color">Kento Lazy Load Bottom Color</label></th>
					<td style="vertical-align:middle;">
<input  size='10' name='lazy_loader_bottom_color' class='lazy-loader-bottom-color' type='text' id="loader-bottom-color" value='<?php echo $lazy_loader_bottom_color; ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select kento lazy loader bottom color. default bottom color: #3498DB.</span>
					</td>
				</tr>
                

  				<tr valign="top">
					<th scope="row"><label for="lazy_loader_left_color">Kento Lazy Load Left Color</label></th>
					<td style="vertical-align:middle;">
<input  size='10' name='lazy_loader_left_color' class='lazy-loader-left-color' type='text' id="loader-left-color" value='<?php echo $lazy_loader_left_color; ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select kento lazy loader left color. default left color: #3498DB.</span>
					</td>
				</tr>
                

  				<tr valign="top">
					<th scope="row"><label for="lazy_loader_timeout">Kento Lazy Load Timeout</label></th>
					<td style="vertical-align:middle;">
<input  size='10' name='lazy_loader_timeout' class='lazy-loader-time-out' type='text' id="loader-time-out" value='<?php if ( !empty( $lazy_loader_timeout ) ) echo $lazy_loader_timeout; else echo 1500; ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select kento lazy loader timeout. default timeout:1500.</span>
					</td>
				</tr>
                
                
         <tr valign="top">
            <th scope="row"><label for="display_lazy_load">Kento Lazy Load Display</label></th>
            <td style="vertical-align:middle;">
            <select name="display_lazy_load">
                <option value="yes" <?php if($display_lazy_load=='yes') echo "selected"; ?> >Enable</option>
                <option value="none" <?php if($display_lazy_load=='none') echo "selected"; ?> >Disable</option>                                
            </select>
        <span style="font-size:12px;color:#22aa5d">Use Dropdown Menu to select kento lazy loader enable/disable.</span>
            </td>
		</tr> 

                

</table>
                <p class="submit">
                    <input class="button button-primary" type="submit" name="Submit" value="<?php _e('Save Changes' ) ?>" />
                </p>
		</form>


			<script>
            jQuery(document).ready(function(jQuery)
                {	
                jQuery('#loader-top-color, #loader-bottom-color, #loader-left-color, #loader-right-color').wpColorPicker();
                });
            </script> 
        
        
        
</div>
