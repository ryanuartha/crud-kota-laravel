

<?php $__env->startSection('content'); ?>
    <h4>Detail Kota</h4>

    <a href="<?php echo e(route('kota.edit', $kota->id)); ?>"
       class="btn btn-info btn-sm">
        Ubah Kota
    </a>

    <table class="table table-responsive martop-sm">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?php echo e($kota->id); ?></td>
            </tr>
            <tr>
                <td>Nama Kota</td>
                <td><?php echo e($kota->nama_kota); ?></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td><?php echo e($kota->getPropinsi->nama_propinsi ?? '-'); ?></td>
            </tr>
        </tbody>
    </table>

    <a href="<?php echo e(route('kota.index')); ?>" class="btn btn-default">
        Kembali
    </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUD\resources\views/kota/show.blade.php ENDPATH**/ ?>