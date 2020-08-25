<!-- Jquery Core Js -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url('assets/'); ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url('assets/'); ?>plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="<?= base_url('assets/'); ?>js/admin.js"></script>
<script src="<?= base_url('assets/'); ?>js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="<?= base_url('assets/'); ?>js/demo.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

<script src="">
    $(function() {
        $('select').selectpicker();
    });
</script>
<script>
    $(document).ready(function() {
        $("button").click(function() {
            $.ajax({
                url: "<?= base_url('git.txt') ?>",
                success: function(result) {
                    $("#div1").html(result);
                }
            });
        });
    });
</script>
</body>

</html>