<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Usuarios Dominio'), ['action' => 'edit', $usuariosDominio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuarios Dominio'), ['action' => 'delete', $usuariosDominio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosDominio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios Dominios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuarios Dominio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="usuariosDominios view large-10 medium-9 columns">
    <h2><?= h($usuariosDominio->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Usuario') ?></h6>
            <p><?= $usuariosDominio->has('usuario') ? $this->Html->link($usuariosDominio->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $usuariosDominio->usuario->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Dominio') ?></h6>
            <p><?= h($usuariosDominio->dominio) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($usuariosDominio->id) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $this->Number->format($usuariosDominio->status) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($usuariosDominio->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($usuariosDominio->modified) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($usuariosDominio->updated) ?></p>
        </div>
    </div>
</div>
