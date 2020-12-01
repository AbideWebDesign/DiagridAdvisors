<div class="row justify-content-between">

	<div class="col-xl-auto">

		<h1 class="text-primary"><?php _e('Hello, ');?> <?php echo $user->first_name; ?> <?php echo $user->last_name; ?>!</h1>
		
		<p class="lead-secondary text-dark mb-2"><?php the_field('member_portal_lead_text', 'options'); ?></p>
						
		<p class="mb-5"><?php the_field('member_portal_text', 'options'); ?></p>
	
	</div>
	
	<div class="col-xl-auto align-self-center">
		
		<a href="<?php echo home_url('/account'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> Manage Account</a>
		
	</div>
	
</div>
