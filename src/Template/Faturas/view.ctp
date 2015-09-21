<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fatura'), ['action' => 'edit', $fatura->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fatura'), ['action' => 'delete', $fatura->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fatura->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Faturas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fatura'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="faturas view large-9 medium-8 columns content">
    <h3><?= h($fatura->usuario_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $fatura->has('usuario') ? $this->Html->link($fatura->usuario->usuario, ['controller' => 'Usuarios', 'action' => 'view', $fatura->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($fatura->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($fatura->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pedido Id') ?></th>
            <td><?= $this->Number->format($fatura->pedido_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($fatura->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($fatura->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Juros') ?></th>
            <td><?= $this->Number->format($fatura->juros) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Recebido') ?></th>
            <td><?= $this->Number->format($fatura->valor_recebido) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Vencimento') ?></th>
            <td><?= h($fatura->data_vencimento) ?></tr>
        </tr>
        <tr>
            <th><?= __('Data Pagamento') ?></th>
            <td><?= h($fatura->data_pagamento) ?></tr>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($fatura->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($fatura->modified) ?></tr>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Token') ?></h4>
        <?= $this->Text->autoParagraph(h($fatura->token)); ?>
    </div>
</div>
