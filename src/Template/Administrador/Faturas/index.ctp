<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Consultar Faturas') ?></h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-condensed table-hover table-responsive">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('data_vencimento') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('data_pagamento') ?></th>
                    <th><?= $this->Paginator->sort('juros') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faturas as $fatura): ?>
                    <tr>
                        <td><?= $this->Number->format($fatura->id) ?></td>
                        <td><?= h($fatura->data_vencimento) ?></td>
                        <td>
                            <?= $fatura->has('usuario') ? $this->Html->link($fatura->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $fatura->usuario->id]) : '' ?>
                        </td>
                        <td><?= $this->Number->format($fatura->valor) ?></td>
                        <td><?= $this->Number->format($fatura->status) ?></td>
                        <td><?= h($fatura->data_pagamento) ?></td>
                        <td><?= $this->Number->format($fatura->juros) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $fatura->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fatura->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fatura->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fatura->id)]) ?>
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