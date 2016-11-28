<?php

function sw_save_options() {
        if( !current_user_can( 'edit_theme_options' ) ){
            wp_die(__('You are not allowed to be on this page.') );
        }
        check_admin_referer( 'sw_options_verify' );
        $opts               =   get_option( 'sw_opts' );
        $opts['twitter']    =   sanitize_text_field($_POST['sw_inputTwitter']);
        $opts['facebook']   =   sanitize_text_field($_POST['sw_inputFacebook']);
        $opts['youtube']    =   sanitize_text_field($_POST['sw_inputYoutube']);
        $opts['logo_type']  =   absint( $_POST['sw_inputLogoType']);
        $opts['footer']     =   $_POST['sw_inputFooter'];
        $opts['logo_img']   =   esc_url_raw($_POST['sw_inputLogoImg']);
        update_option( 'sw_opts', $opts );
        wp_redirect( admin_url('admin.php?page=sw_theme_opts&status=1') );
    }