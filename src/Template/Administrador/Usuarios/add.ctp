<?= $this->Form->create($usuario) ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Cadastrar Usuários') ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->input('nome', ['label' => 'Nome', 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->input('usuario', ['label' => 'Usuário', 'div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('senha', ['value' => '', 'type' => 'password', 'label' => 'Senha', 'div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->status('status', ['label' => 'Situação', 'div' => ['class' => 'col-xs-12 col-md-6'], 'options' => ['0' => 'Inativo', '1' => 'Ativo']]);
        echo $this->Form->input('tipo', ['label' => 'Tipo', 'div' => ['class' => 'col-xs-12 col-md-6'], 'options' => ['administrador' => 'Administrador', 'clientes' => 'Cliente']]);
        echo $this->Form->select2('telefones', ['multiple' => true, 'label' => 'Telefones', 'div' => ['class' => 'col-xs-12 col-md-12']], [ 'tags' => true, 'tokenSeparators' => [',']]);
        echo $this->Form->select2('emails', ['multiple' => true, 'label' => 'E-mails', 'div' => ['class' => 'col-xs-12 col-md-12']], [ 'tags' => true, 'tokenSeparators' => [',', ' ']]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
</div>

<?= $this->Form->end() ?>