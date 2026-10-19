<?php $__env->startSection('content'); ?>
    <h3>Manajemen Tabel Kota</h3>

    <a href="<?php echo e(route('kota.create')); ?>" class="btn btn-info btn-sm">
        Tambah Kota
    </a>

    <?php if(session('success')): ?>
        <div class="alert alert-success martop-sm">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-responsive martop-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kota</th>
                <th>Provinsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <a href="<?php echo e(route('kota.show', $item->id)); ?>">
                            <?php echo e($item->nama_kota); ?>

                        </a>
                    </td>
                    <td>
                        <?php echo e($item->getPropinsi->nama_propinsi ?? '-'); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('kota.edit', $item->id)); ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="<?php echo e(route('kota.destroy', $item->id)); ?>"
                              method="POST"
                              style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus kota ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4">Belum ada data kota.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($kota->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUD\resources\views/kota/index.blade.php ENDPATH**/ ?>