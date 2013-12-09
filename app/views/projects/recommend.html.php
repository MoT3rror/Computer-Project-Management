<?php
    $this->title('Recommendations');
?>
<?= $this->form->create($project) ?>
    <?= $this->form->field('recommend',
        array (
            'type'  =>  'textarea',
            'style' =>  'width: 500px; height: 200px',
        )
    ); ?>
    <?= $this->form->submit('Save'); ?>
<?= $this->form->end() ?>