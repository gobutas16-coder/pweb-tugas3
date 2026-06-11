<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Program Studi</h4>

        <a href="<?= base_url('prodi/tambah'); ?>" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Program Studi
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="datatable">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Program Studi</th>
                        <th width="10%">Strata</th>
                        <th>Fakultas</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>

                    <?php foreach ($prodi as $p) : ?>
                        <tr>
                            <td><?= $no++; ?></td>

                            <td><?= $p['prodi_name']; ?></td>

                            <td><?= $p['prodi_strata']; ?></td>

                            <td><?= $p['fakultas_name']; ?></td>

                            <td>
                                <a href="<?= base_url('prodi/ubah/'.$p['prodi_id']); ?>"
                                   class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <a href="<?= base_url('prodi/hapus/'.$p['prodi_id']); ?>"
                                   class="btn btn-danger btn-sm btn-hapus">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if(empty($prodi)) : ?>
                        <tr>
                            <td colspan="5" class="text-center">
                                Data Program Studi Belum Ada
                            </td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>