<div class="customers form">

<?php
//	echo $this->Form->create(false, array(
//	'type'=> 'get',
 //   'url' => array('controller' => 'Customers', 'action' => 'nekoin')
//    'id' => 'RecipesAdd'
//		));




//Formの作成
echo $this->Form->create('Nekoin');

//labelの生成
echo $this->Form->label('性別を選択してください');
echo '<br>';

//radioボタンの作成
$options = [
		'abcde' => 'ABCDE',
		'あいうえお' => 'あいうえお'
];
echo $this->Form->radio('radio', $options);





		echo $this->Form->input('customer', array(
				'type' => 'checkbox',
//  			'checked' => true,    // 初期表示で選択させる場合
    			'label' => '選ぶ',    // チェックボックスのラベル
//  'div' => false        // div親要素の有無(true/false)
));
 ?>
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