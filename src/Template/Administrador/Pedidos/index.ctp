<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Pedidos') ?></h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-condensed table-hover table-responsive">
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

    </div>
    <div class="panel-footer text-right">
        <?= $this->element('paginacao'); ?>
    </div>
</div>