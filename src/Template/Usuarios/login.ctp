<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
        <h3>Agência Voxel</h3>
        <p><?php echo $this->Flash->render('auth') ?></p>
        <p>Área administrativa</p>
        <?php
        echo $this->Form->create('Usuarios', array(
            'class' => 'm-t',
            'role' => 'form'
        ))
        ?>
        <?php echo $this->Form->input('usuario', ['label' => 'Usuário', 'type' => 'text']) ?>
        <?php echo $this->Form->input('senha', ['type' => 'password', 'label' => 'Senha']) ?>
        <?php echo $this->Form->button(__('Login'), array('class' => 'btn btn-primary block full-width m-b')); ?>

        <?php echo $this->Form->end() ?>
        <p class="m-t"> <small>Agência Voxel - Todos os direitos reservados - 2013 - <?= date('Y') ?></small> </p>
    </div>
</div>
