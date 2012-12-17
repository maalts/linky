<h2>Edit your Board</h2>
<?php 
	echo $this->Form->create(
		'Board', array(
			'controller' => 'boards',
			'action' => 'edit',
			'inputDefaults' => array(
				'class' => 'input-xxlarge',
				'div' => array(
					'class' => 'control-group'
					)
				)
			)
		);
	echo $this->Form->input(
		'Board.id',
		array(
			'type' => 'hidden'
			)
		);
	echo $this->Form->input(
		'Board.title',
		array(
			'label' => 'Board Title'
			)
		);
	echo $this->Form->input(
		'Board.description',
		array(
			'label' => 'Text Prompt'
			)
		);
	echo $this->Form->input(
		'Board.image',
		array(
			'label' => 'Image Url'
			)
		);
	echo $this->Html->link('Deactivate this board?','/boards/deactivate/'.$this->data['Board']['id'], array('class' => 'btn btn-danger left margin-20 alpha'));
	echo $this->Form->submit('Save Board', array('div' => array('class'=> 'left'), 'class' => 'btn btn-primary '));
?>
	<span class="clear"></span>
<?php
	echo $this->Form->end();
?>