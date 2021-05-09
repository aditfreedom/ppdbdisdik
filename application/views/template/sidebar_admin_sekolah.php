 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?=base_url()?>assets/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b style="font-size:15px;">PPDB DARING BIREUEN</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/img/team/tutwuri.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $approve_formulir; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 text-sm">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">      
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
            <a href="<?=base_url('admin');?>" class="nav-link">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('admin/zonasi/'.$id_pesertadidik);?>" class="nav-link">
              <i class="nav-icon fa fa-map-marked-alt"></i>
              <p>
                Zonasi
              </p>
            </a>
          </li>


          <!-- <li class="nav-item ">
            <a href="<?=base_url('admin/kuota');?>" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Kuota
              </p>
            </a>
          </li> -->

          <li class="nav-item ">
            <a href="<?=base_url('admin/approve_formulir');?>" class="nav-link">
              <i class="nav-icon fa fa-clipboard-check"></i>
              <p>
                Approve Formulir
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('admin/approve_lulus');?>" class="nav-link">
              <i class="nav-icon fa fa-building"></i>
              <p>
                Approve Kelulusan
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('admin/approve_daftarulang');?>" class="nav-link">
              <i class="nav-icon fa fa-user-check"></i>
              <p>
                Approve Daftar Ulang
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('admin/status_finalisasi');?>" class="nav-link">
              <i class="nav-icon fa fa-calendar-check"></i>
              <p>
                Ubah Status Finalisasi
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('admin/ganti_password/'.$id_pesertadidik);?>" class="nav-link">
              <i class="nav-icon fa fa-key"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
         

          <li class="nav-item">
            <a href="<?= base_url('admin/logout')?>" class="nav-link bg-danger">
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