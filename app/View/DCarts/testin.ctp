<table class="buy1" style="width:100%;">
<tr>
<th>支払いテストへ入るテストページ　</th>
</tr>

<?php echo $this->Form->create(false, array(
		'type'=> 'get',
    	'url' => array('controller' => 'DOrderestimates', 'action' => 'dojincartconfirm')
		));
?>

<?php
echo $this->Form->input('estimate_cd', ['value' => '36208']);
echo $this->Form->input('dojin', ['value' => '1']);
?>

<?php
echo $this->Form->end(__('Submit'));
?>