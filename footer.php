 
    </div>
  </div>
  <script src="<?= base_url('assets')?>/js/tabler.min.js?1685976624" defer></script>
  <script src="<?= base_url('assets')?>/js/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets') ?>/libs/datatables/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#data-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo site_url('traceability/serverSideData');?>",
            "type": "GET"
        },
        "columns": [
            {"data": "SEQ"},
            {"data": "VIN"},
            {"data": "QR_DISC"},
            {"data": "QR_HUB"},
            {"data": "RO_PAIRING"},
            {"data": "PAIRING_DT"},
            {"data": "JUDGEMENT"},
            {"data": "SHIFT"},
            {"data": "CREATED_DT"},
            {"data": "CREATED_BY"}
        ]
        });
    });
</script>  
<script>
  $(document).ready(function () {
    $('#dataLog').DataTable({
        scrollY: '38vh',
        searching: false,
        paging: false,
        info: false,
    });

    $('#dataMast').DataTable({
        scrollY: '55vh',
        lengthMenu: [
            [25, 50, -1],
            [25, 50, 'All'],
        ],
    });

    $('#dataTrace').DataTable({
        scrollY: '66vh',
        lengthMenu: [
            [50, -1],
            [50, 'All'],
        ],
    });
});
</script>
</body>
</html>