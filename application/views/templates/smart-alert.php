<?php if ($this->session->flashdata('input-error')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $this->session->flashdata('input-error'); ?>
    </div>
<?php endif; ?>