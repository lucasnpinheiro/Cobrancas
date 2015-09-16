<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Consultar Usuários') ?></h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-condensed table-hover table-responsive">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nome', __('nome')) ?></th>
                    <th><?= $this->Paginator->sort('usuario', __('usuario')) ?></th>
                    <th><?= $this->Paginator->sort('created', __('created')) ?></th>
                    <th><?= $this->Paginator->sort('modified', __('modified')) ?></th>
                    <th><?= $this->Paginator->sort('updated', __('updated')) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= h($usuario->nome) ?></td>
                        <td><?= h($usuario->usuario) ?></td>
                        <td><?= h($usuario->created) ?></td>
                        <td><?= h($usuario->modified) ?></td>
                        <td><?= h($usuario->updated) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                            <?= $this->Html->link(__('Dominios'), ['controller' => 'UsuariosDominios', 'action' => 'index', '?' => ['usuario_id' => $usuario->id]], ['icon' => 'search', 'class' => ' btn-info btn btn-xs ']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
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