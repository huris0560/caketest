<div class="duser form">

<?php echo $this->Form->create('DUserform'); ?>
	<fieldset>
		<legend>
			<?php echo __('改変中'); ?>
		</legend>
		<?php echo $this->Form->input('cart_cd');
//			echo $this->Form->input('password');
		?>
		<dt><?php echo __('ボタン'); ?></dt>
		<dd>
		</dd>
	</fieldset>
<?php echo $this->Form->end(__('POST')); ?>
</div>