<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Consultar Produtos') ?></h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-condensed table-hover table-responsive">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= h($produto->nome) ?></td>
                        <td><?= $this->Html->moeda($produto->valor) ?></td>
                        <td><?= h($produto->created) ?></td>
                        <td><?= h($produto->modified) ?></td>
                        <td><?= h($produto->updated) ?></td>
                        <td><?= $this->Html->status($produto->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
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
