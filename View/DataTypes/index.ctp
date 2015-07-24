<div class="dataTypes index">
	<h2><?php echo __('Data Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('language_id'); ?></th>
			<th><?php echo $this->Paginator->sort('key'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('is_systemized'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dataTypes as $dataType): ?>
	<tr>
		<td><?php echo h($dataType['DataType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dataType['Language']['id'], array('controller' => 'languages', 'action' => 'view', $dataType['Language']['id'])); ?>
		</td>
		<td><?php echo h($dataType['DataType']['key']); ?>&nbsp;</td>
		<td><?php echo h($dataType['DataType']['name']); ?>&nbsp;</td>
		<td><?php echo h($dataType['DataType']['weight']); ?>&nbsp;</td>
		<td><?php echo h($dataType['DataType']['is_systemized']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dataType['TrackableCreator']['id'], array('controller' => 'users', 'action' => 'view', $dataType['TrackableCreator']['id'])); ?>
		</td>
		<td><?php echo h($dataType['DataType']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dataType['TrackableUpdater']['id'], array('controller' => 'users', 'action' => 'view', $dataType['TrackableUpdater']['id'])); ?>
		</td>
		<td><?php echo h($dataType['DataType']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dataType['DataType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dataType['DataType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dataType['DataType']['id']), null, __('Are you sure you want to delete # %s?', $dataType['DataType']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Data Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trackable Creator'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
