<br/>
<br/>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="employees form">
			<?= $this->Form->create('User') ?>
			<fieldset>
				<h2 class="text-center">
                    <legend><?= __('Login to Expenses Tracker') ?></legend>
                </h2>
				<div class="form-group">
					<?= $this->Form->input('username', ['class' => 'form-control']); ?>
				</div>
				<div class="form-group">
					<?= $this->Form->input('password', ['class' => 'form-control']); ?>
				</div>
                <div class="form-group">
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary pull-right']) ?>
                </div>
            </fieldset>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
