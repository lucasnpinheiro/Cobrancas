<!DOCTYPE html>
<html>

    <head>

        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?= $this->fetch('title') ?></title>

        <?= $this->Html->css('/css/bootstrap.min.css') ?>
        <?= $this->Html->css('/font-awesome/css/font-awesome.css') ?>
        <?= $this->Html->css('/css/plugins/morris/morris-0.4.3.min.css') ?>
        <?= $this->Html->css('/css/animate.css') ?>
        <?= $this->Html->css('/css/style.css') ?>

        <?= $this->Html->meta('icon') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

    </head>

    <body class="top-navigation">

        <div id="wrapper">
            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom white-bg">
                    <nav class="navbar navbar-static-top" role="navigation">
                        <div class="navbar-header">
                            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <i class="fa fa-reorder"></i>
                            </button>
                            <a href="" class="navbar-brand">Agência Voxel</a>
                        </div>
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a aria-expanded="false" role="button" href="" class="dropdown-toggle" data-toggle="dropdown"> Usuários <span class="caret"></span></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><?php echo $this->Html->link('Consultar', ['controller' => 'Usuarios', 'action' => 'index'], ['icon' => false]); ?></li>
                                        <li><?php echo $this->Html->link('Cadastrar', ['controller' => 'Usuarios', 'action' => 'add'], ['icon' => false]); ?></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a aria-expanded="false" role="button" href="" class="dropdown-toggle" data-toggle="dropdown"> Produtos <span class="caret"></span></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><?php echo $this->Html->link('Consultar', ['controller' => 'Produtos', 'action' => 'index'], ['icon' => false]); ?></li>
                                        <li><?php echo $this->Html->link('Cadastrar', ['controller' => 'Produtos', 'action' => 'add'], ['icon' => false]); ?></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a aria-expanded="false" role="button" href="" class="dropdown-toggle" data-toggle="dropdown"> Faturas <span class="caret"></span></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><?php echo $this->Html->link('Consultar', ['controller' => 'Faturas', 'action' => 'index'], ['icon' => false]); ?></li>
                                        <li><?php echo $this->Html->link('Cadastrar', ['controller' => 'Faturas', 'action' => 'add'], ['icon' => false]); ?></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-top-links navbar-right">
                                <li>
                                    <?php echo $this->Html->link('Sair', ['controller' => 'Usuarios', 'action' => 'logout', 'prefix' => false, 'administrador' => false], ['icon' => 'sign-out']); ?>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="wrapper-content">
                    <div class="container-fluid">
                        <div class="row">
                            <?= $this->Flash->render() ?>
                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><?= $this->fetch('title') ?></h5>
                                        <div class="ibox-tools">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu dropdown-user">
                                                <li><?php echo $this->Html->link('Consultar', ['action' => 'index'], ['icon' => false]); ?></li>
                                                <li><?php echo $this->Html->link('Cadastrar', ['action' => 'add'], ['icon' => false]); ?></li>
                                                <?php if ($this->request->params['action'] == 'view') {
                                                    ?>
                                                    <li><?php echo $this->Html->link('Editar', ['action' => 'edit', $this->request->params['pass'][0]], ['icon' => false]); ?></li>
                                                <?php } ?>
                                                <?php if ($this->request->params['action'] == 'edit') {
                                                    ?>
                                                    <li><?php echo $this->Html->link('Detalhes', ['action' => 'view', $this->request->params['pass'][0]], ['icon' => false]); ?></li>
                                                <?php } ?>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="">
                                            <?= $this->fetch('content') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="footer">
                    <div class="pull-right">
                        10GB of <strong>250GB</strong> Free.
                    </div>
                    <div>
                        <strong>Copyright</strong> Example Company &copy; 2014-2015
                    </div>
                </div>
            </div>
        </div>

        <!-- Mainly scripts -->
        <?= $this->Html->script('/js/jquery-2.1.1.js') ?>
        <?= $this->Html->script('/js/bootstrap.min.js') ?>
        <?= $this->Html->script('/js/plugins/metisMenu/jquery.metisMenu.js') ?>
        <?= $this->Html->script('/js/plugins/slimscroll/jquery.slimscroll.min.js') ?>
        <?= $this->Html->script('/js/inspinia.js') ?>
        <?= $this->Html->script('/js/app.js') ?>
        <?= $this->Html->script('/js/plugins/masked-input/jquery.maskedinput.min.js') ?>
        <?= $this->Html->script('/js/plugins/masked-input/mascaras.js') ?>
        <?= $this->Html->script('/js/plugins/jquery-maskmoney/jquery.maskMoney.min.js') ?>
        <?= $this->Html->script('/js/plugins/pace/pace.min.js') ?>
        <?= $this->Html->script('/js/plugins/peity/jquery.peity.min.js') ?>
        <?= $this->Html->script('/js/plugins/pace/pace.min.js') ?>
        <?= $this->Html->script('/js/plugins/jquery-ui/jquery-ui.min.js') ?>
        <?= $this->Html->script('/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js') ?>
        <?= $this->Html->script('/js/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.js') ?>
        <?= $this->fetch('script') ?>
    </body>

</html>