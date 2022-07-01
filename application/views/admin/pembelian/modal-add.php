<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= "Add " . str_replace("_", " ", ucfirst($this->uri->segment(2))) ?></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/' . $this->uri->segment(2) . '/add') ?>" method="POST">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <div class="mb-3">
                        <label class="small mb-1" for="jumlah">Jumlah Pesanan</label>
                        <input class="form-control" id="jumlah" name="jumlah" type="number" placeholder="Jumlah Pesanan" required autofocus />
                    </div>                 
                    <div class="mb-3">
                        <label class="small mb-1" for="produk_id">Produk ID</label>
                        <select id="produk_id" name="produk_id" class="form-select" aria-label="Default select example">
                            <option selected disabled>Pilih Produk ID:</option>
                            <?php foreach ($produk as $row) : ?>
                                <option value="<?= $row->id; ?>"><?= $row->id; ?> - <?= $row->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="suplier_id">Suplier ID</label>
                        <select id="suplier_id" name="suplier_id" class="form-select" aria-label="Default select example">
                            <option selected disabled>Pilih Suplier ID:</option>
                            <?php foreach ($suplier as $row) : ?>
                                <option value="<?= $row->id; ?>"><?= $row->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-transparent-dark" type="button" data-bs-dismiss="modal">Cancel</button>
                        <input name="submit" type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>