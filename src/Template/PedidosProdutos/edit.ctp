<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedidosProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosProduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedidos Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidosProdutos form large-9 medium-8 columns content">
    <?= $this->Form->create($pedidosProduto) ?>
    <fieldset>
        <legend><?= __('Edit Pedidos Produto') ?></legend>
        <?php
            echo $this->Form->input('pedido_id', ['options' => $pedidos, 'empty' => true]);
            echo $this->Form->input('produto_id', ['options' => $produtos, 'empty' => true]);
            echo $this->Form->input('valor');
            echo $this->Form->input('desconto');
            echo $this->Form->input('juros');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
