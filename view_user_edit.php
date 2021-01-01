  <div class="row">

  <div class="col-md-9">
    <div class="box box-primary">
        <div class="box-body">
        <div class="pull-right">
        <a href="<?= base_url('user') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i>  Back</a>
      </div>
      <!-- form start -->
      <?= form_open_multipart('user/edit'); ?>
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" value="<?= $user['email']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Full Name</label>
            <input type="text" name="name" class="form-control" value="<?= $user['name']; ?>">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
         <div class="form-group row">
          <div class="col-sm-10">
              <div class="row">
                  <div class="col-sm-3">
                     <label for="exampleInputPassword1">Image</label>
                      <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                      <div class="custom-file">
                          <input type="file" class="form-control" name="image" size="20">
                      </div>
                    </div>
      
                  </div>
                 </div>
              </div>
          </div>
     
        <div class="box-footer">
          <button type="submit" value="upload" class="btn btn-primary">Submit</button>
        </div>
      </form>      
     </div>  
   </div>
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

     
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>


      

       
           
              
          