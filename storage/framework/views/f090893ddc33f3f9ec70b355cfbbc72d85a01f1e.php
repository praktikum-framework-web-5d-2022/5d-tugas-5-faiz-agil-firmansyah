<?php $__env->startSection('title','Bengkel'); ?>
<?php $__env->startSection('menu','active'); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
        }
        .text-maroon {
            color: maroon;
            font-weight: bold
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2>Data Customer</h2>
                    <a href="<?php echo e(route('customer.create')); ?>" class="btn bg-maroon">Tambah</a>
                </div>
                <p>Dibawah ini merupakan data customer <span class="text-maroon">Bengkel UNSIKA</span></p>
                <?php if(session()->has('message')): ?>
                    <div class="my-3">
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                        </div>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-bordered" align="center">
                        <thead>
                            <tr align="center">
                                <th align="center" class="align-middle" rowspan="2">#</th>
                                <th align="center" class="align-middle" rowspan="2">NIK</th>
                                <th align="center" class="align-middle" rowspan="2">Nama Lengkap</th>
                                <th align="center" class="align-middle" rowspan="2">Jenis Kelamin</th>
                                <th align="center" class="align-middle" rowspan="2">Alamat</th>
                                <th align="center" colspan="4">Tagihan</th>
                                <th align="center" class="align-middle" rowspan="2">Total Tagihan</th>
                                <th align="center" class="align-middle" rowspan="2">Aksi</th>
                            </tr>
                            <tr align="center">
                                <td align="center">Biaya Ganti Oli</td>
                                <td align="center">Biaya Ganti Ban</td>
                                <td align="center">Biaya Administrasi</td>
                                <td align="center">Biaya Lainnya</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td align="center"><?php echo e($loop->iteration); ?></td>
                                    <td align="center"><?php echo e($customer->nik); ?></td>
                                    <td align="center"><?php echo e($customer->nama); ?></td>
                                    <td align="center"><?php echo e($customer->jenis_kelamin); ?></td>
                                    <td align="center"><?php echo e($customer->alamat); ?></td>
                                    <td align="center">@currency($customer->tagihan->biaya_gantioli ?? 0)</td>
                                    <td align="center">@currency($customer->tagihan->biaya_gantiban ?? 0)</td>
                                    <td align="center">@currency($customer->tagihan->biaya_administrasi ?? 0)</td>
                                    <td align="center">@currency($customer->tagihan->biaya_lain ?? 0)</td>
                                    <td align="center">Rp.
                                        <?php
                                        $total_tagihan = ($customer->tagihan->biaya_gantioli ?? 0) + ($customer->tagihan->biaya_gantiban ?? 0) + ($customer->tagihan->biaya_administrasi ?? 0) + ($customer->tagihan->biaya_lain ?? 0);
                                        echo number_format($total_tagihan,0,',','.');
                                        ?>
                                    </td>
                                    <td align="center">
                                        <div class="d-flex">
                                        <a href="<?php echo e(route('customer.edit', ['customer'=>$customer->id])); ?>" class="btn btn-warning">Edit</a>
                                        <form action="<?php echo e(route('customer.destroy', ['customer'=>$customer->id])); ?>" method="POST" class="ms-1">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <td colspan="11">Tidak ada data...</td>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas5\resources\views/customer/index.blade.php ENDPATH**/ ?>