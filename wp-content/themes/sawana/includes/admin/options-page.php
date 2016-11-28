<?php
function sw_theme_opts_page() {
	$theme_opts	=	get_option('sw_opts');
?>
	<div class="wrap">
	    <div class="panel panel-success">
	        <div class="panel-heading">
	            <h3 class="panel-title"><?php _e('Sawana Theme Settings', 'sawana' ); ?></h3>
	        </div>
	        <div class="panel-body">
	            <?php
	                if(isset($_GET['status']) && $_GET['status'] == 1) {
	                    ?>
	                    <div class="alert alert-success">Success!</div>
	                    <?php
	                }
	            ?>
	            <form method="post" action="admin-post.php">
	                <input type="hidden" name="action" value="sw_save_options">
	                <?php wp_nonce_field('sw_options_verify'); ?>
	                <h4><?php _e('Social Icons', 'sawana'); ?></h4>
	                <div class="form-group">
	                    <label><?php _e('Twitter', 'sawana'); ?></label>
	                    <input type="text" class="form-control" name="sw_inputTwitter" value="<?php echo $theme_opts['twitter']; ?>">
	                </div>
	                <div class="form-group">
	                    <label><?php _e('Facebook', 'sawana'); ?></label>
	                    <input type="text" class="form-control" name="sw_inputFacebook" value="<?php echo $theme_opts['facebook']; ?>">
	                </div>
	                <div class="form-group">
	                    <label><?php _e('YouTube', 'sawana'); ?></label>
	                    <input type="text" class="form-control" name="sw_inputYoutube" value="<?php echo $theme_opts['youtube']; ?>">
	                </div>
	                <h4><?php _e('Logo', 'sawana'); ?></h4>
	                <div class="form-group">
	                    <label><?php _e('Logo Type', 'sawana'); ?></label>
	                    <select class="form-control" name="sw_inputLogoType">
	                        <option value="1"><?php _e('Site Name', 'sawana'); ?></option>
	                        <option value="2"><?php echo $theme_opts['logo_type'] == 2 ? 'SELECTED' : ''; ?><?php _e('Image', 'sawana'); ?></option>
	                    </select>
	                </div>
	                <div class="input-group">
	                    <input type="text" class="form-control" placeholder="Logo Image" name="sw_inputLogoImg" value="<?php echo $theme_opts['logo_img']; ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" id="sw_uploadLogoImgBtn"><?php _e('Upload', 'sawana'); ?></button>
                        </span>
	                </div>
	                <h4><?php _e('Footer', 'sawana'); ?></h4>
	                <div class="form-group">
	                    <label><?php _e('Footer Text (HTML Allowed)', 'sawana'); ?></label>
	                    <textarea class="form-control" name="sw_inputFooter"><?php echo stripslashes_deep($theme_opts['footer']); ?></textarea>
	                </div>
	                <div class="form-group">
	                    <button type="submit" class="btn btn-primary"><?php _e('Update', 'sawana'); ?></button>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>

<?php 
}
?>


