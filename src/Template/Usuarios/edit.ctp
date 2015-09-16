<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?=
            $this->Form->postLink(
                    __('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Faturas'), ['controller' => 'Faturas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fatura'), ['controller' => 'Faturas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="usuarios form large-10 medium-9 columns">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Edit Usuario') ?></legend>
        <?php
        echo $this->Form->input('nome');
        echo $this->Form->input('telefones');
        echo $this->Form->input('emails');
        echo $this->Form->input('usuario');
        echo $this->Form->input('senha', ['type' => 'password']);
        echo $this->Form->input('status', ['options' => ['0' => 'Inativo', '1' => 'Ativo']]);
        echo $this->Form->input('tipo', ['options' => ['administrador' => 'Administrador', 'clientes' => 'Cliente']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
