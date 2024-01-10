<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo e(config('app.name', "Aplikasi Peta")); ?> - <?php echo $__env->yieldContent('title'); ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('modules/fontawesome/css/all.min.css')); ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo e(asset('modules/jqvmap/dist/jqvmap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('modules/summernote/summernote-bs4.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('modules/owlcarousel2/dist/assets/owl.carousel.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('modules/owlcarousel2/dist/assets/owl.theme.default.min.css')); ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/components.css')); ?>">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo e(asset('img/avatar/avatar-1.png')); ?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo e(auth()->user()->name); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo e(route('logout')); ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <?php echo $__env->make('layout.slidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('isi'); ?>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2023 - <?php echo e(date('Y')); ?> <div class="bullet"></div> Made with <i class="fa fa-heart text-danger"></i> by <a href="https://jihadul4kbar.github.io/" target="_blank">Jihadul Akbar</a> and Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('modules/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/stisla.js')); ?>"></script>

  <!-- JS Libraies -->
  <script src="<?php echo e(asset('modules/jquery.sparkline.min.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/owlcarousel2/dist/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/summernote/summernote-bs4.js')); ?>"></script>
  <script src="<?php echo e(asset('modules/chocolat/dist/js/jquery.chocolat.min.js')); ?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo e(asset('js/page/index.js')); ?>"></script>

  <!-- Template JS File -->
  <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
  <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\userl\Downloads\lomboktengahmap-main (1)\lomboktengahmap\resources\views/layout/app.blade.php ENDPATH**/ ?>