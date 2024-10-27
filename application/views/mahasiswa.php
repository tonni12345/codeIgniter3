<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Mahasiswa
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Mahasiswa</li>
        </ol>
    </section>
    <section class="content">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nim</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs):
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $mhs->nama ?></td>
                    <td><?php echo $mhs->nim ?></td>
                    <td><?php echo $mhs->tgl_lahir ?></td>
                    <td><?php echo $mhs->jurusan ?></td>
                    <td><?php echo anchor('mahasiswa/detail/'.$mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                    <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                    <td><?php echo anchor('mahasiswa/edit/'.$mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>');?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FROM INPUT DATA MAHASISWA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('mahasiswa/tambah_aksi');?>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nim</label>
                            <input type="text" name="nim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="jurusan">
                            <label>Jurusan</label>
                            <select name="jurusan" class="form-control">
                                <option>Teknik Informatika</option>
                                <option>Sistem Informasi</option>
                                <option>Manajemen Informatika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="textarea" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div>
                            <button type="reset" class="btn btn-danger" >Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button class="btn btn-primary" data-dismiss="modal">Cancel</button>                        
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>