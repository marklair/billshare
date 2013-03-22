<div class="households view">
<h2><?php  echo __('Household');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($household['Household']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($household['Household']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($household['Household']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($household['Household']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($household['Household']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($household['Household']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($household['Household']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($household['Household']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Share Style'); ?></dt>
		<dd>
			<?php echo $this->Html->link($household['Sharestyle']['name'], array('controller' => 'sharestyles', 'action' => 'view', $household['Sharestyle']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>