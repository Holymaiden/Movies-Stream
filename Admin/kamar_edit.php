<?php $title = "Edit | Kamar";
require_once("./Templates/header.php");
$kamar = single("SELECT * FROM `tbl_kamar` WHERE id=" . $_GET['v'] . "");
if (isset($_POST['submit'])) {
        tambah_kamar($_POST, $_FILES['image']);
}
?>
<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Edit Kamar</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                                <input name="id" type="hidden" value="<?= $_GET['v'] ?>">
                                                <div class="form-group">
                                                        <label for="tambahKamar">No Kamar</label>
                                                        <input name="no_kamar" type="text" class="form-control" id="tambahKamar" placeholder="Enter No Kamar" value="<?= $kamar['no_kamar'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahJenis">Jenis</label>
                                                        <input name="jenis" type="text" class="form-control" id="tambahJenis" placeholder="Enter Jenis" value="<?= $kamar['jenis'] ?>">
                                                </div>
                                                <div class=" form-group">
                                                        <label for="tambahHarga">Harga</label>
                                                        <input name="harga" type="text" class="form-control" id="tambahHarga" placeholder="Enter Harga" value="<?= $kamar['harga'] ?>">
                                                </div>
                                                <div class=" form-group">
                                                        <label for="customFileUpdate">Gambar</label>
                                                        <div class="custom-file">
                                                                <input name="image" type="file" class="custom-file-input" id="customFileUpdate">
                                                                <label class="custom-file-label" for="customFileUpdate">Choose Image</label>
                                                        </div>
                                                </div>
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>

</div>
<!-- ./ Content -->

<?php require_once("./Templates/footer.php") ?>