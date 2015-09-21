<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios Dominios'), ['controller' => 'UsuariosDominios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuarios Dominio'), ['controller' => 'UsuariosDominios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Faturas'), ['controller' => 'Faturas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fatura'), ['controller' => 'Faturas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidos view large-9 medium-8 columns content">
    <h3><?= h($pedido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $pedido->has('usuario') ? $this->Html->link($pedido->usuario->usuario, ['controller' => 'Usuarios', 'action' => 'view', $pedido->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Usuarios Dominio') ?></th>
            <td><?= $pedido->has('usuarios_dominio') ? $this->Html->link($pedido->usuarios_dominio->dominio, ['controller' => 'UsuariosDominios', 'action' => 'view', $pedido->usuarios_dominio->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedido->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($pedido->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Juros') ?></th>
            <td><?= $this->Number->format($pedido->juros) ?></td>
        </tr>
        <tr>
            <th><?= __('Desconto') ?></th>
            <td><?= $this->Number->format($pedido->desconto) ?></td>
        </tr>
        <tr>
            <th><?= __('Total') ?></th>
            <td><?= $this->Number->format($pedido->total) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($pedido->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Periodo Emissao') ?></th>
            <td><?= $this->Number->format($pedido->periodo_emissao) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Ultima Emissao') ?></th>
            <td><?= h($pedido->data_ultima_emissao) ?></tr>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pedido->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pedido->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Faturas') ?></h4>
        <?php if (!empty($pedido->faturas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Data Vencimento') ?></th>
                <th><?= __('Data Pagamento') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Pedido Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('Juros') ?></th>
                <th><?= __('Codigo') ?></th>
                <th><?= __('Token') ?></th>
                <th><?= __('Valor Recebido') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->faturas as $faturas): ?>
            <tr>
                <td><?= h($faturas->id) ?></td>
                <td><?= h($faturas->data_vencimento) ?></td>
                <td><?= h($faturas->data_pagamento) ?></td>
                <td><?= h($faturas->usuario_id) ?></td>
                <td><?= h($faturas->pedido_id) ?></td>
                <td><?= h($faturas->status) ?></td>
                <td><?= h($faturas->valor) ?></td>
                <td><?= h($faturas->juros) ?></td>
                <td><?= h($faturas->codigo) ?></td>
                <td><?= h($faturas->token) ?></td>
                <td><?= h($faturas->valor_recebido) ?></td>
                <td><?= h($faturas->created) ?></td>
                <td><?= h($faturas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Faturas', 'action' => 'view', $faturas->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Faturas', 'action' => 'edit', $faturas->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Faturas', 'action' => 'delete', $faturas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faturas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Produtos') ?></h4>
        <?php if (!empty($pedido->produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Updated') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->produtos as $produtos): ?>
            <tr>
                <td><?= h($produtos->id) ?></td>
                <td><?= h($produtos->nome) ?></td>
                <td><?= h($produtos->descricao) ?></td>
                <td><?= h($produtos->valor) ?></td>
                <td><?= h($produtos->created) ?></td>
                <td><?= h($produtos->modified) ?></td>
                <td><?= h($produtos->updated) ?></td>
                <td><?= h($produtos->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
