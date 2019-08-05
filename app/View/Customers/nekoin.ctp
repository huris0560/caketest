<div class="customers form">

<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend>
			<?php echo __('Please enter your username and password'); ?>
		</legend>
		<?php echo $this->Form->input('username');
			echo $this->Form->input('password');

		?>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['0']['Customer']['id']); ?>
			<?php // var_dump($customer); ?>
			<?php print_r($customer); ?>
		</dd>
		</fieldset>
<?php echo $this->Form->end(__('Nekoin')); ?>
</div>