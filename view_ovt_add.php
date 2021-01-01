 <div class="box">
  <div class="box-header">
    <h3 class="box-title">Name: <span class="label label-success"><?= $user['name']; ?></span> 
      ID: <span class="label label-warning"><?= $user['id_user']; ?></span></h3>
      <div class="pull-right">
        <a href="<?= base_url('overtime') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i>  Back</a>
      </div>
    </div>

    <div class="box-body">
      <!-- start -->
      <div class="col-md-6 col-md-offset-3">
        <!-- form start -->
        <form action="<?=base_url('overtime/add')?>" method="POST">
          <div class="box-body">
            <input type="hidden" name="id_user" value="<?=$user['id_user']; ?>">
            <div class="form-group <?=form_error('day_date') ? 'has-error' : null ?>">
              <label for="exampleInputEmail1">Day Date *</label>
              <input type="date" name="day_date" value="<?=set_value('day_date') ?>" class="form-control" placeholder="Day Date">
               <?=form_error('day_date') ?>
            </div>
            <div class="row">
              <div class="col-xs-6 <?=form_error('start') ? 'has-error' : null ?>">
                <label for="exampleInputPassword1">Start *</label>
                <input type="time" name="start" value="<?=set_value('start') ?>" class="form-control" placeholder="Start">
                <?=form_error('start') ?>
              </div>
              <div class="col-xs-6 <?=form_error('finish') ? 'has-error' : null ?>">
                <label for="exampleInputPassword1">Finish *</label>
                <input type="time" name="finish" value="<?=set_value('finish') ?>" class="form-control" placeholder="finish">
                <?=form_error('finish') ?>
              </div>
            </div><br />
            <div class="form-group <?=form_error('activity') ? 'has-error' : null ?>">
              <label for="exampleInputPassword1">Activity *</label>
              <textarea class="form-control" value="<?=set_value('activity') ?>" name="activity" rows="2" placeholder="Enter ..."></textarea>
              <?=form_error('activity') ?>
            </div>
            <div class="form-group <?=form_error('location') ? 'has-error' : null ?>"> 
              <label for="exampleInputPassword1">Location</label>
              <input type="text" name="location" value="<?=set_value('location') ?>" class="form-control" placeholder="Location">
              <?=form_error('location') ?>
            </div>
            
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Save</button>
          </div>
        </form>

      </div>
      <!-- end -->
    </div>
  </div>