<div class="card">
    <div class="card-header">
        <h4><?= $button; ?> Fakultas</h4>
    </div>

    <div class="card-body">

        <form action="<?= $action; ?>" method="post">

            <?php if ($button == 'Simpan') : ?>
                <div class="mb-3">
                    <label for="fakultas_id" class="form-label">
                        ID Fakultas
                    </label>

                    <input
                        type="number"
                        name="fakultas_id"
                        id="fakultas_id"
                        class="form-control <?= form_error('fakultas_id') ? 'is-invalid' : (isset($_POST['fakultas_id']) ? 'is-valid' : ''); ?>"
                        value="<?= set_value('fakultas_id'); ?>"
                    >

                    <?php if(form_error('fakultas_id')) : ?>
                        <div class="invalid-feedback">
                            <?= form_error('fakultas_id'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>


            <div class="mb-3">
                <label for="fakultas_name" class="form-label">
                    Nama Fakultas
                </label>

                <input
                    type="text"
                    name="fakultas_name"
                    id="fakultas_name"
                    class="form-control <?= form_error('fakultas_name') ? 'is-invalid' : (isset($_POST['fakultas_name']) ? 'is-valid' : ''); ?>"
                    value="<?= set_value(
                        'fakultas_name',
                        isset($fakultas['fakultas_name'])
                            ? $fakultas['fakultas_name']
                            : ''
                    ); ?>"
                >

                <?php if(form_error('fakultas_name')) : ?>
                    <div class="invalid-feedback">
                        <?= form_error('fakultas_name'); ?>
                    </div>
                <?php endif; ?>
            </div>


            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i>
                <?= $button; ?>
            </button>

            <a href="<?= base_url('fakultas'); ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i>
                Kembali
            </a>

        </form>

    </div>
</div>