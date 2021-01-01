<div class="row">


  <div class="col-md-9">
   <?= $this->session->flashdata('message'); ?>
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
        <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
      </ul>
      <div class="tab-content">

        <div class="active tab-pane" id="activity">
          <!-- Post -->
          <div class="post">
            <div class="user-block">
              <img class="img-circle img-bordered-sm" src="<?=base_url('assets/img/profile/'.$user['image'])?>" alt="user image">
              <span class="username">
                <a href="#"><?= $user['name']; ?></a>
              </span>
              <span class="description">Shared publicly - 7:30 PM today</span>
            </div>
            <!-- /.user-block -->
           
             <textarea class="form-control" value="" name="activity" rows="2" placeholder="Enter ..."></textarea>

              <div class="box-footer">
              <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Kirim</button>
            </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col -->
          

            <!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
              <!-- The timeline -->
              <ul class="timeline timeline-inverse">
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                    <div class="timeline-body">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                      quora plaxo ideeli hulu weebly balihoo...
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-primary btn-xs">Read more</a>
                      <a class="btn btn-danger btn-xs">Delete</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                
              </ul>
            </div>
            <!-- /.tab-pane -->         
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>


    <!-- Profile Image -->
  <div class="col-md-3">
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive" src="<?=base_url('assets/img/profile/'.$user['image'])?>" alt="User profile picture">

        <h3 class="profile-username text-center"><?= $user['name']; ?></h3>

        <p class="text-muted text-center"><?= $user['email']; ?></p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Followers</b> <a class="pull-right">1,322</a>
          </li>
          <li class="list-group-item">
            <b>Following</b> <a class="pull-right">543</a>
          </li>
          <li class="list-group-item">
            <b>Friends</b> <a class="pull-right">13,287</a>
          </li>
        </ul>

        <a href="<?= base_url('user/edit') ?>" class="btn btn-primary btn-block"><b>Edit My Profile</b></a>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>