<!DOCTYPE html>
<html lang="en">
<!-- HEAD MEMANGGIL HEAD YANG ADA DI includes/head.php -->
<?php $this->load->view("includes/head.php") ?>

<body>
    <!-- NAV MEMANGGIL NAVBAR YANG ADA DI includes/navbar2.php -->
    <?php $this->load->view("includes/navbar2.php") ?>
    <!-- END nav -->

    <!-- BAGIAN LAPOR BENCANA -->

    <section class="ftco-section">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-stats">
                        <div class="card-header text-center">Form Pelaporan Bencana</div>
                        <div class="card-body col-md-11">
                            <?= form_open_multipart('laporan'); ?>
                            <div class="col-md-7 float-left">
                                <!-- input nama -->
                                <div class="form-group">
                                    <label for="nama">Nama Pelapor</label>
                                    <input type="text" name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" id="nama">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                <!-- input email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" id="email">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('email') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Pelapor</label>
                                    <input type="text" name="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" id="alamat">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('alamat') ?>
                                    </div>
                                </div>
                                <!-- input combobox kategori berdasarkan db -->
                                <div class="form-group">
                                    <label for="kategori">Kategori Bencana</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                        <?php foreach ($tb_kategori as $kategori) : ?>
                                            <option value="<?php echo $kategori['ID_KTR'] ?>"><?php echo $kategori['KATEGORI'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5 float-right">
                                <div class="from-group col-md-11">
                                    <!-- gambar priview -->
                                    <div class="imgWrap pb-2">
                                        <img src="<?php echo base_url('assets/img/gambar_berita/default.png') ?>" id="imgView" class="card-img-top img-fluid">
                                    </div>
                                    <!-- input gambar -->
                                    <div class="custom-file">
                                        <input type="file" id="inputFile" name="gambar" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputFile">Upload Foto Lokasi Bencana...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pb-3">
                            <!-- input tanggal -->
                            <div class="form-group col-md-12">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" id="datepicker" class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" name="tanggal">
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal') ?>
                                </div>
                            </div>
                            <!-- input lokasi -->
                            <div class="form-group col-md-12">
                                <label for="lokasi">Lokasi Bencana</label>
                                <input type="text" class="form-control <?php echo form_error('lokasi') ? 'is-invalid' : '' ?>" id="lokasi" name="lokasi">
                                <div class="invalid-feedback">
                                    <?php echo form_error('lokasi') ?>
                                </div>
                            </div>
                            <!-- input isi berita -->
                            <div class="form-group col-md-12 pb-3">
                                <label for="deskripsi">Deskripsi Bencana</label>
                                <textarea name="deskripsi" class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>"></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('deskripsi') ?>
                                </div>
                            </div>
                            <!-- tombol simpan -->
                            <button type="submit" name="tambah" class="btn btn-primary float-right ">Lapor Bencana</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BATAS -->

    <!-- FOOTER MEMANGGIL FOOTER YANG ADA DI includes/footer.php -->
    <?php $this->load->view("includes/footer.php") ?>

    <!-- JS MEMANGGIL JS YANG ADA DI includes/js.php -->
    <?php $this->load->view("includes/js.php") ?>
    <?php $this->load->view("admin/includes/js.php") ?>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
</body>

</html>