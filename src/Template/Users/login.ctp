

</br></br>
<div class="row">
	<div class="col-md-12">
		<div class="employees form">
			<?= $this->Form->create('User') ?>
			<fieldset>
				<legend><?= __('Login to Expenses Tracker') ?></legend>
				<div class="form-group">
					<?= $this->Form->input('username', ['class' => 'form-control']); ?>
				</div>
				<div class="form-group">
					<?= $this->Form->input('password', ['class' => 'form-control']); ?>
				</div>
			</fieldset>
			<div class="form-group">
				<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
			</div>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
