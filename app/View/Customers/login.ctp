<div class="customers form">

<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend>
			<?php echo __('ログイン'); ?>
		</legend>
		<?php echo $this->Form->input('ログインID');
			echo $this->Form->input('パスワード');

		?>
		</fieldset>
<?php echo $this->Form->end(__('ログイン')); ?>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('新規会員登録'), array('action' => 'add')); ?></li>
	</ul>
</div>