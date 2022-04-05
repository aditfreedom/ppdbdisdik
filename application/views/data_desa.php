<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">DATA DESA</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">PPDB</a></li>
                        <li class="breadcrumb-item active">Data Desa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <p align="left">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> Tambah Desa</button>
        </p>
    <div class="container">
        <table class="table table-hover" id="example">
            <thead class="text-center">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA KECAMATAN</th>
                    <th scope="col">NAMA DESA</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data_desa as $data) : ?>
                    <tr class="nomor text-center">
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $data->nama_wilayah; ?></td>
                        <td><?php echo $data->nama_desa; ?></td>
                        <td><?php echo anchor('home/edit_desa/'.$data->id_desa,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                            <?php echo anchor('home/hapus_desa/'.$data->id_desa,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>	
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>

    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengaturan Zonasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('home/tambah_desa'); ?>">
                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <select class="form-control selectpicker" data-size="3" name="kode_wilayah" data-style="btn-info" data-live-search="true" data-url="<?= base_url('home/getDesaByWilayah'); ?>">
                            <?php foreach ($kecamatan as $data) : ?>
                            <option value="<?= $data->kode_wilayah;?>"><?= $data->nama_wilayah; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="">Nama Desa</label>
                            <input type="text" name="nama_desa" class="form-control">
                            </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
