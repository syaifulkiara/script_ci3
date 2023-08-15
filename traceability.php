<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 style="font-family: Courier; font-size:48px;font-weight: bold;color:navy; margin-left: 100px;" class="page-title">
         <strong><i class="fas fa-cart-arrow-down"></i> TRACEABILITY</strong>
        </h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
          <a href="<?= base_url('dashboard') ?>" style="font-family: Courier; font-size:18px; color:white; margin-right: 100px;" class="btn btn-success w-100 btn-icon-split">
          <i class="fas fa-arrow-left"></i>   &nbsp; DASHBOARD
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
	<div class="container-xl">
		<div class="card">
			<div class="card-body">
                <!-- <button type="button" class="btn btn-success mb-2">
                    <i class="fa fa-upload"></i>&nbsp;Download
                </button>
                <a href="" class="btn btn-danger mb-2" onclick="return confirm('This Action will delete all data and cannot be returned!!!')">
                    <i class="fa fa-trash"></i>&nbsp;Delete All
                </a> -->
            
				<div class="table-responsive">
					<table id="data-table" class="table table-bordered table-hover" style="width:100%">
						<thead style="background-color: red;">
							<tr>
								<!-- <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;" width="2%">No</th> -->
                <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">SEQ</th>
                <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">VIN</th>
                <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">QR DISC</th>
								<th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">QR HUB</th>
                <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">RO PAIRING</th>
                <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">PAIRING DATE</th>
                <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">JUDGEMENT</th>
								<th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">SHIFT</th>
                <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">CREATED</th>
                <th style="background-color: navy; color: white; font-size: 20px; height: 20px; font-weight: bold; text-align: center;">BY</th>
							</tr>
							</thead>
						   <!--  <tbody>
						    <?php $no=1; foreach($trace as $row): ?>
							<tr style="font-size: 12px; font-weight: bold; text-align: center;">
								<td><?= $no++; ?></td>
		                        <td><?= $row->SEQ ?></td>
		                        <td><?= $row->VIN ?></td>
		                        <td><?= $row->QR_DISC ?></td>
		                        <td><?= $row->QR_HUB ?></td>
		                        <td width="7%"><?= $row->RO_PAIRING ?></td>
		                        <td width="10%"><?= date("d-m-Y H:i", strtotime($row->PAIRING_DT)) ?></td>
		                        <td><?= $row->JUDGEMENT ?></td>
		                        <td><?= $row->SHIFT ?></td>
		                        <td><?= date("d-m-Y H:i", strtotime($row->CREATED_DT)) ?></td>
		                        <td><?= $row->CREATED_BY ?></td>
		                    </tr>
		                    <?php endforeach; ?>
						</tbody> -->
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
