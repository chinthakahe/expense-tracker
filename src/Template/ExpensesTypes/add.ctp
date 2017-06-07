<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Expenses Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="expensesTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($expensesType) ?>
    <fieldset>
        <legend><?= __('Add Expenses Type') ?></legend>
        <div class="form-group">
        <?php
            echo $this->Form->control('name');
        ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
