<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Daily expenses tracking system';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
	<?php
	echo $this->Html->script('jquery-3.2.0.min.js', ['block' => true]);
	echo $this->Html->script('bootstrap.min.js', ['block' => true]);
	?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css'); ?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="expenses/">Expenses Tracker</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
		                <?= $this->Html->link(
			                'Hello ! '.ucfirst($this->request->session()->read('Auth.User.first_name')) ?? 'Account',
			                ['controller' => 'Expenses', 'action' => 'index', '_full' => true]
		                );?>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-th"></span> Menu <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?= $this->Html->link('Home', ['controller' => 'Expenses', 'action' => 'index', '_full' => true]) ?>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
		                        <?= $this->Html->link('All Expenses', ['controller' => 'Expenses', 'action' => 'index', '_full' => true]) ?>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <?= $this->Html->link('Users', ['controller' => 'Users', 'action' => 'index', '_full' => true]) ?>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <?= $this->Html->link('Expenses Types', ['controller' => 'ExpensesTypes', 'action' => 'index', '_full' => true]) ?>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
	                            <?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout', '_full' => true]) ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
