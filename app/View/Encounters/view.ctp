<div class="encounters view">
<h2><?php echo __('Encounter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($encounter['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $encounter['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encounter Date'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['encounter_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($encounter['User']['id'], array('controller' => 'users', 'action' => 'view', $encounter['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dx'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['dx']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['rx']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($encounter['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $encounter['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Encounter'), array('action' => 'edit', $encounter['Encounter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Encounter'), array('action' => 'delete', $encounter['Encounter']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $encounter['Encounter']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
