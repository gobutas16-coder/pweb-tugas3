<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Fakultas</h4>

        <a href="<?= base_url('fakultas/tambah'); ?>" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Fakultas
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="datatable">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Fakultas</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($fakultas as $f) : ?>
                        <tr>
                            <td><?= $no++; ?></td>

                            <td><?= $f['fakultas_name']; ?></td>

                            <td>
                                <a href="<?= base_url('fakultas/ubah/'.$f['fakultas_id']); ?>"
                                   class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <a href="<?= base_url('fakultas/hapus/'.$f['fakultas_id']); ?>"
                                   class="btn btn-danger btn-sm btn-hapus">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if (empty($fakultas)) : ?>
                        <tr>
                            <td colspan="3" class="text-center">
                                Data Fakultas Belum Ada
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>