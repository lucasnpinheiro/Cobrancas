<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios Dominios'), ['controller' => 'UsuariosDominios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuarios Dominio'), ['controller' => 'UsuariosDominios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Faturas'), ['controller' => 'Faturas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fatura'), ['controller' => 'Faturas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidos index large-9 medium-8 columns content">
    <h3><?= __('Pedidos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th><?= $this->Paginator->sort('usuarios_dominio_id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('juros') ?></th>
                <th><?= $this->Paginator->sort('desconto') ?></th>
                <th><?= $this->Paginator->sort('total') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= $this->Number->format($pedido->id) ?></td>
                <td><?= $pedido->has('usuario') ? $this->Html->link($pedido->usuario->usuario, ['controller' => 'Usuarios', 'action' => 'view', $pedido->usuario->id]) : '' ?></td>
                <td><?= $pedido->has('usuarios_dominio') ? $this->Html->link($pedido->usuarios_dominio->dominio, ['controller' => 'UsuariosDominios', 'action' => 'view', $pedido->usuarios_dominio->id]) : '' ?></td>
                <td><?= $this->Number->format($pedido->valor) ?></td>
                <td><?= $this->Number->format($pedido->juros) ?></td>
                <td><?= $this->Number->format($pedido->desconto) ?></td>
                <td><?= $this->Number->format($pedido->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
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
