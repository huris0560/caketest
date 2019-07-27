<div class="admin form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('Admin'); ?>
	<fieldset>
		<legend>
			<?php echo __('Please enter your adminname and password'); ?>
		</legend>
		<?php
		echo $this->Form->input('admin_name');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>