<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>

<?php MeprView::render('/shared/errors', get_defined_vars()); ?>

<form action="<?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>" class="mepr-newpassword-form mepr-form" method="post" novalidate>
<input type="hidden" name="plugin" value="mepr" />
<input type="hidden" name="action" value="updatepassword" />
<?php wp_nonce_field( 'update_password', 'mepr_account_nonce' ); ?>

<div class="mp-form-row mepr_new_password">
  <label for="mepr-new-password"><?php _ex('New Password', 'ui', 'memberpress'); ?></label>
  <input type="password" placeholder="New Password" name="mepr-new-password" id="mepr-new-password" class="mepr-form-input mepr-new-password" required />
</div>
<div class="mp-form-row mepr_confirm_password">
  <label for="mepr-confirm-password"><?php _ex('Confirm New Password', 'ui', 'memberpress'); ?></label>
  <input type="password" placeholder="Confirm New Password" name="mepr-confirm-password" id="mepr-confirm-password" class="mepr-form-input mepr-new-password-confirm" required />
</div>
<?php MeprHooks::do_action('mepr-account-after-password-fields', $mepr_current_user); ?>

<div class="mepr_spacer">&nbsp;</div>

<input type="submit" name="new-password-submit" value="<?php _ex('Update Password', 'ui', 'memberpress'); ?>" class="mepr-submit btn btn-primary" />

<div class="text-sm pt-2">
    
    <?php _ex('or', 'ui', 'memberpress'); ?>
	<a href="<?php echo $mepr_options->account_page_url(); ?>"><?php _ex('Cancel', 'ui', 'memberpress'); ?></a>
	
</div>
<img src="<?php echo admin_url('images/loading.gif'); ?>" style="display: none;" class="mepr-loading-gif" />
<?php MeprView::render('/shared/has_errors', get_defined_vars()); ?>
</form>

<?php MeprHooks::do_action('mepr_account_password', $mepr_current_user); ?>

