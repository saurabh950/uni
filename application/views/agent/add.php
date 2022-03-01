<?php $widget = (is_superadmin_loggedin() ? 3 : 4);?>
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">
				<h4 class="panel-title"><i class="fas fa-graduation-cap"></i> Add Agent</h4>
			</header>
			<?php echo form_open_multipart($this->uri->uri_string()); ?>

			<div class="panel-body">


				<?php $academic_year = get_session_id();?>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label">Agent Name <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="agent_name" value="<?=set_value('agent_name')?>" />
						<span class="error"><?=form_error('agent_name')?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><?=translate('email')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="email" value="<?=set_value('email')?>" />
						<span class="error"><?=form_error('email')?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><?=translate('mobile_no')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="mobile_no" value="<?=set_value('mobile_no')?>">
						<span class="error"><?=form_error('mobile_no')?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><?=translate('city')?></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="city" value="<?=set_value('city')?>">
						<span class="error"><?=form_error('email')?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><?=translate('state')?></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="state" value="<?=set_value('state')?>">
						<span class="error"><?=form_error('state')?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><?=translate('address')?></label>
					<div class="col-md-6 mb-md">
						<textarea type="text" rows="3" class="form-control" name="address"><?=set_value('address')?></textarea>
						<span class="error"><?=form_error('address')?></span>
					</div>
				</div>

				<div class="form-group mb-xs">
				<label class="col-md-3 control-label"><?=translate('Status')?></label>
				<div class="col-md-6 mb-md">

					<div class="radio-custom radio-success radio-inline">
						<input type="radio" checked name="status" id="bullhorn" value="1">
						<label for="bullhorn">Active</label>
					</div>

					<div class="radio-custom radio-success radio-inline">
						<input type="radio" name="status" id="flag" value="0">
						<label for="flag">Inactive</label>
					</div>
					<span class="error"><?=form_error('status')?></span>

			</div>

					</div>
			</div>
			<footer class="panel-footer">
				<div class="row">
					<div class="col-md-o mb-smffset-10 col-md-2">
						<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">

						<!-- <button type="submit" class="btn btn-default btn-block" name="submit" value="save"> -->

							<i class="fas fa-plus-circle"></i> <?=translate('save')?>
						</button>
					</div>
				</div>
			</footer>
			<?php echo form_close(); ?>
		</section>
	</div>
</div>