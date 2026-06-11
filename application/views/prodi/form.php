<div class="card">
    <div class="card-header">
        <h4><?= $button; ?> Program Studi</h4>
    </div>

    <div class="card-body">

        <form action="<?= $action; ?>" method="post">

            <?php if ($button == 'Simpan') : ?>
            <div class="mb-3">
                <label for="prodi_id" class="form-label">
                    ID Program Studi
                </label>

                <input
                    type="number"
                    name="prodi_id"
                    id="prodi_id"
                    class="form-control <?= form_error('prodi_id') ? 'is-invalid' : (isset($_POST['prodi_id']) ? 'is-valid' : ''); ?>"
                    value="<?= set_value('prodi_id'); ?>"
                >

                <?php if(form_error('prodi_id')) : ?>
                    <div class="invalid-feedback">
                        <?= form_error('prodi_id'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>


            <div class="mb-3">
                <label for="fakultas_id" class="form-label">
                    Fakultas
                </label>

                <select
                    name="fakultas_id"
                    id="fakultas_id"
                    class="form-select <?= form_error('fakultas_id') ? 'is-invalid' : (isset($_POST['fakultas_id']) ? 'is-valid' : ''); ?>"
                >
                    <option value="">-- Pilih Fakultas --</option>

                    <?php foreach ($fakultas as $f) : ?>
                        <option
                            value="<?= $f['fakultas_id']; ?>"
                            <?= set_select(
                                'fakultas_id',
                                $f['fakultas_id'],
                                (
                                    isset($prodi['fakultas_id']) &&
                                    $prodi['fakultas_id'] == $f['fakultas_id']
                                )
                            ); ?>
                        >
                            <?= $f['fakultas_name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <?php if(form_error('fakultas_id')) : ?>
                    <div class="invalid-feedback">
                        <?= form_error('fakultas_id'); ?>
                    </div>
                <?php endif; ?>
            </div>


            <div class="mb-3">
                <label for="prodi_name" class="form-label">
                    Nama Program Studi
                </label>

                <input
                    type="text"
                    name="prodi_name"
                    id="prodi_name"
                    class="form-control <?= form_error('prodi_name') ? 'is-invalid' : (isset($_POST['prodi_name']) ? 'is-valid' : ''); ?>"
                    value="<?= set_value(
                        'prodi_name',
                        isset($prodi['prodi_name'])
                            ? $prodi['prodi_name']
                            : ''
                    ); ?>"
                >

                <?php if(form_error('prodi_name')) : ?>
                    <div class="invalid-feedback">
                        <?= form_error('prodi_name'); ?>
                    </div>
                <?php endif; ?>
            </div>


            <div class="mb-3">
                <label class="form-label">
                    Strata
                </label>

                <div>

                    <?php
                    $strata_options = ['D3', 'S1', 'S2'];

                    foreach ($strata_options as $s) :
                    ?>

                    <div class="form-check form-check-inline">

                        <input
                            class="form-check-input"
                            type="radio"
                            name="prodi_strata"
                            id="strata_<?= $s; ?>"
                            value="<?= $s; ?>"
                            <?= set_radio(
                                'prodi_strata',
                                $s,
                                (
                                    isset($prodi['prodi_strata']) &&
                                    $prodi['prodi_strata'] === $s
                                )
                            ); ?>
                        >

                        <label
                            class="form-check-label"
                            for="strata_<?= $s; ?>"
                        >
                            <?= $s; ?>
                        </label>

                    </div>

                    <?php endforeach; ?>

                </div>

                <?php if(form_error('prodi_strata')) : ?>
                    <div class="text-danger small mt-1">
                        <?= form_error('prodi_strata'); ?>
                    </div>
                <?php endif; ?>
            </div>


            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i>
                <?= $button; ?>
            </button>

            <a href="<?= base_url('prodi'); ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i>
                Kembali
            </a>

        </form>

    </div>
</div>