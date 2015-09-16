<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Consultar Dominio') ?></h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-condensed table-hover table-responsive">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('dominio') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuariosDominios as $usuariosDominio): ?>
                    <tr>
                        <td><?= $this->Number->format($usuariosDominio->id) ?></td>
                        <td>
                            <?= $usuariosDominio->has('usuario') ? $this->Html->link($usuariosDominio->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $usuariosDominio->usuario->id], ['iconDirection' => 'right', 'icon' => 'external-link']) : '' ?>
                        </td>
                        <td><?= h($usuariosDominio->dominio) ?></td>
                        <td><?= $this->Html->status($usuariosDominio->status) ?></td>
                        <td><?= h($usuariosDominio->created) ?></td>
                        <td><?= h($usuariosDominio->modified) ?></td>
                        <td><?= h($usuariosDominio->updated) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $usuariosDominio->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuariosDominio->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuariosDominio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosDominio->id)]) ?>
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