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
          <a href="#" class="d-block">Halo, <?php echo $nama_lengkap;?>!</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 text-sm">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">      
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
            <a href="<?=base_url('user');?>" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="<?=base_url('user/isi_formulir/'.$id);?>" class="nav-link">
              <i class="nav-icon fa fa-money-check-alt"></i>
              <p>
                Isi Formulir & Pembayaran
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('user/cetak_kartu/'.$id);?>" class="nav-link">
              <i class="nav-icon fa fa-id-card-alt"></i>
              <p>
                Cetak Kartu Ujian
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Registrasi Ulang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('user/registrasi_ulang/'.$id);?>" class="nav-link">
                  <i class="far fa fa-clipboard-check nav-icon"></i>
                  <p>Daftar Ulang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('user/cetakdaftarulang/'.$id);?>" class="nav-link">
                  <i class="far fa fa-print nav-icon"></i>
                  <p>Cetak Formulir Daftar Ulang</p>
                </a>
              </li>
              </ul>
              </li>       

          <li class="nav-item">
            <a href="<?= base_url('user/logout')?>" class="nav-link bg-danger">
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