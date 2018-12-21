<?php
/*
Template Name: connexion
*/
    get_header();
?>

<?php //wp_login_form(); ?>

<?php
    if ( ! is_user_logged_in() ) { // Display WordPress login form:
        $args = array(
            'redirect' => admin_url(), 
            'form_id' => 'loginform-custom',
            'label_username' => __( 'Email' ),
            'label_password' => __( 'Mot de passe' ),
            'label_remember' => __( 'Se souvenir de moi' ),
            'label_log_in' => __( 'Se connecter' ),
            'remember' => true
        );
        wp_login_form( $args );
?>
    <button href="<?php echo bloginfo( 'wpurl' );?>/wp-login.php?action=register" class="registerLink">Créer un compte</button>
<?php
    } else { // If logged in:
        wp_loginout( home_url() ); // Display "Log Out" link.
        echo " | ";
        wp_register('', ''); // Display "Site Admin" link.
    }
?>

<?php get_footer(); ?>