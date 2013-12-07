<?php
	$this->title('Add Project');

	$this->form->config(
		array (
			'templates'	=>	array (
				'error'	=>	'<div style="color: red">{:content}</div>',
				'field'	=>	'<div{:wrap}>{:label}{:error}{:input}</div>',
			),
		)
	);
?>

<h4>Add new project</h4>

<?= $this->form->create($project); ?>
	<?= $this->form->field(array('projectname' => 'Project Name'), array('value' => 'Computer ')); ?>
    <?= $this->form->field(array('client' => 'Client Name')); ?>
    <?= $this->form->field(array('phone' => 'Client Phone')); ?>
    <?= $this->form->field(array('model')); ?>
    <?= $this->form->field(array('serialnumber'	=>	'Serial Number')) ?>
	<?= $this->form->field('description', array(
		'type'=>'textarea',
		'value' => "Condition: \rPassword: \rProblem: ",
		'style' => 'width: 500px; height: 200px'
	)) ?>
	<!--<?= $this->form->field(array('projectstart' => 'Project Start')) ?>
	<?= $this->form->field(array('projectend' => 'Project End')) ?>-->
	<?= $this->form->submit('Add Project'); ?>
<?= $this->form->end(); ?>
