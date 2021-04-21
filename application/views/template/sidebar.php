 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url()?>logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b style="font-size:18px;">PPDB SSB BIREUEN</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>asset/dist/img/adit.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Halo, <?php echo $username ?>!</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 text-sm">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">      
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
            <a href="<?=base_url('home');?>" class="nav-link">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="<?=base_url('home/kuota');?>" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Kuota Penerimaan
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('home/approve_formulir');?>" class="nav-link">
              <i class="nav-icon fa fa-clipboard-check"></i>
              <p>
                Approval Formulir
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('home/approve_lulus');?>" class="nav-link">
              <i class="nav-icon fa fa-check"></i>
              <p>
                Konfirmasi Kelulusan
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('home/approve_daftarulang');?>" class="nav-link">
              <i class="nav-icon fa fa-user-check"></i>
              <p>
                Konfirmasi Daftar Ulang
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('home/datapengguna');?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('alur.jpg');?>" class="nav-link" target="_blank">
              <i class="nav-icon fa fa-download"></i>
              <p>
                Alur Pendaftaran
              </p>
            </a>
          </li>
          
          <!-- <li class="nav-item ">
            <a href="<?=base_url('dashboard/datakonsumen');?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Konsumen
              </p>
            </a> -->
          </li>         


          <li class="nav-item">
            <a href="<?= base_url('home/logout')?>" class="nav-link bg-danger">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

         


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>