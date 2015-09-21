<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fatura'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="faturas index large-9 medium-8 columns content">
    <h3><?= __('Faturas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('data_vencimento') ?></th>
                <th><?= $this->Paginator->sort('data_pagamento') ?></th>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th><?= $this->Paginator->sort('pedido_id') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($faturas as $fatura): ?>
            <tr>
                <td><?= $this->Number->format($fatura->id) ?></td>
                <td><?= h($fatura->data_vencimento) ?></td>
                <td><?= h($fatura->data_pagamento) ?></td>
                <td><?= $fatura->has('usuario') ? $this->Html->link($fatura->usuario->usuario, ['controller' => 'Usuarios', 'action' => 'view', $fatura->usuario->id]) : '' ?></td>
                <td><?= $this->Number->format($fatura->pedido_id) ?></td>
                <td><?= $this->Number->format($fatura->status) ?></td>
                <td><?= $this->Number->format($fatura->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fatura->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fatura->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fatura->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fatura->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
