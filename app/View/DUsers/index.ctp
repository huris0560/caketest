<div class="dUsers index">
	<h2><?php echo __('D Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('user_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('user_name1'); ?></th>
			<th><?php echo $this->Paginator->sort('user_name2'); ?></th>
			<th><?php echo $this->Paginator->sort('user_kana1'); ?></th>
			<th><?php echo $this->Paginator->sort('user_kana2'); ?></th>
			<th><?php echo $this->Paginator->sort('nick_name'); ?></th>
			<th><?php echo $this->Paginator->sort('circle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_addr'); ?></th>
			<th><?php echo $this->Paginator->sort('pass_word'); ?></th>
			<th><?php echo $this->Paginator->sort('birth_day_yy'); ?></th>
			<th><?php echo $this->Paginator->sort('birth_day_mm'); ?></th>
			<th><?php echo $this->Paginator->sort('birth_day_dd'); ?></th>
			<th><?php echo $this->Paginator->sort('regist_day'); ?></th>
			<th><?php echo $this->Paginator->sort('update_day'); ?></th>
			<th><?php echo $this->Paginator->sort('mmaga_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode1_1'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode1_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_1_1'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_1_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_1_3'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_1_4'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_1_1'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_1_2'); ?></th>
			<th><?php echo $this->Paginator->sort('fax1'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_name1_1'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_name1_2'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_kana1_1'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_kana1_2'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode2_1'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode2_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_2_1'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_2_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_2_3'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_2_4'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_2_5'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_2_1'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_2_2'); ?></th>
			<th><?php echo $this->Paginator->sort('fax2'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_name2_1'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_name2_2'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_kana2_1'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_kana2_2'); ?></th>
			<th><?php echo $this->Paginator->sort('inside_memo'); ?></th>
			<th><?php echo $this->Paginator->sort('user_age'); ?></th>
			<th><?php echo $this->Paginator->sort('user_sex'); ?></th>
			<th><?php echo $this->Paginator->sort('teishi_day'); ?></th>
			<th><?php echo $this->Paginator->sort('user_str'); ?></th>
			<th><?php echo $this->Paginator->sort('teishi_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('cry_pass'); ?></th>
			<th><?php echo $this->Paginator->sort('ucd_guest'); ?></th>
			<th><?php echo $this->Paginator->sort('lcd_guest'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dUsers as $dUser): ?>
	<tr>
		<td><?php echo h($dUser['DUser']['user_cd']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['user_name1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['user_name2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['user_kana1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['user_kana2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['nick_name']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['circle_name']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['mail_addr']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['pass_word']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['birth_day_yy']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['birth_day_mm']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['birth_day_dd']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['regist_day']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['update_day']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['mmaga_flag']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['zipcode1_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['zipcode1_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_1_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_1_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_1_3']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_1_4']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['tel_1_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['tel_1_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['fax1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['atena_name1_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['atena_name1_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['atena_kana1_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['atena_kana1_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['zipcode2_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['zipcode2_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_2_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_2_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_2_3']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_2_4']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['addr_2_5']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['tel_2_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['tel_2_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['fax2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['atena_name2_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['atena_name2_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['atena_kana2_1']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['atena_kana2_2']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['inside_memo']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['user_age']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['user_sex']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['teishi_day']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['user_str']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['teishi_flag']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['cry_pass']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['ucd_guest']); ?>&nbsp;</td>
		<td><?php echo h($dUser['DUser']['lcd_guest']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dUser['DUser']['user_cd'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dUser['DUser']['user_cd'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dUser['DUser']['user_cd']), array('confirm' => __('Are you sure you want to delete # %s?', $dUser['DUser']['user_cd']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New D User'), array('action' => 'add')); ?></li>
	</ul>
</div>
