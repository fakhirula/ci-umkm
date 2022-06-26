<!-- Footer -->
<footer class="footer-admin mt-auto footer-light">
    <div class="container-xl px-4">
        <div class="row">
            <div class="col-md-6 small">Copyright &copy; <?php echo SITE_NAME . " " . Date('Y') ?></div>
            <div class="col-md-6 text-md-end small">
                <p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->