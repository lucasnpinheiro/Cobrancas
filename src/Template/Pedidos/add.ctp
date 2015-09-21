<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios Dominios'), ['controller' => 'UsuariosDominios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuarios Dominio'), ['controller' => 'UsuariosDominios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Faturas'), ['controller' => 'Faturas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fatura'), ['controller' => 'Faturas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidos form large-9 medium-8 columns content">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Add Pedido') ?></legend>
        <?php
            echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
            echo $this->Form->input('usuarios_dominio_id', ['options' => $usuariosDominios, 'empty' => true]);
            echo $this->Form->input('valor');
            echo $this->Form->input('juros');
            echo $this->Form->input('desconto');
            echo $this->Form->input('total');
            echo $this->Form->input('status');
            echo $this->Form->input('periodo_emissao');
            echo $this->Form->input('data_ultima_emissao', ['empty' => true, 'default' => '']);
            echo $this->Form->input('produtos._ids', ['options' => $produtos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
