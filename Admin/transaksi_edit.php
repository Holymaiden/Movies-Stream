<?php $title = "Edit | Transaksi";
require_once("./Templates/header.php");
$kamar = many("SELECT * FROM `tbl_kamar`");
$pelanggan = many("SELECT * FROM `tbl_pelanggan`");
$transaksi = single("SELECT * FROM `tbl_transaksi` WHERE id=" . $_GET['v'] . "");

if (isset($_POST['submit'])) {
        edit_transaksi($_POST);
}
?>
<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Edit Transaksi</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <form action="" method="POST">
                                                <input name="id" type="hidden" value="<?= $_GET['v'] ?>">
                                                <div class="form-group">
                                                        <label for="tambahPelanggan">Pelanggan</label>
                                                        <select name="pelanggan" id="tambahPelanggan" class="form-control">
                                                                <?php foreach ($pelanggan as $v) : ?>
                                                                        <option <?php if ($transaksi['pelanggan_id'] == $v['id']) echo 'selected'; ?> value="<?= $v['id'] ?>"><?= $v['nama'] ?></option>
                                                                <?php endforeach ?>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="kapanBayar">Kapan Bayar</label>
                                                        <input type="text" name="date" class="form-control" id="kapanBayar">
                                                </div>
                                                <div class="form-group">
                                                        <label for="bayar">Bayaran</label>
                                                        <input type="text" name="bayar" class="form-control" id="bayar" value="<?= $transaksi['bayar'] ?>">
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

<script>
        $('input[name="date"]').daterangepicker({
                timePicker: true,
                singleDatePicker: true,
                showDropdowns: true
        });
</script>