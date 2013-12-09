<?php
$this->title('Viruses');
?>
<?= $this->form->create($project) ?>
    <?= $this->form->field('viruses'); ?>
    <?= $this->form->submit('Save') ?>
<?= $this->form->end();