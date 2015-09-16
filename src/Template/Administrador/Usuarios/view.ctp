<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Detalhes Usuários') ?></h3>
    </div>
    <div class="panel-body">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($usuario->nome) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Usuario') ?></h6>
            <p><?= h($usuario->usuario) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">

            <h6 class="subheader"><?= __('Identificador') ?></h6>
            <p><?= $this->Number->format($usuario->id) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $this->Html->status($usuario->status) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Tipo') ?></h6>
            <p><?= h($usuario->tipo) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($usuario->created) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($usuario->modified) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($usuario->updated) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Telefones') ?></h6>
            <?= $this->Text->autoParagraph(h($usuario->telefones)) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Emails') ?></h6>
            <?= $this->Text->autoParagraph(h($usuario->emails)) ?>
        </div>

    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Faturas') ?></h3>
    </div>
    <div class="panel-body">
        <?php if (!empty($usuario->faturas)): ?>
            <table table table-bordered table-condensed table-hover table-responsive>
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Data Vencimento') ?></th>
                    <th><?= __('Usuario Id') ?></th>
                    <th><?= __('Produtos') ?></th>
                    <th><?= __('Valor') ?></th>
                    <th><?= __('Status') ?></th>
                    <th><?= __('Data Pagamento') ?></th>
                    <th><?= __('Juros') ?></th>
                    <th><?= __('Created') ?></th>
                    <th><?= __('Updated') ?></th>
                    <th><?= __('Modified') ?></th>
                    <th><?= __('Codigo') ?></th>
                    <th><?= __('Token Moip') ?></th>
                    <th><?= __('Valor Recebido') ?></th>
                    <th><?= __('Desconto Moip') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($usuario->faturas as $faturas): ?>
                    <tr>
                        <td><?= h($faturas->id) ?></td>
                        <td><?= h($faturas->data_vencimento) ?></td>
                        <td><?= h($faturas->usuario_id) ?></td>
                        <td><?= h($faturas->produtos) ?></td>
                        <td><?= h($faturas->valor) ?></td>
                        <td><?= h($faturas->status) ?></td>
                        <td><?= h($faturas->data_pagamento) ?></td>
                        <td><?= h($faturas->juros) ?></td>
                        <td><?= h($faturas->created) ?></td>
                        <td><?= h($faturas->updated) ?></td>
                        <td><?= h($faturas->modified) ?></td>
                        <td><?= h($faturas->codigo) ?></td>
                        <td><?= h($faturas->token_moip) ?></td>
                        <td><?= h($faturas->valor_recebido) ?></td>
                        <td><?= h($faturas->desconto_moip) ?></td>

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
</div>