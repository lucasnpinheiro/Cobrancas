<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedidos Produto'), ['action' => 'edit', $pedidosProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedidos Produto'), ['action' => 'delete', $pedidosProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidosProdutos view large-9 medium-8 columns content">
    <h3><?= h($pedidosProduto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pedido') ?></th>
            <td><?= $pedidosProduto->has('pedido') ? $this->Html->link($pedidosProduto->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $pedidosProduto->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Produto') ?></th>
            <td><?= $pedidosProduto->has('produto') ? $this->Html->link($pedidosProduto->produto->nome, ['controller' => 'Produtos', 'action' => 'view', $pedidosProduto->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidosProduto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($pedidosProduto->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Desconto') ?></th>
            <td><?= $this->Number->format($pedidosProduto->desconto) ?></td>
        </tr>
        <tr>
            <th><?= __('Juros') ?></th>
            <td><?= $this->Number->format($pedidosProduto->juros) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($pedidosProduto->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pedidosProduto->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pedidosProduto->modified) ?></tr>
        </tr>
    </table>
</div>
