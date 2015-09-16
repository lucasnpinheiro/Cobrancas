<?= $this->Form->create($fatura) ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Alterar Faturas') ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->input('data_vencimento');
        echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        echo $this->Form->input('produtos');
        echo $this->Form->input('valor');
        echo $this->Form->status('status');
        echo $this->Form->input('data_pagamento', ['empty' => true, 'default' => '']);
        echo $this->Form->input('juros');
        echo $this->Form->input('codigo');
        echo $this->Form->input('token_moip');
        echo $this->Form->input('valor_recebido');
        echo $this->Form->input('desconto_moip');
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
</div>

<?= $this->Form->end() ?>