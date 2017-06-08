<?php
/**
  * @var \App\View\AppView $this
  */
use Cake\I18n\Time;
?>
<ol class="breadcrumb">
    <li><?= $this->Html->link(__('Add Expenses'), ['controller' => 'Expenses', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List Expenses Types'), ['controller' => 'ExpensesTypes', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
</ol>
<div class="expenses index large-9 medium-8 columns content">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('expenses_types_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expenses as $expense): ?>
            <tr>
                <td><?= $expense->has('expenses_type') ? $this->Html->link($expense->expenses_type->name, ['controller' => 'ExpensesTypes', 'action' => 'view', $expense->expenses_type->id]) : '' ?></td>
                <td><?= $expense->has('user') ? $this->Html->link($expense->user->first_name, ['controller' => 'Users', 'action' => 'view', $expense->user->id]) : '' ?></td>
                <td><?= $this->Number->format($expense->amount) ?></td>
                <td><?= h($expense->paid) ?></td>
                <td><?= new Time(h($expense->created),'Asia/Colombo') ?></td>
                <td><?= h($expense->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expense->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expense->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
