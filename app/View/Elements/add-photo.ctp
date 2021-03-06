<section id="add-photo" class="margin-20">
	<h4>Add your photo</h4>
<?php
	echo $this->Form->create(
		'TopicPhoto', 
		array(
			'controller' => 'TopicPhotos', 
			'action' => 'add',
			'type' => 'file',
			'inputDefaults' => array(
		        'div' => array(
		        	'class' => 'control-group'
		        	),
		        'class' => 'input-xxlarge'
		    	)
			)
		);
	echo $this->Form->input(
		'TopicPhoto.file', array(
			'type' => 'file',
			'label' => 'Upload a photo',
			'class' => 'left',
			'div' => array(
				'class' => 'control-group left'
				)
			)
		);
?>
	<h3 class="or left margin-20">OR</h3>
<?php
	echo $this->Form->input(
		'TopicPhoto.url',
		array(
			'label' => 'Add an image url',
			'class' => 'input-xlarge',
			'div' => array(
				'class' => 'control-group right'
				)
			)
		);
?>
	<span class="clear"></span>
<?php
	$topic_id = isset($this->data['TopicPhoto']['topic_id']) ? $this->data['TopicPhoto']['topic_id'] : $this->request->params['topic'];
	$selected = isset($topic_id) ? $topic_id : null;
	echo $this->Form->input(
		'TopicPhoto.topic_id',
		array(
			'label' => 'Category',
			'type' => 'select',
			'options' => $topic_choices,
			'selected' => $selected
			)
		);
	echo $this->Form->input(
		'TopicPhoto.description',
		array(
			'type' => 'textarea',
			'label' => 'How is this photo relevant to this category?'
			)
		);
	echo $this->Form->input(
		'TopicPhoto.name',
		array(
			'label' => 'Your Name (optional)'
			)
		);
	$board_id = isset($this->data['TopicPhoto']['board_id']) ? $this->data['TopicPhoto']['board_id'] : $this->request->params['id'];
	echo $this->Form->input(
		'TopicPhoto.board_id',
		array(
			'type' => 'hidden',
			'value' => $board_id
			)
		);
	echo $this->Form->submit('Add Photo',array('class' => 'btn btn-primary '));
	echo $this->Form->end();
?>
</section>