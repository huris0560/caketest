 <div class="Dcart form">
<?php echo $this->Form->create(false, array(
		'type'=> 'get',
    	'url' => array('controller' => 'DOrderEstimates', 'action' => 'confirmcart')
	)); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->hidden('dojin', ['value'=>'1'] );
		echo $this->Form->hidden('estimate_cd', ['value'=>$id] );
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
	</ul>
</div>
