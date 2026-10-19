

<?php $__env->startSection('content'); ?>
    <h4>Ubah Kota</h4>

    <form action="<?php echo e(route('kota.update', $kota->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group <?php echo e($errors->has('nama_kota') ? 'has-error' : ''); ?>">
            <label for="nama_kota" class="control-label">Nama Kota</label>

            <input
                type="text"
                class="form-control"
                id="nama_kota"
                name="nama_kota"
                placeholder="Nama Kota"
                value="<?php echo e(old('nama_kota', $kota->nama_kota)); ?>"
            >

            <?php if($errors->has('nama_kota')): ?>
                <span class="help-block">
                    <?php echo e($errors->first('nama_kota')); ?>

                </span>
            <?php endif; ?>
        </div>

        <div class="form-group <?php echo e($errors->has('id_propinsi') ? 'has-error' : ''); ?>">
            <label for="id_propinsi" class="control-label">Provinsi</label>

            <select
                name="id_propinsi"
                id="id_propinsi"
                class="form-control"
            >
                <option value="">-- Pilih Provinsi --</option>

                <?php $__currentLoopData = $propinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option
                        value="<?php echo e($p->id); ?>"
                        <?php echo e(old('id_propinsi', $kota->id_propinsi) == $p->id ? 'selected' : ''); ?>

                    >
                        <?php echo e($p->nama_propinsi); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if($errors->has('id_propinsi')): ?>
                <span class="help-block">
                    <?php echo e($errors->first('id_propinsi')); ?>

                </span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>

            <a href="<?php echo e(route('kota.index')); ?>" class="btn btn-default">
                Kembali
            </a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUD\resources\views/kota/edit.blade.php ENDPATH**/ ?>