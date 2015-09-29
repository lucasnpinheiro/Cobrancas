<?= $this->Form->create($pedido) ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Cadastrar Pedido') ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => 'Selecionar um usuário', 'div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('usuarios_dominio_id', ['options' => $usuariosDominios, 'empty' => 'Selecionar um dominio do usuário', 'div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->moeda('valor', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->juros('juros', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('desconto', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('total', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->status('status', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->periodoEmissao('periodo_emissao', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->data('data_ultima_emissao', ['empty' => true, 'default' => '', 'div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('produtos._ids', ['options' => $produtos, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
</div>

<?= $this->Form->end() ?>