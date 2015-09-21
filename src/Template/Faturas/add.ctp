<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Faturas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="faturas form large-9 medium-8 columns content">
    <?= $this->Form->create($fatura) ?>
    <fieldset>
        <legend><?= __('Add Fatura') ?></legend>
        <?php
            echo $this->Form->input('data_vencimento');
            echo $this->Form->input('data_pagamento', ['empty' => true, 'default' => '']);
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('pedido_id');
            echo $this->Form->input('status');
            echo $this->Form->input('valor');
            echo $this->Form->input('juros');
            echo $this->Form->input('codigo');
            echo $this->Form->input('token');
            echo $this->Form->input('valor_recebido');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
