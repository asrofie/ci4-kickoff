<?php if ($directory == 'datatable'): ?>
    <?php if ($type == 'css'): ?>
        <link href="<?php echo base_url('assets'); ?>/modules/datatables/datatables.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets'); ?>/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets'); ?>/modules/datatables/Buttons-1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets'); ?>/modules/datatables/Buttons-1.6.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets'); ?>/modules/datatables/FixedHeader-3.1.6/css/fixedHeader.dataTables.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets'); ?>/modules/datatables/FixedHeader-3.1.6/css/fixedHeader.bootstrap4.min.css" rel="stylesheet">
        ini css
    <?php elseif ($type == 'js'): ?>
        <script src="<?php echo base_url('assets'); ?>/modules/datatables/datatables.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/modules/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/modules/datatables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/modules/datatables/Buttons-1.6.1/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/modules/datatables/FixedHeader-3.1.6/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/modules/datatables/FixedHeader-3.1.6/js/fixedHeader.bootstrap4.min.js"></script>
    <?php endif; ?>
<?php endif; ?>