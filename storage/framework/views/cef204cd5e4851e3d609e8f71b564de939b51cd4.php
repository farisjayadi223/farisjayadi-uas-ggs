<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand" style="margin-top:20px">
        <a href="/dashboard">
        <img src="<?php echo e(asset('storage/logo/'.$setting->logo)); ?>" alt="Logo Peta" height="80px"> <br>
          <?php echo e($setting->nama_app); ?>

        </a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/dashboard"><?php echo e($setting->singkatan); ?></a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown active">
          <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="/kategori">Kategori</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="/lokasi">
          <i class="fa fa-atom"></i> <span>Lokasi</span></a>
        </li>
        <li><a class="nav-link" href="/area">
          <i class="fa fa-atom"></i><span>Area</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Setting</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="/pengguna">Pengguna</a></li>        
            <li><a class="nav-link" href="/pengaturan">Pengaturan Aplikasi</a></li>        
          </ul>
        <li><a class="nav-link" href="<?php echo e(route('logout')); ?>"><i class="fas fa-sign-out-alt"></i> <span>Keluar</span></a></li>
    </aside>
  </div>
<?php /**PATH C:\Users\userl\Downloads\lomboktengahmap-main (1)\lomboktengahmap\resources\views/layout/slidebar.blade.php ENDPATH**/ ?>