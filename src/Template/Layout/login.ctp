<!DOCTYPE html>
<html>

    <head>

        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?= $this->fetch('title') ?></title>

        <?= $this->Html->css('/css/bootstrap.min.css') ?>
        <?= $this->Html->css('/font-awesome/css/font-awesome.css') ?>
        <?= $this->Html->css('/css/animate.css') ?>
        <?= $this->Html->css('/css/style.css') ?>


        <?= $this->Html->meta('icon') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>


    </head>

    <body class="gray-bg">

        <?= $this->fetch('content') ?>
        
        
        <!-- Mainly scripts -->
        <?= $this->Html->script('/js/jquery-2.1.1.js') ?>
        <?= $this->Html->script('/js/bootstrap.min.js') ?>
        <?= $this->fetch('script') ?>

    </body>

</html>
