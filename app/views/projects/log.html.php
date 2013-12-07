<?php
    $this->title('Add Log');

    $this->form->config(
        array (
            'templates' =>  array (
                'error'     =>  '<div style="color: red">{:content}</div>',
                'field'     =>  '<div{:wrap}>{:label}{:error}{:input}</div>',
                //'select'    =>  '<select name="{:name}"{:options}>{:raw}</select>',
            ),
        )
    );
?>

<h2>New Log</h2>

<?= $this->form->create(); ?>
	<?= $this->form->field('projectid', array('type' => 'hidden', 'value' => $project->projectid)); ?>
    <?= $this->form->field('worker'); ?>
    <?= $this->form->field(array('esttime' => 'Estimate Time')); ?>
    <?= $this->form->field('status', array('type' => 'select', 'list' => \app\models\Projects::getStatus())); ?>
    <?= $this->form->field('description', array('type' => 'textarea')); ?>
	<?= $this->form->submit('Add Log'); ?>
<?= $this->form->end(); ?>