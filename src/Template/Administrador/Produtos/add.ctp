<?= $this->Form->create($produto) ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Cadastrar Produtos') ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->input('nome');
        echo $this->Form->editor('descricao');
        echo $this->Form->moeda('valor');
        echo $this->Form->status('status');
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
</div>
<?= $this->Form->end() ?>