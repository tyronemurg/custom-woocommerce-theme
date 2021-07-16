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
 * @package WooCommerce/Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="u-columns col2-set row" id="customer_login">

	<div class="col-sm-6 card-naked">

<?php endif; ?>

		<h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>

		<form class="md-form" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

	
			<div class="md-form" wfd-id="462">
                                  <input type="text" id="username" name="username" class="form-control" wfd-id="1081" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>">
                                  <label for="username" wfd-id="463" class=""><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?><span class="required">*</span></label>
                              </div>
		
			<div class="md-form pb-3" wfd-id="460">
                                  <input type="password" id="password" name="password" class="form-control" wfd-id="1080">
                                  <label for="password" wfd-id="461">Your password</label>
                                  <p class="font-small blue-text d-flex justify-content-end">Forgot
                                      <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="blue-text ml-1"> Password?</a>
                                  </p>
                              </div>

			<?php do_action( 'woocommerce_login_form' ); ?>

		
			<div class="text-center mb-3" wfd-id="459">
			<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                  <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?> wfd-id="1177">Sign in</button>
                              </div>
		

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>

	<div class="col-sm-6 card-naked">

		<h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="md-form" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<!--<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>-->
			<div class="md-form">
                                  <input type="text" id="reg_email" name="email" class="form-control">
                                  <label for="reg_email" wfd-id="463" class=""><?php esc_html_e( 'Email address', 'woocommerce' ); ?><span class="required">*</span></label>
                              </div>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>
				<!--<div class="md-form">
                                  <input type="password" id="reg_password" name="password" class="form-control" >
                                  <label for="reg_password" wfd-id="463" class=""><?php esc_html_e( 'Password', 'woocommerce' ); ?><span class="required">*</span></label>
                              </div>-->

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-form-row form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?> wfd-id="1177"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
				<!--<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>-->
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
