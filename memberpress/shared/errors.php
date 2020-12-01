<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>

<?php if(isset($errors) && $errors != null && count($errors) > 0): ?>
<div class="mp_wrapper bg-gray">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5 text-center">
				
			  <div class="bg-white p-3 text-danger" id="mepr_jump">
			    <ul class="list-unstyled mb-0">
			      <?php foreach($errors as $error): ?>
			        <li><strong><?php _ex('ERROR', 'ui', 'memberpress'); ?></strong>: <?php print $error; ?></li>
			      <?php endforeach; ?>
			    </ul>
			  </div>
			</div>
			
		</div>
	</div>
</div>
<?php endif; ?>

<?php if( isset($message) and !empty($message) ): ?>
<div class="mp_wrapper bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="mp_wrapper">
				  <div class="mepr_updated"><?php echo $message; ?></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
