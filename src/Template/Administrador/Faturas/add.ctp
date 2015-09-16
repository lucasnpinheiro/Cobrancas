<?= $this->Form->create($fatura) ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Cadastrar Faturas') ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->data('data_vencimento', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('usuario_id', ['options' => $usuarios, 'div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->select2('produtos', ['multiple' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->moeda('valor', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->status('status', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->data('data_pagamento', ['empty' => true, 'default' => '', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('juros', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('codigo', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('token_moip', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('valor_recebido', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('desconto_moip', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
</div>

<?= $this->Form->end() ?>