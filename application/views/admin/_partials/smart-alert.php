<?php if ($this->session->flashdata('smart-alert')) : ?>
    <div class="alert alert-success" role="alert">
        <?= $this->session->flashdata('smart-alert'); ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('smart-alert-error')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $this->session->flashdata('smart-alert-error'); ?>
    </div>
<?php endif; ?>