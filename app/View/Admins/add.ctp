<div class="admins form">
<?php echo $this->Form->create('Admin'); ?>
	<fieldset>
		<legend><?php echo __('Add Admin'); ?></legend>
		<?php
			echo $this->Form->input('admin_name');
			echo $this->Form->input('password');
			echo $this->Form->input('role', array(
				'options' => array('admin' => 'Admin', 'author' => 'Author')));
			echo $this->Form->input('baces', array(
				'options' => array('public' => 'Public', 'factry' => 'Factry', 'reception' => 'Reception')));
			echo $this->Form->input('ip');
			?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>