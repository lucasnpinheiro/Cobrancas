<?= $this->Form->create($usuariosDominio) ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Cadastrar Dominios') ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->input('usuario_id', ['value' => $this->request->query('usuario_id'), 'type' => 'hidden']);
        echo $this->Form->input('dominio');
        echo $this->Form->status('status');
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
</div>

<?= $this->Form->end() ?>