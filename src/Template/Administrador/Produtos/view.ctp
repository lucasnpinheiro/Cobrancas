<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Detalhes Produto') ?></h3>
    </div>
    <div class="panel-body">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($produto->nome) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($produto->id) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Valor') ?></h6>
            <p><?= $this->Number->format($produto->valor) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $this->Html->status($produto->status) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($produto->created) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($produto->modified) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($produto->updated) ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <?= $this->Text->autoParagraph(h($produto->descricao)) ?>
        </div>
    </div>
</div>