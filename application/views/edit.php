<div class="content-wrapper">
    <section class="content">
        <?php foreach($mahasiswa as $mhs) : ?>
            <form action="<?php echo base_url().'mahasiswa/update';?>" method="post">
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama?>">
                </div>

                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir?>">
                </div>

                <div class="form-group">
                <select name="jurusan" class="form-control" value="<?php echo $mhs->jurusan?>">
                    <option>Teknik Informatika</option>
                    <option>Sistem Informasi</option>
                    <option>Manajemen Informatika</option>
                </select>
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php endforeach;?>
    </section>
</div>