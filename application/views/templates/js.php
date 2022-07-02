<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/scripts.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/vendor/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('assets/vendor/demo/chart-bar-demo.js') ?>"></script>
<script src="<?= base_url('assets/vendor/demo/chart-pie-demo.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/components/prism-core.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/autoloader/prism-autoloader.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/litepicker.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/datatables/datatables-simple-demo.js') ?>"></script>
<!-- Custom icons -->
<script src="https://kit.fontawesome.com/b32963d457.js" crossorigin="anonymous"></script>

<script>
    function deleteConfirm(url) {
        if (prompt("Ketik 'KONFIRMASI' jika ingin menghapus data") == "KONFIRMASI") {
            window.location.href = url;
        }
    }

    <?php if ($this->session->flashdata('alert-success')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '<?= $this->session->flashdata('alert-success'); ?>',
        })
    <?php endif; ?>
</script>