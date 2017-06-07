<!DOCTYPE html>
<html>

	<head>
		<?= $this->Html->charset() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
            Expense's Tracker
		</title>
		<?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('bootstrap.min'); ?>
		<?= $this->Html->css('base.css') ?>
		<?= $this->Html->css('cake.css') ?>


		<?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
		<?= $this->fetch('script') ?>

		<?= $this->fetch('core'); ?>
		<?= $this->fetch('script'); ?>

	</head>

	<body class="login">
		<div class="container clearfix">
			<div class="row">
				<div class="content col-xs-12 col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-xs-12">
							<?= $this->Flash->render(); ?>
						</div>
					</div>
					<div class="col-xs-12">
						<?= $this->fetch('content') ?>
					</div>
				</div>
			</div>
		</div>

		<?= $this->fetch('scriptBottom'); ?>
		<script type="text/javascript">
            $( document ).ready(function() {
                $.material.init();
            });

        </script>
	</body>

</html>
