 <div class="box">
  <div class="box-header">

    <h3 class="box-title">Name: <span class="label label-success"><?= $user['name']; ?></span> 
      ID: <span class="label label-warning"><?= $user['id_user']; ?></span></h3>
      <div class="pull-right">
        <a href="<?= base_url('overtime/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>  Add Data</a>
      </div>
  </div>
  <div class="box-body">
    <?php $this->view('message') ?>
    <table id="table1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Day Date</th>
          <th>Start</th>
          <th>Finish</th>
          <th>Activity</th>
          <th>Location</th>
          <th>Create At</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1;
        foreach ($overtime as $ot): ?>  
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $ot['name']; ?></td>
          <td><?= format_indo($ot['day_date']); ?></td>
          <td><?= date('H:i',strtotime($ot['start'])); ?></td>
          <td><?= date('H:i',strtotime($ot['finish'])); ?></td>
          <td>
            
              <img class="direct-chat-img" src="<?=base_url('assets/img/profile/'.$user['image'])?>">
            <div class="direct-chat-text">
                    <?= $ot['activity']; ?>
                   </div></td>
          <td><?= $ot['location']; ?></td>
          <td><?= date('d M Y - H:i:s',strtotime($ot['date_created'])); ?></td>
          <td class="text-center" width="160px">
            <form action="<?= base_url('overtime/del/'.$ot['id_overtime']) ?>" method="post">
            <a href="<?= base_url('overtime/edit/'.$ot['id_overtime']) ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i>  Edit</a>
            <button onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
            </form> 
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>