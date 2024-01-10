
<?php $__env->startSection('title'); ?> <?php echo e("Data Lokasi"); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('isi'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lokasi</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="/lokasi">Kategori</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Lokasi</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Lokasi</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Gambar</th>
                            <th>Diskripsi</th>
                            <th>Kategori</th>
                            <th>Icon</th>
                            <th><a href="<?php echo e(route('lokasi.create')); ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data</a> </th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $lokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($nomor++); ?></td>
                            <td><?php echo e($row->nama_lokasi); ?></td>
                            <td><?php echo e($row->latitude); ?></td>
                            <td><?php echo e($row->longitude); ?></td>
                            <td><img src="<?php echo e(asset('storage/lokasi/' . $row->gambar)); ?>" width="100px"/></td>
                            <td><?php echo e(substr($row->diskripsi, 0, 50)); ?></td>
                            <td><?php echo e($row->kategori); ?></td>
                            <td><?php echo e($row->icon); ?></td>
                            <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('lokasi.destroy', $row->id)); ?>" method="POST">
                                <a href="<?php echo e(route('lokasi.show', $row->id)); ?>" class="btn btn-dark"><i class="fa fa-f3 fa-eye"></i></a>
                                <a href="<?php echo e(route('lokasi.edit', $row->id)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-f3 fa-trash"></i></button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="8" class="text-center">Data Belum Ada</td>
                        </tr>
                    <?php endif; ?>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <?php echo e($lokasi->links()); ?>

                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<script>
    //message with toastr
    <?php if(session()->has('success')): ?>
        toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!'); 
    <?php elseif(session()->has('error')): ?>
        toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!'); 
    <?php endif; ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\userl\Downloads\lomboktengahmap-main (1)\lomboktengahmap\resources\views/backend/lokasi/index.blade.php ENDPATH**/ ?>