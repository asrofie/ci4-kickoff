<?= $this->extend('admin_template');?>

<?=  $this->section('page_lib_css') ?>
<?= view_cell('\App\Widget\Asset::getDatatable', array('asset' => 'css')); ?>
<?=  $this->endSection() ?>

<?= $this->section('page_content_body') ?>
    <div class="main-content">
        <section class="section">
            <?= view_cell('\App\Widget\ClientTemplate::pageHeader', array('title' => 'Client', 'breadcrum' => array('Dashboard' => base_url(), 'Client' => '#')))?>
            <div class="section-body">
                <?= view_cell('\App\Widget\ClientTemplate::pageDesc', array('title' => 'Client', 'desc' => 'Halaman ini untuk mengelola client'))?>
                <?= view_cell('\App\Widget\FlashMessage::message')?>
                <div class="row mt-sm-6">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Client</h4>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" data-url="<?= base_url('client/api/client/index'); ?>" data-form="<?= base_url('client/setup/client/form/new'); ?>">
                                        <thead class="bg-gradient-primary text-white">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Terdaftar</th>
                                            <th>Verify</th>
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
<?= view_cell('\App\Widget\Asset::getDatatable', array('asset' => 'js')); ?>
<script type="text/javascript">
    var table=null;
    function onDelete(id) {
        return confirm('Anda yakin akan menghapus data ini ?');
    }

    $( document ).ready(function() {
        var urlTable = $('#dataTable').data('url');
        var buttonList = initTableToolbar(
            function() {
                if(table!=null){
                    table.ajax.reload();
                }
            },
            function() {
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
                    "data": "client_id",
                    "width": "10px",
                    "orderable":false,
                    "searchable" : false,
                    "render": function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { "data": "name" },
                { "data": "email" },
                { "data": "client_type" },
                { "data": "register_at" },
                {
                    "data": "verify_at",
                    "width": "10px",
                    "searchable" : false,
                    "orderable":false,
                    "render": function (data, type, row, meta) {
                        if(data != null) {
                            '<span title="'+data+'"><i class="fa fa-check"></i></span> ';
                        }
                        return '';
                    }
                },
                { 
                    "data": "client_id",
                    "width": "10px",
                    "searchable" : false,
                    "orderable":false,
                    "render": function(data){
                        return '<a href="client/form/' + data + '" class="btn btn-sm btn-info"><span class="fa fa-edit"></span></a>';
                    }
                },
                {
                    "data": "client_id",
                    "width": "10px",
                    "searchable" : false,
                    "orderable":false,
                    "render": function(data){
                        return '<a href="client/delete/' + data + '" class="btn btn-sm btn-info" click="onDelete(' + data + ')"><span class="fa fa-trash"></span></a>';
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