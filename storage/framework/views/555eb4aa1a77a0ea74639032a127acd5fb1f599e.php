

<?php $__env->startSection('title'); ?> <?php echo e("Form Lokasi"); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('isi'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lokasi</h1>
        </div>
        <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Lokasi</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?php echo e(route('lokasi.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        Nama Lokasi : <input type="text" class="form-control <?php $__errorArgs = ['nama_lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_lokasi" value="<?php echo e(old('nama_lokasi')); ?>" placeholder="Masukkan Nama Lokasi">
                        <!-- error message untuk title -->
                        <?php $__errorArgs = ['nama_lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <br>
                        <div id="MapLocation" style="height: 400px"></div>
                        <text-area id = "lng"></text-area>
                        <br>
                        Latitude : <input type="text" class="form-control <?php $__errorArgs = ['latitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="latitude" value="<?php echo e(old('latitude')); ?>" id="Latitude" placeholder="Latitude">
                        <!-- error message untuk title -->
                        <?php $__errorArgs = ['latitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <br>
                        Longitude : <input type="text" class="form-control <?php $__errorArgs = ['longitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="longitude" value="<?php echo e(old('longitude')); ?>" id="Longitude" placeholder="Longitude">
                        <!-- error message untuk title -->
                        <?php $__errorArgs = ['longitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <br>
                        Gambar
                        <input type="file" class="form-control <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           name="gambar"  value="">
                                    <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        Diskripsi : <textarea name="diskripsi" class="form-control  <?php $__errorArgs = ['diskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" cols="30" rows="10"></textarea>
                        <!-- error message untuk title -->
                        <?php $__errorArgs = ['diskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <br>
                        Kategori:
                        <select name="id_kategori" class="form-control">
                        <?php $__empty_1 = true; $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($row->id); ?>"><?php echo e($row->kategori); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <option value="">Data tidak ada</option>
                        <?php endif; ?>
                        </select>
                        <!-- error message untuk title -->
                        <?php $__errorArgs = ['id_kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <br>
                        Icon : <input type="text" class="form-control <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="icon" value="<?php echo e(old('icon')); ?>" placeholder="Icon Kategori">
                        <!-- error message untuk title -->
                        <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <br>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                         <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<link rel="stylesheet" href="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.js"></script>
    <script>
        $(function() {
// use below if you want to specify the path for leaflet's images
//L.Icon.Default.imagePath = '@Url.Content("~/Content/img/leaflet")';

var curLocation = [0, 0];
// use below if you have a model
// var curLocation = [@Model.Location.Latitude, @Model.Location.Longitude];

if (curLocation[0] == 0 && curLocation[1] == 0) {
curLocation = [<?php echo e($pengaturan->latitude); ?>,<?php echo e($pengaturan->longitude); ?>];
}

var map = L.map('MapLocation').setView(curLocation, <?php echo e($pengaturan->zoom); ?>);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

map.attributionControl.setPrefix(false);
map.options.minZoom = 9;
map.options.maxZoom = 20;
var marker = new L.marker(curLocation, {
draggable: 'true'
});

marker.on('dragend', function(event) {
var position = marker.getLatLng();
marker.setLatLng(position, {
  draggable: 'true'
}).bindPopup(position).update();
$("#Latitude").val(position.lat);
$("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function() {
var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
marker.setLatLng(position, {
  draggable: 'true'
}).bindPopup(position).update();
map.panTo(position);
});

map.addLayer(marker);
})
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\userl\Downloads\lomboktengahmap-main (1)\lomboktengahmap\resources\views/backend/lokasi/add.blade.php ENDPATH**/ ?>