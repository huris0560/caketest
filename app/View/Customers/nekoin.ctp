<div class="customers form">

<?php echo $this->Form->create(false, array(
	'type'=> 'get',
    'url' => array('controller' => 'Customers', 'action' => 'nekoin')
//    'id' => 'RecipesAdd'
)); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
	echo $this->Form->hidden('Customer.test1', ['value'=> $color]);
	echo $this->Form->hidden('Customer.test2', ['value'=> '123']);	?>
	You have selected <?php echo $color; ?> icing for the cake.
	<?php echo $color ?>
	</fieldset>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php //echo h($customer['0']['Customer']['id']); ?>
			<?php // var_dump($customer); ?>
			<?php //print_r($customer); ?>
		</dd>
	</fieldset>
<?php echo $this->Form->end(__('Nekoin')); ?>
</div>