<?php $__env->startSection('title','Rumah Sakit'); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
        }
        .bt-maroon{
            background-color: maroon;
            color: white;
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Data Pasien</h2>
                <p>Silahkan masukkan data dengan benar dan lengkap!</p>
                <?php if(session()->has('message')): ?>
                    <div class="my-3">
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                        </div>
                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('pasien.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" placeholder="Masukkan NIK" class="form-control" value="<?php echo e(old('nik')); ?>">
                        <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="form-control" value="<?php echo e(old('nama')); ?>">
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="Laki-laki" <?php echo e(old('jenis_kelamin') == "Laki-laki" ? "selected" : ""); ?>>Laki-laki</option>
                            <option value="Perempuan" <?php echo e(old('jenis_kelamin') == "Perempuan" ? "selected" : ""); ?>>Perempuan</option>
                        </select>
                        <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"><?php echo e(old('alamat')); ?></textarea>
                        <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="biaya_obat" class="form-label">Biaya Obat</label>
                        <input type="text" name="biaya_obat" id="biaya_obat" placeholder="Masukkan 0 jika tidak ada biaya obat" class="form-control" value="<?php echo e(old('biaya_obat')); ?>">
                        <?php $__errorArgs = ['biaya_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="biaya_konsultasi" class="form-label">Biaya Konsultasi</label>
                        <input type="text" name="biaya_konsultasi" id="biaya_konsultasi" placeholder="Masukkan 0 jika tidak ada biaya konsultasi" class="form-control" value="<?php echo e(old('biaya_konsultasi')); ?>">
                        <?php $__errorArgs = ['biaya_konsultasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="biaya_administrasi" class="form-label">Biaya Administrasi</label>
                        <input type="text" name="biaya_administrasi" id="biaya_administrasi" placeholder="Masukkan 0 jika tidak ada biaya administrasi" class="form-control" value="<?php echo e(old('biaya_administrasi')); ?>">
                        <?php $__errorArgs = ['biaya_administrasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="biaya_lain" class="form-label">Biaya Lainnya</label>
                        <input type="text" name="biaya_lain" id="biaya_lain" placeholder="Masukkan 0 jika tidak ada biaya lainnya" class="form-control" value="<?php echo e(old('biaya_lain')); ?>">
                        <?php $__errorArgs = ['biaya_lain'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn bt-maroon">Tambah</button>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas5\resources\views/pasien/create.blade.php ENDPATH**/ ?>