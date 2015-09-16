<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Detalhes Fatura') ?></h3>
    </div>
    <div class="panel-body">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Usuario') ?></h6>
            <p><?= $fatura->has('usuario') ? $this->Html->link($fatura->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $fatura->usuario->id]) : '' ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Codigo') ?></h6>
            <p><?= h($fatura->codigo) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Token Moip') ?></h6>
            <p><?= h($fatura->token_moip) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fatura->id) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Valor') ?></h6>
            <p><?= $this->Number->format($fatura->valor) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $this->Number->format($fatura->status) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Juros') ?></h6>
            <p><?= $this->Number->format($fatura->juros) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Valor Recebido') ?></h6>
            <p><?= $this->Number->format($fatura->valor_recebido) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Desconto Moip') ?></h6>
            <p><?= $this->Number->format($fatura->desconto_moip) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Data Vencimento') ?></h6>
            <p><?= h($fatura->data_vencimento) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Data Pagamento') ?></h6>
            <p><?= h($fatura->data_pagamento) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($fatura->created) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($fatura->updated) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($fatura->modified) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Produtos') ?></h6>
            <?= $this->Text->autoParagraph(h($fatura->produtos)) ?>
        </div>
    </div>
</div>