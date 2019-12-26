<?= $this->extend('admin_template');?>

<?=  $this->section('page_lib_css') ?>
    <link href="<?php echo base_url('assets'); ?>/modules/datatables/datatables.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/modules/datatables/Buttons-1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/modules/datatables/Buttons-1.6.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/modules/datatables/FixedHeader-3.1.6/css/fixedHeader.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/modules/datatables/FixedHeader-3.1.6/css/fixedHeader.bootstrap4.min.css" rel="stylesheet">
<?=  $this->endSection() ?>

<?= $this->section('page_content_body') ?>
    <div class="main-content">
        <section class="section">
            <?= view_cell('\App\Widget\ClientTemplate::pageHeader', array('title' => 'Satuan', 'breadcrum' => array('Dashboard' => base_url(), 'Unit' => '#')))?>
            <div class="section-body">
                <?= view_cell('\App\Widget\ClientTemplate::pageDesc', array('title' => 'Satuan', 'desc' => 'Halaman ini untuk mengelola nama - nama satuan yang digunakan'))?>
                <?= view_cell('\App\Widget\FlashMessage::message')?>
                <div class="row mt-sm-6">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Satuan</h4>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" data-url="<?= base_url('client/api/unit/index'); ?>" data-form="<?= base_url('client/setup/unit/form'); ?>">
                                        <thead class="bg-gradient-primary text-white">
                                        <tr>
                                            <th>No.</th>
                                            <th>Satuan</th>
                                            <th>Keterangan</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?= $this->endSection(); ?>

<?=  $this->section('page_lib_js') ?>
<script src="<?php echo base_url('assets'); ?>/modules/datatables/datatables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/modules/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/modules/datatables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/modules/datatables/Buttons-1.6.1/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/modules/datatables/FixedHeader-3.1.6/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/modules/datatables/FixedHeader-3.1.6/js/fixedHeader.bootstrap4.min.js"></script>
<script type="text/javascript">
    var table=null;
    $( document ).ready(function() {
        var urlTable = $('#dataTable').data('url');
        var buttonList = initTableToolbar(
            function(){
                if(table!=null){
                    table.ajax.reload();
                }
            },
            function(){
                window.location.href = $('#dataTable').data('form');
            });
        table = $('#dataTable').DataTable({
            fixedHeade: true,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            scrollX	: true,
            colReorder: true,
            dom		:"<'row'<'col-sm-6'l><'col-sm-6'f><'col-sm-12 col-xs-12'B>><'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons	: buttonList,
            columns : [
                {
                    "data": "unit_id",
                    "width": "10px",
                    "orderable":false,
                    "searchable" : false,
                    "render": function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { "data": "name" },
                { "data": "desc" },
                { 
                    "data": "unit_id",
                    "width": "10px",
                    "searchable" : false,
                    "orderable":false,
                    "render": function(data){
                        return '<a href="unit/form/' + data + '" class="btn btn-sm btn-info"><span class="fa fa-edit"></span></a>';;
                    }
                },
                {
                    "data": "unit_id",
                    "width": "10px",
                    "searchable" : false,
                    "orderable":false,
                    "render": function(data){
                        return '<a href="" class="btn btn-sm btn-info"><span class="fa fa-trash"></span></a>';;
                    }
                }
            ],
            processing  : true,
            serverSide  : true,
            ajax        :
            {
                "url"   : urlTable,
                "type"  : "POST"
            }
        });
    });
</script>
<?= $this->endSection() ?>