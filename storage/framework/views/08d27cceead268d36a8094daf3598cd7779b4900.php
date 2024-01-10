
<?php $__env->startSection('title'); ?> <?php echo e("Data Pengguna"); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('isi'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pengguna</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="/dataPengguna">Pengguna</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Pengguna</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th><a href="<?php echo e(route('daftar')); ?>" class="btn btn-sm btn-primary"> <i class="fa fa-plus"> </i> Tambah Data</a> </th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($nomor++); ?></td>
                            <td><?php echo e($row->name); ?></td>
                            <td><?php echo e($row->email); ?></td>
                            <td><a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-f3 fa-trash"></i></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4">Data Belum Ada</td>
                        </tr>
                    <?php endif; ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\userl\Downloads\lomboktengahmap-main (1)\lomboktengahmap\resources\views/backend/auth/index.blade.php ENDPATH**/ ?>