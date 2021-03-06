<div id="accordion">
	<h3><a href="#"><?php __('Eva Has Many Associations');?></a></h3>
	<div class="evaHasManyAssociations index">
		<table border="0" cellspacing="5" cellpadding="5" class="mylayout">
			<thead>
				<tr>
						<th><?php echo $this->Paginator->sort('id');?></th>
						<th><?php echo $this->Paginator->sort('name');?></th>
						<th><?php echo $this->Paginator->sort('description');?></th>
						<th><?php echo $this->Paginator->sort('eva_model_id');?></th>
						<th><?php echo $this->Paginator->sort('associated_model_id');?></th>
						<th><?php echo $this->Paginator->sort('deleted');?></th>
						<th><?php echo $this->Paginator->sort('deleted_date');?></th>
						<th class="actions"><?php __('Actions');?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 0;
				foreach ($evaHasManyAssociations as $evaHasManyAssociation):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="odd"';
					}
				?>
				<tr<?php echo $class;?>>
					<td><?php echo $i; ?>&nbsp;</td>
					<td><?php echo $evaHasManyAssociation['EvaHasManyAssociation']['name']; ?>&nbsp;</td>
					<td><?php echo $evaHasManyAssociation['EvaHasManyAssociation']['description']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($evaHasManyAssociation['EvaModel']['name'], array('controller' => 'eva_models', 'action' => 'view', $evaHasManyAssociation['EvaModel']['id'])); ?>
					</td>
					<td><?php echo $evaHasManyAssociation['EvaHasManyAssociation']['associated_model_name']; ?>&nbsp;</td>
					<td><?php echo $evaHasManyAssociation['EvaHasManyAssociation']['deleted']; ?>&nbsp;</td>
					<td><?php echo $evaHasManyAssociation['EvaHasManyAssociation']['deleted_date']; ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View', true), array('action' => 'view', $evaHasManyAssociation['EvaHasManyAssociation']['id']),array('class'=>'action_table_view_data','title'=>'view '.$evaHasManyAssociation['EvaHasManyAssociation']['name'])); ?>
						<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $evaHasManyAssociation['EvaHasManyAssociation']['id']),array('class'=>'action_table_edit_data_no_ajax','title'=>'edit '.$evaHasManyAssociation['EvaHasManyAssociation']['name'])); ?>
						<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $evaHasManyAssociation['EvaHasManyAssociation']['id']), array('class'=>'action_table_delete_data_no_ajax','title'=>'delete '.$evaHasManyAssociation['EvaHasManyAssociation']['name']), sprintf(__('Are you sure you want to delete # %s?', true), $evaHasManyAssociation['EvaHasManyAssociation']['id'])); ?>
						<!--<a href="javascript:;" id="<?php //echo $evaHasManyAssociation['EvaHasManyAssociation']['id'];?>" class="action_table_delete_data" title="delete <?php //echo $evaHasManyAssociation['EvaHasManyAssociation']['name'];?>">Delete</a> -->
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
		));
		?>	</p>

		<div class="paging">
			<?php echo $this->Paginator->prev( __('previous', true), array(), null, array('class'=>'disabled'));?>
		  	<?php echo $this->Paginator->numbers(array('separator'=>' '));?>
			<?php echo $this->Paginator->next(__('next', true), array(), null, array('class' => 'disabled'));?>
		</div>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('New Eva Has Many Association', true), array('action' => 'add'),array('class'=>'list_action_add_new_data_no_ajax')); ?></li>
				<li><?php echo $this->Html->link(__('List Eva Models', true), array('controller' => 'eva_models', 'action' => 'index'),array('class'=>'list_action_add_list_data')); ?> </li>
				
				<li><?php echo $this->Html->link(__('List Eva Has Many Association Details', true), array('controller' => 'eva_has_many_association_details', 'action' => 'index'),array('class'=>'list_action_add_list_data')); ?> </li>
				
				<li><?php echo $this->Html->link(__('New Eva Model', true), array('controller' => 'eva_models', 'action' => 'add'),array('class'=>'list_action_add_new_data_no_ajax')); ?> </li>
				<!--
				<li><?php //echo $this->Html->link(__('New Eva Has Many Association Detail', true), array('controller' => 'eva_has_many_association_details', 'action' => 'add'),array('class'=>'list_action_add_new_data')); ?> </li>
				-->
			</ul>
		</div>
	</div>
</div>