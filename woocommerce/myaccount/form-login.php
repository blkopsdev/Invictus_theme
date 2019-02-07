<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div class="col2-set clearfix" id="customer_login">

    <div class="col-1 customer-col">

<?php endif; ?>

        <h2><?php _e( 'Login', 'invictus' ); ?></h2>

        <form method="post" class="login">

            <?php do_action( 'woocommerce_login_form_start' ); ?>

            <p class="form-row form-row-wide">
                <input type="text" class="input-text placeholder" placeholder="<?php _e('Username or email', 'invictus'); ?>" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
            </p>
            <p class="form-row form-row-wide">
                <input class="input-text placeholder" placeholder="<?php _e('Password', 'invictus'); ?>" type="password" name="password" id="password" />
            </p>

            <?php do_action( 'woocommerce_login_form' ); ?>

            <p class="form-row">
                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                <input type="submit" class="button login-btn" name="login" value="<?php _e( 'Login', 'invictus' ); ?>" /> 
                <a class="lost_password woo-lost_password2" href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Lost Password?', 'invictus' ); ?></a>
                <label for="rememberme" class="inline woo-my-account-rememberme">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'invictus' ); ?>
                </label>
            </p>

            <?php do_action( 'woocommerce_login_form_end' ); ?>

        </form>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

    </div>

    <div class="col-2 customer-col">

        <h2><?php _e( 'Register', 'invictus' ); ?></h2>

        <form method="post" class="register">

            <?php do_action( 'woocommerce_register_form_start' ); ?>

            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                <p class="form-row form-row-wide">
                    <input type="text" class="input-text placeholder" placeholder="<?php _e('Username', 'invictus'); ?>" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
                </p>

            <?php endif; ?>

            <p class="form-row form-row-wide">
                <input type="email" class="input-text placeholder" placeholder="<?php _e('Email', 'invictus'); ?>" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
            </p>

            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
    
                <p class="form-row form-row-wide">
                    <input type="password" class="input-text placeholder" placeholder="<?php _e('Password', 'invictus'); ?>" name="password" id="reg_password" />
                </p>

            <?php endif; ?>

            <!-- Spam Trap -->
            <div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'invictus' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

            <?php do_action( 'woocommerce_register_form' ); ?>
            <?php do_action( 'register_form' ); ?>

            <p class="form-row">
                <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                <input type="submit" class="button login-btn" name="register" value="<?php _e( 'Register', 'invictus' ); ?>" />
            </p>

            <?php do_action( 'woocommerce_register_form_end' ); ?>

        </form>

    </div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>